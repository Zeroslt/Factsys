<?php $this->load->view("partial/header"); ?>
<nav class="navbar navbar-inverse navbar-embossed" role="navigation">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
	  </button>
	</div>
	<div class="collapse navbar-collapse" id="navbar-collapse-01">
	  <ul class="nav navbar-nav navbar-left">           
	    <li><a href="<?php echo base_url()?>index.php/home">Regresar al menú principal<span class="navbar-unread">1</span></a></li>
	    </ul>
	</div>
</nav>
<div id="page_title" style="margin-bottom:8px;"><?php echo $this->lang->line('reports_report_input'); ?></div>
<?php
if(isset($error))
{
	echo "<div class='error_message'>".$error."</div>";
}
?>
	<div>
		Export to Excel: <input type="radio" name="export_excel" id="export_excel_yes" value='1' /> Yes
		<input type="radio" name="export_excel" id="export_excel_no" value='0' checked='checked' /> No
	</div>

<?php
echo form_button(array(
	'name'=>'generate_report',
	'id'=>'generate_report',
	'content'=>$this->lang->line('common_submit'),
	'class'=>'submit_button')
);
?>

<?php $this->load->view("partial/footer"); ?>

<script type="text/javascript" language="javascript">
$(document).ready(function()
{
	$("#generate_report").click(function()
	{
		var export_excel = 0;
		if ($("#export_excel_yes").attr('checked'))
		{
			export_excel = 1;
		}
		
		window.location = window.location+'/' + export_excel;
	});	
});
</script>
