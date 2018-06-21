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
        <input class="c-formato" type="text" disabled> 
    </div>    
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Nombre del alumno (a): </span> 
        </div>
        <input class="c-formato" type="text" disabled> 
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Matrícula: </span>          
        </div>
        <div class="tutorado-inputs">
            <input class="c-formato" type="text" disabled>
                <span class="fs16 ls2 tajawalR mdl-color-text--white">Grupo:</span>          
            <input class="c-formato" type="text" disabled>
        </div>
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Ingeniería</span>          
        </div>
        <input class="c-formato" type="text" disabled> 
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Programa:</span>  
        </div>
        <input class="c-formato" type="text" disabled>         
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Correo electrónico: </span>          
        </div>
        <input class="c-formato" type="text" disabled>         
    </div>
    <div class="formato">
        <div class="info-2">
            <span class="fs16 ls2 tajawalR mdl-color-text--white">Telefono:</span>          
        </div>
        <input class="c-formato" type="text" disabled>         
    </div>

    <div class="usuario">
        <span class="fs25 ls2 tajawalR  mdl-color-text--white">Registro de Actividades</span>
    </div>
    <div class="table">
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
                    
                    <!--<td>
                        <button 
                            class="mdl-button mdl-js-button mdl-color--green-700 mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500 btn_editar_formato "><i class="fas fa-user-plus"></i>Editar
                        </button>
                    </td>-->
                </tr>
            </thead>
    </table>
    </div>
</section>
<!--MODAL PARA EDITAR FORMATO INDIVIDUAL-->
<div class="editar_modal_formato fancy">
    <div class="modal-info-3">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Registro de Seguimiento Tutorial</span>
            <form>
                <div class="c-inputs-4" > 
                    <input id="datepicker" width="276"/>
                        <script>
                            $('#datepicker').datepicker({
                                showOtherMonths: true
                            });
                        </script>
                </div>
                <div class="c-inputs-4">
                   
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label fs20 ls2 tajawalL" for="tb-mail">Hora</label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label fs20 ls2 tajawalL" for="tb-mail">Lugar</label>
                    </div>
                </div>
                
                <div class="mat-input-flex mat-form-field-flex">
                    <div class="mat-input-infix mat-form-field-infix">
                        <label class="fs20 ls2 tajawalL">Detecto Problemática</label>
                        <textarea class="mat-input-element mat-form-field-autofill-control mat-autosize ng-dirty ng-valid ng-touched"></textarea>
                    </div>
                </div>      
                <div class="c-inputs-4">
                    <label class="fs20 ls2 tajawalL">Motivo de la Tutoría (Problema Dectectado)</label>
                </div>
                <div class="c-inputs-4">
                    <div class="status">
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
                            <input type="checkbox" id="switch-1" class="mdl-switch__input">
                            <span class="mdl-switch__label tajawalR ls2">PA</span>
                        </label>
                    </div>
                    <div class="status">
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
                            <input type="checkbox" id="switch-2" class="mdl-switch__input">
                            <span class="mdl-switch__label tajawalR ls2">PE</span>
                        </label>
                    </div>
                    <div class="status">
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
                            <input type="checkbox" id="switch-3" class="mdl-switch__input">
                            <span class="mdl-switch__label tajawalR ls2">C</span>
                        </label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="status">
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4">
                            <input type="checkbox" id="switch-4" class="mdl-switch__input">
                            <span class="mdl-switch__label tajawalR ls2">IG</span>
                        </label>
                    </div>
                    <div class="status">
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5">
                            <input type="checkbox" id="switch-5" class="mdl-switch__input">
                            <span class="mdl-switch__label tajawalR ls2">AA</span>
                        </label>
                    </div>
                    <div class="status">
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6">
                            <input type="checkbox" id="switch-6" class="mdl-switch__input">
                            <span class="mdl-switch__label tajawalR ls2">PI</span>
                        </label>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <label class="fs20 ls2 tajawalL">Área en la que fue canalizada</label>
                </div>
                <div class="c-inputs-4">
                    <div class="status">
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7">
                            <input type="checkbox" id="switch-7" class="mdl-switch__input">
                            <span class="mdl-switch__label tajawalR ls2">Psicología</span>
                        </label>
                    </div>
                </div>
                <div class="c-inputs-4">
                        <div class="status">
                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-8">
                                <input type="checkbox" id="switch-8" class="mdl-switch__input">
                                <span class="mdl-switch__label tajawalR ls2">Academico</span>
                            </label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="status">
                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-9">
                                <input type="checkbox" id="switch-9" class="mdl-switch__input">
                                <span class="mdl-switch__label tajawalR ls2">Juridico</span>
                            </label>
                        </div>
                    </div>
            </form>
            <div class="modals">
                <button class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Cancelar</button>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div>           
    </div>  
</div>

<?php include_once 'footer.php'?>