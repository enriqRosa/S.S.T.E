<div class="editar-status">
    <div class="modal-info-4">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Editar Status</span>       
        <div class="c-inputs-4">
                        <span class="fs19 ls2 tajawalR">Status</span>
                            <?php if($mostrardatosTutorado[0]->status=='ACTIVO'){ ?>
                                <span class="fs19 ls2 tajawalB">Activo</span>
                    </div> 
                    <div class="c-inputs-4">         
                        <span class="fs19 ls2 tajawalR">Cambiar a:</span>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                            <input type="radio" id="option-1" class="mdl-radio__button" name="status">
                            <span class="mdl-radio__label tajawalR ls2">Inactivo</span>
                        </label>       
                    </div>      
                    <div class="c-inputs-4">
                        <?php }elseif($mostrardatosTutorado[0]->status=='INACTIVO'){?>        
                            <span class="fs19 ls2 tajawalB">Inactivo</span>           
                    </div>
                    <div class="c-inputs-4">         
                        <span class="fs19 ls2 tajawalR">Cambiar a:</span>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                  <input type="radio" id="option-2" class="mdl-radio__button" name="status">
                                  <span class="mdl-radio__label tajawalR ls2">Activo</span>
                            </label>
                    
                        <?php 
                        }?>
                </div>
            <div class="modals">
                <a href="<?= base_url() ?>Admin/gestionTutorados">
                    <button class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Cancelar</button>
                </a>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div>          
    </div>  
</div>