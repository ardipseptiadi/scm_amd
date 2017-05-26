<?php

/**
 * This is the model class for table "am_karyawan".
 *
 * The followings are the available columns in table 'am_karyawan':
 * @property integer $id_karyawan
 * @property string $nip
 * @property string $nama
 * @property string $telepon
 * @property string $email
 * @property integer $status
 * @property integer $id_jabatan
 */
class Karyawan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'am_karyawan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip, nama, id_jabatan', 'required'),
			array('status, id_jabatan', 'numerical', 'integerOnly'=>true),
			array('nip', 'length', 'max'=>15),
			array('nama, email', 'length', 'max'=>50),
			array('telepon', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_karyawan, nip, nama, telepon, email, status, id_jabatan', 'safe', 'on'=>'search'),
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
			'id_karyawan' => 'Id Karyawan',
			'nip' => 'Nip',
			'nama' => 'Nama',
			'telepon' => 'Telepon',
			'email' => 'Email',
			'status' => 'Status',
			'id_jabatan' => 'Id Jabatan',
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

		$criteria->compare('id_karyawan',$this->id_karyawan);
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('id_jabatan',$this->id_jabatan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Karyawan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
