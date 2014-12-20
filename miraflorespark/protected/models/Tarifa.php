<?php

/**
 * This is the model class for table "tarifa".
 *
 * The followings are the available columns in table 'tarifa':
 * @property integer $id_tarifa
 * @property double $por_minuto
 * @property double $por_mes
 * @property int $tipo_cliente
 *
 * The followings are the available model relations:
 * @property TipoVehiculo $idTipo
 */
class Tarifa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tarifa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('por_minuto, por_mes, tipo_cliente', 'required'),
			array('tipo_cliente', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tarifa, por_minuto, por_mes, tipo_cliente', 'safe', 'on'=>'search'),
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
			'idTipo' => array(self::BELONGS_TO, 'TipoVehiculo', 'tipo_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tarifa' => 'Id Tarifa',
			'por_minuto' => 'Por minuto',
			'por_mes' => 'Por Mes',
			'tipo_cliente' => 'Tipo Cliente',
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

		$criteria->compare('id_tarifa',$this->id_tarifa);
		$criteria->compare('por_minuto',$this->por_minuto);
		$criteria->compare('por_mes',$this->por_mes);
		$criteria->compare('tipo_cliente',$this->tipo_cliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tarifa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
