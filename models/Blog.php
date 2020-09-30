<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Blog extends ActiveRecord{


//  Записываем название таблицы
    public static function tableName(){
        return 'blog';
    }

//  Правила валидации
    public function rules()
    {
        return [
            [['title', 'content'], 'required', 'message' => 'Заполните это поле']
        ];
    }

//  Заголовки для label
    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок',
            'content' => 'Текст статьи'
        ];
    }
}