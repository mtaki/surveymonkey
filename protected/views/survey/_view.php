<?php
/* @var $this SurveyController */
/* @var $data Survey */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('survey_id')); ?>:</b>
	<?php echo CHtml::encode($data->survey_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modified')); ?>:</b>
	<?php echo CHtml::encode($data->date_modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('question_count')); ?>:</b>
	<?php echo CHtml::encode($data->question_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_responce')); ?>:</b>
	<?php echo CHtml::encode($data->num_responce); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('col1')); ?>:</b>
	<?php echo CHtml::encode($data->col1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('col2')); ?>:</b>
	<?php echo CHtml::encode($data->col2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('col3')); ?>:</b>
	<?php echo CHtml::encode($data->col3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('col4')); ?>:</b>
	<?php echo CHtml::encode($data->col4); ?>
	<br />

	*/ ?>

</div>