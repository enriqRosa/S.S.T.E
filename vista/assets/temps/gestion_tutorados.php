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
<main class="informacion2_2">
    <div class="user-circle-admin">
        <i class="fas fa-user-plus"></i>
    </div>
    <div class="usuario">
        <span class="text-dir fs25 ls2 tajawalR">Asignación de Tutor</span>
    </div>
    <hr class="line2">
    <div class="modals">
            <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-pass">
            <i class="fas fa-user"></i>Registrar Alumno</button>
    </div>
    <div class="table">
        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Matricula</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Paterno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Materno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Carrera</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Grupo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Semestre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Correo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Telefono</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Status</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">
                        <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-pass">
                        <i class="fas fa-user"></i>Editar</button></td>
                </tr>
            </thead>
    </table>
</main>
<!--MODAL PARA AGREGAR NUEVO ALUMNO-->
<div class="pass-modal fancy ">
    <div class="modal-info-3">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Registrar nuevo Alumno</span>
            <form>
                <div class="c-inputs-4" >
                    <div class="form-icons"><i class="fas fa-id-card"></i></div>
                    <div class="mdl-textfield mdl-js-textfield ">
                        <input class="mdl-textfield__input" type="text">
                        <label class="mdl-textfield__label tajawalL" required="required">Matricula</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield ">
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label tajawalL" required="required">Nombre</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Paterno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Materno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password">
                            <label class="mdl-textfield__label tajawalL" required="text">Carrera</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-users"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password">
                            <label class="mdl-textfield__label tajawalL" required="text">Grupo</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password">
                            <label class="mdl-textfield__label tajawalL" required="text">Semestre</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-key"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password">
                            <label class="mdl-textfield__label tajawalL" required="password">Contraseña</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-key"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password">
                            <label class="mdl-textfield__label tajawalL" required="text">Confirmar contraseña</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <span class="fs19 ls2 tajawalR">Status</span>
                    <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                            <span class="mdl-radio__label">Activo</span>
                        </label>
                    </div>
                    <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                            <span class="mdl-radio__label">Inactivo</span>
                        </label>
                    </div>
                </div>
                <div class="modals">
                    <button class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Cancelar</button>
                    <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
                </div>
            </form>
    </div>  
</div>
<!--MODAL PARA EDITAR EL STATUS DE ALUMNO-->
<div class="pass-modal fancy ">
    <div class="modal-info-3">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Editar Status</span>
            <form>
                <div class="c-inputs-4">
                    <span class="fs19 ls2 tajawalR">Status</span>
                    <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                            <span class="mdl-radio__label">Activo</span>
                        </label>
                    </div>
                    <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                            <span class="mdl-radio__label">Inactivo</span>
                        </label>
                    </div>
                </div>
                <div class="modals">
                    <button class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Cancelar</button>
                    <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
                </div>
            </form>
    </div>  
</div>

