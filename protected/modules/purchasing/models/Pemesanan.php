<?php

/**
 * This is the model class for table "am_pemesanan".
 *
 * The followings are the available columns in table 'am_pemesanan':
 * @property integer $id_pemesanan
 * @property integer $id_agen
 * @property string $no_order
 * @property string $tanggal_pengiriman
 * @property string $tanggal_pemesanan
 * @property integer $is_verifikasi
 * @property integer $status_pemesanan
 * @property string $created_at
 * @property integer $is_deleted
 */
class Pemesanan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'am_pemesanan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_agen', 'required'),
			array('id_agen, is_verifikasi, status_pemesanan, is_deleted', 'numerical', 'integerOnly'=>true),
			array('no_order', 'length', 'max'=>50),
			array('tanggal_pengiriman, tanggal_pemesanan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pemesanan, id_agen, no_order, tanggal_pengiriman, tanggal_pemesanan, is_verifikasi, status_pemesanan, created_at, is_deleted', 'safe', 'on'=>'search'),
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
			'detailPemesanan' => array(self::HAS_MANY, 'PemesananDetail', 'id_pemesanan'),
			'agen' => array(self::BELONGS_TO,'Agen','id_agen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pemesanan' => 'Id Pemesanan',
			'id_agen' => 'Id Agen',
			'no_order' => 'No Order',
			'tanggal_pengiriman' => 'Tanggal Pengiriman',
			'tanggal_pemesanan' => 'Tanggal Pemesanan',
			'is_verifikasi' => 'Is Verifikasi',
			'status_pemesanan' => 'Status Pemesanan',
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

		$criteria->compare('id_pemesanan',$this->id_pemesanan);
		$criteria->compare('id_agen',$this->id_agen);
		$criteria->compare('no_order',$this->no_order,true);
		$criteria->compare('tanggal_pengiriman',$this->tanggal_pengiriman,true);
		$criteria->compare('tanggal_pemesanan',$this->tanggal_pemesanan,true);
		$criteria->compare('is_verifikasi',$this->is_verifikasi);
		$criteria->compare('status_pemesanan',$this->status_pemesanan);
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
	 * @return Pemesanan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generateNoOrder()
	{
		$data = $this->find(array(
												'order' =>'t.id_pemesanan DESC',
												'limit' => 1,
											));
		if(!$data){
			$lastOrder = [];
			$lastOrder[0] = "po";
			$lastOrder[1] = date("Y");
			$lastOrder[2] = date("m");
			$new = sprintf('%06d',1);
		}else{
			$lastOrder = explode("/",$data->no_order);
			if(($lastOrder[1] == date("Y")) && ($lastOrder[2] == date("m")) ){
				// tambah tkg urut
				$new = $lastOrder[3] + 1;
				$new = sprintf('%06d',$new);
			}else{
				//start from 1
				$lastOrder[1] = date("Y");
				$lastOrder[2] = date("m");
				$new = sprintf('%06d',1);
			}
		}
		$lastOrder[3] = $new;
		$newNoOrder = implode("/",$lastOrder);
		return $newNoOrder;
	}
}
