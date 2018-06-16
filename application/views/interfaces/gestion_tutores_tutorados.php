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
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500">
                            <i class="fas fa-edit"></i>Asignar
                        </button>
                    </td>
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 ">
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
<?php include_once 'footer.php' ?>



