<?php

/**
 * This is the model class for table "am_persediaan_safety".
 *
 * The followings are the available columns in table 'am_persediaan_safety':
 * @property integer $id_persediaan_safety
 * @property integer $id_persediaan
 * @property integer $safety_stok
 * @property string $tgl_persediaan
 */
class PersediaanSafety extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'am_persediaan_safety';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_persediaan, safety_stok, tgl_persediaan', 'required'),
			array('id_persediaan, safety_stok', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_persediaan_safety, id_persediaan, safety_stok, tgl_persediaan', 'safe', 'on'=>'search'),
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
			'id_persediaan_safety' => 'Id Persediaan Safety',
			'id_persediaan' => 'Id Persediaan',
			'safety_stok' => 'Safety Stok',
			'tgl_persediaan' => 'Tgl Persediaan',
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

		$criteria->compare('id_persediaan_safety',$this->id_persediaan_safety);
		$criteria->compare('id_persediaan',$this->id_persediaan);
		$criteria->compare('safety_stok',$this->safety_stok);
		$criteria->compare('tgl_persediaan',$this->tgl_persediaan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PersediaanSafety the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
