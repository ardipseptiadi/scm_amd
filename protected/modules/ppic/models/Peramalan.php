<?php

/**
 * This is the model class for table "am_peramalan".
 *
 * The followings are the available columns in table 'am_peramalan':
 * @property integer $id_peramalan
 * @property string $bulan_mulai
 * @property string $bulan_selesai
 * @property string $bulan_peramalan
 * @property integer $id_produk
 * @property integer $jumlah_peramalan
 * @property string $created_at
 * @property integer $is_deleted
 */
class Peramalan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'am_peramalan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_produk', 'required'),
			array('id_produk, jumlah_peramalan, is_deleted', 'numerical', 'integerOnly'=>true),
			array('bulan_mulai, bulan_selesai, bulan_peramalan, created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_peramalan, bulan_mulai, bulan_selesai, bulan_peramalan, id_produk, jumlah_peramalan, created_at, is_deleted', 'safe', 'on'=>'search'),
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
			'id_peramalan' => 'Id Peramalan',
			'bulan_mulai' => 'Bulan Mulai',
			'bulan_selesai' => 'Bulan Selesai',
			'bulan_peramalan' => 'Bulan Peramalan',
			'id_produk' => 'Id Produk',
			'jumlah_peramalan' => 'Jumlah Peramalan',
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

		$criteria->compare('id_peramalan',$this->id_peramalan);
		$criteria->compare('bulan_mulai',$this->bulan_mulai,true);
		$criteria->compare('bulan_selesai',$this->bulan_selesai,true);
		$criteria->compare('bulan_peramalan',$this->bulan_peramalan,true);
		$criteria->compare('id_produk',$this->id_produk);
		$criteria->compare('jumlah_peramalan',$this->jumlah_peramalan);
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
	 * @return Peramalan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
