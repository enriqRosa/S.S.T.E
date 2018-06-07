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
<?php include_once 'footer.php'?>









<!--

<section class="info">
    <div class="grupo">
        <div class="info-1_3">
            <i class="fas fa-id-card"></i>          
        </div>
    </div>
    <div class="c-inputs-2">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="sample1" disabled>
        </div>
    </div>
    <div class="grupo">
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
            <span class="fs15 ls2 tajawalR">Correo:</span>          
        </div>
    </div>
    <div class="c-inputs-2">
        <div class="mdl-textfield mdl-js-textfield ">
            <input class="mdl-textfield__input" type="text"disabled >
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" disabled >
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" disabled >
        </div>
        <div class="mdl-textfield mdl-js-textfield ">
            <input class="mdl-textfield__input" type="text"disabled >
        </div>
    </div>
</section>
<section class="academico-modalBtn">
    <div class="modals">
        <button class="mdl-button mdl-js-button mdl-color--black mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-pass">
        <i class="fas fa-key"></i>Cambiar Contraseña</button>
    </div>
</section>-->
<?php include_once 'modal_contraseña.php'?>

