
    <?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index', 'active' => true),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin'),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/gtarifas'),    
	    array('label' => 'Lotes', 'url' => '?r=administrador/glotes'),
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>


<legend>Contratos</legend>
<?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); ?>
    <fieldset>
	    <legend>Registro de Suscripcion</legend>

	    <?php echo TbHtml::label('Nro de Contrato', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	    <?php echo TbHtml::label('Nombre: ', 'text'); ?>
	    <?php echo TbHtml::textField('txtnombre', '', array('placeholder' => '....')); ?>
	    <?php echo TbHtml::label('Apellido: ', 'text'); ?>
	    <?php echo TbHtml::textField('txtapellidos', '', array('placeholder' => '....')); ?>
	    <?php echo TbHtml::label('Placa: ', 'text'); ?>
	    <?php echo TbHtml::textField('txtplaca', '', array('placeholder' => '....')); ?>
	    <?php echo TbHtml::label('Marca: ', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	    <?php echo TbHtml::label('Modelo: ', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	    <?php // echo TbHtml::checkBox('checkMeOut', false, array('label' => 'Check me out')); ?>
	    <?php echo TbHtml::submitButton('Registrar'); ?>	    
	    
	    <?php /*echo TbHtml::checkBoxControlGroup('rememberMe', false, array(
	    'label' => 'Remember me',
	    'controlOptions' => array('after' => TbHtml::submitButton('Sign in')),
	    )); */?>
    </fieldset>






