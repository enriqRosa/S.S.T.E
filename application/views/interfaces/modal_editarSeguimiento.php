<?php echo form_open("Seguimiento/editarFormato"); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />    
    <div class="seguimiento_2">
        <div class="usuario">
        <span class="mdl-dialog__title fs25 tajawalB ls1">Editar Seguimiento</span>
        </div> 
        <?php foreach ($datosFormatoID as $mostrar) { ?>
                <input class="c-formato" type="hidden" name="matricula" value="<?php echo $mostrar->FK_tutoradoindividual;?>">
                <input type="hidden" name="idformato" value="<?php echo $mostrar->idformato ?>">
            <?php  }?>
        <div class="c-inputs-4" > 
            <?php foreach ($datosFormatoID as $mostrar) { ?>
                <input id="datepicker" width="312" name="fecha"/>
                    <script>
                       $('#datepicker').datepicker({value: '<?php echo $mostrar->fecha;?>', format: 'yyyy-mm-dd',footer: true , modal:true, header: true});
                    </script>
                <input id="timepicker" width="312" name="hora" required/>
                    <script>
                        $('#timepicker').timepicker({value: '<?php echo $mostrar->hora;?>'});
                    </script>
            <?php } ?>
        </div>
        <div class="c-inputs-4">
                <label class="fs20 ls2 tajawalM mdl-color-text--amber-800">Lugar</label>
                <label class="fs20 ls2 tajawalM mdl-color-text--amber-800">Avance</label>
        </div>
        <div class="c-inputs-4">
            <select class="mdl-textfield" id="dropdown" width="310" name="lugar">
                <?php {
                    foreach ($datosFormatoID as $mostrar) { ?> 
                    <option value="<?php echo $mostrar->lugar;?>"><?php echo $mostrar->lugar;?></option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="E1">E1</option>
                    <option value="E10">E10</option>
                    <option value="F1">F1</option>
                    <option value="G1">G1</option>
                    <option value="G2">G2</option>
                <?php }
                } ?>
                </select>
                <script>
                    $('#dropdown').dropdown();
                </script>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <?php foreach ($datosFormatoID as $mostrar) { ?> 
					<input class="mdl-textfield__input" type="text" name="avance" value="<?php echo $mostrar->avance ?>">
						<label class="mdl-textfield__label fs12 ls2 tajawalR " for="tb-mail">Avance</label>
                <?php } ?>
			</div>
        </div>   
        <div class="c-inputs-3">
            <label class="fs20 ls2 tajawalM mdl-color-text--amber-800">Detecto Problema: </label>
        </div>
        <div class="c-inputs-3">
            <?php if($datosFormatoID[0]->detecto_problema=='PSICOLOGÍA'){
                foreach ($datosFormatoID as $mostrar) { ?>
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->detecto_problema?></label>
                <?php } ?>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="<?php echo $mostrar->detecto_problema;?>">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>
            <?php if($datosFormatoID[0]->detecto_problema=='ACADÉMICO'){
                foreach ($datosFormatoID as $mostrar) { ?>
                <label class="fs19 ls2 tajawalB"> <?php $mostrar->detecto_problema ?></label>
            <?php } ?>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                        <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="<?php echo $mostrar->detecto_problema;?>">
                        <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                    </label>
                <?php } ?>
            <?php if($datosFormatoID[0]->detecto_problema=='JURÍDICO'){
                foreach ($datosFormatoID as $mostrar) { ?>
                   
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->detecto_problema ?></label>
                <?php } ?>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="<?php echo $mostrar->detecto_problema;?>">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>
            <?php if($datosFormatoID[0]->detecto_problema=='CONTROL ESCOLAR'){
                foreach ($datosFormatoID as $mostrar) { ?>
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->detecto_problema ?></label>
                <?php } ?>
                
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="<?php echo $mostrar->detecto_problema;?>">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>
            <?php if($datosFormatoID[0]->detecto_problema=='FINANZAS'){
                foreach ($datosFormatoID as $mostrar) { ?>
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->detecto_problema ?></label>
                <?php } ?>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="<?php echo $mostrar->detecto_problema;?>">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>
            <?php if($datosFormatoID[0]->detecto_problema=='SERVICIO SOCIAL & RESIDENCIAS'){
                foreach ($datosFormatoID as $mostrar) { ?>
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->detecto_problema ?></label>
                <?php } ?>
                
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="<?php echo $mostrar->detecto_problema;?>">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>
        </div>
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalM mdl-color-text--amber-900">Detecto  problematica cambiar a:</label>
        </div>   
        <div class="c-inputs-4">
            <div class="status">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="PSICOLOGÍA">
                    <span class="mdl-radio__label tajawalR ls2">PSICOLOGÍA</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="ACADÉMICO">
                    <span class="mdl-radio__label tajawalR ls2">ACADÉMICO</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="JURÍDICO">
                    <span class="mdl-radio__label tajawalR ls2">JURÍDICO</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="PSICOLOGÍA">
                    <span class="mdl-radio__label tajawalR ls2">CONTROL ESCOLAR</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="PSICOLOGÍA">
                    <span class="mdl-radio__label tajawalR ls2">FINANZAS</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="PSICOLOGÍA">
                    <span class="mdl-radio__label tajawalR ls2">SERVICIO SOCIAL & RESIDENCIAS</span>
                </label>
            </div>
        </div>
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalM mdl-color-text--amber-900">Motivo de la Tutoría (Problema Detectado)</label>
        </div>
        <div class="c-inputs-4">
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                <?php foreach ($datosFormatoID as $mostrar) { 
                    if($mostrar->pa=='PROBLEMAS ACADEMICOS'){?> 
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="pa" checked>
                    <?php } else{?>
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="pa">
                    <?php } ?>
                    <span class="mdl-checkbox__label">PA</span>
                </label> 
            </div>
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                    <?php if($mostrar->pe=='PROBLEMAS EMOCIONALES'){?> 
                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" name="pe" checked>
                    <?php } else{?>
                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" name="pe">
                    <?php } ?>
                    <span class="mdl-checkbox__label">PE</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                <?php if($mostrar->c=='CANALIZACION'){?> 
                        <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input" name="c" checked>
                    <?php } else{?>
                        <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input" name="c">
                    <?php } ?>
                    <span class="mdl-checkbox__label">C</span>
                </label>
                
            </div>
        </div>
        <div class="c-inputs-4">
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
                <?php if($mostrar->ig=='INFORMACION GENERAL'){?> 
                        <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input" name="ig" checked>
                    <?php } else{?>
                        <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input" name="ig">
                    <?php } ?>
                    <span class="mdl-checkbox__label">IG</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-5">
                <?php if($mostrar->aa=='ASESORIA ACADEMICA'){?> 
                        <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input" name="aa" checked>
                    <?php } else{?>
                        <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input" name="aa">
                    <?php } ?>
                    <span class="mdl-checkbox__label">AA</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-6">
                <?php if($mostrar->pi=='PROBLEMAS INTERPERSONALES'){?> 
                        <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input" name="pi" checked>
                    <?php } else{?>
                        <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input" name="pi">
                    <?php 
                    } 
                }?>
                    <span class="mdl-checkbox__label">PI</span>
                </label>
            </div>
        </div>
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalM mdl-color-text--amber-900">Área en la que fue canalizada</label>
        </div>
        <div class="c-inputs-4">
        <?php if($datosFormatoID[0]->area=='NINGUNO'){
                foreach ($datosFormatoID as $mostrar) { 
                    ?>
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->area ?></label>
                <?php } ?>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="area" value="<?php echo $mostrar->area;?> ">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>   
            <?php if($datosFormatoID[0]->area=='PSICOLOGÍA'){
                foreach ($datosFormatoID as $mostrar) { 
                    ?>
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->area ?></label>
                <?php } ?>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="area" value="<?php echo $mostrar->area;?> ">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>   
            <?php if($datosFormatoID[0]->area=='ACADÉMICO'){
                foreach ($datosFormatoID as $mostrar) { 
                    ?>
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->area ?></label>
                <?php } ?>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="area" value="<?php echo $mostrar->area;?> ">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>   
            <?php if($datosFormatoID[0]->area=='CONTROL ESCOLAR'){
                foreach ($datosFormatoID as $mostrar) { 
                    ?>
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->area ?></label>
                <?php } ?>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="area" value="<?php echo $mostrar->area;?> ">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>   
            <?php if($datosFormatoID[0]->area=='FINANZAS'){
                foreach ($datosFormatoID as $mostrar) { 
                    ?>
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->area ?></label>
                <?php } ?>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="area" value="<?php echo $mostrar->area;?> ">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>  
            <?php if($datosFormatoID[0]->area=='SERVICIO SOCIAL & RESIDENCIAS'){
                foreach ($datosFormatoID as $mostrar) { 
                    ?>
                <label class="fs19 ls2 tajawalB"> <?php echo $mostrar->area ?></label>
                <?php } ?>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                    <input type="radio"  class="mdl-radio__button" name="area" value="<?php echo $mostrar->area;?> ">
                    <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                </label>
            <?php } ?>    
        </div>
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalM mdl-color-text--amber-900">Si el motivo fue cambiado a 'Canalización' llenar lo siguiente:</label>
        </div>
        <div class="c-inputs-3">
        <select class="mdl-textfield mdl-textfield__input" id="dropdown3" width="300" name="area">
                    <option value="NINGUNO"></option>
                    <option value="PSICOLOGÍA">PSICOLOGÍA</option>
                    <option value="ACADÉMICO">ACADÉMICO</option>
                    <option value="JURÍDICO">JURÍDICO</option>
                    <option value="CONTROL ESCOLAR">CONTROL ESCOLAR</option>
                    <option value="FINANZAS">FINANZAS</option>
                    <option value="SERVICIO SOCIAL & RESIDENCIAS">SERVICIO SOCIAL & RESIDENCIAS</option>
                   </select>
                <script>
                var check3 = $("#checkbox-3");
                $("#checkbox-3").on('click',tres);
                function tres(){
                    if(check3.is(':checked')){
                        $('#dropdown3').dropdown();
                    }
                }   
                </script>
        </div>
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalM mdl-color-text--amber-900">Firmas</label>
        </div>
        <div class="c-inputs-4">
            <div class="status">
            <?php foreach ($datosFormatoID as $mostrar) { ?>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-7">
                <?php if($mostrar->firma_tutor=='SI'){?> 
                    <input type="checkbox" id="checkbox-7" class="mdl-checkbox__input" name="firma_tutor" value="SI" checked>
                <?php }else{ ?>
                    <input type="checkbox" id="checkbox-7" class="mdl-checkbox__input" name="firma_tutor" value="SI">
                <?php } ?>
                    <span class="mdl-checkbox__label">Firma Tutor</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-8">
                <?php if($mostrar->firma_alumno=='SI'){?> 
                    <input type="checkbox" id="checkbox-8" class="mdl-checkbox__input" name="firma_alumno" value="SI" checked>
                <?php }else{ ?>
                    <input type="checkbox" id="checkbox-8" class="mdl-checkbox__input" name="firma_alumno" value="SI">
                    <?php }
            }?>
                    <span class="mdl-checkbox__label">Firma Alumno</span>
                </label>
            </div>
        </div>        
            <div class="modals">
                <a href="<?= base_url() ?>Seguimiento/index/?matricula=<?php echo $mostrar->FK_tutoradoindividual ?>">
                    <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="Cancelar"></button>
                </a>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div> 
        </div>          
</div>
<?php echo form_close(); ?>
<?php include_once 'footer.php' ?>