<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m171013_053114_create_users_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string(),
            'email_confirm_token' => $this->string()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->unsigned()->notNull(),
            'updated_at' => $this->integer()->unsigned()->notNull(),
        ], $tableOptions);

        $this->createIndex('{{%idx-users-username}}', '{{%users}}', 'username', true);
        $this->createIndex('{{%idx-users-password_reset_token}}', '{{%users}}', 'password_reset_token', true);
        $this->createIndex('{{%idx-users-email}}', '{{%users}}', 'email', true);
        $this->createIndex('{{%idx-users-email_confirm_token}}', '{{%users}}', 'email_confirm_token', true);
    }

    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}