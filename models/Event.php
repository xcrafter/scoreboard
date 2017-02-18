<?php

namespace app\models;

use Yii;
use yii\db\Connection;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $name
 * @property integer $hfirst
 * @property integer $hsecond
 * @property integer $hthird
 * @property string $pfirst
 * @property string $psecond
 * @property string $pthird
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    public static function deleteEvent($id)
    {

        $con = \Yii::$app->db;
        $con=$con->createCommand('delete from event where id=:id_name');
        $con->bindValue(':id_name',$id);
        $con->execute();

    }
    public static function getEvents()
    {

        $con = \Yii::$app->db;
        $con=$con->createCommand('select id,name from event');

        return $con->queryAll();

    }
    public static  function getLast()
    {
        $con = \Yii::$app->db;
        $con=$con->createCommand('select * from event order by id desc limit 10');
        return $con->queryAll();

    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['hfirst', 'hsecond', 'hthird'], 'integer'],
            [['name', 'pfirst', 'psecond', 'pthird'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'hfirst' => 'Hfirst',
            'hsecond' => 'Hsecond',
            'hthird' => 'Hthird',
            'pfirst' => 'Pfirst',
            'psecond' => 'Psecond',
            'pthird' => 'Pthird',
        ];
    }
}
