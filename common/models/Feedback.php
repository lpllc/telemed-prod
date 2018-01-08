<?php

namespace common\models;
use Yii;

class Feedback extends \yii\db\ActiveRecord {

    public $reCaptcha;

    public static function tableName()
    {
        return 'feedback';
    }


    public function rules()
    {
        return [
            [[  "id",
                'name',
                'contacts',
                'theme',
                'text',
                'reCaptcha'
            ], 'safe'],

        ];
        /*return [
            [[  "id",
                'name',
                'contacts',
                'theme',
                'text',
            ], 'safe'],
         [['reCaptcha'], 'required']
        ];*/

    }



}