<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Register Liable';
$this->breadcrumbs=array(
	'Register', );
?>

<h1>Register a Liable</h1>

<?php if(Yii::app()->user->hasFlash('register')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('register'); ?>
</div>

<?php else: ?>

<p>
please fill the boxes correctly.
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'register-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'family'); ?>
		<?php echo $form->textField($model,'family'); ?>
		<?php echo $form->error($model,'family'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mosqueName'); ?>
		<?php echo $form->textField($model,'mosqueName'); ?>
		<?php echo $form->error($model,'mosqueName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pasword'); ?>
		<?php echo $form->passwordField($model,'pasword'); ?>
		<?php echo $form->error($model,'pasword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'confirmPassword'); ?>
		<?php echo $form->passwordField($model,'confirmPassword'); ?>
		<?php echo $form->error($model,'confirmPassword'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>7,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>11,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mosqueAddress'); ?>
		<?php echo $form->textArea($model,'mosqueAddress',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'mosqueAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image',array('file' ,'type'=>'jpg, png','maxSize'=>1024*60)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<!--captcha-->
	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
	
	
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>