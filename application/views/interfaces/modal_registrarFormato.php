<?php echo form_open("Tutor/registraralumnosFormato"); ?>  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />    
    <div class="seguimiento_2">
        <div class="usuario">
            <span class="mdl-dialog__title fs25 tajawalB ls1">Registro de Seguimiento Tutorial</span>
        </div>
            <div class="matricula" >
                <span class="tajawalR ls1 mdl-color-text--amber-900">Matricula Tutorado:</span>
                    <?php foreach ($mostrardatosTutorado as $mostrar) { ?>
                        <input class="fs25 ls2 tajawalL" type="text" name="matricula" value="<?php echo $mostrar->matricula;?>">
                    <?php }?>
            </div>
            <div class="c-inputs-3" > 
                <input id="datepicker" width="312" name="fecha"/>
                    <script>
                       $('#datepicker').datepicker({ format: 'yyyy-mm-dd',footer: true , modal:true, header: true});
                    </script>
                <input  id="timepicker" width="312" name="hora"/>
                    <script>
                        $('#timepicker').timepicker();
                    </script>
            </div>
            <div class="c-inputs-3">
                <span class="tajawalR ls1 mdl-color-text--amber-900">Lugar:</span>
                <span class="tajawalR ls1 mdl-color-text--amber-900">Detecto problema:</span>
            </div>
            <div class="c-inputs-3">
                <select class="mdl-textfield mdl-textfield__input" id="dropdown" width="300" name="lugar">
                    <option value="A1">A1</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="E1">E1</option>
                    <option value="E10">E10</option>
                    <option value="F1">F1</option>
                    <option value="G1">G1</option>
                    <option value="G2">G2</option>                    
                </select>
                <script>
                    $('#dropdown').dropdown();
                </script>
                 <select class="mdl-textfield mdl-textfield__input" id="problema" width="300" name="detecto_problema">
                    <option value="PSICOLOGÍA">PSICOLOGÍA</option>
                    <option value="ACADÉMICO">ACADÉMICO</option>
                    <option value="JURÍDICO">JURÍDICO</option>
                    <option value="CONTROL ESCOLAR">CONTROL ESCOLAR</option>
                    <option value="FINANZAS">FINANZAS</option>
                    <option value="SERVICIO SOCIAL & RESIDENCIAS">SERVICIO SOCIAL & RESIDENCIAS</option>
                   </select>
                <script>
                    $('#problema').dropdown();
                </script>
            </div>    
            <div class="matricula">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="avance">
						<label class="mdl-textfield__label fs12 ls2 tajawalR " for="tb-mail">Avance</label>
				</div>
            </div>
            <div class="c-inputs-3">
                <label class="fs20 ls2 tajawalR mdl-color-text--amber-900">Motivo de la Tutoría (Problema Dectectado)</label>
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
                <label class="fs20 ls2 tajawalR mdl-color-text--amber-900">Área en la que fue canalizada</label>
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*Este espacio será llenado únicamente cuando el motivo de la Tutoría sea la canalización, especificando el área a la que 
                    se canalizó. Por lo contrario eliga *Ninguno</span>
            </div>
            
            <div class="c-inputs-3">
                <select class="mdl-textfield mdl-textfield__input" id="area" width="300" name="area">
                    <option value="NINGUNO">NINGUNO</option>
                    <option value="PSICOLOGÍA">PSICOLOGÍA</option>
                    <option value="ACADÉMICO">ACADÉMICO</option>
                    <option value="JURÍDICO">JURÍDICO</option>
                    <option value="CONTROL ESCOLAR">CONTROL ESCOLAR</option>
                    <option value="FINANZAS">FINANZAS</option>
                    <option value="SERVICIO SOCIAL & RESIDENCIAS">SERVICIO SOCIAL & RESIDENCIAS</option>
                   </select>
                <script>
                    $('#area').dropdown();
                </script>
            </div>
            <div class="c-inputs-3">
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*PROBLEMAS ACADEMICOS</span>
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*PROBLEMAS EMOCIONALES</span>
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*CANALIZACION</span>
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*INFORMACION GENERAL</span>
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*ASESORIA ACADEMICA</span>
                <span class="tajawalL fs12 ls1 mdl-color-text--grey-700">*PROBLEMAS INTERPERSONALES</span>
            </div>
            <div class="modals">
            <a href="<?= base_url() ?>Tutor/verificacionSeguimiento">
                <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--white" value="CANCELAR"></input>
            </a>   
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--white ">Aceptar</button>
            </div>           
        </div>  
    </div>
<?php echo form_close(); ?>
<?php include_once 'footer.php'?>
