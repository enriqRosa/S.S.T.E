<div class="editar-modal">
    <div class="modal-info-2">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Editar Coordinador</span>
            <?php if(isset($mostrardatosCoord)){?>
                <div class="c-inputs-4" >
                    <div class="form-icons"><i class="fas fa-id-card"></i></div>
                    <div class="mdl-textfield mdl-js-textfield ">
                        <input class="mdl-textfield__input" type="text" value=" <?php echo $mostrardatosCoord[0]->matricula;?>">
                        <label class="mdl-textfield__label tajawalL" required="required">matricula</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield ">
                        <input class="mdl-textfield__input" type="text" value=" <?php echo $mostrardatosCoord[0]->nombre;?>">
                            <label class="mdl-textfield__label tajawalL" required="required">Nombre</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" value=" <?php echo $mostrardatosCoord[0]->ap_paterno;?>">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Paterno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-user"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" value=" <?php echo $mostrardatosCoord[0]->ap_materno;?>">
                            <label class="mdl-textfield__label tajawalL" required="text">Apellido Materno</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-envelope"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" value=" <?php echo $mostrardatosCoord[0]->correo;?>">
                            <label class="mdl-textfield__label tajawalL" required="text">Correo</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="form-icons"><i class="fas fa-mobile-alt"></i></div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" value=" <?php echo $mostrardatosCoord[0]->telefono;?>">
                            <label class="mdl-textfield__label tajawalL" required="text">Telefono</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                        <span class="fs19 ls2 tajawalR">Status</span>
                            <?php if($mostrardatosCoord[0]->status=='ACTIVO'){ ?>
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
                        <?php }elseif($mostrardatosCoord[0]->status=='INACTIVO'){?>        
                            <span class="fs19 ls2 tajawalB">Inactivo</span>           
                    </div>
                    <div class="c-inputs-4">         
                        <span class="fs19 ls2 tajawalR">Cambiar a:</span>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                  <input type="radio" id="option-2" class="mdl-radio__button" name="status">
                                  <span class="mdl-radio__label tajawalR ls2">Activo</span>
                            </label>
                    
                        <?php } 
                        }?>
                </div>
            
            <div class="modals">
                <a href="<?= base_url() ?>Admin/gestionCoordinadores">
                    <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="Cancelar"></button>
                </a>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div>
    </div>  
</div>