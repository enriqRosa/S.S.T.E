<section class="tutor_principal">
    <div class="tutor">
        <div class="user-circle-tutor">
            <i class="fas fa-users"></i>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR mdl-color-text--white "></i>Bienvenido (a)</i></span><br>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR mdl-color-text--white"><i class="fas fa-quote-left mdl-color-text--white"></i>Tutor (a)<i class="fas fa-quote-right mdl-color-text--white"></i></span>
        </div>    
    </div>
</section>
<section class="academico-info"> 
    <div class="grupo-academico">
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Número de Seguro:</span>          
        </div>
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Nombre(s):</span>          
        </div>
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Apellido Paterno:</span>          
        </div>
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Apellido Materno:</span> 
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
            class="mdl-button mdl-js-button mdl-color--yellow-900 mdl-js-ripple-effect mdl-color-text--white btn-pass"><i class="fas fa-key"></i>Cambiar Contraseña
        </button> 
    </div>
</section>
<!--MODAL PARA CAMBIAR CONTRASEÑA-->
<?php echo form_open("tutor/cambiarPassword"); ?>
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


