<section class="tutor_tutorado">
    <div class="usuario">
        <span class="text-dir fs40 ls2 tajawalR white">Asignación de Tutores</span><br>
    </div>
</section>
<div class="table2 overflow">
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <thead>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Matricula</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Nombre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Paterno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Apellido Materno</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Tutor</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Materia</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Grupo</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Semestre</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Edificio</td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Aula</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 ">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500 btn-pass">
                            <i class="fas fa-edit"></i>Asignar
                        </button>
                    </td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 ">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--red-800">
                            <i class="fas fa-edit"></i>Editar
                        </button>
                    </td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 ">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--red-800">
                            <i class="fas fa-edit"></i>Agregar nuevo
                        </button>
                    </td>
                </tr>
            <?php
                }
            ?>
    </table>
</div>
    <div class="pass-modal fancy ">
        <div class="modal-info-3">
            <span class="mdl-dialog__title fs25 tajawalL ls1">Asignar Tutor</span>
            <div class="c-inputs-4" >
            <div class="form-icons"><i class="fas fa-question"></i></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                    <input type="text" value="" class="mdl-textfield__input mdl-color-text--black" id="">
                    <input type="hidden" value="" name="semestre">
                        <label for="" class="mdl-textfield__label">Semestre</label>
                        <ul for=""class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <li class="mdl-menu__item" data-val="PRIMERO">PRIMERO</li>
                            <li class="mdl-menu__item" data-val="SEGUNDO">SEGUNDO</li>
                            <li class="mdl-menu__item" data-val="TERCERO">TERCERO</li>
                            <li class="mdl-menu__item" data-val="CUARTO">CUARTO</li>
                            <li class="mdl-menu__item" data-val="QUINTO">QUINTO</li>
                            <li class="mdl-menu__item" data-val="SEXTO">SEXTO</li>
                            <li class="mdl-menu__item" data-val="SEPTIMO">SEPTIMO</li>
                            <li class="mdl-menu__item" data-val="OCTAVO">OCTAVO</li>
                            <li class="mdl-menu__item" data-val="NOVENO">NOVENO</li>
                            <li class="mdl-menu__item" data-val="DECIMO">DECIMO</li>
                            <li class="mdl-menu__item" data-val="ONCIAVO">ONCIAVO</li>
                            <li class="mdl-menu__item" data-val="DECIMO">DECIMO</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'footer.php' ?>



