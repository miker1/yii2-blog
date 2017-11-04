<?php

namespace common\bootstrap;

use yii\base\BootstrapInterface;
use yii\rbac\ManagerInterface;
use yii\mail\MailerInterface;
use blog\useCases\ContactService;

class SetUp implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = \Yii::$container;

        $container->setSingleton(ManagerInterface::class, function () use ($app) {
            return $app->authManager;
        });

        $container->setSingleton(MailerInterface::class, function () use ($app) {
            return $app->mailer;
        });

        $container->setSingleton(ContactService::class, [], [
            $app->params['adminEmail']
        ]);
    }
}