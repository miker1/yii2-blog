<?php

namespace frontend\widgets\Blog;

use blog\readModels\Blog\CategoryReadRepository;
use yii\base\Widget;

class PostsCountByCategoryWidget extends Widget
{
    public $limit;

    private $repository;

    public function __construct(CategoryReadRepository $repository, $config = [])
    {
        parent::__construct($config);
        $this->repository = $repository;
    }

    public function run(): string
    {
        return $this->render('posts-category', [
            'posts_category' => $this->repository->findPosts($this->limit)
        ]);
    }
}