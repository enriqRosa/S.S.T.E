<?php include 'header.php' ?>

<nav class="menu-right">
    <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200">Menú<i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
        <li class="mdl-menu__item mdl-menu__outline  tajawalB"><i class="fas fa-user-plus mdl-color-text--teal-800 "></i><a href="">Gestión de Tutores</a></li>
        <li class="mdl-menu__item mdl-menu__outline  tajawalB"><i class="fas fa-user-plus mdl-color-text--teal-800 "></i><a href="">Gestión de Tutorados</a></li>
        <li class="mdl-menu__item mdl-menu__outline  tajawalB"><i class="fas fa-user-plus mdl-color-text--teal-800 "></i><a href="">Gestión de Coordinadores</a></li>
        <li class="mdl-menu__item mdl-menu__outline  tajawalB"><a href="">Asignación Tuores/Tutorados</a></li>
        <li class="mdl-menu__item mdl-menu__outline  tajawalB"><i class="fas fa-eye mdl-color-text--teal-800 "></i><a href="">Verificación de Seguimiento</a></li>
        <li class="mdl-menu__item mdl-menu__outline  tajawalB"><i class="fas fa-sign-out-alt mdl-color-text--teal-800 "></i><a href="index.php">Cerrar Sesión</a></li>
    </ul>
</nav>
<main class="informacion2">
    <div class="user-circle-admin">
    <i class="fas fa-user-circle"></i>
    </div>
    <div class="usuario">
        <span class="text-dir fs25 ls2 tajawalR"><i class="fas fa-quote-left"></i>Bienvenido<i class="fas fa-quote-right"></i></span>
    </div>
    <hr>
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
        </div>
        
        <hr class="line2">
        <div class="modals">
            <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">
            <i class="fas fa-key"></i>Cambiar Contraseña</button>
        </div>
</main>


<?php include 'footer.php' ?>