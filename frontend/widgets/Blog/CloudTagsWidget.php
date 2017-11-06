<?php

namespace frontend\widgets\Blog;

use blog\readModels\Blog\TagReadRepository;
use yii\base\Widget;

class CloudTagsWidget extends Widget
{
    public $limit;

    private $repository;

    public function __construct(TagReadRepository $repository, $config = [])
    {
        parent::__construct($config);
        $this->repository = $repository;
    }

    public function run(): string
    {
        return $this->render('cloud-tags', [
            'cloud_tags' => $this->repository->findAll($this->limit)
        ]);
    }
}