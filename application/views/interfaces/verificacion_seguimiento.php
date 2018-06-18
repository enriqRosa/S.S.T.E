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
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Matricula</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Paterno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Materno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Semestre</td>
                </tr>
            </thead>
            <?php foreach ($mostrardatosTutorado as $row) {?>
            <tr>
                <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->semestre; ?></td>
                <td>
                        <button 
                            class="mdl-button mdl-js-button mdl-color--green-700 mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500 btn-pass"><i class="fas fa-user-plus"></i>Agregar
                        </button>
                    </td>
                    <td>
                        <a href="<?= base_url() ?>Seguimiento/index">
                            <button 
                                class="mdl-button mdl-js-button mdl-color--grey-700 mdl-js-ripple-effect mdl-color-text--white">
                                <i class="fas fa-eye"></i>Seguimiento
                            </button>
                        </a>
                    </td>
            <?php } ?>
    </table>
</div>
<!-- MODAL PARA REGISTRO DE SEGUIMIENTO TUTORIAL-->
<div class="pass-modal fancy ">
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
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="2">
                            <span class="mdl-radio__label tajawalR ls2">Psicología</span>
                        </label>
                    </div>
                </div>
                <div class="c-inputs-4">
                        <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                            <span class="mdl-radio__label tajawalR ls2">Academico</span>
                        </label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="status">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                            <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="2">
                            <span class="mdl-radio__label tajawalR ls2">Juridico</span>
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