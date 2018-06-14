<div class="editar-modal">
    <div class="modal-info-2">
        <span class="fs25 tajawalL ls1">Editar tutor</span>
            <?php   if(isset($mostrardatosTutor)){?>
                <div class="c-inputs-4" >
                    <div class="form-icons"><i class="fas fa-id-card"></i></div>
                    <div class="mdl-textfield mdl-js-textfield ">
                        <input class="mdl-textfield__input" type="text" name="matricula" value=" <?php echo $mostrardatosTutor[0]->matricula;?>">
                        <label class="mdl-textfield__label tajawalL" required="required">Matricula</label>
                    </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-user"></i></div>
                        <div class="mdl-textfield mdl-js-textfield ">
                            <input class="mdl-textfield__input" type="text" name="nombre" value="<?php echo $mostrardatosTutor[0]->nombre;?>">
                                <label class="mdl-textfield__label tajawalL" required="required">Nombre</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" name="ap_paterno" value="<?php echo $mostrardatosTutor[0]->ap_paterno;?>">
                                <label class="mdl-textfield__label tajawalL" required="text">Apellido Paterno</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-user"></i></div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" name="ap_materno" value="<?php echo $mostrardatosTutor[0]->ap_materno;?>">
                                <label class="mdl-textfield__label tajawalL" required="text">Apellido Materno</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-envelope"></i></div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" name="correo" value="<?php echo $mostrardatosTutor[0]->correo;?>">
                                <label class="mdl-textfield__label tajawalL" required="text">Correo</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-mobile-alt"></i></div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" name="telefono" value="<?php echo $mostrardatosTutor[0]->telefono;?>">
                                <label class="mdl-textfield__label tajawalL" required="text">Telefono</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <span class="fs19 ls2 tajawalR">Cambiar status a:</span>
                    </div>
                    <div class="modals_2">
                        <div class="status">
                            <?php if($mostrardatosTutor[0]->status=='ACTIVO'){
                                $activo=1;?>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                        <input type="radio" id="option-3" class="mdl-radio__button" name="status"  value="<?php echo $activo;?>">
                                        <span class="mdl-radio__label tajawalR ls2">Activo</span>
                                    </label>
                        </div>
                        <div class="status">
                            <?php 
                                }else{
                                    $activo=0;
                            ?>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
                                        <input type="radio" id="option-4" class="mdl-radio__button" name="status"  value="<?php echo $activo;?>">
                                        <span class="mdl-radio__label tajawalR ls2">Inactivo</span>
                                    </label>
                        </div>
                            <?php } ?>
                    </div>
                    <div class="modals">
                        <a href="<?= base_url() ?>Admin/gestionTutores">
                            <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="CANCELAR"></button>
                        </a>
                        <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
                    </div>
                </div>
                <?php
                    }else{
                ?>
            <?php
                }
            ?>         
    </div>  
</div>    
        
      