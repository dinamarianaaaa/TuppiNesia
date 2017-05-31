<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <!-- CORE CSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <style type="text/css">
            html,
            body {
            height: 100%;
            }
            html {
            display: table;
            margin: auto;
            }
            body {
            display: table-cell;
            vertical-align: middle;
            }
            .margin {
            margin: 0 !important;
            }
        </style>
    </head>
    <body class="blue">
        <div id="login-page" class="row">
            <div class="col s12 z-depth-6 card-panel">
                <form class="login-form" method="Post" action="<?php echo base_url("Welcome/validation"); ?>">
                    <div class="row">
                        <div class="input-field col s12 center">
                        <h3>LOGIN FORM</h3>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="mdi-social-person-outline prefix"></i>
                            <input id="username" type="text" class="validate" name="username">
                            <label for="username" class="center-align">Username</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-social-person-outline prefix"></i>
                            <input id="nama" type="text" class="validate" name="nama">
                            <label for="nama" class="center-align">Nama</label>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="mdi-communication-email prefix"></i>
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email" class="center-align">Email</label>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="mdi-action-lock-outline prefix"></i>
                            <input id="password" type="password" class="validate" name="password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="mdi-action-lock-outline prefix"></i>
                            <input id="password-again" type="password" name="password-again">
                            <label for="password-again">Re-type password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12" align="center">
                         <!-- <a href="<?php echo base_url("Welcome/halaman_login"); ?>">Register Now</a> -->
                            <!-- <input type="submit" class="btn waves-effect waves-light col s12" value="Register Now"> -->
                            <button type="submit" class="btn btn-primary" >Register Now</button> 
                        </div>
                        <div class="input-field col s12">
                            <p class="margin center medium-small sign-up">Already have an account? <a href="<?php echo base_url("Welcome/halaman_login"); ?>">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <center>
            <!-- Post Page - Responsive -->
            <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-5104998679826243" data-ad-slot="3470684978"></ins>
        </center>
        <!-- ================================================
    Scripts
    ================================================ -->
        <!-- jQuery Library -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!--materialize js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27820211-3', 'auto');
  ga('send', 'pageview');

</script>
        <script src="//load.sumome.com/" data-sumo-site-id="1cf2c3d548b156a57050bff06ee37284c67d0884b086bebd8e957ca1c34e99a1" async="async"></script>
        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    <a class="grey-text text-lighten-4 right" href="http://w3lessons.info"></a>
                </div>
            </div>
        </footer>
    </body>
</html>