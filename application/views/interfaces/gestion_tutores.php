<section class="gestion_tutor">
    <div class="usuario">
        <span class="text-dir fs40 ls2 tajawalR white">Registro de Tutores</span>
    </div>
</section>
<section class="informacion2">
    <div class="modals_2">
        <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-pass">
        <i class="fas fa-user"></i>Registrar nuevo Tutor</button>
    </div>
</section>
<section class="table">
    <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
        <thead>
            <tr>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Matricula</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Paterno</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Materno</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Correo</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Telefono</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Status</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-editar">
                    <i class="fas fa-user"></i>Editar</button></td>
            </tr>
        </thead>
    </table>
</section>
<!--MODAL PARA REGISTRAR NUEVO TUTOR-->
<div class="pass-modal fancy ">
    <div class="modal-info-2">
        <span class="fs25 tajawalL ls1">Registrar nuevo tutor</span>
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
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Paterno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Materno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-envelope"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label tajawalL" required="text">Correo</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-mobile-alt"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label tajawalL" required="text">Telefono</label>
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
<!--MODAL PARA EDITAR EL TUTOR-->
<div class="editar-modal fancy ">
    <div class="modal-info-2">
        <span class="fs25 tajawalL ls1">Editar tutor</span>
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
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Paterno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Materno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-envelope"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label tajawalL" required="text">Correo</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-mobile-alt"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label tajawalL" required="text">Telefono</label>
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

