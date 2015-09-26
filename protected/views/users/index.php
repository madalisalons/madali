<?php
/* @var $this UsersController */

$this->breadcrumbs=array(
	'Գրանցվել որպես հաճախորդ',
);
?>
<h1>Գրանցվեք մեր համակարգում գեղեցկության սրահներում հերթագրվելու համար։</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-index-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note"><span class="required">*</span> -ով նշված դաշտերը պարտադիր են։</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname'); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<div class="compactRadioGroup">
		<?php echo $form->radioButtonList($model,'gender',array('Male'=>'Արական', 'Female'=>'Իգական'),array('separator'=>' '));?>
		</div>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>


	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Գրանցվել'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
