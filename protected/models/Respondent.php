<?php

/**
 * This is the model class for table "respondent".
 *
 * The followings are the available columns in table 'respondent':
 * @property integer $id
 * @property integer $respondent_id
 * @property string $fullname
 * @property string $msisdn
 * @property string $residence
 * @property string $respondentcol
 * @property string $respondentcol1
 * @property string $respondentcol2
 */
class Respondent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'respondent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('respondent_id', 'numerical', 'integerOnly'=>true),
			array('fullname, msisdn, residence, respondentcol, respondentcol1, respondentcol2', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, respondent_id, fullname, msisdn, residence, respondentcol, respondentcol1, respondentcol2', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'respondent_id' => 'Respondent',
			'fullname' => 'Fullname',
			'msisdn' => 'Msisdn',
			'residence' => 'Residence',
			'respondentcol' => 'SurveyId',
			'respondentcol1' => 'Respondentcol1',
			'respondentcol2' => 'Respondentcol2',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('respondent_id',$this->respondent_id);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('msisdn',$this->msisdn,true);
		$criteria->compare('residence',$this->residence,true);
		$criteria->compare('respondentcol',$this->respondentcol,true);
		$criteria->compare('respondentcol1',$this->respondentcol1,true);
		$criteria->compare('respondentcol2',$this->respondentcol2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Respondent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
