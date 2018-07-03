<section class="tutor_tutorado">
    <div class="usuario">
        <span class="text-dir fs40 ls2 tajawalR">Asignación de Tutores</span><br>
    </div>
</section>
<div class="success fs18 ls1 tajawalM mdl-color-text--green-900"><?php echo $this->session->flashdata('registro'); ?></div> 
<div class="success fs18 ls1 tajawalM mdl-color-text--green-900"><?php echo $this->session->flashdata('editar'); ?></div> 
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
        <?php if($this->session->userdata('tipo_usuario')=="AD"){
                foreach ($mostrardatosTutorado as $row) {?>
            <tr>
                <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                    
                <td class="tajawalL fs16 "><?php echo $row->FK_tutor; ?></td>
                 
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 ">
                    <a href="<?= base_url() ?>Admin/mostrarTutores/?matricula=<?php echo $row->matricula; ?>">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500 btn-pass">
                            <i class="fas fa-edit"></i>Asignar
                        </button>
                    </a>
                </td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 btn-editar">
                    <a href="<?= base_url() ?>Admin/cambiarTutor/?matricula=<?php echo $row->matricula; ?>">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--red-800">
                            <i class="fas fa-edit"></i>Editar
                        </button>
                    </a>
                </td>
            </tr>
        <?php
                }     
            }
        ?>
        <?php if($this->session->userdata('tipo_usuario')=="CA"){
                foreach ($mostrardatosTutorado as $row) {?>
            <tr>
                <td class="tajawalL fs16 "><?php echo $row->matricula; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->nombre; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_paterno; ?></td>
                <td class="tajawalL fs16 "><?php echo $row->ap_materno; ?></td>
                    
                <td class="tajawalL fs16 "><?php echo $row->FK_tutor; ?></td>
                 
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 ">
                    <a href="<?= base_url() ?>C_academico/mostrarTutores/?matricula=<?php echo $row->matricula; ?>">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--orange-500 btn-pass">
                            <i class="fas fa-edit"></i>Asignar
                        </button>
                    </a>
                </td>
                <td class="mdl-data-table__cell--non-numeric tajawalM ls1 fs14 btn-editar">
                    <a href="<?= base_url() ?>C_academico/cambiarTutor/?matricula=<?php echo $row->matricula; ?>">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white mdl-color--red-800">
                            <i class="fas fa-edit"></i>Editar
                        </button>
                    </a>
                </td>
            </tr>
        <?php
                }     
            }
        ?>
    </table>
</div>        
<?php include_once 'footer.php' ?>



