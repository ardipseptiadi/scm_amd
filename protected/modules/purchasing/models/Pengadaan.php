<?php

/**
 * This is the model class for table "am_pengadaan".
 *
 * The followings are the available columns in table 'am_pengadaan':
 * @property integer $id_pengadaan
 * @property integer $id_supplier
 * @property string $no_pengadaan
 * @property string $tanggal_pengiriman
 * @property string $tanggal_pengadaan
 * @property integer $is_verifikasi
 * @property integer $status_pengadaan
 * @property string $created_at
 * @property integer $is_deleted
 */
class Pengadaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'am_pengadaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_supplier', 'required'),
			array('id_supplier, is_verifikasi, status_pengadaan, is_deleted', 'numerical', 'integerOnly'=>true),
			array('no_pengadaan', 'length', 'max'=>50),
			array('tanggal_pengiriman, tanggal_pengadaan, created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pengadaan, id_supplier, no_pengadaan, tanggal_pengiriman, tanggal_pengadaan, is_verifikasi, status_pengadaan, created_at, is_deleted', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pengadaan' => 'Id Pengadaan',
			'id_supplier' => 'Id Supplier',
			'no_pengadaan' => 'No Pengadaan',
			'tanggal_pengiriman' => 'Tanggal Pengiriman',
			'tanggal_pengadaan' => 'Tanggal Pengadaan',
			'is_verifikasi' => 'Is Verifikasi',
			'status_pengadaan' => 'Status Pengadaan',
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

		$criteria->compare('id_pengadaan',$this->id_pengadaan);
		$criteria->compare('id_supplier',$this->id_supplier);
		$criteria->compare('no_pengadaan',$this->no_pengadaan,true);
		$criteria->compare('tanggal_pengiriman',$this->tanggal_pengiriman,true);
		$criteria->compare('tanggal_pengadaan',$this->tanggal_pengadaan,true);
		$criteria->compare('is_verifikasi',$this->is_verifikasi);
		$criteria->compare('status_pengadaan',$this->status_pengadaan);
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
	 * @return Pengadaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
