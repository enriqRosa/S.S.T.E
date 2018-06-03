<nav class="menu-right">
    <button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button  mdl-js-ripple-effect ">
        <i class="material-icons mdl-color-text--blue-grey-200"><i class="fas fa-bars"></i></i>
    </button>
    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
        <a href="gestion_tutores.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Tutores</li></a>
        <a href="gestion_tutorados.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Tutorados</li></a>
        <a href="gestion_coordinadores.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Gestión de Coordinadores</li></a>
        <a href="gestion_tutores_tutorados.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-user-plus"></i>Asignacion Tutores/Tutorados</li></a>
        <a href=""><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-eye"></i>Verificación de Seguimiento</li></a>
        <a href="index.php"><li class="mdl-menu__item tajawalB mdl-color-text--teal-800"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</li></a>
    </ul>
</nav>
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
         <div class="c-inputs-4" >
            <div class="mdl-textfield mdl-js-textfield ">
                <input class="mdl-textfield__input" type="password" disabled>
            </div>                  
            <div class="mdl-textfield mdl-js-textfield ">
                <input class="mdl-textfield__input" type="password" disabled>              
            </div>   
            <div class="mdl-textfield mdl-js-textfield">
                <input class="mdl-textfield__input" type="password" disabled>               
            </div>
        </div>
    </form>
    <div class="modals_2"> 
        <button 
            class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100 btn-pass"><i class="fas fa-key"></i>Cambiar Contraseña
        </button>       
    </div> 
</section>

    


<?php include_once 'modal_contraseña.php'?>

