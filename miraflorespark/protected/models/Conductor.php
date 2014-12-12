<?php

/**
 * This is the model class for table "conductor".
 *
 * The followings are the available columns in table 'conductor':
 * @property integer $id_conductor
 * @property string $nombre
 * @property integer $edad
 * @property string $DNI
 * @property string $direccion
 *
 * The followings are the available model relations:
 * @property Vehiculo[] $vehiculos
 */
class Conductor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'conductor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('edad', 'numerical', 'integerOnly'=>true),
			array('nombre, direccion', 'length', 'max'=>200),
			array('DNI', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_conductor, nombre, edad, DNI, direccion', 'safe', 'on'=>'search'),
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
			'vehiculos' => array(self::HAS_MANY, 'Vehiculo', 'id_conductor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_conductor' => 'Id Conductor',
			'nombre' => 'Nombre',
			'edad' => 'Edad',
			'DNI' => 'Dni',
			'direccion' => 'Direccion',
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

		$criteria->compare('id_conductor',$this->id_conductor);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('DNI',$this->DNI,true);
		$criteria->compare('direccion',$this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Conductor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
