<?php

/**
 * This is the model class for table "am_riwayat_persediaan".
 *
 * The followings are the available columns in table 'am_riwayat_persediaan':
 * @property integer $id_riwayat_persediaan
 * @property integer $id_material
 * @property integer $stok
 * @property integer $status
 * @property string $tanggal
 * @property string $created_at
 */
class RiwayatPersediaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'am_riwayat_persediaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_material', 'required'),
			array('id_material, stok, status', 'numerical', 'integerOnly'=>true),
			array('tanggal, created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_riwayat_persediaan, id_material, stok, status, tanggal, created_at', 'safe', 'on'=>'search'),
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
			'material' => array(self::BELONGS_TO,'Material','id_material'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_riwayat_persediaan' => 'Id Riwayat Persediaan',
			'id_material' => 'Id Material',
			'stok' => 'Stok',
			'status' => 'Status',
			'tanggal' => 'Tanggal',
			'created_at' => 'Created At',
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

		$criteria->compare('id_riwayat_persediaan',$this->id_riwayat_persediaan);
		$criteria->compare('id_material',$this->id_material);
		$criteria->compare('stok',$this->stok);
		$criteria->compare('status',$this->status);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('created_at',$this->created_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RiwayatPersediaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
