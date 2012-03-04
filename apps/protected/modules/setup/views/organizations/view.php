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
	'Setup Mst Organizations'=>array('index'),
	$model->n_org_id,
);
/*
$this->menu=array(
	array('label'=>'List SetupMstOrganizations','url'=>array('index')),
	array('label'=>'Create SetupMstOrganizations','url'=>array('create')),
	array('label'=>'Update SetupMstOrganizations','url'=>array('update','id'=>$model->n_org_id)),
	array('label'=>'Delete SetupMstOrganizations','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->n_org_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SetupMstOrganizations','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->n_org_id), array('update','id'=>$model->n_org_id));
?>
</div>

<h1>View SetupMstOrganizations #<?php echo $model->n_org_id; ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'n_org_id',
		'v_org_code',
		'v_org_name',
		'd_start_date',
		'd_end_date',
		'v_flag_coy_id',
		'v_org_level',
		'n_org_parent',
		'v_no_account',
		'v_npwp',
		'v_currency',
		'v_address',
		'v_city',
		'v_province',
		'v_country',
		'v_post_code',
		'v_phone',
		'v_contact_person',
		'v_phone_person',
		'v_email_person',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->n_org_id),array('update','id'=>$model->n_org_id),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->n_org_id), array('update','id'=>$model->n_org_id));
?>
</div>
</p>
-->