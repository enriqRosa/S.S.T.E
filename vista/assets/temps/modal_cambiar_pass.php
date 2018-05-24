<?php

class vista_password{
function funcion_vista_password($datos){
    $cad='
    <dialog class="mdl-dialog mdl-color--white">
                <span class="mdl-dialog__title fs25 tajawalL ls1">Modificar Contraseña</span>
                <div class="user-circle-pass">
                    <i class="fas fa-unlock-alt"></i>
                </div>
                <div class="mdl-dialog__content">
                    <div class="c-inputs-2">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="password">
                                <label class="mdl-textfield__label tajawalL" required="required">Ingresa tu contraseña actual</label>
                        </div>
                    </div>
                    <div class="c-inputs-2">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="password">
                                <label class="mdl-textfield__label tajawalL" required="required">Ingresa nueva contraseña</label>
                        </div>
                    </div>
                    <div class="c-inputs-2">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="password">
                                <label class="mdl-textfield__label tajawalL" required="required">Confirmar contraseña</label>
                        </div>
                    </div>
                    
                </div>
                <div class="mdl-dialog__actions">
                    <button type="button" class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">
                        <i class="fas fa-check"></i>Aceptar</button>
                    <button type="button" class="mdl-button mdl-color--red-A400  mdl-js-ripple-effect mdl-color-text--blue-grey-100 close">
                        <i class="fas fa-times"></i>Cancelar</button>
                </div>
            </dialog>




        ';
	return $cad;
}
}
?>