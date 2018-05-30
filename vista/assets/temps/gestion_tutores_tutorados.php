<?php include '../../header.php' ?>
<link rel="stylesheet" href="../../style.css">
<script src="../js/modals.js"></script>

<nav class="menu-right">
    <ul class="home">
        <li class="tajawalB material-icons"><a href="interfaz_admin.php" class="mdl-color-text--blue-grey-200"><i class="fas fa-home"></i></a></li>
    </ul>
    <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200"><i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
        <a href="gestion_tutores.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Tutores</li></a>
        <a href="gestion_tutorados.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Tutorados</li></a>
        <a href="gestion_coordinadores.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Coordinadores</li></a>
        <a href="gestion_tutores_tutorados.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Asignacion Tutores/Tutorados</li></a>
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Verificación de Seguimiento</li></a>
        <a href="index.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>
</nav>
<main class="informacion5_2">
    <div class="c-user-icon">
        <i class="fas fa-users"></i>
        <i class="fas fa-arrows-alt-h"></i>
        <i class="fas fa-user width-icon"></i>
    </div>
    <div class="usuario">
        <span class="text-dir fs25 ls2 tajawalR">Asignación de Tutor</span>
    </div>
    <hr class="line2">
    <div class="table">
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Matricula</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Paterno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Materno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Grupo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Semestre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Tutor</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14" onclick="registrar_tutor();">Aceptar</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Cancelar</td>
                </tr>
            </thead>
    </table>
</main>

