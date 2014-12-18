
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


<h3>Contratos</h3>
<?php echo $msg;?>
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
		echo $form->labelEx($model,'fecha');
		//echo $form->textField($model,'fecha');
		
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model'=>$model,
                        'attribute'=>'fecha',
                        'value'=>$model->fecha,
                        'language' => 'es',
                        'htmlOptions' => array('readonly'=>"readonly"),
                        'options'=>array(
                        'autoSize'=>true,
                        'defaultDate'=>$model->fecha,
                        'dateFormat'=>'yy/mm/dd',
                        'buttonImage'=>Yii::app()->baseUrl.'/calendario.jpg',
                        'buttonImageOnly'=>true,
                        'buttonText'=>'Fecha',
                        'selectOtherMonths'=>true,
                        'showAnim'=>'slide',
                        'showButtonPanel'=>true,
                        'showOn'=>'button', 
                        'showOtherMonths'=>true, 
                        'changeMonth' => 'true', 
                        'changeYear' => 'true', 
                        'minDate'=>'date("Y-m-d")', 
                        'maxDate'=> "+20Y",
                        ),
                        )); 
                 

		echo $form->error($model,'fecha',array('class'=>'text-error'));
		?>
	</div>
	<div class='row'>
		<?php
		echo $form->labelEx($model,'cantidad_meses');
		echo $form->textField($model,'cantidad_meses');
		echo $form->error($model,'cantidad_meses',array('class'=>'text-error'));
		?>
	</div>
	
	<div class='row'>
		<?php
		echo $form->labelEx($model,'id_cliente');
		//echo $form->textField($model,'id_cliente');
		echo $form->error($model,'id_cliente',array('class'=>'text-error'));
		echo $form->dropDownList($model,'id_cliente',array('1'=>'cliente1','2'=>'cliente2'));
		?>
	</div>
	<div class='row'>
		<?php
		echo $form->labelEx($model,'id_tarifa');
		//echo $form->textField($model,'id_tarifa');
		echo $form->error($model,'id_tarifa',array('class'=>'text-error'));
		echo $form->dropDownList($model,'id_tarifa',array('1'=>'tarifa1','2'=>'tarifa2'));
		?>
	</div>
	<div class='row'>
		<?php
		echo $form->labelEx($model,'id_tarjeta');
		//echo $form->textField($model,'id_tarjeta');
		echo $form->error($model,'id_tarjeta',array('class'=>'text-error'));
		echo $form->dropDownList($model,'id_tarjeta',array('1'=>'tarjeta1','2'=>'tarjeta2'));
		?>
	</div>
	<div class='row'>
		<?php
		echo CHtml::submitButton('Registrar contrato',array('class' => 'btn btn-primary'));
		?>
	</div>
	<?php $this->endWidget(); ?>
	</div>






