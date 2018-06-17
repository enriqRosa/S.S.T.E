<?php echo form_open(""); ?>  
    <div class="pass-modal">
        <div class="modal-info-5">
            <span class="mdl-dialog__title fs25 tajawalL ls1">Asignar Tutor</span>
            <div class="c-inputs-4" >
                <div class="form-icons"><i class="fas fa-user"></i></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                    <input type="text" value="" class="mdl-textfield__input mdl-color-text--black" id="">
                    <input type="hidden" value="" name="FK_tutor">
                        <label for="" class="mdl-textfield__label">Tutor</label>
                        <ul for=""class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <?php 
                                if(isset($mostrarTutores)){
                                    foreach($mostrarTutores as $mostrar){ ?>
                                    <li class="mdl-menu__item fs14 tajawalR ls1" value="<?php echo $mostrar->matricula; ?>"><?php echo $mostrar->nombre;?><?php echo " " ?>
                                    <?php echo " " ?><?php echo $mostrar->ap_paterno; ?><?php echo " " ?><?php echo $mostrar->ap_materno; ?></li>
                            <?php  }
                                }
                             ?>
                        </ul>
                </div>
            </div>
            <div class="modals">
                <a href="<?= base_url() ?>Admin/tutoresTutorados">
                    <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="Cancelar"></input>
                </a>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div> 
        </div>
    </div>
<?php echo form_close(); ?>