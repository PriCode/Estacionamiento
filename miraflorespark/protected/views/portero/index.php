    <?php 

    $this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Create',
);

$this->menu2=array(
	array('label'=>'List Vehiculo', 'url'=>array('index')),
	array('label'=>'Manage Vehiculo', 'url'=>array('admin')),
);

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

    <?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_VERTICAL,'index.php?r=portero/Registro','POST',array('id'=>'formulario'))?>


    <fieldset>
	    <legend>Registro</legend>
	    <?php echo TbHtml::label('Placa', 'text'); ?>
	    <?php echo TbHtml::textField('txtplaca', '', array('placeholder' => 'ADR-345')); ?>
		<?php echo TbHtml::label('Color', 'text'); ?>
	    <?php echo TbHtml::textField('txtcolor', '', array('placeholder' => 'ADR-345')); ?>
		<?php echo TbHtml::label('Modelo', 'text'); ?>
	    <?php echo TbHtml::textField('txtmodelo', '', array('placeholder' => 'ADR-345')); ?>    
	    <?php echo TbHtml::submitButton('Generar Ticket',array('value'=>'formulario','class' => 'btn btn-primary')); ?>

    </fieldset>

	<?php echo TbHtml::endForm(); 
		if (isset($msgFrontal)) {
		echo $msgFrontal;
			}
	?>

	

	<?php if (isset($model)) {?>
		 <legend>Registro</legend>
		 <?php echo TbHtml::label('Nro de Lote:', 'text'); ?>
	     <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	     <?php echo TbHtml::label('Ruta:', 'text'); ?>
	     <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	     <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	     <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	     <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
			
	<?php } ?>

