<?php include 'header.php' ?>

<nav class="menu-right">
    <ul class="home">
        <li class="tajawalB material-icons"><a href="interfaz_admin.php" class="mdl-color-text--blue-grey-200">Home<i class="fas fa-home"></i></a></li>
    </ul>
    <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200">Menú<i class="fas fa-bars"></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
        <a href="gestion_tutores.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Tutores</li></a>
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Coordinadores</li></a>
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Asignacion Tutores/Tutorados</li></a>
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Verificación de Seguimiento</li></a>
        <a href="index.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>
</nav>
<main class="informacion2">
    <div class="usuario">
        <span class="text-dir fs25 ls2 tajawalR">Registro de Tutores</i></span>
    </div>
    <hr>
</main>

<?php include 'footer.php' ?>
