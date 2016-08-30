<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "marklist".
 *
 * @property integer $id
 * @property integer $English
 * @property integer $Maths
 * @property integer $Science
 */
class Marklist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marklist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'English', 'Maths', 'Science'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'English' => 'English',
            'Maths' => 'Maths',
            'Science' => 'Science',
        ];
    }
}
