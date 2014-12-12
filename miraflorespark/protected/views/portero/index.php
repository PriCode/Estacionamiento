
	<?php echo TbHtml::lead('Simulacion'); ?>

    <?php echo TbHtml::inlineCheckBoxList('inlineCheckbox', '', array(
    'option1' => 'Sin tarjeta' ,
    'option2' => 'Con tarjeta',
    
    )); ?>

    <div class="well" style="max-width: 340px; padding: 8px 0;">
    <?php echo TbHtml::navList(array(
	    array('label' => 'Panel de Control'),
	    array('label' => 'Ingreso', 'url' => '#', 'active' => true),
	    array('label' => 'Salida', 'url' => '#'),    
	    array('label' => 'Configuraciones', 'url' => '#'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    )); ?>
    </div>




    <?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); ?>
    <fieldset>
	    <legend>Registro</legend>
	    <?php echo TbHtml::label('Placa', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => 'ADR-345')); ?>
	    <?php echo TbHtml::label('Tiempo', 'text'); ?>	      		
			    <?php echo TbHtml::radioButtonList('optionsRadios', '', array(
			    'option1' => 'Horas' ,
			    'option2' => 'Libre',			    
			    )); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => 'x Horas')); ?>
	    <?php // echo TbHtml::checkBox('checkMeOut', false, array('label' => 'Check me out')); ?>
	    <?php echo TbHtml::submitButton('Generar Tickect'); ?>	    

	    
	    <?php /*echo TbHtml::checkBoxControlGroup('rememberMe', false, array(
	    'label' => 'Remember me',
	    'controlOptions' => array('after' => TbHtml::submitButton('Sign in')),
	    )); */?>

    </fieldset>

