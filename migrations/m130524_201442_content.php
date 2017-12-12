<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_content extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%contents}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
			'content' => $this->text()->notNull()
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%contents}}');
    }
}
