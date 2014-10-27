<?php
/* @var $this QNAController */
/* @var $data QNA */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_id')); ?>:</b>
	<?php echo CHtml::encode($data->question_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer_id')); ?>:</b>
	<?php echo CHtml::encode($data->answer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respondent_id')); ?>:</b>
	<?php echo CHtml::encode($data->respondent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('q_n_acol')); ?>:</b>
	<?php echo CHtml::encode($data->q_n_acol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('q_n_acol1')); ?>:</b>
	<?php echo CHtml::encode($data->q_n_acol1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('q_n_acol2')); ?>:</b>
	<?php echo CHtml::encode($data->q_n_acol2); ?>
	<br />


</div>