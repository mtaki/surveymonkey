<?php
/* @var $this RespondentController */
/* @var $data Respondent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respondent_id')); ?>:</b>
	<?php echo CHtml::encode($data->respondent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('msisdn')); ?>:</b>
	<?php echo CHtml::encode($data->msisdn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('residence')); ?>:</b>
	<?php echo CHtml::encode($data->residence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respondentcol')); ?>:</b>
	<?php echo CHtml::encode($data->respondentcol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respondentcol1')); ?>:</b>
	<?php echo CHtml::encode($data->respondentcol1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('respondentcol2')); ?>:</b>
	<?php echo CHtml::encode($data->respondentcol2); ?>
	<br />

	*/ ?>

</div>