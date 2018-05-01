<?php include 'header.php' ?>
    <body id="page">

        <ul class="cb-slideshow">
            <li>
                <span>Image 01</span></li>
            <li>
                <span>Image 02</span></li>
            <li>
                <span>Image 03</span></li>
            <li>
                <span>Image 04</span></li>
            <li>
                <span>Image 05</span></li>
            <li>
                <span>Image 06</span></li>
        </ul>
        <main id="main-section">
            <div class="c-formulario">
                <form action="" class="main-form">
                    <div class="c-login-title">
                        <span class="fa fa-user-circle"></span>
                    </div>
                    <div class="c-inputs">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input
                                class="mdl-textfield__input"
                                type="email"
                                id="tb-mail"
                                required="required">
                            <label class="mdl-textfield__label fs20 ls2" for="tb-mail">Email</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input
                                class="mdl-textfield__input"
                                type="password"
                                id="tb-password-1"
                                required="required">
                            <label
                                class="mdl-textfield__label fs20 ls2"
                                for="tb-password-1">Contraseña</label>
                        </div>
                        <button
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Login</button>
                    </div>
                </form>
            </div>
        </main>
<?php include 'footer.php' ?>