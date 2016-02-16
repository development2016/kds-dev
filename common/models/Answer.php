<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "answer".
 *
 * @property integer $id_answer
 * @property string $answer
 * @property integer $question_id
 * @property integer $people_id
 */
class Answer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question_id', 'people_id'], 'integer'],
            [['answer'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_answer' => 'Id Answer',
            'answer' => 'Answer',
            'question_id' => 'Question ID',
            'people_id' => 'People ID',
        ];
    }
}
