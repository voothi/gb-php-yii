<?php


namespace app\models;

use yii\base\Model;

class Activity extends Model
{
    public $title;
    public $description;
    public $date_start;
    public $is_blocked;

    function rules()
    {
        return [
            ['title', 'string', 'min' => '2' ,'max' => 150],
            [['title', 'date_start'], 'required'],
            ['is_blocked', 'boolean'],
        ];
    }

    function attributeLabels()
    {
        return [
            'title' => 'Заголовок активности',
            'description' => 'Описание',
            'is_blocked' => 'Блокирующее',
        ];
    }
}