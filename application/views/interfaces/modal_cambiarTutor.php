<?php echo form_open("Admin/cambiarTutor"); ?>      
    <div class="editar-modal">
        <div class="modal-info-5">
            <span class="mdl-dialog__title fs25 tajawalL ls1">Editar Tutor</span>
            <div class="c-inputs-4" >
                <span class="mdl-dialog__title fs19 tajawalR ls1">Matricula Tutorado:</span>
            </div>
            <div class="c-inputs-4" >
                <?php foreach ($mostrardatosTutorado as $mostrar) { ?>
                    <div class="mdl-textfield mdl-js-textfield ">
                        <input class="mdl-textfield__input" type="text" name="matricula" value=" <?php echo $mostrar->matricula;?>">
                    </div>
                <?php }?>
            </div>
            <div class="c-inputs-4">
                <span class="fs19 ls2 tajawalR">Tutor:</span>                                             
            </div> 
            <div class="c-inputs-4" >
                <?php 
                if(isset($vernombreTutor)){
                    foreach ($vernombreTutor as $mostrarnombre) { ?>
                        <span class="fs19 ls2 tajawalB" ><?php echo $mostrarnombre->nombre;?> <?php echo $mostrarnombre->ap_paterno;?> <?php echo $mostrarnombre->ap_materno;?></span>
                <?php }?>
            </div>
            <div class="c-inputs-4" >
                <span class="fs19 ls2 tajawalR">Cambiar a:</span> 
            </div>
            <div class="c-inputs-4" >
                <div class="form-icons"><i class="fas fa-user"></i></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                    <input type="text" value="" class="mdl-textfield__input mdl-color-text--black" id="">
                    <input type="hidden" value="" name="FK_tutor">
                        <label for="" class="mdl-textfield__label">Tutor</label>
                        <ul for=""class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <?php 
                                foreach($mostrarTutores as $mostrar){ ?>
                                <li class="mdl-menu__item fs14 tajawalR ls1" data-val="<?php echo $mostrar->matricula; ?>"><?php echo $mostrar->nombre;?><?php echo " " ?>
                                <?php echo " " ?><?php echo $mostrar->ap_paterno; ?><?php echo " " ?><?php echo $mostrar->ap_materno; ?></li>
                            <?php  
                                }
                            }
                             ?>
                        </ul>
                </div>
            </div>
            <div class="c-inputs-4" >  
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label fs19 ls2 tajawalR">No cambiar</span>
                    </label>
                </div>
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