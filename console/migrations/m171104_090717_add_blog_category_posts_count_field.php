<?php

use yii\db\Migration;

class m171104_090717_add_blog_category_posts_count_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%blog_categories}}', 'posts_count', $this->integer()->notNull());

        $this->update('{{%blog_categories}}', ['posts_count' => 0]);
    }

    public function down()
    {
        $this->dropColumn('{{%blog_categories}}', 'posts_count');
    }
}
