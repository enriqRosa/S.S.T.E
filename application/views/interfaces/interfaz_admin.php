<main class="admin_principal">
    <section class="admin">
        <div class="user-circle-admin">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR white"></i>Bienvenido</i></span><br>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR white"><i class="fas fa-quote-left mdl-color-text--white"></i>Administrador<i class="fas fa-quote-right mdl-color-text--white"></i></span>
        </div> 
    </section> 
</main>
<!--MUESTRA EL MENSAJE DE ERROR DE LAS VALIDACIONES-->
<?php echo validation_errors('<div class="error tajawalR ls1">', '</div>'); ?>
<div class="success fs18 ls1 tajawalM mdl-color-text--green-900"><?php echo $this->session->flashdata('pass'); ?></div> 
<div class="success fs18 ls1 tajawalM mdl-color-text--green-900"><?php echo $this->session->flashdata('passError'); ?></div> 
<section class=admin-info>
    <div class="grupo-admin">
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Nombre(s):</span>          
        </div>
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Apellido Paterno:</span>          
        </div>
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Apellido Materno:</span>          
        </div>
    </div>
    <form>
        <?php foreach($posts as $post){?>
            <div class="c-inputs-4" >   
                <div class="mdl-textfield mdl-js-textfield ">         
                    <?php echo $post->nombre;?>                        
                </div>          
                <div class="mdl-textfield mdl-js-textfield">
                    <?php echo $post->ap_paterno;?>   
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                    <?php echo $post->ap_materno;?>   
                </div>
            </div>
        <?php }?>  
    </form>
    <div class="modals_2"> 
        <button 
            class="mdl-button mdl-js-button mdl-color--teal-900 mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-pass"><i class="fas fa-key"></i>Cambiar Contraseña
        </button>       
    </div> 
</section>
<!--MODAL PARA CAMBIAR CONTRASEÑA-->
<?php echo form_open("admin/cambiarPassword"); ?>
<div class="pass-modal fancy">
    <div class="modal-info-5">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Modificar Contraseña</span>
            <form>
                <div class="c-inputs-4" >
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" name="actual_pswd">
                        <label class="mdl-textfield__label tajawalL" required>Ingresa tu contraseña actual</label>
                        <?php form_error("actual_pswd"); ?>
                    </div>
                </div>
                <div class="c-inputs-4">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" name="new_pswd">
                            <label class="mdl-textfield__label tajawalL" required>Ingresa nueva contraseña</label>
                            <?php form_error("new_pswd"); ?>
                    </div>
                </div>
                <div class="c-inputs-4">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" name="repeat_pswd">
                            <label class="mdl-textfield__label tajawalL" required>Confirmar contraseña</label>
                            <?php form_error("repeat_pswd"); ?>
                    </div>
                </div>
            </form>
        <div class="modals">
            <button class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Cancelar</button>
            <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
        </div>
    </div>  
</div>
<?php echo form_close(); ?> 
<?php include_once 'footer.php'?>











