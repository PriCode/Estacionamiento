    <?php 
    		$this->menu = array(						    
						        array('label' => 'Panel de Control'),
							    array('label' => 'Ingreso', 'url' => '?r=portero/index', 'active' => true),
							    array('label' => 'Salida', 'url' => '?r=portero/salida'),    
							    array('label' => 'Configuraciones', 'url' => '#'),
							    TbHtml::menuDivider(),
							    array('label' => 'Ayuda', 'url' => '#'),
						    );    	 
	 ?>
   

	<?php echo TbHtml::lead('Simulacion'); ?>
    <?php echo TbHtml::inlineRadioButtonList('optionsRadios', '', array(
    'option1' => 'Sin tarjeta' ,
    'option2' => 'Con tarjeta',    
    )); ?>
	<legend></legend>




<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ingreso-form',
	'method' => 'post',
    'action' => Yii::app()->createUrl('portero/ingreso'),
    'enableClientValidation' => false,
    'enableAjaxValidation'=>false,
    'clientOptions'=> array(
    'validaOnSubmit'=>true,
))); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>


	<?php if (!isset($model)) {?>
		 <legend>Registro</legend>
		 <?php echo TbHtml::label('Nro de Lote:', 'text'); ?>
	     <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	     <?php echo TbHtml::label('Ruta:', 'text'); ?>
	     <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	     <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	     <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	     <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
			
	<?php } ?>




