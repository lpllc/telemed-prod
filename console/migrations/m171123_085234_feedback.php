<?php

use yii\db\Migration;

/**
 * Class m171123_085234_feedback
 */
class m171123_085234_feedback extends Migration
{
    public function up()
    {
        $this->createTable('feedback', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'contacts' => $this->string(),
            'theme' => $this->string(),
            'text' => $this->text(),
            'created_at'=>$this->timestamp(),
        ]);
    }

    public function down()
    {
        $this->dropTable('feedback');
    }
}
