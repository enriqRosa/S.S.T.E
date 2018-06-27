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
            <!--SE LLAMA LA FUNCIÓN 'proceso_login' DEL CONTROLADOR 'Login'-->
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
                        required="required">
                    <label class="mdl-textfield__label fs20 ls2" for="tb-mail">Usuario</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input
                        class="mdl-textfield__input"
                        type="password"
                        name="pass"
                        id="tb-password-1"
                        required="required">
                    <label class="mdl-textfield__label fs20 ls2" for="tb-password-1">Contraseña</label>
                </div>
            </div>
            <input
                type="submit"
                value="LOGIN"
                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"></input>
            <?php if(isset($error)){
							echo $error;
							} 
							
					?>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
</html>