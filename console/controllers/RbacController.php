<?php

namespace console\controllers;

use blog\access\CommentRule;
use blog\access\PostRule;
use blog\entities\User;
use blog\useCases\manage\UserManageService;
use Yii;
use yii\console\Controller;
use yii\console\Exception;
use yii\helpers\ArrayHelper;

class RbacController extends Controller
{
    private $service;

    public function __construct($id, $module, UserManageService $service, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
    }

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
        $author->description = 'Author';
        $auth->add($author);
        $user = $auth->createRole('user');
        $user->description = 'User';
        $auth->add($user);
        $admin = $auth->createRole('admin');
        $admin->description = 'Admin';
        $auth->add($admin);

        $auth->addChild($user, $createComment);
        $auth->addChild($user, $updateOwnComment);

        $auth->addChild($author, $createPost);
        $auth->addChild($author, $updateOwnPost);
        $auth->addChild($author, $user);

        $auth->addChild($admin, $author);
    }

    /**
     * Adds role to user
     */
    public function actionAssign(): void
    {
        $username = $this->prompt('Username:', ['required' => true]);
        $user = $this->findModel($username);
        $role = $this->select('Role:', ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name', 'description'));
        $this->service->assignRole($user->id, $role);
        $this->stdout('Done!' . PHP_EOL);
    }

    private function findModel($username): User
    {
        if (!$model = User::findOne(['username' => $username])) {
            throw new Exception('User is not found');
        }
        return $model;
    }
}