<?php include 'header.php' ?>

<nav class="menu-right">
    <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200">Menú<i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
        for="demo-menu-lower-right">
        <li class="mdl-menu__item mdl-menu__outline tajawalB">Gestion de Tutores<a href=""></a></li>
        <li class="mdl-menu__item mdl-menu__outline tajawalB">Gestion de Tutorados<a href=""></a></li>
        <li class="mdl-menu__item mdl-menu__outline tajawalB">Gestion de Coordinadores<a href=""></a></li>
        <li class="mdl-menu__item mdl-menu__outline tajawalB">Asignación Tuores/Tutorados<a href=""></a></li>
        <li class="mdl-menu__item mdl-menu__outline tajawalB">Verificación de Seguimiento<a href=""></a></li>
        <li class="mdl-menu__item mdl-menu__outline tajawalB">Cerrar Sesión <a href="index.php"></a></li>
    </ul>
</nav>
<main class="informacion">
    <div class="user-circle">
        <i class="fas fa-user"></i>
    </div>
    <div class="usuario">
        <span class="text-dir fs25 ls2 tajawalR">Bienvenido</span>
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
            <button class="mdl-button mdl-js-button mdl-color--blue-grey-600 mdl-js-ripple-effect mdl-color-text--blue-grey-100">
            <i class="fas fa-key"></i>Cambiar Contraseña</button>
        </div>
</main>


<?php include 'footer.php' ?>