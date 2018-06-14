<div class="editar-status">
    <div class="modal-info-4">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Cambiar status a:</span>       
                <div class="modals_2">
                    <div class="status">
                    <?php   
                           if($mostrardatosTutorado[0]->status=='ACTIVO'){
                            $activo=1;
                    ?>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                            <input type="radio" id="option-3" class="mdl-radio__button" name="status" value="<?php echo $activo;?>">
                            <span class="mdl-radio__label tajawalR ls2">Activo</span>
                        </label>
                    </div>
                    <div class="status">
                    <?php  }else{
                                $activo=0;
                    ?>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
                            <input type="radio" id="option-4" class="mdl-radio__button" name="status" value="<?php echo $activo;?>">
                            <span class="mdl-radio__label tajawalR ls2">Inactivo</span>
                        </label>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="modals">
                <a href="<?= base_url() ?>Admin/gestionTutorados">
                    <button class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Cancelar</button>
                </a>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div>          
    </div>  
</div>