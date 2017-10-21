<?php

use yii\db\Migration;

class m171018_052627_create_blog_posts_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%blog_posts}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->unsigned()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'content' => 'MEDIUMTEXT',
            'photo' => $this->string(),
            'status' => $this->integer()->notNull(),
            'meta_json' => 'JSON NOT NULL',
            'comments_count' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);

        $this->createIndex('{{%idx-blog_posts-category_id}}', '{{%blog_posts}}', 'category_id');

        $this->addForeignKey('{{%fk-blog_posts-category_id}}', '{{%blog_posts}}', 'category_id', '{{%blog_categories}}', 'id');
        $this->addForeignKey('{{%fk-blog_posts-user_id}}', '{{%blog_posts}}', 'user_id', '{{%users}}', 'id');
    }

    public function down()
    {
        $this->dropTable('{{%blog_posts}}');
    }
}
