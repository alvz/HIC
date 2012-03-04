<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>
<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="alert alert-warning">
	<?php echo $form->textFieldRow($model,'v_company_code',array('class'=>'span5','maxlength'=>20)); ?>

	<div class="actions">
		<?php
		 echo CHtml::submitButton(Yii::t('setupModule.main','Cari'),array('class'=>'btn primary'));
		  echo '&nbsp;';
		 echo CHtml::submitButton(Yii::t('setupModule.main','Batal'), array('class'=>'btn','onclick'=>'this.form.reset()'));
		 echo '&nbsp;';
 
		 echo CHtml::link(Yii::t('setupModule.main','Pencarian Mutakhir'),'#',array('class'=>'search-advanced-button btn')); 
		?>
	</div>
</div>
<?php $this->endWidget(); ?>
