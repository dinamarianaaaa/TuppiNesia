<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
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
                <div class="login-form">
                    <div class="row">
                        <div class="input-field col s12 center">
                        <h3>LOGIN FORM</h3>
                        </div>
                    </div>
                    <?php echo form_open(site_url('fungsi/login')); ?>
                     <div class="row margin">
                        <div class="input-field col s12">
                            <i class="mdi-action-lock-outline prefix"></i>
                            <input id="username" type="text" name="username" autofocus="">
                            <label for="password">Username</label>
                        </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="mdi-action-lock-outline prefix"></i>
                            <input id="password" type="password" name="password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <!-- <div class="row"> 
                        <div class="input-field col s12 m12 l12  login-text">

                        </div>
                    </div> -->
                    <div class="row">
                        <div class="input-field col s12" align="center">
                            <button type="submit" class="btn btn-primary" >Login</button> 
                        </div>
                    </div>
                    <?php form_close() ?>
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small"><a href="<?php echo base_url("Welcome/halaman_register"); ?>">Register Now!</a></p>
                        </div>
                       <!--  <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small"><a href="forgot-password.html">Forgot password?</a></p>
                        </div>  -->                        
                    </div>
                </div>
            </div>
        </div>
        
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
       
        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    © 2017 TuppiNesia
                    <a class="grey-text text-lighten-4 right" href="www.tuppinesia.com">Tupperware Indonesia</a>
                </div>
            </div>
        </footer>
    </body>
</html>