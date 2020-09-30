<?php

use yii\db\Migration;

/**
 * Handles the creation of table `blog`.
 */
class m200925_085843_create_blog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('blog', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('blog');
    }

    public function up()
    {
        $this->createTable('blog', [
            'id' => $this->primaryKey(),
            'title' => $this->text(),
            'content' => $this->text(),
            'date' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('blog');
    }
}
