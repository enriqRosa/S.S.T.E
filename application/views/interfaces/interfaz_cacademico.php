<section class="academico_principal">
    <div class="academico">
        <div class="user-circle-academico">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR white">Bienvenido (a)</i></span>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR white"><i class="fas fa-quote-left white"></i>Coordinador (a) Acádemico<i class="fas fa-quote-right white"></i></span>
        </div>
    </div>
</section>
<section class="academico-info">
    <div class="grupo-academico">
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Número de Seguro:</span>          
        </div>
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Apellido Paterno:</span>          
        </div>
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Apellido Materno:</span>          
        </div>
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Nombre(s):</span> 
        </div>  
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Correo</span> 
        </div>       
    </div>
    <?php foreach($posts as $post){?>
        <div class="c-inputs-4" >
            <div class="mdl-textfield mdl-js-textfield ">
                <?php echo $post->matricula;?> 
            </div> 
            <div class="mdl-textfield mdl-js-textfield ">
                <?php echo $post->nombre;?> 
            </div>                  
            <div class="mdl-textfield mdl-js-textfield ">
                <?php echo $post->ap_paterno;?>
            </div>   
            <div class="mdl-textfield mdl-js-textfield">
                <?php echo $post->ap_materno;?>
            </div>
            <div class="mdl-textfield mdl-js-textfield">
                <?php echo $post->correo;?>
            </div>
        </div>
    <?php }?>  
    <div class="modals_2">
        <button 
            class="mdl-button mdl-js-button mdl-color--red-700 mdl-js-ripple-effect mdl-color-text--white btn-pass"><i class="fas fa-key"></i>Cambiar Contraseña
        </button> 
    </div>
</section>
<!--MODAL PARA CAMBIAR CONTRASEÑA-->
<?php echo form_open("C_academico/cambiarPassword"); ?>
<div class="pass-modal fancy">
    <div class="modal-info">
        <span class="mdl-dialog__title fs25 tajawalL ls1">Modificar Contraseña</span>
            <form>
                <div class="c-inputs-4" >
                    <div class="mdl-textfield mdl-js-textfield ">
                        <input class="mdl-textfield__input" type="password" name="actual_pswd">
                        <label class="mdl-textfield__label tajawalL" required="required">Ingresa tu contraseña actual</label>
                        <?php form_error("actual_pswd"); ?>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="mdl-textfield mdl-js-textfield ">
                        <input class="mdl-textfield__input" type="password" name="new_pswd">
                            <label class="mdl-textfield__label tajawalL" required="required">Ingresa nueva contraseña</label>
                            <?php form_error("new_pswd"); ?>
                    </div>
                </div>
                <div class="c-inputs-4">
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" name="repeat_pswd">
                            <label class="mdl-textfield__label tajawalL" required="required">Confirmar contraseña</label>
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
