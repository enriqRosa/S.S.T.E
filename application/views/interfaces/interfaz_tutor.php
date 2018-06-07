<nav class="menu-right">
    <button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200"><i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-file-alt"></i>Registro</li></a>
        <a href="verificacion_seguimiento.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Verificación de Seguimiento</li></a>
        <a href="index.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>
</nav>
<section class="tutor_principal">
    <div class="tutor">
        <div class="user-circle-tutor">
            <i class="fas fa-users"></i>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR mdl-color-text--white "></i>Bienvenido (a)</i></span><br>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR mdl-color-text--white"><i class="fas fa-quote-left white"></i>Tutor (a)<i class="fas fa-quote-right white"></i></span>
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
            class="mdl-button mdl-js-button mdl-color--yellow-900 mdl-js-ripple-effect mdl-color-text--white btn-pass"><i class="fas fa-key"></i>Cambiar Contraseña
        </button> 
    </div>
</section>
<?php include_once 'footer.php'?>


<?php include_once 'modal_contraseña.php'?>
