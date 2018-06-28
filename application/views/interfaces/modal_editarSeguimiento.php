<?php echo form_open("Seguimiento/editarFormato"); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />    
    <div class="seguimiento_2">
        <div class="usuario">
        <span class="mdl-dialog__title fs25 tajawalB ls1">Editar Seguimiento</span>
        </div> 
        <?php foreach ($datosFormatoID as $mostrar) { ?>
                <input class="c-formato" type="hidden" name="matricula" value="<?php echo $mostrar->FK_tutoradoindividual;?>" disabled>
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
            <select class="mdl-textfield" id="dropdown" width="310" name="FK_lugar" required>
                <?php {
                    foreach ($datosFormatoID as $mostrar) { ?> 
                    <option value="<?php echo $mostrar->FK_lugar;?>"><?php echo $mostrar->salon;?></option>
                <?php }
                } ?>
                </select>
                <script>
                    $('#dropdown').dropdown();
                </script>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <?php foreach ($datosFormatoID as $mostrar) { ?> 
					<input class="mdl-textfield__input" type="text" name="avance" value="<?php echo $mostrar->avance ?>" required>
						<label class="mdl-textfield__label fs12 ls2 tajawalR " for="tb-mail">Avance</label>
                <?php } ?>
			</div>
        </div>   
        <div class="c-inputs-3">
            <label class="fs20 ls2 tajawalM mdl-color-text--amber-800">Detecto Problema: </label>
        </div>
        <div class="c-inputs-3">
            <?php if($datosFormatoID[0]->detecto_problema==1){
                foreach ($datosFormatoID as $mostrar) { 
                    $Problema='PSICOLOGÍA'?> 
                <label class="fs20 ls2 tajawalM mdl-color-text--amber-800">Detecto Problema: </label>
                <label class="fs19 ls2 tajawalB"> <?php echo $Problema ?></label>
            <?php }
            } ?>
            <?php if($datosFormatoID[0]->detecto_problema==2){
                foreach ($datosFormatoID as $mostrar) { 
                    $Problema='ACADÉMICO'?> 
                <label class="fs19 ls2 tajawalB"> <?php echo $Problema ?></label>
            <?php } ?>
                
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                        <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="<?php echo $mostrar->detecto_problema;?>" required>
                        <span class="mdl-radio__label tajawalR ls2">NO CAMBIAR</span>
                    </label>
                <?php } ?>
            <?php if($datosFormatoID[0]->detecto_problema==3){
                foreach ($datosFormatoID as $mostrar) { 
                    $Problema='JURÍDICO'?> 
                <label class="fs20 ls2 tajawalM mdl-color-text--amber-800">Detecto Problema: </label>
                <label class="fs19 ls2 tajawalB"> <?php echo $Problema ?></label>
            <?php }
            } ?>
            <?php if($datosFormatoID[0]->detecto_problema==4){
                foreach ($datosFormatoID as $mostrar) { 
                    $Problema='CONTROL ESCOLAR'?> 
                <label class="fs20 ls2 tajawalM mdl-color-text--amber-800">Detecto Problema: </label>
                <label class="fs19 ls2 tajawalB"> <?php echo $Problema ?></label>
            <?php }
            } ?>
            <?php if($datosFormatoID[0]->detecto_problema==5){
                foreach ($datosFormatoID as $mostrar) { 
                    $Problema='FINANZAS'?> 
                <label class="fs20 ls2 tajawalM mdl-color-text--amber-800">Detecto Problema: </label>
                <label class="fs19 ls2 tajawalB"> <?php echo $Problema ?></label>
            <?php }
            } ?>
            <?php if($datosFormatoID[0]->detecto_problema==6){
                foreach ($datosFormatoID as $mostrar) { 
                    $Problema='SERVICIO SOCIAL & RESIDENCIAS'?> 
                <label class="fs20 ls2 tajawalM mdl-color-text--amber-800">Detecto Problema: </label>
                <label class="fs19 ls2 tajawalB"> <?php echo $Problema ?></label>
            <?php }
            } ?>
        </div>
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalM mdl-color-text--amber-900">Detecto  problematica cambiar a:</label>
        </div>   
        <div class="c-inputs-4">
            <?php foreach ($FK_area as $area){ ?>
                <div class="status">
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                        <input type="radio"  class="mdl-radio__button" name="detecto_problema" value="<?php echo $area->idarea;?>" required>
                        <span class="mdl-radio__label tajawalR ls2"><?php echo $area->nombre;?></span>
                    </label>
                </div>
            <?php }?>            
        </div>
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalM mdl-color-text--amber-900">Motivo de la Tutoría (Problema Detectado)</label>
        </div>
        <div class="c-inputs-4">
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                <?php foreach ($datosFormatoID as $mostrar) { 
                    if($mostrar->pa=='PROBLEMAS ACADEMICOS'){?> 
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="pa" checked required>
                    <?php } else{?>
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="pa">
                    <?php } ?>
                    <span class="mdl-checkbox__label">PA</span>
                </label> 
            </div>
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                    <?php if($mostrar->pe=='PROBLEMAS EMOCIONALES'){?> 
                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" name="pe" checked required>
                    <?php } else{?>
                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" name="pe">
                    <?php } ?>
                    <span class="mdl-checkbox__label">PE</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                <?php if($mostrar->c=='CANALIZACION'){?> 
                        <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input" name="c" checked required>
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
                        <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input" name="ig" checked required>
                    <?php } else{?>
                        <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input" name="ig">
                    <?php } ?>
                    <span class="mdl-checkbox__label">IG</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-5">
                <?php if($mostrar->aa=='ASESORIA ACADEMICA'){?> 
                        <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input" name="aa" checked required>
                    <?php } else{?>
                        <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input" name="aa">
                    <?php } ?>
                    <span class="mdl-checkbox__label">AA</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-6">
                <?php if($mostrar->pi=='PROBLEMAS INTERPERSONALES'){?> 
                        <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input" name="pi" checked required>
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
            <?php if($datosFormatoID[0]->FK_area==NULL){?>
                    <span class="fs19 ls2 tajawalB">NINGUNA</span>
            <?php } ?>
            <?php foreach ($datosFormatoID as $mostrar) { 
                    if($datosFormatoID[0]->FK_area==1){ 
                        $area='PSICOLOGÍA';?>       
                        <span class="fs19 ls2 tajawalB"><?php echo $area; ?></span>  
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
                        <input type="radio" id="option-5" class="mdl-radio__button" name="FK_area" value="<?php echo $mostrar->FK_area ?>" required>
                        <span class="mdl-radio__label tajawalM ls2 ">No Cambiar</span>
            <?php }
            } ?>
            <?php foreach ($datosFormatoID as $mostrar) { 
                    if($datosFormatoID[0]->FK_area==2){ 
                        $area='ACADÉMICO';?>       
                        <span class="fs19 ls2 tajawalB"><?php echo $area; ?></span>  
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
                        <input type="radio" id="option-5" class="mdl-radio__button" name="FK_area" value="<?php echo $mostrar->FK_area ?>" required>
                        <span class="mdl-radio__label tajawalM ls2 ">No Cambiar</span>
            <?php }
            } ?>        
            <?php foreach ($datosFormatoID as $mostrar) { 
                    if($datosFormatoID[0]->FK_area==3){ 
                        $area='JURÍDICO';?>       
                        <span class="fs19 ls2 tajawalB"><?php echo $area; ?></span>  
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
                        <input type="radio" id="option-5" class="mdl-radio__button" name="FK_area" value="<?php echo $mostrar->FK_area ?>" required>
                        <span class="mdl-radio__label tajawalM ls2 ">No Cambiar</span>
            <?php }
            } ?> 
            <?php foreach ($datosFormatoID as $mostrar) { 
                    if($datosFormatoID[0]->FK_area==4){ 
                        $area='CONTROL ESCOLAR';?>       
                        <span class="fs19 ls2 tajawalB"><?php echo $area; ?></span>  
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
                        <input type="radio" id="option-5" class="mdl-radio__button" name="FK_area" value="<?php echo $mostrar->FK_area ?>" required>
                        <span class="mdl-radio__label tajawalM ls2 ">No Cambiar</span>
            <?php }
            } ?>        
            <?php foreach ($datosFormatoID as $mostrar) { 
                    if($datosFormatoID[0]->FK_area==5){ 
                        $area='FINANZAS';?>       
                        <span class="fs19 ls2 tajawalB"><?php echo $area; ?></span>  
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
                        <input type="radio" id="option-5" class="mdl-radio__button" name="FK_area" value="<?php echo $mostrar->FK_area ?>" required>
                        <span class="mdl-radio__label tajawalM ls2 ">No Cambiar</span>
            <?php }
            } ?> 
            <?php foreach ($datosFormatoID as $mostrar) { 
                    if($datosFormatoID[0]->FK_area==6){ 
                        $area='SERVICIO SOCIAL & RESIDENCIAS';?>       
                        <span class="fs19 ls2 tajawalB"><?php echo $area; ?></span>  
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
                        <input type="radio" id="option-5" class="mdl-radio__button" name="FK_area" value="<?php echo $Problema ?>" required>
                        <span class="mdl-radio__label tajawalM ls2 ">No Cambiar</span>
            <?php }
            } ?>       
        </div>
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalM mdl-color-text--amber-900">Si el motivo fue cambiado a 'Canalización' llenar lo suiguiente:</label>
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