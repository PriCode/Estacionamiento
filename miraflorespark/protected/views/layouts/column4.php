<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
			<div class="span-6 ">
				<div id="sidebar">
						<div class="well" style="max-width: 340px; padding: 8px 0;">
					    <?php  echo TbHtml::navList(
    										$this->menu
    						    ); 
					     ?>
					    </div>
				</div><!-- sidebar -->
			</div>


<div class="span-16">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>


<div class="span-4 last">
	<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));

				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu2,
					'htmlOptions'=>array('class'=>'operations'),
				));			
			$this->endWidget();
		?>
	</div><!-- sidebar -->
</div>

<?php $this->endContent(); ?>