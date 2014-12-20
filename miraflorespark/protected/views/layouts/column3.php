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

<div class="span-14 last">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>

<?php $this->endContent(); ?>