<?php $this->load->view("partial/header"); ?>
<br />
<h3>Sistema de inventario - Raul Mesa</h3>

<div id="menubar_footer">
<?php echo $this->lang->line('common_welcome')." $user_info->first_name $user_info->last_name  || "; ?>
<?php echo anchor("home/logout",$this->lang->line("common_logout")); ?>

</div>

<div id="menubar_date">
<?php echo date('F d, Y h:i a') ?>
</div>

<div class="row demo-tiles">
	<?php
	foreach($allowed_modules->result() as $module)
	{
	?>
        <div class="col-xs-3">
          <div class="tile">
	            <a href="<?php echo site_url("$module->module_id");?>">
				<img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Menubar Image" /></a><br />
				<a href="<?php echo site_url("$module->module_id");?>"><?php echo $this->lang->line("module_".$module->module_id) ?></a>
	        </div>
        </div>
	<?php
	}
	?>
</div>
<?php $this->load->view("partial/footer"); ?>