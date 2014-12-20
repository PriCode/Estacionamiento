<?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin'),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/tarifa','active' => true),
	    array('label' => 'Lotes', 'url' => '?r=parking/admin'),	    
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>


<h3>Tarifas</h3>
<?php echo $msg;?>
<div class='form'>
    <?php
    $form=$this->beginWidget('CActiveForm',array(
        'method' => 'post',
        'action' => Yii::app()->createUrl('administrador/tarifa'),
        'enableClientValidation' => true,
        'enableAjaxValidation'=>true,
        'clientOptions'=> array(
            'validaOnSubmit'=>true,
        )
    ));
    ?>
    <div class='row'>
        <?php
        echo $form->labelEx($model,'por_minuto');
        echo $form->textField($model,'por_minuto');
        echo $form->error($model,'por_minuto',array('class'=>'text-error'));
        ?>
    </div>

    <div class='row'>
        <?php
        echo $form->labelEx($model,'por_mes');
        echo $form->textField($model,'por_mes');
        echo $form->error($model,'por_mes',array('class'=>'text-error'));
        //echo $form->dropDownList($model,'por_mes',array('1'=>'cliente1','2'=>'cliente2'));
        ?>
    </div>
    <div class='row'>
        <?php
        echo $form->labelEx($model,'tipo_cliente');
        echo $form->textField($model,'tipo_cliente');
        echo $form->error($model,'tipo_cliente',array('class'=>'text-error'));
        //echo $form->dropDownList($model,'tipo_cliente',array('1'=>'tarifa1','2'=>'tarifa2'));
        ?>
    </div>

    <div class='row'>
        <?php
        echo CHtml::submitButton('Registrar tarifa',array('class' => 'btn btn-primary'));
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div>

