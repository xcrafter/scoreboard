<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scoreboard".
 *
 * @property integer $titans
 * @property integer $arcadians
 * @property integer $roadians
 * @property integer $spartans
 */
class Scoreboard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scoreboard';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titans', 'arcadians', 'roadians', 'spartans'], 'integer']
        ];
    }

public static function getScore()
{
    return Scoreboard::findOne(['id'=>1]);
}


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'titans' => 'Titans',
            'arcadians' => 'Arcadians',
            'roadians' => 'Roadians',
            'spartans' => 'Spartans',
        ];
    }


}
