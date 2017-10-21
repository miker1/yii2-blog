<?php

namespace blog\useCases\manage\Blog;

use blog\entities\Meta;
use blog\entities\Blog\Post\Post;
use blog\entities\Blog\Tag;
use blog\forms\manage\Blog\Post\PostForm;
use blog\repositories\Blog\CategoryRepository;
use blog\repositories\Blog\PostRepository;
use blog\repositories\Blog\TagRepository;
use blog\repositories\UserRepository;
use blog\services\TransactionManager;

class PostManageService
{
    private $posts;
    private $categories;
    private $tags;
    private $users;
    private $transaction;

    public function __construct(
        PostRepository $posts,
        CategoryRepository $categories,
        TagRepository $tags,
        UserRepository $users,
        TransactionManager $transaction
    )
    {
        $this->posts = $posts;
        $this->categories = $categories;
        $this->tags = $tags;
        $this->users = $users;
        $this->transaction = $transaction;
    }

    public function create($userId, PostForm $form): Post
    {
        $category = $this->categories->get($form->categoryId);
        $user = $this->users->get($userId);

        $post = Post::create(
            $user->id,
            $category->id,
            $form->title,
            $form->description,
            $form->content,
            new Meta(
                $form->meta->title,
                $form->meta->description,
                $form->meta->keywords
            )
        );

        if ($form->photo) {
            $post->setPhoto($form->photo);
        }

        foreach ($form->tags->existing as $tagId) {
            $tag = $this->tags->get($tagId);
            $post->assignTag($tag->id);
        }

        $this->transaction->wrap(function () use ($post, $form) {
            foreach ($form->tags->newNames as $tagName) {
                if (!$tag = $this->tags->findByName($tagName)) {
                    $tag = Tag::create($tagName, $tagName);
                    $this->tags->save($tag);
                }
                $post->assignTag($tag->id);
            }
            $this->posts->save($post);
        });

        return $post;
    }

    public function edit($id, PostForm $form): void
    {
        $post = $this->posts->get($id);
        $category = $this->categories->get($form->categoryId);

        $post->edit(
            $category->id,
            $form->title,
            $form->description,
            $form->content,
            new Meta(
                $form->meta->title,
                $form->meta->description,
                $form->meta->keywords
            )
        );

        if ($form->photo) {
            $post->setPhoto($form->photo);
        }

        $this->transaction->wrap(function () use ($post, $form) {

            $post->revokeTags();
            $this->posts->save($post);

            foreach ($form->tags->existing as $tagId) {
                $tag = $this->tags->get($tagId);
                $post->assignTag($tag->id);
            }
            foreach ($form->tags->newNames as $tagName) {
                if (!$tag = $this->tags->findByName($tagName)) {
                    $tag = Tag::create($tagName, $tagName);
                    $this->tags->save($tag);
                }
                $post->assignTag($tag->id);
            }
            $this->posts->save($post);
        });
    }

    public function activate($id): void
    {
        $post = $this->posts->get($id);
        $post->activate();
        $this->posts->save($post);
    }

    public function draft($id): void
    {
        $post = $this->posts->get($id);
        $post->draft();
        $this->posts->save($post);
    }

    public function remove($id): void
    {
        $post = $this->posts->get($id);
        $this->posts->remove($post);
    }
}