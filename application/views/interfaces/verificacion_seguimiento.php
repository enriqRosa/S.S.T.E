<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design DatePicker</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
</body>
</html>

<main class="principales">
    <div class="usuario">
         <span class="text-dir fs40 ls2 tajawalR white"></i>Verificación de Seguimiento</i></span><br>
     </div>
</main>
<div class="table">
        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Matricula</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Paterno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Materno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Semestre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Grupo</td>
                    <td>
                        <button 
                            class="mdl-button mdl-js-button mdl-color--green-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-registar"><i class="fas fa-user-plus"></i>Agregar
                        </button>
                    </td>
                    <td>
                        <button 
                            class="mdl-button mdl-js-button mdl-color--grey-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100"><i class="fas fa-eye"></i>Seguimiento
                        </button>
                    </td>
                </tr>
            </thead>
    </table>
</div>
<!-- MODAL PARA REGISTRO DE SEGUIMIENTO TUTORIAL-->
<div class="registar-modal fancy ">
    <div class="modal-info-3">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Registro de Seguimiento Tutorial</span>
            <form>
                <div class="c-inputs-4" > 
                    <input id="datepicker" width="276" />
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





<!--<main class="informacion3_2">
    <div class="user-circle-tutor">
        <i class="fas fa-file-alt"></i>
    </div>
    <div class="usuario">
        <span class="text-dir fs25 ls2 tajawalR">Verificación de Seguimiento</span>
    </div>
    <hr class="line2">
    <div class="table">
        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Matricula</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Paterno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Apellido Materno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Semestre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Grupo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Agregar</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14">Seguimiento</td>
                </tr>
            </thead>
    </table>
</main>-->
