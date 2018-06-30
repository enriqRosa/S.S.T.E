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
    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500 btn-pass">
    <i class="fas fa-user-plus"></i>Registrar nuevo Tutorado</button>
</div>
<!--MUESTRA EL MENSAJE DE REGISTRO EXITOSO-->
<div class="success tajawalR ls1"><?php echo $this->session->flashdata('registro'); ?></div> 
<!--MUESTRA EL MENSAJE DE ERROR DE LAS VALIDACIONES-->
<?php echo validation_errors('<div class="error tajawalR ls1">', '</div>'); ?>
<div class="table2 overflow">
    <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp ">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Matricula</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Paterno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Materno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Carrera</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Semestre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Programa</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Tutoría</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Grupo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Correo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Telefono</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Status</td>
                    
                </tr>
            </thead>
            <!--MUESTRA CADA DATO POR FILA DEL TUTORADO REGISTRADO-->
            <?php
                foreach ($mostrardatosTutorado as $row) {
            ?>
                <tr>
                    <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->carrera; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->semestre; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->programa; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->tipo_tutoria; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->grupo; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->correo; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->telefono; ?></td>
                    <td class="tajawalL fs16 "><?php echo $row->status; ?></td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 ">
                        <a href="<?= base_url() ?>Admin/editarTutorado/?matricula=<?php echo $row->matricula; ?>">
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
<!--MODAL PARA REGISTRAR NUEVO TUTORADO
    SE LLAMA LA FUNCIÓN 'nuevoTutorado' DEL CONTROLADOR 'Admin'-->
<?php echo form_open("Admin/nuevoTutorado"); ?>
    <div class="pass-modal fancy ">
        <div class="modal-info-3">
            <span class="mdl-dialog__title fs25 tajawalL ls1">Registrar nuevo Alumno</span>
                <form>
                    <div class="c-inputs-4" >
                        <div class="form-icons"><i class="fas fa-id-card"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="matricula">
                            <label class="mdl-textfield__label tajawalL" required="required">Matricula</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-user"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="nombre">
                                <label class="mdl-textfield__label tajawalL" required="required">Nombre</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-user"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="ap_paterno">
                                <label class="mdl-textfield__label tajawalL" required="text">Apellido Paterno</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-user"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="ap_materno">
                                <label class="mdl-textfield__label tajawalL" required="text">Apellido Materno</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-briefcase"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="carrera" value="ISC">
                                <label class="mdl-textfield__label tajawalL" required="text">Carrera</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-question"></i></div>
                            <select class="mdl-textfield mdl-textfield__input" id="dropdown" width="300" name="semestre">
                                <option value="PRIMERO">PRIMERO</option>
                                <option value="SEGUNDO">SEGUNDO</option>
                                <option value="TERCERO">TERCERO</option>
                                <option value="CUARTO">CUARTO</option>
                                <option value="QUINTO">QUINTO</option>
                                <option value="SEXTO">SEXTO</option>
                                <option value="SEPTIMO">SEPTIMO</option>
                                <option value="OCTAVO">OCTAVO</option>
                                <option value="NOVENO">NOVENO</option>
                                <option value="DECIMO">DECIMO</option>
                                <option value="ONCIAVO">ONCIAVO</option>
                                <option value="DOCIAVO">DOCIAVO</option>
                            </select>
                            <script>
                                $('#dropdown').dropdown();
                            </script>
                    </div> 
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-book"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" value="ESPECIAL" name="programa">
                                <label class="mdl-textfield__label tajawalL" required="text">Programa</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-book"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" value="TUTORIA INDIVIDUAL" name="tipo_tutoria">
                                <label class="mdl-textfield__label tajawalL" required="text">Tutoría</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-question"></i></div>
                            <select class="mdl-textfield mdl-textfield__input" id="dropdown" name="grupo">
                                <option value="4101">4101</option>
                                <option value="4201">4201</option>
                                <option value="4202">4202</option>
                                <option value="4251">4251</option>
                                <option value="4271">4271</option>
                                <option value="4301">4301</option>
                                <option value="4401">4401</option>
                                <option value="4402">4402</option>
                                <option value="4451">4451</option>
                                <option value="4471">4471</option>
                                <option value="4501">4501</option>
                                <option value="4571">4571</option>
                                <option value="4601">4601</option>
                                <option value="4602">4602</option>
                                <option value="4651">4651</option>
                                <option value="4652">4652</option>
                                <option value="4671">4671</option>
                                <option value="4751">4751</option>
                                <option value="4771">4771</option>
                                <option value="4851">4851</option>
                                <option value="4852">4852</option>
                                <option value="4853">4853</option>
                                <option value="4871">4871</option>
                                <option value="4951">4951</option>  
                        </select>
                            <script>
                                $('#dropdown').dropdown();
                            </script>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-key"></i></div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="password" name="pass">
                                <label class="mdl-textfield__label tajawalL" required="text">contraseña</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-key"></i></div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="password" name="repeat_pswd">
                                <label class="mdl-textfield__label tajawalL" required="text">Confirmar contraseña</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-question"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" value="TO" name="tipo_usuario">
                                <label class="mdl-textfield__label tajawalL" required="text">Tipo usuario</label>
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
                </form>
                <div class="modals">
                    <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="CANCELAR"></input>
                    <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
                </div>           
        </div>  
    </div>
<!--SE CIERRA EL FORMULARIO PARA EL PRIMER MODAL-->
<?php echo form_close(); ?>
<?php include_once 'footer.php' ?>
