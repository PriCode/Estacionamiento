<?php

/**
 * This is the model class for table "vehiculo".
 *
 * The followings are the available columns in table 'vehiculo':
 * @property integer $id_vehiculo
 * @property string $placa
 * @property string $color
 * @property integer $id_marca
 * @property integer $id_tipo
 * @property integer $id_conductor
 *
 * The followings are the available model relations:
 * @property Marca $idMarca
 * @property TipoVehiculo $idTipo
 * @property Conductor $idConductor
 * @property Visita[] $visitas
 */
class Vehiculo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vehiculo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_marca, id_tipo, id_conductor', 'required'),
			array('id_marca, id_tipo, id_conductor', 'numerical', 'integerOnly'=>true),
			array('placa', 'length', 'max'=>7),
			array('color', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_vehiculo, placa, color, id_marca, id_tipo, id_conductor', 'safe', 'on'=>'search'),
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
			'idMarca' => array(self::BELONGS_TO, 'Marca', 'id_marca'),
			'idTipo' => array(self::BELONGS_TO, 'TipoVehiculo', 'id_tipo'),
			'idConductor' => array(self::BELONGS_TO, 'Conductor', 'id_conductor'),
			'visitas' => array(self::HAS_MANY, 'Visita', 'id_vehiculo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_vehiculo' => 'Id Vehiculo',
			'placa' => 'Placa',
			'color' => 'Color',
			'id_marca' => 'Id Marca',
			'id_tipo' => 'Id Tipo',
			'id_conductor' => 'Id Conductor',
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

		$criteria->compare('id_vehiculo',$this->id_vehiculo);
		$criteria->compare('placa',$this->placa,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('id_marca',$this->id_marca);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('id_conductor',$this->id_conductor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vehiculo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
