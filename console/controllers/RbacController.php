<?php

namespace console\controllers;

use blog\access\CommentRule;
use blog\access\PostRule;
//use shop\entities\User\User;
//use shop\useCases\manage\UserManageService;
use Yii;
use yii\console\Controller;
use yii\console\Exception;
use yii\helpers\ArrayHelper;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        $ruleComment = new CommentRule;
        $auth->add($ruleComment);

        $rulePost = new PostRule;
        $auth->add($rulePost);

        $createComment = $auth->createPermission('createComment');
        $createComment->description = 'Create a comment';
        $auth->add($createComment);

        $updateComment = $auth->createPermission('updateComment');
        $updateComment->description = 'Update a comment';
        $auth->add($updateComment);

        $updateOwnComment = $auth->createPermission('updateOwnComment');
        $updateOwnComment->description = 'Update own comment';
        $updateOwnComment->ruleName = $ruleComment->name;
        $auth->add($updateOwnComment);

        $auth->addChild($updateOwnComment, $updateComment);

        $createPost = $auth->createPermission('createPost');
        $createPost->description = 'Create a post';
        $auth->add($createPost);

        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = 'Update a post';
        $auth->add($updatePost);

        $updateOwnPost = $auth->createPermission('updateOwnPost');
        $updateOwnPost->description = 'Update own post';
        $updateOwnPost->ruleName = $rulePost->name;
        $auth->add($updateOwnPost);

        $auth->addChild($updateOwnPost, $updatePost);

        $author = $auth->createRole('author');
        $auth->add($author);
        $user = $auth->createRole('user');
        $auth->add($user);
        $admin = $auth->createRole('admin');
        $auth->add($admin);

        $auth->addChild($user, $createComment);
        $auth->addChild($user, $updateOwnComment);

        $auth->addChild($author, $createPost);
        $auth->addChild($author, $updateOwnPost);
        $auth->addChild($author, $user);

        $auth->addChild($admin, $author);
    }
}