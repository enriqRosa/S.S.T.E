<?php echo form_open("Admin/registraralumnosFormato"); ?>  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />    
    <div class="seguimiento_2">
        <div class="usuario">
            <span class="mdl-dialog__title fs25 tajawalB ls1">Registro de Seguimiento Tutorial</span>
        </div>
            <div class="matricula" >
                <span class="mdl-dialog__title tajawalR ls1">Matricula Tutorado:</span>
                    <?php foreach ($mostrardatosTutorado as $mostrar) { ?>
                        <input class="fs25 ls2 tajawalL" type="text" name="matricula" value=" <?php echo $mostrar->matricula;?>">
                    <?php }?>
            </div>
            <div class="c-inputs-3" > 
                <input id="datepicker" width="312"name="fecha" />
                    <script>
                       $('#datepicker').datepicker({ header: true, modal: true, footer: true });
                    </script>

                <input id="timepicker" width="312" name="hora" />
                    <script>
                        $('#timepicker').timepicker();
                    </script>
            </div>
            <div class="c-inputs-4"> 

                <select class="mdl-textfield" id="dropdown" width="300" name="FK_salon">
                <?php foreach($mostrargrupo as $grupo){?>
                    <option value="" ></option>
                <?php } ?>
                </select>
                <script>
                    $('#dropdown').dropdown();
                </script>
            <div class="mat-input-flex mat-form-field-flex" >
                <div class="mat-input-infix mat-form-field-infix" >
                    <label class="fs16 ls2 tajawalL">Problematica</label>
                    <textarea class="mat-input-element mat-form-field-autofill-control fs12 ls2 tajawalL ng-dirty ng-valid ng-touched" name="detecto_problematica"></textarea>
                </div>
            </div>  
            </div>    
            <div class="c-inputs-3">
                <label class="fs20 ls2 tajawalL">Motivo de la Tutoría (Problema Dectectado)</label>
            </div>
            <div class="c-inputs-3">
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">PA</span>
                    </label>     
                </div>
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">PE</span>
                    </label>
                </div>
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                        <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">C</span>
                    </label>
                </div>
            </div>
            <div class="c-inputs-3">
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
                        <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">IG</span>
                    </label>
                </div>
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-5">
                        <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">AA</span>
                    </label>
                </div>
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-6">
                        <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">PI</span>
                    </label>
                </div>
            </div>
            <div class="c-inputs-3">
                <label class="fs20 ls2 tajawalL">Área en la que fue canalizada</label>
            </div>
            <div class="c-inputs-4">
                <div class="status">
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="2">
                        <span class="mdl-radio__label tajawalR ls2">Psicología</span>
                    </label>
                </div>
                <div class="status">
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                        <span class="mdl-radio__label tajawalR ls2">Academico</span>
                    </label>
                </div>
                <div class="status">
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                        <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="2">
                        <span class="mdl-radio__label tajawalR ls2">Juridico</span>
                    </label>
                    </div>
                </div>
            <div class="modals">
            <a href="<?= base_url() ?>Admin/verificacionSeguimiento">
                <button class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--white">Cancelar</button>
            </a>   
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--white ">Aceptar</button>
            </div>           
        </div>  
    </div>
    <?php include_once 'footer.php'?>
<?php echo form_close(); ?>



