<?php

/**
 * This is the model class for table "answers".
 *
 * The followings are the available columns in table 'answers':
 * @property integer $id
 * @property integer $answer_id
 * @property string $answer
 * @property integer $question_id
 * @property string $answerscol1
 * @property string $answerscol2
 * @property string $answerscol3
 */
class Answers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'answers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('answer_id, answer', 'required'),
			array('answer_id, question_id', 'numerical', 'integerOnly'=>true),
			array('answerscol1, answerscol2, answerscol3', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, answer_id, answer, question_id, answerscol1, answerscol2, answerscol3', 'safe', 'on'=>'search'),
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
		'question'=>array(self::BELONGS_TO, 'Questions','question_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'answer_id' => 'Answer',
			'answer' => 'Answer',
			'question_id' => 'Question',
			'answerscol1' => 'Answerscol1',
			'answerscol2' => 'Answerscol2',
			'answerscol3' => 'Answerscol3',
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
		$criteria->compare('answer_id',$this->answer_id);
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('question_id',$this->question_id);
		$criteria->compare('answerscol1',$this->answerscol1,true);
		$criteria->compare('answerscol2',$this->answerscol2,true);
		$criteria->compare('answerscol3',$this->answerscol3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Answers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
