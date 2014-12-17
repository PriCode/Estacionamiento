<?php

/**
 * This is the model class for table "tipo_vehiculo".
 *
 * The followings are the available columns in table 'tipo_vehiculo':
 * @property integer $id_tipo
 * @property string $nombre_tipo
 *
 * The followings are the available model relations:
 * @property Tarifa[] $tarifas
 * @property Vehiculo[] $vehiculos
 */
class TipoVehiculo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_vehiculo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_tipo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tipo, nombre_tipo', 'safe', 'on'=>'search'),
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
			'tarifas' => array(self::HAS_MANY, 'Tarifa', 'id_tipo'),
			'vehiculos' => array(self::HAS_MANY, 'Vehiculo', 'id_tipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipo' => 'Id Tipo',
			'nombre_tipo' => 'Nombre Tipo',
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

		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('nombre_tipo',$this->nombre_tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoVehiculo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
