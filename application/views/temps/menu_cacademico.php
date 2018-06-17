<nav class="menu-right">
    <ul class="home">
        <li class="jawalb material-icons"><a href="<?= base_url() ?>C_academico/index"><i class="fas fa-home  mdl-color-text--blue-grey-200"></i></a></li>
    </ul>
    <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200"><i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
        <a href="<?= base_url() ?>C_academico/tutoresTutorados"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-file-alt"></i>Asignación Tutor/Tutorado</li></a>
        <a href="<?= base_url() ?>C_academico/verificacionSeguimiento"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Seguimiento de Tutorias</li></a>
        <a href="<?= base_url() ?>C_academico/logout"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>     
</nav>