<?php
/* @var $this ParkingController */
/* @var $model Parking */
/* @var $form CActiveForm */
?>
<?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin'),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/tarifa'),	   
	    array('label' => 'Lotes', 'url' => '?r=parking/admin', 'active' => true),
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
  ?>
  
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_parking'); ?>
		<?php echo $form->textField($model,'id_parking'); ?>
		<?php echo $form->error($model,'id_parking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model,'estado', $model->getStateParking()); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sensor'); ?>
		<?php echo $form->textField($model,'sensor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sensor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->