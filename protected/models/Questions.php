<?php

/**
 * This is the model class for table "questions".
 *
 * The followings are the available columns in table 'questions':
 * @property integer $id
 * @property integer $questions_id
 * @property string $survery_id
 * @property string $question
 * @property string $questions1
 * @property string $questions2
 * @property string $questions3
 * @property string $questions4
 */
class Questions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'questions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('questions_id, survery_id', 'required'),
			array('questions_id', 'numerical', 'integerOnly'=>true),
			array('survery_id, questions1, questions2, questions3, questions4', 'length', 'max'=>45),
			array('question', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, questions_id, survery_id, question, questions1, questions2, questions3, questions4', 'safe', 'on'=>'search'),
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
		'survey'=>array(self::BELONGS_TO, 'Survey','survery_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'questions_id' => 'Questions',
			'survery_id' => 'Survery',
			'question' => 'Question',
			'questions1' => 'Questions1',
			'questions2' => 'Questions2',
			'questions3' => 'Questions3',
			'questions4' => 'Questions4',
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
		$criteria->compare('questions_id',$this->questions_id);
		$criteria->compare('survery_id',$this->survery_id,true);
		$criteria->compare('question',$this->question,true);
		$criteria->compare('questions1',$this->questions1,true);
		$criteria->compare('questions2',$this->questions2,true);
		$criteria->compare('questions3',$this->questions3,true);
		$criteria->compare('questions4',$this->questions4,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Questions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
