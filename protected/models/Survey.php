<?php

/**
 * This is the model class for table "survey".
 *
 * The followings are the available columns in table 'survey':
 * @property integer $id
 * @property integer $survey_id
 * @property string $title
 * @property string $date_created
 * @property string $date_modified
 * @property string $start_date
 * @property string $end_date
 * @property integer $question_count
 * @property integer $num_responce
 * @property string $col1
 * @property string $col2
 * @property string $col3
 * @property string $col4
 */
class Survey extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'survey';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('survey_id', 'required'),
			array('survey_id, question_count, num_responce', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>200),
			array('col1, col2, col3, col4', 'length', 'max'=>45),
			array('date_created, date_modified, start_date, end_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, survey_id, title, date_created, date_modified, start_date, end_date, question_count, num_responce, col1, col2, col3, col4', 'safe', 'on'=>'search'),
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
			'survey_id' => 'Survey',
			'title' => 'Title',
			'date_created' => 'Date Created',
			'date_modified' => 'Date Modified',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'question_count' => 'Question Count',
			'num_responce' => 'Num Responce',
			'col1' => 'Col1',
			'col2' => 'Col2',
			'col3' => 'Col3',
			'col4' => 'Col4',
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
		$criteria->compare('survey_id',$this->survey_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('date_modified',$this->date_modified,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('question_count',$this->question_count);
		$criteria->compare('num_responce',$this->num_responce);
		$criteria->compare('col1',$this->col1,true);
		$criteria->compare('col2',$this->col2,true);
		$criteria->compare('col3',$this->col3,true);
		$criteria->compare('col4',$this->col4,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Survey the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
