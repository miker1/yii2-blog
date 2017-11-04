<?php

namespace blog\readModels\Blog;

use blog\entities\Blog\Category;

class CategoryReadRepository
{
    public function getAll(): array
    {
        return Category::find()->orderBy('sort')->all();
    }

    public function find($id): ?Category
    {
        return Category::findOne($id);
    }

    public function findBySlug($slug): ?Category
    {
        return Category::find()->andWhere(['slug' => $slug])->one();
    }

    public function findPosts($limit): array
    {
        return Category::find()->orderBy('posts_count')->limit($limit)->all();
    }
}