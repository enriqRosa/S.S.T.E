<main class="admin_principal">
    <section class="admin">
        <div class="user-circle-admin">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR white"></i>Bienvenido</i></span><br>
        </div>
        <div class="usuario">
            <span class="text-dir fs40 ls2 tajawalR white"><i class="fas fa-quote-left white"></i>Administrador<i class="fas fa-quote-right white"></i></span>
        </div> 
    </section> 
</main>
<section class=admin-info>
    <div class="grupo-admin">
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Apellido Paterno:</span>          
        </div>
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Apellido Materno:</span>          
        </div>
        <div class="info-1">
            <span class="fs15 ls2 tajawalR">Nombre(s):</span>          
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
            class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-pass"><i class="fas fa-key"></i>Cambiar Contraseña
        </button>       
    </div> 
</section>

    


<?php include_once 'modal_contraseña.php'?>

