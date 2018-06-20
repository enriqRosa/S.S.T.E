
<?php echo form_open("Admin/asignarTutor"); ?>  
        <div class="pass-modal">
            <div class="modal-info-5">
                <span class="mdl-dialog__title fs25 tajawalL ls1">Asignar Tutor</span>
            <div class="c-inputs-4" >
                <?php foreach ($mostrardatosTutorado as $mostrar) { ?>
                    <span class="mdl-dialog__title fs16 tajawalR ls1">Matricula: </span>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="matricula" value="<?php echo $mostrar->matricula;?>">
                    </div>
                <?php }?>
            </div>
            <div class="c-inputs-4" >
                <span class="mdl-dialog__title fs16 tajawalR ls1">Tutor:</span>
                    <select class="mdl-textfield mdl-js-textfield mdl-textfield__input" id="dropdown" width="300" name="FK_tutor">
                    <?php 
                    foreach($mostrarTutores as $mostrar){ ?>
                        <option value="<?php echo $mostrar->matricula; ?>"><?php echo $mostrar->nombre;?> <?php echo $mostrar->ap_paterno; ?> <?php echo $mostrar->ap_materno; ?></option>
                        <?php  
                                }
                             ?>
                    </select>
                <script>
                    $('#dropdown').dropdown();
                </script>     
            </div>
            <div class="modals">
                <a href="<?= base_url() ?>Admin/tutoresTutorados">
                    <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="Cancelar"></input>
                </a>
                <button id="esconder"class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div> 
        </div>
    </div>
<?php echo form_close(); ?>



