<?php

/**
 * This is the model class for table "q_n_a".
 *
 * The followings are the available columns in table 'q_n_a':
 * @property integer $id
 * @property integer $question_id
 * @property integer $answer_id
 * @property integer $respondent_id
 * @property string $q_n_acol
 * @property string $q_n_acol1
 * @property string $q_n_acol2
 */
class QNA extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'q_n_a';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('question_id, answer_id, respondent_id', 'required'),
			array('question_id, answer_id, respondent_id', 'numerical', 'integerOnly'=>true),
			array('q_n_acol, q_n_acol1, q_n_acol2', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, question_id, answer_id, respondent_id, q_n_acol, q_n_acol1, q_n_acol2', 'safe', 'on'=>'search'),
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
			'question_id' => 'Question',
			'answer_id' => 'Answer',
			'respondent_id' => 'Respondent',
			'q_n_acol' => 'Q N Acol',
			'q_n_acol1' => 'Q N Acol1',
			'q_n_acol2' => 'Q N Acol2',
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
		$criteria->compare('question_id',$this->question_id);
		$criteria->compare('answer_id',$this->answer_id);
		$criteria->compare('respondent_id',$this->respondent_id);
		$criteria->compare('q_n_acol',$this->q_n_acol,true);
		$criteria->compare('q_n_acol1',$this->q_n_acol1,true);
		$criteria->compare('q_n_acol2',$this->q_n_acol2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return QNA the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
