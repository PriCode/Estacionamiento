<?php

/**
 * This is the model class for table "parking".
 *
 * The followings are the available columns in table 'parking':
 * @property integer $id_parking
 * @property string $codigo
 * @property string $estado
 * @property string $sensor
 *
 * The followings are the available model relations:
 * @property Ticket[] $tickets
 */
class Parking extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'parking';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_parking', 'required'),
			array('id_parking', 'numerical', 'integerOnly'=>true),
			array('codigo, estado, sensor', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_parking, codigo, estado, sensor', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tickets' => array(self::HAS_MANY, 'Ticket', 'id_parking'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_parking' => 'Id Parking',
			'codigo' => 'Codigo',
			'estado' => 'Estado',
			'sensor' => 'Sensor',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_parking',$this->id_parking);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('sensor',$this->sensor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Parking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
