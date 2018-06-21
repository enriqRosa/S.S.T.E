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
                    <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 mdl-color--black white">Grupo</td>
                </tr>
            </thead>
            <?php foreach ($mostrardatosTutorado as $row) {?>
            <tr>
                <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->semestre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->grupo; ?></td>
                <td>
                    <a href="<?= base_url() ?>Admin/registrarFormato/?matricula=<?php echo $row->matricula; ?>">
                        <button 
                            class="mdl-button mdl-js-button mdl-color--green-700 mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500 btn-pass"><i class="fas fa-user-plus"></i>Agregar
                        </button>
                    </a>
                    </td>
                    <td>
                        <a href="<?= base_url() ?>Seguimiento/index/?matricula=<?php echo $row->matricula; ?>">
                            <button 
                                class="mdl-button mdl-js-button mdl-color--grey-700 mdl-js-ripple-effect mdl-color-text--white">
                                <i class="fas fa-eye"></i>Seguimiento
                            </button>
                        </a>
                    </td>
            <?php } ?>
    </table>
</div>
<?php include_once 'footer.php'?>