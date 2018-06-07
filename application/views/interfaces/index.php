
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/bgr.css">
		<link rel="stylesheet" href="assets/libs/mdl/material.css">
		<link rel="stylesheet" href="assets/libs/fontawesome/css/fa-solid.css">
		<link rel="stylesheet" href="assets/libs/fontawesome/css/fontawesome.css"> 
		<script src="assets/libs/mdl/material.js"></script>  
        <script src="assets/libs/getmdl/getmdl-select.js"></script>  
        <script src="assets/libs/jQuery/jQuery-3-3-1.min.js"></script>  
        <script src="assets/js/modals.js"></script>    
        	
	</head> 
	<body id="page">

		<ul class="cb-slideshow">
			<li>
				<span>Image 01</span></li>
			<li>
				<span>Image 02</span></li>
			<li>
				<span>Image 03</span></li>
			<li>
				<span>Image 04</span></li>
			<li>
				<span>Image 05</span></li>
			<li>
				<span>Image 06</span></li>
		</ul>
		<div id="main-section">
			<div class="c-formulario">
            <?php $this->load->helper('form'); ?>
			<!--SE LLAMA LA FUNCIÓN 'proceso_login' DEL CONTROLADOR 'Paginas'-->
			<?php echo form_open("login/proceso_login",'class="main-form"'); ?>
				<!--<form class="main-form">-->
					<div class="c-login-title">
						<span class="fa fa-user-circle"></span>
					</div>
					<div class="c-inputs">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input
								class="mdl-textfield__input"
								type="text"
								name="matricula"
								id="tb-user"
								required>
							<label class="mdl-textfield__label fs20 ls2" for="tb-mail">Usuario</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input
								class="mdl-textfield__input"
								type="password"
								name="password"
								id="tb-password-1"
								required>
							<label class="mdl-textfield__label fs20 ls2" for="tb-password-1">Contraseña</label>
						 </div>
					</div>                
						<input type="submit" value="LOGIN" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"></input>
					<?php if(isset($error)){
							echo $error;
							} 
							
					?>
			   <?php echo form_close(); ?>                              
			</div>
		</div>
		</body>
</html>
