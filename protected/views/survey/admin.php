<?php
/* @var $this SurveyController */
/* @var $model Survey */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Survey', 'url'=>array('index')),
	array('label'=>'Create Survey', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#survey-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Surveys</h1>



<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'survey-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'survey_id',
		'title',
		//'date_created',
		//'date_modified',
		//'start_date',
		/*
		'end_date',
		'question_count',
		'num_responce',
		'col1',
		'col2',
		'col3',
		'col4',
		*/
		array(
            'class'=>'CButtonColumn',
            'header'=>'Actions',
            'template'=>'{Ques}{Respo}',
            'buttons'=>array(
                //'view'=>array('label'=>'View','options'=>array('style'=>'padding:1px'),'visible'=>'Yii::app()->user->name=="admin"','url'=>'Yii::app()->createUrl("muumini/view",array("id"=>$data->id))'),
                //'update'=>array('label'=>'Edit','options'=>array('style'=>'padding:1px'),'visible'=>'Yii::app()->user->name=="admin"','url'=>'Yii::app()->createUrl("muumini/update",array("id"=>$data->id))'),
                'Respo'=>array('label'=>'||Respondent','options'=>array('style'=>'padding:1px'),'visible'=>'Yii::app()->user->name=="admin"','url'=>'Yii::app()->createUrl("Respondent/create",array("id"=>$data->survey_id))'),
                'Ques'=>array('label'=>'Question','options'=>array('style'=>'padding:1px'),'visible'=>'Yii::app()->user->name=="admin"','url'=>'Yii::app()->createUrl("questions/create",array("id"=>$data->survey_id))'),
                //'Ans'=>array('label'=>'Answers','options'=>array('style'=>'padding:1px'),'visible'=>'Yii::app()->user->name=="admin"','url'=>'Yii::app()->createUrl("Respondent/create",array("id"=>$data->survey_id))'),
                //'QnA'=>array('label'=>'QnA','options'=>array('style'=>'padding:1px'),'visible'=>'Yii::app()->user->name=="admin"','url'=>'Yii::app()->createUrl("Respondent/create",array("id"=>$data->survey_id))'),
               // 'show'=>array('label'=>'Show','options'=>array('style'=>'padding:10px'),'visible'=>'Yii::app()->user->name=="admin"','url'=>'Yii::app()->createUrl("muumini/show",array("id"=>$data->id))'),
               /* 'tangazo'=>array('label'=>'Matangazo','options'=>array('style'=>'padding:10px'),'visible'=>'Yii::app()->user->name=="#"','url'=>'Yii::app()->createUrl("matagazoMengineyo/tangazo",array("id"=>$data->id))'),
                'sadaka'=>array('label'=>'Sadaka','options'=>array('style'=>'padding:10px'),'visible'=>'Yii::app()->user->name=="#"','url'=>'Yii::app()->createUrl("matoleo/sadaka",array("id"=>$data->id))'),*/
               // 'update'=>array('label'=>'Edit','options'=>array('style'=>'padding:10px'),'visible'=>'Yii::app()->user->name=="admin"','url'=>'Yii::app()->createUrl("update',array("id"=>$data->id))'),
              
            ),
			
		),
	),
)); ?>
