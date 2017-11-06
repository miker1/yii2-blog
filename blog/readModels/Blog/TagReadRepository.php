<?php

namespace blog\readModels\Blog;

use blog\entities\Blog\Tag;

class TagReadRepository
{
    public function find($id): ?Tag
    {
        return Tag::findOne($id);
    }

    public function findAll($limit = null): array
    {
        return Tag::find()->orderBy('id')->limit($limit)->all();
    }
}