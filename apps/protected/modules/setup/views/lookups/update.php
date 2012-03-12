<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>
<?php
$this->breadcrumbs=array(
	Yii::t('app','Lookups')=>array('index'),
	Yii::t('app','View',array('$v_lookup_code'=>$model->v_lookup_code))=>array('view','id'=>$model->v_lookup_code),
	Yii::t('app','Update'),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstLookups','url'=>array('index')),
	array('label'=>'Create SetupMstLookups','url'=>array('create')),
	array('label'=>'View SetupMstLookups','url'=>array('view','id'=>$model->v_lookup_code)),
	array('label'=>'Manage SetupMstLookups','url'=>array('admin')),
);*/
?>

<div class="page-header"><h1><?php
echo Yii::t('app','Update Lookup',array("\$v_lookup_name"=>$model->v_lookup_name));
?></h1></div>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>