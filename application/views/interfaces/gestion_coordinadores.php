<main class="gestion_coordinadores">
    <section class="admin">
        <div class="user-circle-admin">
            <i class="fas fa-user mdl-color-text--black"></i>
        </div>
        <div class="usuario mdl-color--grey-800">
            <span class="text-dir fs40 ls2 tajawalR mdl-color-text--white"></i>Gestión de Coordinadores</i></span><br>
        </div>
    </section> 
</main>
<div class="modals_2">
    <button class="mdl-button mdl-js-button mdl-color--orange-500 mdl-js-ripple-effect mdl-color-text--white btn-pass">
    <i class="fas fa-user-plus"></i>Registrar nuevo Coordinador</button>
</div>
<!--MUESTRA EL MENSAJE DE REGISTRO EXITOSO Y REGISTRO MODIFICADO-->
<div class="success fs18 ls1 tajawalM mdl-color-text--green-900"><?php echo $this->session->flashdata('registro'); ?></div> 
<div class="success fs18 ls1 tajawalM mdl-color-text--green-900"><?php echo $this->session->flashdata('editar'); ?></div> 
<!--MUESTRA EL MENSAJE DE ERROR DE LAS VALIDACIONES-->
<?php echo validation_errors('<div class="error tajawalR ls1">', '</div>'); ?>
<div class="table">
        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Matricula</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Paterno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Materno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Correo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Telefono</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Status</td>
                </tr>
            </thead>
            <?php
                foreach ($mostrardatosCoord as $row) {
            ?>
                <tr>
                    <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->correo; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->telefono; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->status; ?></td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 ">
                        <a href="<?= base_url() ?>Admin/editarCoordinador/?matricula=<?php echo $row->matricula; ?>">
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--red-800">
                                <i class="fas fa-edit"></i>Editar
                            </button>
                        </a>
                    </td>
                </tr>
            <?php
                }
            ?>
            
    </table>
</div> 
<!--MODAL PARA AGREGAR A UN NUEVO CORDINADOR
     SE LLAMA LA FUNCIÓN 'nuevoCoordinador' DEL CONTROLADOR 'Admin'-->
<?php echo form_open("Admin/nuevoCoordinador"); ?>
    <div class="pass-modal fancy ">
        <div class="modal-info-2">
            <span class="mdl-dialog__title fs25 tajawalL ls1">Registrar nuevo Coordinador</span>
                <div class="c-inputs-4" >
                    <div class="form-icons"><i class="fas fa-id-card"></i></div>
                    <div class="mdl-textfield mdl-js-textfield ">
                        <input class="mdl-textfield__input" type="text" name="matricula">
                        <label class="mdl-textfield__label tajawalL" required="required">Matricula</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="nombre">
                            <label class="mdl-textfield__label tajawalL" required="text">Nombre</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="ap_paterno">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Paterno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="ap_materno">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Materno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-envelope"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="correo">
                            <label class="mdl-textfield__label tajawalL" required="text">Correo</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-mobile-alt"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="telefono">
                            <label class="mdl-textfield__label tajawalL" required="text">Telefono</label>
                    </div>
                </div> 
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-key"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" name="pass">
                            <label class="mdl-textfield__label tajawalL" required="password">Contraseña</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-key"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" name="repeat_pswd">
                            <label class="mdl-textfield__label tajawalL" required="text">Confirmar contraseña</label>
                    </div>
                </div>
                <!-- Select with floating label -->
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-question"></i></div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                        <input type="text" value="" class="mdl-textfield__input mdl-color-text--black">
                        <input type="hidden" value="" name="tipo_usuario">
                            <label for="" class="mdl-textfield__label">Tipo Usuario</label>
                                <ul for="" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                    <li class="mdl-menu__item" data-val="CA">Coordinador Acádemico</li>
                                    <li class="mdl-menu__item" data-val="CI">Coordinador Institucional</li>
                                </ul>
                    </div>                        
                </div>
                <div class="c-inputs-4">
                    <span class="fs19 ls2 tajawalR">Status</span>
                    <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                            <input type="radio" id="option-1" class="mdl-radio__button" name="status" value="ACTIVO">
                            <span class="mdl-radio__label tajawalR ls2">Activo</span>
                        </label>
                    </div>
                    <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                            <input type="radio" id="option-2" class="mdl-radio__button" name="status" value="INACTIVO">
                            <span class="mdl-radio__label tajawalR ls2">Inactivo</span>
                        </label>
                    </div>
                </div>
                <div class="modals">
                    <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="CANCELAR"></input>
                    <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
                </div>
        </div>  
    </div>
<!--SE CIERRA EL FORMULARIO PARA EL PRIMER MODAL-->
<?php echo form_close(); ?>
<?php include_once 'footer.php' ?>
