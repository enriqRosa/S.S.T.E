<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/css/bgr.css">
        <link rel="stylesheet" href="assets/libs/mdl/material.css">

        <title>S.S.T.E</title>
    </head>
    <body id="page">

        <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
        </ul>
        <main id="main-section">    
            <div class="c-formulario" id="vue-main-form">
                <form action="" class="main-form">
                <!--<div class="form-option">
                <input type="radio" name="rb-form-option" id="rb-registro" v-model="formType" :value="true">
                <label for="rb-registro">Crear cuenta</label>
                <input type="radio" name="rb-form-option" id="rb-inicio" v-model="formType" :value="false">
                <label for="rb-inicio" >Iniciar sesión</label>

                </div>-->
                    <div class="c-login-title">
                        <span class="fs25 white ls2 Crimson-Regular">Iniciar Sesión</span>
                    </div>
                   <div class ="logo_sste">
                        <img src="assets/images/logo.png">
                    </div>
                    <div class="c-inputs">
                        <!--<template v-if="formType">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="tb-name" required>
                                <label class="mdl-textfield__label" for="tb-name">Nombre</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="tb-apellidos" required>
                                <label class="mdl-textfield__label" for="tb-apellidos">Apellidos</label>
                            </div>
                        </template>-->
                        <template>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="email" id="tb-mail" required>
                                <label class="mdl-textfield__label Crimson-Regular fs20 ls2" for="tb-mail">Email</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="tb-password-1" required>
                                <label class="mdl-textfield__label Crimson-Regular fs20 ls2" for="tb-password-1">Contraseña</label>
                            </div>
                            <!--<template v-if="formType">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="password" id="tb-password-2" required>
                                    <label class="mdl-textfield__label" for="tb-password-2">Repetir contraseña</label>
                                </div>
                            </template>-->
                        </template>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Login</button>
                    </div>
                </form>
                <!-- <div><pre>{{ $data }}</pre></div> -->
            </div>
        </main>
        <footer>            
            <div class="info-right">
                <div class="c-correo">
                     <span class="Crimson-Regular fs15 grey ls1">
                     <a href="">teschalco@hotmail.com </a> 
                     <span>|</span>
                     <a href="">depto.controlescolar@tesch.edu.mx</a></span>                
                <div class="c-correo">
                    <span class="Crimson-Regular fs15 grey">(0155) 59823503, 59823504, 59820848</span>
                </div>
                </div>
                <div class="c-logos">
                    <img src="assets/images/sep-logo.png" alt="">
                     <img src="assets/images/edomex-logo.png" alt="">
                    <img src="assets/images/tesch_logo.png" alt="">
                </div>            
                <div class="c-direccion">
                    <span class="Crimson-Regular fs15 grey ls1">Carretera Federal México Cuautla s/n, La
                    Candelaria Tlapala,</span>                
                <div class="c-direccion">
                    <span class="Crimson-Regular fs15 grey ls1">Chalco de Díaz Covarrubias, Méx.</span>
                </div>
                </div>
            </div>
            <div class="c-copyright">
                <span class="Crimson-SemiBoldItalic fs14 black ls2">Tescha - Algunos derechos reservados &copy 2018</span>
            </div>
            </footer>
        <!-- INICIO DE LIBRERIAS -->
        <script src="assets/libs/mdl/material.js"></script>
        <script src="assets/libs/vue/vue.js"></script>
        <script src="assets/js/process-form.js"></script>
    </body>
</html>