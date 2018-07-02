
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
			<!--SE LLAMA LA FUNCIÓN 'proceso_login' DEL CONTROLADOR 'Login'-->		
				<?php echo form_open("Login/proceso_login",'class="main-form"'); ?>
				<?php echo validation_errors('<div class="error-login tajawalR ls1">', '</div>'); ?>
				<div class="error-login ls1 tajawalR "><?php echo $this->session->flashdata('error'); ?></div> 
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
							>
							<label class="mdl-textfield__label fs20 ls2" for="tb-mail">Usuario</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input
								class="mdl-textfield__input"
								type="password"
								name="pass"
								id="tb-password-1"
								>
							<label class="mdl-textfield__label fs20 ls2" for="tb-password-1">Contraseña</label>
						 </div>
					</div>        
						<input type="submit" value="LOGIN" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"></input>
			   <?php echo form_close(); ?>                              
			</div>
		</div>
		</body>
</html>
