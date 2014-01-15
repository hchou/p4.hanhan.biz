<?php
/* @var $this BrainnieController */
/* @var $model Brainnie */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'brainnie_id'); ?>
		<?php echo $form->textField($model,'brainnie_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_first'); ?>
		<?php echo $form->textField($model,'name_first',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_last'); ?>
		<?php echo $form->textField($model,'name_last',array('size'=>60,'maxlength'=>255)); ?>
	</div>

<!--
    <div class="row">
		<?php echo $form->label($model,'salt'); ?>
		<?php echo $form->textField($model,'salt',array('size'=>60,'maxlength'=>255)); ?>
	</div>
-->

	<div class="row">
		<?php echo $form->label($model,'time_create'); ?>
		<?php echo $form->textField($model,'time_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_last_login'); ?>
		<?php echo $form->textField($model,'time_last_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brainnie_group_id'); ?>
		<?php echo $form->textField($model,'brainnie_group_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->