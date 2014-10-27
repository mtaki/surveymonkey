<?php
/* @var $this QNAController */
/* @var $model QNA */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'qna-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'question_id'); ?>
		<?php echo $form->textField($model,'question_id'); ?>
		<?php echo $form->error($model,'question_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answer_id'); ?>
		<?php echo $form->textField($model,'answer_id'); ?>
		<?php echo $form->error($model,'answer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'respondent_id'); ?>
		<?php echo $form->textField($model,'respondent_id'); ?>
		<?php echo $form->error($model,'respondent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'q_n_acol'); ?>
		<?php echo $form->textField($model,'q_n_acol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'q_n_acol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'q_n_acol1'); ?>
		<?php echo $form->textField($model,'q_n_acol1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'q_n_acol1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'q_n_acol2'); ?>
		<?php echo $form->textField($model,'q_n_acol2',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'q_n_acol2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->