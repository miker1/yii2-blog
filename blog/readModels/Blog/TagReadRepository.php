<?php

namespace shop\readModels\Blog;

use blog\entities\Blog\Tag;

class TagReadRepository
{
    public function find($id): ?Tag
    {
        return Tag::findOne($id);
    }
}