<?php
/* @var $this AnswersController */
/* @var $model Answers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'answers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'answer_id'); ?>
		<?php echo $form->textField($model,'answer_id'); ?>
		<?php echo $form->error($model,'answer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answer'); ?>
		<?php echo $form->textArea($model,'answer',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'answer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'question_id'); ?>
		<?php echo $form->textField($model,'question_id'); ?>
		<?php echo $form->error($model,'question_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answerscol1'); ?>
		<?php echo $form->textField($model,'answerscol1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'answerscol1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answerscol2'); ?>
		<?php echo $form->textField($model,'answerscol2',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'answerscol2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answerscol3'); ?>
		<?php echo $form->textField($model,'answerscol3',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'answerscol3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->