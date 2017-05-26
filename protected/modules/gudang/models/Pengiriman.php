<?php

/**
 * This is the model class for table "am_pengiriman".
 *
 * The followings are the available columns in table 'am_pengiriman':
 * @property integer $id_pengiriman
 * @property integer $id_pemesanan
 * @property integer $id_kendaraan
 * @property integer $id_karyawan
 * @property string $no_order
 * @property string $tgl_pengiriman
 * @property integer $status
 * @property string $created_at
 * @property integer $is_deleted
 */
class Pengiriman extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'am_pengiriman';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pemesanan, id_kendaraan, id_karyawan, status', 'required'),
			array('id_pemesanan, id_kendaraan, id_karyawan, status, is_deleted', 'numerical', 'integerOnly'=>true),
			array('no_order', 'length', 'max'=>50),
			array('tgl_pengiriman, created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pengiriman, id_pemesanan, id_kendaraan, id_karyawan, no_order, tgl_pengiriman, status, created_at, is_deleted', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		Yii::import('application.modules.admin.models.*');
		Yii::import('application.modules.purchasing.models.*');
		return array(
			'pemesanan' => array(self::BELONGS_TO,'Pemesanan','id_pemesanan'),
			'kendaraan' => array(self::BELONGS_TO,'Kendaraan','id_kendaraan'),
			'karyawan' => array(self::BELONGS_TO,'Karyawan','id_karyawan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pengiriman' => 'Id Pengiriman',
			'id_pemesanan' => 'Id Pemesanan',
			'id_kendaraan' => 'Id Kendaraan',
			'id_karyawan' => 'Id Karyawan',
			'no_order' => 'No Order',
			'tgl_pengiriman' => 'Tgl Pengiriman',
			'status' => 'Status',
			'created_at' => 'Created At',
			'is_deleted' => 'Is Deleted',
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

		$criteria->compare('id_pengiriman',$this->id_pengiriman);
		$criteria->compare('id_pemesanan',$this->id_pemesanan);
		$criteria->compare('id_kendaraan',$this->id_kendaraan);
		$criteria->compare('id_karyawan',$this->id_karyawan);
		$criteria->compare('no_order',$this->no_order,true);
		$criteria->compare('tgl_pengiriman',$this->tgl_pengiriman,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('is_deleted',$this->is_deleted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pengiriman the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
