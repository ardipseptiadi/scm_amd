<?php

/**
 * This is the model class for table "am_pemesanan_detail".
 *
 * The followings are the available columns in table 'am_pemesanan_detail':
 * @property integer $id_pemesanan_detail
 * @property integer $id_pemesanan
 * @property integer $id_produk
 * @property string $no_order
 * @property integer $harga
 * @property integer $qty
 * @property integer $jumlah
 * @property integer $is_verifikasi
 * @property string $created_at
 * @property integer $is_deleted
 */
class PemesananDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'am_pemesanan_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pemesanan, id_produk', 'required'),
			array('id_pemesanan, id_produk, harga, qty, jumlah, is_verifikasi, is_deleted', 'numerical', 'integerOnly'=>true),
			array('no_order', 'length', 'max'=>50),
			array('created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pemesanan_detail, id_pemesanan, id_produk, no_order, harga, qty, jumlah, is_verifikasi, created_at, is_deleted', 'safe', 'on'=>'search'),
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
		return array(
			'produk' => array(self::BELONGS_TO,'Produk','id_produk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pemesanan_detail' => 'Id Pemesanan Detail',
			'id_pemesanan' => 'Id Pemesanan',
			'id_produk' => 'Id Produk',
			'no_order' => 'No Order',
			'harga' => 'Harga',
			'qty' => 'Qty',
			'jumlah' => 'Jumlah',
			'is_verifikasi' => 'Is Verifikasi',
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

		$criteria->compare('id_pemesanan_detail',$this->id_pemesanan_detail);
		$criteria->compare('id_pemesanan',$this->id_pemesanan);
		$criteria->compare('id_produk',$this->id_produk);
		$criteria->compare('no_order',$this->no_order,true);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('is_verifikasi',$this->is_verifikasi);
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
	 * @return PemesananDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
