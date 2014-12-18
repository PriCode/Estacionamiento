    <?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '#', 'active' => true),
	    array('label' => 'Tarifa', 'url' => '#'),    
	    array('label' => 'Lotes', 'url' => '#'),
	    array('label' => 'Reporte', 'url' => '#'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>

<h3>Contratos</h3>

<div class='form'>
	<?php
		$form=$this->beginWidget('CActiveForm',array(
			'method' => 'post',
			'action' => Yii::app()->createUrl('administrador/index'),
			'enableClientValidation' => true,
			'enableAjaxValidation'=>true,
			'clientOptions'=> array(
				'validaOnSubmit'=>true,
			)
		));
	?>
	<div class='row'>
		<?php
		echo $form->labelEx($model,'nombres');
		echo $form->textField($model,'nombres');
		echo $form->error($model,'nombres',array('class'=>'text-error'));
		?>
	</div>
	<div class='row'>
		<?php
		echo $form->labelEx($model,'apellidos');
		echo $form->textField($model,'apellidos');
		echo $form->error($model,'apellidos',array('class'=>'text-error'));
		?>
	</div>
	<div class='row'>
		<?php
		echo $form->labelEx($model,'placa');
		echo $form->textField($model,'placa');
		echo $form->error($model,'placa',array('class'=>'text-error'));
		?>
	</div>
	<div class='row'>
		<?php
		echo $form->labelEx($model,'marca');
		echo $form->textField($model,'marca');
		echo $form->error($model,'marca',array('class'=>'text-error'));
		?>
	</div>
	<div class='row'>
		<?php
		echo $form->labelEx($model,'modelo');
		echo $form->textField($model,'modelo');
		echo $form->error($model,'modelo',array('class'=>'text-error'));
		?>
	</div>
	<div class='row'>
		<?php
		echo CHtml::submitButton('Registrar contrato',array('class' => 'btn btn-primary'));
		?>
	</div>
	<?php $this->endWidget(); ?>
	</div>
	
<legend>Tarifas</legend>

<?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); ?>
    <fieldset>
	    <h2>Tarifa Miembros</h2>
	    
	    <?php echo TbHtml::label('Por Hora', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Por Mes: ', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	    
	    

	    <h2>Tarifa No Miembros</h2>


	    <?php echo TbHtml::label('Por Hora', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>


		
		<?php echo TbHtml::submitButton('Registrar'); ?>	    
	    	    
    </fieldset>

<legend>Lotes</legend>

	<h2>Para Miembros</h2>

	<h2>Para no Miembros</h2>


<legend>Reporte</legend>

	<h2>Mes </h2>
		<?php echo TbHtml::label('Desde:', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Hasta:', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

