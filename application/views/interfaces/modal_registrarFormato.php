<?php echo form_open("Tutor/registraralumnosFormato"); ?>  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />    
    <div class="seguimiento_2">
        <div class="usuario">
            <span class="mdl-dialog__title fs25 tajawalB ls1">Registro de Seguimiento Tutorial</span>
        </div>
            <div class="matricula" >
                <span class="tajawalR ls1 mdl-color-text--indigo-900">Matricula Tutorado:</span>
                    <?php foreach ($mostrardatosTutorado as $mostrar) { ?>
                        <input class="fs25 ls2 tajawalL" type="text" name="matricula" value="<?php echo $mostrar->matricula;?>" required>
                    <?php }?>
            </div>
            <div class="c-inputs-3" > 
                <input id="datepicker" width="312" name="fecha" required/>
                    <script>
                       $('#datepicker').datepicker({ format: 'yyyy-mm-dd',footer: true , modal:true, header: true});
                    </script>

                <input id="timepicker" width="312" name="hora" required/>
                    <script>
                        $('#timepicker').timepicker();
                    </script>
            </div>
            <div class="c-inputs-4">
                <select class="mdl-textfield" id="dropdown" width="310" name="FK_lugar" required>
                <?php foreach($mostrarsalon as $salon){?>
                    <option value="<?php echo $salon->idlugar;?>"><?php echo $salon->salon;?></option>
                <?php } ?>
                </select>
                <script>
                    $('#dropdown').dropdown();
                </script>
                <div class="mat-input-flex mat-form-field-flex" >
                    <div class="mat-input-infix mat-form-field-infix" >
                        <label class="fs16 ls2 tajawalR mdl-color-text--indigo-700">Problematica</label>
                        <textarea class="mat-input-element mat-form-field-autofill-control fs8 ls2 tajawalL ng-dirty ng-valid ng-touched" name="detecto_problema" required></textarea>
                    </div>
                </div>  
            </div>    
            <div class="matricula">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="avance" required>
						<label class="mdl-textfield__label fs12 ls2 tajawalR" for="tb-mail">Avance</label>
				</div>
            </div>
            <div class="c-inputs-3">
                <label class="fs20 ls2 tajawalR mdl-color-text--indigo-900">Motivo de la Tutoría (Problema Dectectado)</label>
            </div>
            <div class="c-inputs-3">
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="pa">
                        <span class="mdl-checkbox__label">PA</span>
                    </label>     
                </div>
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" name="pe">
                        <span class="mdl-checkbox__label">PE</span>
                    </label>
                </div>
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                        <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input" name="c">
                        <span class="mdl-checkbox__label">C</span>
                    </label>
                </div>
            </div>
            <div class="c-inputs-3">
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
                        <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input" name="ig">
                        <span class="mdl-checkbox__label">IG</span>
                    </label>
                </div>
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-5">
                        <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input" name="aa">
                        <span class="mdl-checkbox__label">AA</span>
                    </label>
                </div>
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-6">
                        <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input" name="pi">
                        <span class="mdl-checkbox__label">PI</span>
                    </label>
                </div>
            </div>
            <div class="c-inputs-3">
                <label class="fs20 ls2 tajawalR mdl-color-text--indigo-900">Área en la que fue canalizada</label>
            </div>
            <div class="c-inputs-4">
            <?php foreach ($FK_area as $area){ ?>
                <div class="status">
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                        <input type="radio"  class="mdl-radio__button" name="FK_area" value="<?php echo $area->idarea;?>" required>
                        <span class="mdl-radio__label tajawalR ls2"><?php echo $area->nombre;?></span>
                    </label>
                </div>
            <?php }?>
            </div>
            <div class="c-inputs-3">
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*PROBLEMAS ACADEMICOS</span>
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*PROBLEMAS EMOCIONALES</span>
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*CANALIZACION</span>
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*INFORMACION GENERAL</span>
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*ASESORIA ACADEMICA</span>
            </div>
            <div class="c-inputs-3">
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*PROBLEMAS INTERPERSONALES</span>
            </div>
            <div class="modals">
            <a href="<?= base_url() ?>Admin/verificacionSeguimiento">
                <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--white" value="CANCELAR"></input>
            </a>   
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--white ">Aceptar</button>
            </div>           
        </div>  
    </div>
<?php echo form_close(); ?>
<?php include_once 'footer.php'?>
