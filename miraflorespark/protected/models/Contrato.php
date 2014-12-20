<?php

/**
 * This is the model class for table "contrato".
 *
 * The followings are the available columns in table 'contrato':
 * @property integer $id_contrato
 * @property string $fecha
 * @property string $cantidad_meses
 * @property integer $id_cliente
 * @property integer $id_tarifa
 * @property integer $id_tarjeta
 *
 * The followings are the available model relations:
 * @property Cliente $idCliente
 * @property Tarifa $idTarifa
 * @property Tarjeta $idTarjeta
 * @property Vehiculo[] $vehiculos
 */
class Contrato extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contrato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

			//array('id_cliente, id_tarifa, id_tarjeta', 'required'),
			array('id_cliente, id_tarifa, id_tarjeta', 'numerical', 'integerOnly'=>true),
			array('fecha, cantidad_meses', 'length', 'max'=>45),
			array('id_cliente, id_tarifa, id_tarjeta,fecha,cantidad_meses','required','on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fecha, cantidad_meses, id_cliente, id_tarifa, id_tarjeta', 'safe', 'on'=>'search'),
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
			'idCliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
			'idTarifa' => array(self::BELONGS_TO, 'Tarifa', 'id_tarifa'),
			'idTarjeta' => array(self::BELONGS_TO, 'Tarjeta', 'id_tarjeta'),
			'vehiculos' => array(self::MANY_MANY, 'Vehiculo', 'contrato_vehiculo(id_contrato, id_vehiculo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contrato' => 'Id Contrato',
			'fecha' => 'Fecha',
			'cantidad_meses' => 'Cantidad Meses',
			'id_cliente' => 'Id Cliente',
			'id_tarifa' => 'Id Tarifa',
			'id_tarjeta' => 'Id Tarjeta',
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

		$criteria->compare('id_contrato',$this->id_contrato);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('cantidad_meses',$this->cantidad_meses,true);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_tarifa',$this->id_tarifa);
		$criteria->compare('id_tarjeta',$this->id_tarjeta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contrato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
