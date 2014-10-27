<?php
/* @var $this AnswersController */
/* @var $data Answers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer_id')); ?>:</b>
	<?php echo CHtml::encode($data->answer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer')); ?>:</b>
	<?php echo CHtml::encode($data->answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_id')); ?>:</b>
	<?php echo CHtml::encode($data->question_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answerscol1')); ?>:</b>
	<?php echo CHtml::encode($data->answerscol1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answerscol2')); ?>:</b>
	<?php echo CHtml::encode($data->answerscol2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answerscol3')); ?>:</b>
	<?php echo CHtml::encode($data->answerscol3); ?>
	<br />


</div>