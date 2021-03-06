<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>
    <?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin', 'active' => true),

	    array('label' => 'Tarifa', 'url' => '?r=administrador/tarifa'),	   
	    array('label' => 'Lotes', 'url' => '?r=parking/admin'),

	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php// echo $form->labelEx($model,'id_cliente'); ?>
		<?php// echo $form->textField($model,'id_cliente'); ?>
		<?php //echo $form->error($model,'id_cliente'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ape_materno'); ?>
		<?php echo $form->textField($model,'ape_materno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ape_materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ape_paterno'); ?>
		<?php echo $form->textField($model,'ape_paterno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ape_paterno'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'tipo_persona'); ?>
		<?php echo $form->dropDownList($model,'tipo_persona', $model->getTypePerson()); ?>
		<?php echo $form->error($model,'tipo_persona'); ?>


	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->