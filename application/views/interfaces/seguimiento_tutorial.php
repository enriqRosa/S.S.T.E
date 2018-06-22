<section class="seguimiento">
    <div class="usuario">
        <span class="fs30 ls2 tajawalR mdl-color-text--white">FORMATO DE SEGUIMIENTO TUTORIAL</span>
    </div>
    <div class="formato">
        <span class="fs16 ls1 tajawalL mdl-color-text--grey-100">
        El presente formato tiene la finalidad de dar seguimiento a las sesiones programadas con los estudiantes que se le 
        asignaron en el presente semestre.
        Así mismo es el comprobante de las sesiones para la evaluación del desempeño.</span>
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Mtro. Tutor:</span>         
        </div>
        <?php foreach ($vernombreTutor as $mostrarnombre) { ?>
            <input class="c-formato" type="text" value="<?php echo $mostrarnombre->nombre;?> <?php echo $mostrarnombre->ap_paterno;?> <?php echo $mostrarnombre->ap_materno;?>" disabled> 
        <?php } ?>
    </div>    
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Nombre del alumno (a): </span> 
        </div>
        <?php foreach ($mostrardatosTutorado as $mostrar) { ?>
            <input class="c-formato" type="text" value="<?php echo $mostrar->nombre;?> <?php echo $mostrar->ap_paterno;?> <?php echo $mostrar->ap_materno;?>" disabled> 
        <?php } ?>
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Matrícula: </span>          
        </div>
        <div class="tutorado-inputs">
        <?php foreach ($mostrardatosTutorado as $mostrar) { ?>
            <input class="c-formato" type="text" name="matricula" value="<?php echo $mostrar->matricula;?>" disabled>
       
                <span class="fs16 ls2 tajawalR mdl-color-text--white">Grupo:</span>          
            <input class="c-formato" type="text"value="<?php echo $mostrar->grupo;?>" disabled>
        </div>
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Ingeniería:</span>          
        </div>
        <?php if($mostrar->carrera=='ISC'){
            $carrera="INGENIERÍA EN SISTEMAS COMPUTACIONALES"; ?>
        <input class="c-formato" type="text" value="<?php echo $carrera?>" disabled> 
        <?php } ?>
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Programa:</span>  
        </div>
        <input class="c-formato" type="text" value="<?php echo $mostrar->programa;?>" disabled>         
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Correo electrónico: </span>          
        </div>
        <input class="c-formato" type="text" value="<?php echo $mostrar->correo;?>" disabled>         
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Telefono:</span>          
        </div>
        <input class="c-formato" type="text" value="<?php echo $mostrar->telefono;?>" disabled>         
    </div>
        <?php } ?>
    </section>
    <div class="usuario">
        <span class="fs25 ls2 tajawalR">Registro de Actividades</span>
    </div>
    <div class="table2 overflow">
        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Fecha</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Hora</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Lugar</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Motivo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Problematica</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Área</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Avance</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Firma Alumno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Firma Tutor</td>
                </tr>
            </thead>
            <?php foreach ($mostrardatosFormato as $row) {
                    foreach ($mostrarsalonFormato as $salon){
                        foreach ($mostrarareaFormato as $area){
                            foreach ($mostrarmotivosFormato as $motivos){
                            if($motivos->pa!='NULL'){
                                $pa=$motivos->pa;
                            }else{
                                $pa="";
                            }
                            if ($motivos->pe!='NULL') {
                                $pe=$motivos->pe;
                            }else{
                                $pe="";
                            }
                            if($motivos->c!='NULL'){
                               $c=$motivos->c;
                            }else{
                                $c="";
                            }
                            if($motivos->ig!='NULL'){
                                $ig=$motivos->ig;
                            }else{
                                $ig="";
                            }
                            if($motivos->aa!='NULL'){
                               $aa=$motivos->aa;
                            }else{
                                $aa="";
                            }
                            if($motivos->pi!='NULL'){
                                $pi=$motivos->pi;
                            }else{
                                $pi="";
                            }    
            ?>
            <tr>
                <td class="tajawalL fs16 "><?php echo $row->fecha; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->hora; ?></td>
                <td class="tajawalL fs16 "><?php echo $salon->salon; ?></td>
                <td class="tajawalL fs16 "><?php echo $pa; ?><br><?php echo $pe; ?><br><?php echo $c; ?><br><?php echo $ig; ?><br><?php echo $aa; ?><br><?php echo $pi; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->detecto_problema; ?></td>
                <td class="tajawalL fs16 "><?php echo $area->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->avance; ?></td>
                <td></td>
                <td></td>
                <td>
                        <button 
                            class="mdl-button mdl-js-button mdl-color--green-700 mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500 btn_editar_formato "><i class="fas fa-user-plus"></i>Editar
                        </button>
                    </td>
            </tr>
            <?php       
                        }
                    }
                }
            }?>
    </table>
    </div>
</section>
<!--MODAL PARA EDITAR FORMATO INDIVIDUAL-->
<?php echo form_open("Seguimiento/editarFormato"); ?>
<div class="editar_modal_formato fancy">
    <div class="modal-info">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Editar Seguimiento</span> 
        <?php foreach ($mostrardatosFormato as $mostrar) { ?>
                <input type="hidden" name="idformato" value="<?php echo $mostrar->idformato ?>">
        <?php } ?>
        <div class="c-inputs-4">
            <div class="mat-input-flex mat-form-field-flex">
                <div class="mat-input-infix mat-form-field-infix">
                    <label class="fs20 ls2 tajawalL mdl-color-text--indigo-900">Detecto Problemática</label>
                        <?php foreach ($mostrardatosFormato as $mostrar) { ?> 
                            <textarea class="mat-input-element mat-form-field-autofill-control mat-autosize ng-dirty ng-valid ng-touched" name="detecto_problema"><?php echo $mostrar->detecto_problema ?></textarea>
                        <?php } ?>
                </div>
            </div>
        </div>      
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalL mdl-color-text--indigo-900">Motivo de la Tutoría (Problema Detectado)</label>
        </div>
        <div class="c-inputs-4">
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                <?php foreach ($mostrardatosFormato as $mostrar) { 
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
                    } ?>
                    <span class="mdl-checkbox__label">PI</span>
                </label>
            </div>
        </div>
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalL mdl-color-text--indigo-900">Área en la que fue canalizada</label>
        </div>
        <div class="c-inputs-4">
            <?php foreach ($FK_area as $area){ ?>
                 <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                 <input type="radio"  class="mdl-radio__button" name="FK_area" value="<?php echo $area->idarea;?>">
                 <span class="mdl-radio__label tajawalR ls2"><?php echo $area->nombre;?></span>
                    
            <?php }
            } ?>
                    </label>
                </div>
           
     
        
        <div class="c-inputs-4">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="avance" required>
					<label class="mdl-textfield__label fs12 ls2 tajawalR" for="tb-mail">Avance</label>
			</div>
        </div>
        <div class="c-inputs-4">
            <label class="fs20 ls2 tajawalL mdl-color-text--indigo-900">Firmas</label>
        </div>
        <div class="c-inputs-4">
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-7">
                    <input type="checkbox" id="checkbox-7" class="mdl-checkbox__input" name="firma_tutor" value="SI">
                    <span class="mdl-checkbox__label">Firma Tutor</span>
                </label>
            </div>
            <div class="status">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-8">
                    <input type="checkbox" id="checkbox-8" class="mdl-checkbox__input" name="firma_alumno" value="SI">
                    <span class="mdl-checkbox__label">Firma Alumno</span>
                </label>
            </div>
        </div>        
            <div class="modals">
                <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="Cancelar"></button>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div> 
        </div>          
    </div>  
</div>
<?php echo form_close(); ?>
<?php include_once 'footer.php'?>