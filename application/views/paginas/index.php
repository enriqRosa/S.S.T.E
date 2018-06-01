<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bgr.css">
        <link rel="stylesheet" href="assets/libs/mdl/material.css">
        <link rel="stylesheet" href="assets/libs/fontawesome/css/fa-solid.css">
        <link rel="stylesheet" href="assets/libs/fontawesome/css/fontawesome.css"> 
        <script type="text/javascript" src="assets/libs/jQuery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/login.js"></script>
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
                <form class="main-form" id="formlogin">
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
                                name="password"
                                id="tb-password-1"
                                required="required">
                            <label class="mdl-textfield__label fs20 ls2" for="tb-password-1">Contraseña</label>
                            
                         </div>
                    </div>
                
                        <button
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="login()">Login</button>
                            </form>
                    <div id="mensaje"></div>

            </div>
        </div>
        <footer>
            <div class="info-right">
                <div class="c-correo">
                    <ol class="tajawalL fs14 grey ls1 footer-mail">
                        <span class="text-tel fs16 tajawalB">
                            <i class="fa fa-envelope"></i>Contacto Digital</span>
                        <li>
                            <a href="mailto:teschalco@hotmail.com">teschalco@hotmail.com</a>
                        </li>
                        <li>
                            <a href="mailto:depto.controlescolar@tesch.edu.mx">depto.controlescolar@tesch.edu.mx</a>
                        </li>
                    </ol>
                    <ol class="tajawalL fs14 grey ls1 footer-tel">
                        <span class="text-tel fs16 tajawalB">
                            <i class="fa fa-phone"></i>
                            Telefonos:</span>
                        <li>
                            <a href="tel:59823503">59823503</a>
                        </li>
                        <li>
                            <a href="tel:59820848">59820848</a>
                        </li>
                        <li>
                            <a href="tel:59821907">59821907</a>
                        </li>
                    </ol>
                </div>
                <div class="c-logos">
                    <img src="assets/images/sep-logo.png" alt="">
                    <img src="assets/images/edomex-logo.png" alt="">
                    <img src="assets/images/tesch_logo.png" alt="">
                </div>
                <div class="c-direccion">
                    <span class="text-dir fs16 ls1 grey tajawalB">
                        <i class="fa fa-map-marker"></i>Dirección:</span>
                    <span class="tajawalL fs14 grey ls1">Carretera Federal México Cuautla s/n,</span>
                    <span class="tajawalL fs14 grey ls1">La Candelaria Tlapala Chalco de Díaz Covarrubias,</span>
                    <span class="tajawalL fs14 grey ls1">Estado de Méx.</span>
                </div>
            </div>
            
        </footer>
    </body>
    
</html>