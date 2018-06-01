<nav class="menu-right">
    <button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200"><i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-file-alt"></i></li></a>
        <a href="verificacion_seguimiento.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Verificación de Seguimiento</li></a>
        <a href="index.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>
</nav>
<section class="academico_principal">
    <div class="academico">
        <div class="user-circle-academico">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR white">Bienvenido (a)</i></span>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR white"><i class="fas fa-quote-left white"></i>Coordinador (a) Acádemico<i class="fas fa-quote-right white"></i></span>
        </div>
    </div>
</section>
<section class="info">
    <div class="grupo">
        <div class="info-1_3">
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
<section class="academico-modalBtn">
    <div class="modals">
        <button class="mdl-button mdl-js-button mdl-color--black mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-pass">
        <i class="fas fa-key"></i>Cambiar Contraseña</button>
    </div>
</section>
<?php include_once 'modal_contraseña.php'?>

