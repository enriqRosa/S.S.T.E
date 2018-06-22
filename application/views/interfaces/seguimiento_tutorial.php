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
                    <td class="mdl-data-table__cell--non-numeric tajawalB mdl-color--blue-grey-200  ls1 fs14">ID</td>
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
            <?php foreach ($datoscompletosFormato as $row){
                if($row->pa!='NULL'){
                                $pa=$row->pa;
                            }else{
                                $pa="";
                            }
                            if ($row->pe!='NULL') {
                                $pe=$row->pe;
                            }else{
                                $pe="";
                            }
                            if($row->c!='NULL'){
                               $c=$row->c;
                            }else{
                                $c="";
                            }
                            if($row->ig!='NULL'){
                                $ig=$row->ig;
                            }else{
                                $ig="";
                            }
                            if($row->aa!='NULL'){
                               $aa=$row->aa;
                            }else{
                                $aa="";
                            }
                            if($row->pi!='NULL'){
                                $pi=$row->pi;
                            }else{
                                $pi="";
                            }   ?>  
            
            <tr>
          
                <td class="tajawalL fs16 "><?php echo $row->idformato ?></td>
                <td class="tajawalL fs16 "><?php echo $row->fecha; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->hora; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->salon; ?></td>
                <td class="tajawalL fs16 "><?php echo $pa; ?><br><?php echo $pe; ?><br><?php echo $c; ?><br><?php echo $ig; ?><br><?php echo $aa; ?><br><?php echo $pi; ?><br></td>
                <td class="tajawalL fs16 "><?php echo $row->detecto_problema; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->avance; ?></td>
                <td></td>
                <td></td>
                <td>
                    <a href="<?= base_url() ?>Seguimiento/actividadFormato/?idformato=<?php echo $row->idformato; ?>"> 
                        <button 
                            class="mdl-button mdl-js-button mdl-color--green-700 mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500 btn_editar_formato "><i class="fas fa-user-plus"></i>Editar
                        </button>
                    </a>    
                </td>
            </tr>
             <?php 
             } ?>
        </table>
    </div>
<?php include_once 'footer.php'?>