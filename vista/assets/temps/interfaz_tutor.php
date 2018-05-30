<?php include '../../header.php'?>
<link rel="stylesheet" href="../../style.css">
<script src="../js/modals.js"></script>

<nav class="menu-right">
    <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200"><i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-file-alt"></i>Registro</li></a>
        <a href="verificacion_seguimiento.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Verificación de Seguimiento</li></a>
        <a href="index.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>
</nav>
<section class="tutor_principal">
    <div class="tutor">
        <div class="user-circle-tutor">
            <i class="fas fa-users"></i>
        </div>
        <div class="usuario-tutor">
            <span class="text-dir fs40 ls2 tajawalR white"></i>Bienvenido (a)</i></span><br>
        </div>
        <div class="usuario-tutor">
            <span class="text-dir fs40 ls2 tajawalR white"><i class="fas fa-quote-left white"></i>Tutor (a)<i class="fas fa-quote-right white"></i></span>
        </div>    
    </div>
</section>
<section class="tutor-info">
    <div class="grupo">
        <div class="info-1_1">
            <i class="fas fa-id-card"></i>          
        </div>
    </div>
        <div class="c-inputs-2">
            <div class="mdl-textfield mdl-js-textfield">
                <input class="mdl-textfield__input" type="text" id="sample1" disabled>
            </div>
        </div>
        <div class="grupo">
            <div class="info-1">
                <span class="fs15 ls2 tajawalR">Apellido Paterno:</span>          
            </div>
            <div class="info-1">
                <span class="fs15 ls2 tajawalR">Apellido Materno:</span>          
            </div>
            <div class="info-1">
                <span class="fs15 ls2 tajawalR">Nombre(s):</span>          
            </div>
            <div class="info-1">
                <span class="fs15 ls2 tajawalR">Correo:</span>          
            </div>
        </div>
        <div class="c-inputs-2">
            <div class="mdl-textfield mdl-js-textfield ">
                <input class="mdl-textfield__input" type="text"disabled >
            </div>
            <div class="mdl-textfield mdl-js-textfield">
                <input class="mdl-textfield__input" type="text" disabled >
            </div>
            <div class="mdl-textfield mdl-js-textfield">
                <input class="mdl-textfield__input" type="text" disabled >
            </div>
            <div class="mdl-textfield mdl-js-textfield ">
                <input class="mdl-textfield__input" type="text"disabled >
            </div>
        </div>   
</section>   
<section class="tutor-modalBtn">
<div class="item">
        <div class="modals">
            <button class="mdl-button mdl-js-button mdl-color--indigo-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-pass">
            <i class="fas fa-key"></i>Cambiar Contraseña</button>
        </div>
</div>
</section>
<?php include_once 'modal_contraseña.php'?>

