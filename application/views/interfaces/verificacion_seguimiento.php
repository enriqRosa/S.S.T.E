<main class="principales">
    <div class="usuario">
         <span class="text-dir fs40 ls2 tajawalR white"></i>Verificación de Seguimiento</i></span><br>
     </div>
</main>
<!--MUESTRA EL MENSAJE DE ERROR DE LAS VALIDACIONES COMO REGISTRO EXITOSO Y REGISTROS MODIFICADOS -->
<?php echo validation_errors('<div class="error tajawalR ls1">', '</div>'); ?>
<div class="success fs18 ls1 tajawalM mdl-color-text--green-900"><?php echo $this->session->flashdata('registro'); ?></div> 
<div class="success fs18 ls1 tajawalM mdl-color-text--green-900"><?php echo $this->session->flashdata('passError'); ?></div> 
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
            <?php if($this->session->userdata('tipo_usuario')=="AD"){
                        foreach ($mostrardatosTutorado as $row) {?>
            <tr>
                <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->semestre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->grupo; ?></td>
                <td>
                    <a href="<?= base_url() ?>Admin/registrarFormato/?matricula=<?php echo $row->matricula; ?>">
                        <?php if($this->session->userdata('tipo_usuario')=="AD"){?>
                            <a href="<?= base_url() ?>Seguimiento/index/?matricula=<?php echo $row->matricula; ?>">
                                <button 
                                    class="mdl-button mdl-js-button mdl-color--grey-700 mdl-js-ripple-effect mdl-color-text--white">
                                    <i class="fas fa-eye"></i>Seguimiento
                                </button>
                            </a>
                        <?php }?>
                    </a>
                </td>
            <?php }
            } ?>
            <?php if($this->session->userdata('tipo_usuario')=="CA"){
                    foreach ($mostrardatosTutorado as $row) {?>
            <tr>
                <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->semestre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->grupo; ?></td>
                <td>
                    <a href="<?= base_url() ?>Admin/registrarFormato/?matricula=<?php echo $row->matricula; ?>">
                        <?php if($this->session->userdata('tipo_usuario')=="CA"){?>
                            <a href="<?= base_url() ?>Seguimiento/index/?matricula=<?php echo $row->matricula; ?>">
                                <button 
                                    class="mdl-button mdl-js-button mdl-color--grey-700 mdl-js-ripple-effect mdl-color-text--white">
                                    <i class="fas fa-eye"></i>Seguimiento
                                </button>
                            </a>
                        <?php }?>
                    </a>
                </td>
            <?php }
            } ?>
            <?php if($this->session->userdata('tipo_usuario')=="CI"){
                    foreach ($mostrardatosTutorado as $row) {?>
            <tr>
                <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->semestre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->grupo; ?></td>
                <td>
                    <a href="<?= base_url() ?>Admin/registrarFormato/?matricula=<?php echo $row->matricula; ?>">
                        <?php if($this->session->userdata('tipo_usuario')=="CI"){?>
                            <a href="<?= base_url() ?>Seguimiento/index/?matricula=<?php echo $row->matricula; ?>">
                                <button 
                                    class="mdl-button mdl-js-button mdl-color--grey-700 mdl-js-ripple-effect mdl-color-text--white">
                                    <i class="fas fa-eye"></i>Seguimiento
                                </button>
                            </a>
                        <?php }?>
                    </a>
                </td>
            <?php }
            } ?>
             <?php if($this->session->userdata('tipo_usuario')=="TU"){?>
                   <?php foreach ($alumnosdeTutor as $row) {?>
            <tr>
                <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->semestre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->grupo; ?></td>
                <td>
                    <a href="<?= base_url() ?>Tutor/registrarFormato/?matricula=<?php echo $row->matricula; ?>">
                        <button 
                            class="mdl-button mdl-js-button mdl-color--orange-500 mdl-js-ripple-effect mdl-color-text--white">Agregar
                        </button>
                    </a>
                    <a href="<?= base_url() ?>Seguimiento/index/?matricula=<?php echo $row->matricula; ?>">
                        <button 
                            class="mdl-button mdl-js-button mdl-color--grey-700 mdl-js-ripple-effect mdl-color-text--white">
                            <i class="fas fa-eye"></i>Seguimiento
                        </button>
                    </a>
                </td>
            <?php }
            } ?>
    </table>
</div>
<?php include_once 'footer.php'?>