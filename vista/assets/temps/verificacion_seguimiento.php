<?php include 'header.php' ?>

<nav class="menu-right">
    <ul class="home">
        <li class="tajawalB material-icons"><a href="interfaz_tutor.php" class="mdl-color-text--blue-grey-200">Home<i class="fas fa-home"></i></a></li>
    </ul>
    <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200">Menú<i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-file-alt"></i>Registro</li></a>
        <a href="verificacion_seguimiento.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Verificación de Seguimiento</li></a>
        <a href="index.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>
</nav>
<main class="informacion3_2">
    <div class="user-circle-tutor">
        <i class="fas fa-file-alt"></i>
    </div>
    <div class="usuario">
        <span class="text-dir fs25 ls2 tajawalR">Verificación de Seguimiento</span>
    </div>
    <hr class="line2">
    <div class="table">
        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Matricula</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Paterno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Materno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Semestre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Grupo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Agregar</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Seguimiento</td>
                </tr>
            </thead>
    </table>
</main>

<?php include 'footer.php' ?>