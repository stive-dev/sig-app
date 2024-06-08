<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lOGIN</title>
    <link rel="stylesheet" type="text/css" href="<?php echo __URL__ . '/css/login.css'; ?>" />

</head>

<body>
    <img class="transparencia" src="<?php echo __URL__ . '/img/Transparencia.svg' ?>" alt="" width="1890px" height="500px">


    <!-- LOGIN MODULE -->
    <div class="login">
        <div class="wrap">
            <!-- TOGGLE -->
            <div id="toggle-wrap">
                <div id="toggle-terms">
                    <div id="cross">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <!-- SLIDER -->
            <div class="content">
              <img alt="" src="<?php echo __URL__ . '/img/mundo.png'; ?>"/>


            </div>
            <!-- LOGIN FORM -->
            <div class="user">
                <!-- ACTIONS
                    <div class="actions">
                        <a class="help" href="#signup-tab-content">Sign Up</a><a class="faq" href="#login-tab-content">Login</a>
                    </div>
                    -->
                <div class="form-wrap">
                    <!-- TABS -->
                    <div class="tabs">
                        <h3 class="login-tab"><a class="log-in active" href="#login-tab-content"><span>Inicio de sesión<span></a></h3>

                        <!-- TABS CONTENT -->
                        <div class="tabs-content">
                            <!-- TABS CONTENT LOGIN -->
                            <div id="login-tab-content" class="active">

                                <form class="login-form" action="<?= __URL__ . '/login/auth' ?>" method="post">
                                    <p></p>
                                    <input type="text" class="input" id="email" name="email" autocomplete="off" placeholder="Correo electronico">
                                    <input type="password" class="input" id="contrasena" name="contrasena" autocomplete="off" placeholder="contraseña">
                                    <input type="checkbox" class="checkbox" checked id="remember_me">
                                    <label for="remember_me">Recuerdame</label>
                                    <div class="help-action">
                                        <p><i class="fa fa-arrow-left" aria-hidden="true"></i><a class="forgot" href="#">¿Olvidaste tu contraseña?</a></p>
                                    </div>
                                    <input type="submit" class="button" name="" value="Iniciar Sesión">
                                </form>

                            </div>
                            <!-- TABS CONTENT SIGNUP -->
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
