<section class="tutor_tutorado">
    <div class="usuario">
        <span class="text-dir fs40 ls2 tajawalR white">Asignación de Tutores</span><br>
    </div>
</section>
<div class="table">
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
        <thead>
            <tr>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Matricula</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Nombre</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Paterno</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Materno</td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Tutor</td>
            </tr>
        </thead>
        <?php
            foreach ($mostrardatosTutorado as $row) {
        ?>
            <tr>
                <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                <td></td>
                <td></td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 ">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500 btn-pass">
                        <i class="fas fa-edit"></i>Asignar
                    </button>
                </td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 btn-editar">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--red-800">
                        <i class="fas fa-edit"></i>Editar
                    </button>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>
    <!--MODAL ASIGNAR-->
    <div class="pass-modal fancy ">
        <div class="modal-info-5">
            <span class="mdl-dialog__title fs25 tajawalL ls1">Asignar Tutor</span>
            <div class="c-inputs-4" >
                <div class="form-icons"><i class="fas fa-user"></i></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                    <input type="text" value="" class="mdl-textfield__input mdl-color-text--black" id="">
                    <input type="hidden" value="" name="semestre">
                        <label for="" class="mdl-textfield__label">Tutor</label>
                        <ul for=""class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            
                        </ul>
                </div>
            </div>
            <div class="modals">
                <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="Cancelar"></input>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div> 
        </div>
    </div>
    <!--MODAL EDITAR-->
    <div class="editar-modal fancy ">
        <div class="modal-info-5">
            <span class="mdl-dialog__title fs25 tajawalL ls1">Editar Tutor</span>
            <div class="c-inputs-4">
                <span class="fs19 ls2 tajawalR">Tutor:</span>                                            
                <span class="fs19 ls2 tajawalB"></span>                                            
            </div> 
            <div class="c-inputs-4" >
                <span class="fs19 ls2 tajawalR">Cambiar a:</span> 
            </div>
            <div class="c-inputs-4" >                                    
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                    <input type="text" value="" class="mdl-textfield__input mdl-color-text--black" id="">
                    <input type="hidden" value="" name="semestre">
                        <label for="" class="mdl-textfield__label">Tutor</label>
                        <ul for=""class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            
                        </ul>
                </div>
            </div>
            <div class="c-inputs-4" >  
                <div class="status">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label fs19 ls2 tajawalR">No cambiar</span>
                    </label>
                </div>
            </div>
            <div class="modals">
                <input type="button" class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100" value="Cancelar"></input>
                <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
            </div> 
        </div>
    </div>
    
<?php include_once 'footer.php' ?>



