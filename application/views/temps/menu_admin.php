<nav class="menu-right">
    <ul class="home">
        <li class="jawalb material-icons"><a href="<?= base_url() ?>Admin/index"><i class="fas fa-home  mdl-color-text--blue-grey-200"></i></a></li>
    </ul>
    <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200"><i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
        <!--SE AGREGA EL CONTROLADOR(admin) MAS LA FUNCION DEL MENU-->
        <a href="<?= base_url() ?>Admin/gestionTutores"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Tutores</li></a>
        <a href="<?= base_url() ?>Admin/gestionTutorados"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Tutorados</li></a>
        <a href="<?= base_url() ?>Admin/gestionCoordinadores"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Coordinadores</li></a>
        <a href="<?= base_url() ?>Admin/tutoresTutorados"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Asignacion Tutores/Tutorados</li></a>
        <a href="<?= base_url() ?>Admin/verificacionSeguimiento"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Verificación de Seguimiento</li></a>
        <a href="<?= base_url() ?>Login/logout"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>
</nav>
