<?php include '../../header.php'?>

<nav class="menu-right">
    <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200"><i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
        for="demo-menu-lower-right">
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Verificación de Seguimiento</li></a>
        <a href="index.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>
</nav>
<main class="informacion">
    <div class="user-circle">
        <i class="fas fa-user"></i>
    </div>
    <div class="usuario">
        <span class="text-dir fs25 ls2 tajawalR">Datos del Alumno</span>
    </div>
    <hr>
    <div class="grupo">
        <div class="info-1">
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
        <div class="grupo">
            <div class="info-1">
                <span class="fs15 ls2 tajawalR">Grupo:</span>          
            </div>
            <div class="info-1">
                <span class="fs15 ls2 tajawalR">Semestre:</span>          
            </div>
            <div class="info-1">
                <span class="fs15 ls2 tajawalR">Turno:</span>          
            </div>
        </div>
        <div class="c-inputs-2">
            <div class="mdl-textfield mdl-js-textfield">
                <input class="mdl-textfield__input" type="text" disabled>
            </div>
            <div class="mdl-textfield mdl-js-textfield ">
                <input class="mdl-textfield__input" type="text"disabled >
            </div>
            <div class="mdl-textfield mdl-js-textfield">
                <input class="mdl-textfield__input" type="text" disabled>
            </div>
        </div>
        <div class="grupo-2">
            <div class="info-1">
                <span class="fs15 ls2 tajawalR">Correo:</span>          
            </div>
            <div class="info-1">
                <span class="fs15 ls2 tajawalR">Telefono:</span>          
            </div>
        </div>
        <div class="c-inputs-3">
            <div class="mdl-textfield mdl-js-textfield ">
                <input class="mdl-textfield__input" type="text" disabled>
            </div>
            <div class="mdl-textfield mdl-js-textfield ">
                <input class="mdl-textfield__input" type="text"disabled >
            </div>
        </div>
        <hr class="line2">
        <div class="modals">
            <button class="mdl-button mdl-js-button mdl-color--blue-grey-800 mdl-js-ripple-effect mdl-color-text--blue-grey-100">
            <i class="fas fa-key"></i>Cambiar Contraseña</button>
            <button class="mdl-button mdl-js-button mdl-color--blue-grey-800 mdl-js-ripple-effect mdl-color-text--blue-grey-100">
            <i class="fas fa-edit"></i>Editar Información</button>
        </div>
</main>



