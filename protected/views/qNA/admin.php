<?php
/* @var $this QNAController */
/* @var $model QNA */

$this->breadcrumbs=array(
	'Qnas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List QNA', 'url'=>array('index')),
	array('label'=>'Create QNA', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#qna-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Responces</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'qna-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'question_id',
		'answer_id',
		'respondent_id',
		'q_n_acol',
		'q_n_acol1',
		/*
		'q_n_acol2',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
