<?php
$status = ($this->session->userdata('status'));
 ?> <!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Tupperware Indonesia</title>         
        <!-- Bootstrap core CSS -->         
        <link href="<?php echo base_url("assets/css/bootstrap.css")?>" rel="stylesheet"> 
        <!-- Fontawesome core CSS -->         
        <link href="<?php echo base_url("assets/css/font-awesome.min.css")?>" rel="stylesheet"> 
        <!--GOOGLE FONT -->         
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> 
        <!--Slide Show Css -->         
        <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" /> 
        <!-- custom CSS here -->         
        <link href="assets/css/style.css" rel="stylesheet" /> 
        <link href="<?php echo base_url("assets/css/font-awesome.min.css")?> rel="stylesheet"> 
    </head>     
    <body> 
        <nav class="navbar navbar-default" role="navigation"> 
            <div class="container-fluid"> 
                <!-- Brand and toggle get grouped for better mobile display -->                 
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>                     
                    <a class="navbar-brand" href="#"><strong>TuppiNesia</strong></a> 
                </div>                 
                <!-- Collect the nav links, forms, and other content for toggling -->                 
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                    <ul class="nav navbar-nav navbar-right"> 
                        <li>
                        <?php
                        $datauser = $this->session->userdata('username');
                        if(isset($datauser)){
                            echo '<a href="'.base_url("Welcome/logout").'">'.$datauser.'</a>';
                        }else{
                            echo '<a href="'.base_url("Welcome/halaman_login").'">Login</a>';
                            }?>
                        </li>                            
                        <li>
                            <a href="<?php echo base_url("Welcome/cart")?>"><span class="#"></span> Cart <span> <?php $this->cart->total_items() ?> </span> </a>
                        </li>                       
                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <b class="caret"></b></a> 
                            <ul class="dropdown-menu"> 
                                <li>
                                    <a href="<?php echo base_url("Welcome/profil")?>"><strong>Edit Profil </strong></a>
                                </li>                                 
                                <li>
                                    <a href="#"><strong>Logout </strong></a>
                                </li>                        
                            </ul>                             
                        </li>                         
                    </ul>                     
                    <form class="navbar-form navbar-right" role="search" method="POST" action="<?php echo base_url("Welcome/cari")?>" > 
                        <div class="form-group"> 
                            <input name="cari" type="text" placeholder="Enter Keyword Here ..." class="form-control"> 
                        </div>                         
                        &nbsp; 
                        <button type="submit" value="cari" class="btn btn-primary">Search</button>                         
                    </form>                     
                </div>                 
                <!-- /.navbar-collapse -->                 
            </div>             
            <!-- /.container-fluid -->             
        </nav>                 
                     
        <div class="col-md-9"> 
            <div> 
                <ol class="breadcrumb"> 
                    <li>
                        <a href="<?php echo base_url("Welcome")?>">Home</a>                   
                </ol>                 
            </div>                         
              
            <!-- /.row -->             
            <div class="container"> 
            <div class="row"> 
            <?php foreach ($data as $x) { ?>
                    
                <div class="col-md-4 text-center col-sm-6 col-xs-6"> 
                    <div class="thumbnail product-box">             
                         <img class="img-responsive" src="<?php echo base_url().$x['gambar']; ?>">
                        <div class="caption"> 
                            <h3><a href="#"> <?= $x['nama_barang']  ?></a></h3> 
                            <p>Harga : <strong>Rp <?= $x['harga_barang'] ?></strong> </p>
                         <p><a href="<?php echo base_url().'Welcome/add_to_cart/'.$x['id_barang'];?>" class="btn btn-success" role="button">Add To Cart</a> </p>
                        </div>                         
                    </div> 
                                      
                </div> 
            <?php    } ?>                     
            </div>             
            <!-- /.row -->             
        </div>         
        <!-- /.col -->         
    </div>     
    <!-- /.row -->     
</div> 
<!-- /.container --> 

<!--Footer --> 
    
       
            <pre class="tw-data-text tw-ta tw-text-medium" data-placeholder="Terjemahan" id="tw-target-text" data-fulltext="" dir="ltr" style="border: none; padding: 0px 0.14em 0px 0px; position: relative; margin-bottom: 0px; resize: none; font-family: inherit; overflow: hidden; width: 276px; white-space: pre-wrap; color: rgb(33, 33, 33); font-variant-ligatures: normal; orphans: 2; widows: 2; height: 72px; font-size: 12px !important; line-height: 36px !important; background-color: rgb(255, 255, 255);"></pre>
        </div>         
    </div>     
    <hr> 
</div> 
<!-- /.col --> 
<div class="col-md-12 end-box "> 
    &copy; 2017 | &nbsp; All Rights Reserved | &nbsp; www.tuppinesia.com | &nbsp; 24x7 support | &nbsp; Email us: tuppinesia@gmail.com
</div> 
<!-- /.col --> 
<!--Footer end --> 
<!--Core JavaScript file  --> 
<script src="assets/js/jquery-1.10.2.js"></script> 
<!--bootstrap JavaScript file  --> 
<script src="assets/js/bootstrap.js"></script> 
<!--Slider JavaScript file  --> 
<script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script> 
<script src="assets/ItemSlider/js/jquery.catslider.js"></script> 
<script>
        $(function () {

            $('#mi-slider').catslider();

        });
        </script>
