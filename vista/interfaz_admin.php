<?php include 'header.php' ?>

<nav class="menu-right">
    <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200">Menú <i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
        <a href="gestion_tutores.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Tutores</li></a>
        <a href="gestion_tutorados.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Tutorados</li></a>
        <a href="gestion_coordinadores.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Coordinadores</li></a>
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Asignacion Tutores/Tutorados</li></a>
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Verificación de Seguimiento</li></a>
        <a href="index.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>
</nav>
<main class="informacion2">
    <div class="user-circle-admin">
        <i class="fas fa-user-circle"></i>
    </div>
    <div class="usuario">
        <span class="text-dir fs25 ls2 tajawalR"><i class="fas fa-quote-left"></i>Bienvenido<i class="fas fa-quote-right"></i></span>
    </div>
    <hr>
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
        <hr class="line2">
        <div class="modals">
            <button id="show-dialog"
                class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100"
                onclick="btn_cambiar_pass()"><i class="fas fa-key"></i>Cambiar Contraseña
            </button>
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
        </div>
        <div id="Principal"></div> 
</main>

<?php include 'footer.php' ?>





