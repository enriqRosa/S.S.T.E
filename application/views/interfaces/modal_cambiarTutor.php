<?php echo form_open("Admin/renovarTutor"); ?>      
    <div class="editar-modal">
        <div class="modal-info-5">
            <span class="mdl-dialog__title fs25 tajawalL ls1">Editar Tutor</span>
            <div class="c-inputs-4" >
                <span class="mdl-dialog__title tajawalR ls1">Matricula Tutorado:</span>
            </div>
            <div class="c-inputs-4" >
                <?php foreach ($mostrardatosTutorado as $mostrar) { ?>
                    <div class="mdl-textfield mdl-js-textfield ">
                        <input class="mdl-textfield__input" type="text" name="matricula" value=" <?php echo $mostrar->matricula;?>">
                    </div>
                <?php }?>
            </div>
            <div class="c-inputs-4">
                <span class="ls2 tajawalR">Tutor:</span>                                             
            </div> 
            <div class="c-inputs-4" >
                <?php 
                if(isset($vernombreTutor)){
                    foreach ($vernombreTutor as $mostrarnombre) { ?>
                        <span class="fs19 ls2 tajawalB" ><?php echo $mostrarnombre->nombre;?> <?php echo $mostrarnombre->ap_paterno;?> <?php echo $mostrarnombre->ap_materno;?></span>
                <?php }?>
            </div>
            <div class="c-inputs-4" >
                <span class="ls2 tajawalR">Cambiar a:</span> 
            </div>
            <div class="c-inputs-4" >
                <select class="mdl-textfield mdl-js-textfield mdl-textfield__input" id="dropdown" width="300" name="FK_tutor">
                    <?php 
                    foreach($tutoresActivos as $mostrar){ ?>
                        <option value="<?php echo $mostrar->matricula; ?>"><?php echo $mostrar->nombre;?> <?php echo $mostrar->ap_paterno; ?> <?php echo $mostrar->ap_materno; ?></option>
                        <?php  
                                }
                            }
                             ?>
                    </select>
                <script>
                    $('#dropdown').dropdown();
                </script>     
            </div>
            <div class="modals">
                <a href="<?=base_url() ?>Admin/tutoresTutorados">
                    <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="Cancelar"></input>
                </a>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div> 
        </div>
    </div>
<?php echo form_close(); ?>


               