<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

<!-- Loading Bootstrap -->
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

<!-- Loading Flat UI -->
<link href="<?php echo base_url();?>css/flat-ui.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/demo.css" rel="stylesheet">


<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Sistema FactSys - Raul Mesa <?php echo $this->lang->line('login_login'); ?></title>
<script src="<?php echo base_url();?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#login_form input:first").focus();
});
</script>
</head>
<body class="scroll">

<div class="login">
    <div class="login-screen">

    	<h4>Bienvenido al sistema de inventario de <small>Raul Mesa</small></h4>

	    <div class="login-icon">
	        <img src="<?php echo base_url();?>images/biker.png" alt="Bienvenido" />
	    </div>

    <?php echo form_open('login') ?>

	    <div id="container" style="color:red;">
		    <?php echo validation_errors(); ?>
		</div>
		
		<div class="login-form">

	        <div class="form-group">
				<?php echo form_input(array(
							'name'=>'username', 
							'placeholder'=>'Ingrese su usuario',
							'class'=>'form-control login-field',
							'size'=>'40')); ?>
				<label class="login-field-icon fui-user" for="login-name"></label>			
	        </div>

	        <div class="form-group">
	            <?php echo form_password(array(
				'name'=>'password', 
				'placeholder'=>'Ingrese su contraseña',
				'class'=>'form-control login-field',
				'size'=>'40')); ?>	
				<label class="login-field-icon fui-lock" for="login-pass"></label>
			</div>

			<div id="submit_button"  >
				<?php echo form_submit('loginButton','Iniciar', 'class="btn btn-primary btn-lg btn-block"' ); ?>
			</div>
			  
	    </div>
	</div>
</div>
<?php echo form_close(); ?>

</body>
</html>
