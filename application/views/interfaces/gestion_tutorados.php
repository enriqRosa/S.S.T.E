<main class="gestion_tutorados">
    <section class="admin">
        <div class="user-circle-admin">
            <i class="fas fa-user mdl-color-text--white"></i>
        </div>
        <div class="usuario mdl-color--grey-800">
            <span class="text-dir fs40 ls2 tajawalR mdl-color-text--white"></i>Gestión de Tutorados</i></span><br>
        </div>
    </section> 
</main>
<div class="modals_2">
    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--red-600 btn-pass">
    <i class="fas fa-user-plus"></i>Registrar nuevo Tutorado</button>
</div>
<div class="table">
    <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Matricula</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Paterno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Materno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Carrera</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Grupo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Semestre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Correo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Telefono</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Status</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--grey-700 btn-status">
                        <i class="fas fa-user"></i>Editar</button></td>
                </tr>
            </thead>
    </table>
</div>
<?php include_once 'footer.php' ?>
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
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Paterno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Materno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-briefcase"></i></div>
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
                    <div class="form-icons"><i class="fas fa-book"></i></div>
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
                            <span class="mdl-radio__label tajawalR ls2">Activo</span>
                        </label>
                    </div>
                    <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                            <span class="mdl-radio__label tajawalR ls2">Inactivo</span>
                        </label>
                    </div>
                </div>
            </form>
            <div class="modals">
                <button class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Cancelar</button>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div>           
    </div>  
</div>
<!--MODAL PARA EDITAR EL STATUS DE ALUMNO-->
<div class="editar-status fancy ">
    <div class="modal-info-4">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Editar Status</span>
            <form>
                <div class="c-inputs-4">
                    <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                            <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="1">
                            <span class="mdl-radio__label tajawalR ls2">Activo</span>
                        </label>
                    </div>
                    <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
                            <input type="radio" id="option-4" class="mdl-radio__button" name="options" value="2">
                            <span class="mdl-radio__label tajawalR ls2">Inactivo</span>
                        </label>
                    </div>
                </div>
            </form>
            <div class="modals">
                <button class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Cancelar</button>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div>            
    </div>  
</div>

