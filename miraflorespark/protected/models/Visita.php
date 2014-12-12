<?php

/**
 * This is the model class for table "visita".
 *
 * The followings are the available columns in table 'visita':
 * @property integer $id_visita
 * @property string $hora_llegada
 * @property string $hora_salida
 * @property string $monto
 * @property integer $id_vehiculo
 *
 * The followings are the available model relations:
 * @property Vehiculo $idVehiculo
 */
class Visita extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'visita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_vehiculo', 'required'),
			array('id_vehiculo', 'numerical', 'integerOnly'=>true),
			array('monto', 'length', 'max'=>45),
			array('hora_llegada, hora_salida', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_visita, hora_llegada, hora_salida, monto, id_vehiculo', 'safe', 'on'=>'search'),
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
			'idVehiculo' => array(self::BELONGS_TO, 'Vehiculo', 'id_vehiculo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_visita' => 'Id Visita',
			'hora_llegada' => 'Hora Llegada',
			'hora_salida' => 'Hora Salida',
			'monto' => 'Monto',
			'id_vehiculo' => 'Id Vehiculo',
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

		$criteria->compare('id_visita',$this->id_visita);
		$criteria->compare('hora_llegada',$this->hora_llegada,true);
		$criteria->compare('hora_salida',$this->hora_salida,true);
		$criteria->compare('monto',$this->monto,true);
		$criteria->compare('id_vehiculo',$this->id_vehiculo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visita the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
