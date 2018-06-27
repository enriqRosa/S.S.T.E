<section class="seguimiento">
    <div class="usuario">
        <img src="../../assets/images/Encabezado.png">
    </div>
    <div class="usuario">
        <span class="fs30 ls2 tajawalR ">FORMATO DE SEGUIMIENTO TUTORIAL</span>
    </div>
    <div class="formato">
        <span class="fs16 ls1 tajawalR">
        El presente formato tiene la finalidad de dar seguimiento a las sesiones programadas con los estudiantes que se le 
        asignaron en el presente semestre.
        Así mismo es el comprobante de las sesiones para la evaluación del desempeño.</span>
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR ">Mtro. Tutor:</span>         
        </div>
        <?php foreach ($vernombreTutor as $mostrarnombre) { ?>
            <input class="c-formato" type="text" value="<?php echo $mostrarnombre->nombre;?> <?php echo $mostrarnombre->ap_paterno;?> <?php echo $mostrarnombre->ap_materno;?>" disabled> 
        <?php } ?>
    </div>    
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR">Nombre del alumno (a): </span> 
        </div>
        <?php foreach ($mostrardatosTutorado as $mostrar) { ?>
            <input class="c-formato" type="text" value="<?php echo $mostrar->nombre;?> <?php echo $mostrar->ap_paterno;?> <?php echo $mostrar->ap_materno;?>" disabled> 
        <?php } ?>
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR">Matrícula: </span>          
        </div>
        <div class="tutorado-inputs">
        <?php foreach ($mostrardatosTutorado as $mostrar) { ?>
            <input class="c-formato" type="text" name="matricula" value="<?php echo $mostrar->matricula;?>" disabled>
       
                <span class="fs16 ls2 tajawalR">Grupo:</span>          
            <input class="c-formato" type="text"value="<?php echo $mostrar->grupo;?>" disabled>
        </div>
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR">Ingeniería:</span>          
        </div>
        <?php if($mostrar->carrera=='ISC'){
            $carrera="INGENIERÍA EN SISTEMAS COMPUTACIONALES"; ?>
        <input class="c-formato" type="text" value="<?php echo $carrera?>" disabled> 
        <?php } ?>
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR">Programa:</span>  
        </div>
        <input class="c-formato" type="text" value="<?php echo $mostrar->programa;?>" disabled>         
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR">Correo electrónico: </span>          
        </div>
        <input class="c-formato" type="text" value="<?php echo $mostrar->correo;?>" disabled>         
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR">Telefono:</span>          
        </div>
        <input class="c-formato" type="text" value="<?php echo $mostrar->telefono;?>" disabled>         
    </div>
        <?php } ?>
    </section>
    <div class="usuario">
        <span class="fs25 ls2 tajawalR">Registro de Actividades</span>
    </div>
    <div class="table">
        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">ID</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Fecha</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Hora</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Lugar</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Problematica</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Área</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Avance</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Firma Alumno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">Firma Tutor</td>
                </tr>
            </thead>
            <?php if($this->session->userdata('tipo_usuario')=='TU'){
                    foreach ($datoscompletosFormato as $row){ ?>
                        <tr>
                            <td class="tajawalL fs16 "><?php echo $row->idformato ?></td>
                            <td class="tajawalL fs16 "><?php echo $row->fecha; ?></td>
                            <td class="tajawalL fs16 "><?php echo $row->hora; ?></td>
                            <td class="tajawalL fs16 "><?php echo $row->salon; ?></td>
                            <td class="tajawalL fs16 "><?php echo $row->detecto_problema; ?></td>
                            <?php if($row->FK_area==NULL){ ?>
                                    <td></td>
                            <?php }?>
                            <?php if($row->FK_area==1){ 
                                    $area='PSICOLOGÍA';?>
                            <td class="tajawalL fs16 "><?php echo $area; ?></td>
                             <?php   } ?>
                            <?php if($row->FK_area==2){ 
                                    $area='ACADÉMICO';?>
                            <td class="tajawalL fs16 "><?php echo $area; ?></td>
                             <?php   } ?>
                            <?php if($row->FK_area==3){ 
                                    $area='JURÍDICO';?>
                            <td class="tajawalL fs16 "><?php echo $area; ?></td>
                             <?php   } ?>
                            <?php if($row->FK_area==4){ 
                                    $area='CONTROL ESCOLAR';?>
                            <td class="tajawalL fs16 "><?php echo $area; ?></td>
                             <?php   } ?>
                            <?php if($row->FK_area==5){ 
                                    $area='FINANZAS';?>
                            <td class="tajawalL fs16 "><?php echo $area; ?></td>
                             <?php   } ?>
                             <?php if($row->FK_area==6){ 
                                    $area='SERVICIO SOCIAL & RESIDENCIAS';?>
                            <td class="tajawalL fs16 "><?php echo $area; ?></td>
                             <?php   } ?>
                            <td class="tajawalL fs16 "><?php echo $row->avance; ?></td>
                            <td class="tajawalL fs16 "><?php echo $row->firma_alumno; ?></td>
                            <td class="tajawalL fs16 "><?php echo $row->firma_tutor; ?></td>
                            <td>
                                <a href="<?= base_url() ?>Seguimiento/actividadFormato/?idformato=<?php echo $row->idformato; ?>"> 
                                    <button 
                                        class="mdl-button mdl-js-button mdl-color--red-700 mdl-js-ripple-effect mdl-color-text--white btn_editar_formato "></i>Editar
                                    </button>
                                </a>    
                            </td>
                        </tr>
                    <?php }
                    } ?>
                    <?php if($this->session->userdata('tipo_usuario')=='AD'){
                            foreach ($datoscompletosFormato as $row){?>
                    <tr>
                        <td class="tajawalL fs16 "><?php echo $row->idformato ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->fecha; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->hora; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->salon; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->detecto_problema; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->avance; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->firma_alumno; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->firma_tutor; ?></td>
                     <?php }
                     } ?>
                     <?php if($this->session->userdata('tipo_usuario')=='CA'){
                            foreach ($datoscompletosFormato as $row){?>
                    <tr>
                        <td class="tajawalL fs16 "><?php echo $row->idformato ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->fecha; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->hora; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->salon; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->detecto_problema; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->avance; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->firma_alumno; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->firma_tutor; ?></td>
                    <?php }
                    } ?>
                     <?php if($this->session->userdata('tipo_usuario')=='CI'){
                            foreach ($datoscompletosFormato as $row){?>
                    <tr>
                        <td class="tajawalL fs16 "><?php echo $row->idformato ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->fecha; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->hora; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->salon; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->detecto_problema; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->avance; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->firma_alumno; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->firma_tutor; ?></td>
                    <?php }
                    } ?>
                    <?php if($this->session->userdata('tipo_usuario')=='TO'){
                    foreach ($datoscompletosFormato as $row){?>
                    <tr>
                        <td class="tajawalL fs16 "><?php echo $row->idformato ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->fecha; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->hora; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->salon; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->detecto_problema; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->avance; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->firma_alumno; ?></td>
                        <td class="tajawalL fs16 "><?php echo $row->firma_tutor; ?></td>
                    <?php }
                    } ?>
        </table>
    </div>
<?php include_once 'footer.php'?>