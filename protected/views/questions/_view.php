<?php
/* @var $this QuestionsController */
/* @var $data Questions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questions_id')); ?>:</b>
	<?php echo CHtml::encode($data->questions_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('survery_id')); ?>:</b>
	<?php echo CHtml::encode($data->survery_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question')); ?>:</b>
	<?php echo CHtml::encode($data->question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questions1')); ?>:</b>
	<?php echo CHtml::encode($data->questions1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questions2')); ?>:</b>
	<?php echo CHtml::encode($data->questions2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questions3')); ?>:</b>
	<?php echo CHtml::encode($data->questions3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('questions4')); ?>:</b>
	<?php echo CHtml::encode($data->questions4); ?>
	<br />

	*/ ?>

</div>