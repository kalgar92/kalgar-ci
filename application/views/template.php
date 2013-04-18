<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Default Title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Author" content="Baptiste Wallerich" />
	
	<!-- Styles : Bootstrap !-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>data/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>data/css/master.css" />
	
	<!-- Scripts : Bootstrap, jQuery !-->
	<script src="<?php echo base_url(); ?>data/js/bootstrap.js" type="application/javascript"></script>
	<script src="<?php echo base_url(); ?>data/js/jquery.js" type="application/javascript"></script>
	
</head>
	
	<body>
		<div id="wrapper">
			<div class="container">
				<?php if($partial) echo $this->load->view('partials/'.$partial.'.php'); ?>
			</div>
		</div>			
	</body>
</html>