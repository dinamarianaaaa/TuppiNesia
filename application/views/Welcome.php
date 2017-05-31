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
                            echo '<a> Hi, '.$datauser.'</a>';
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
                                    <a href="<?php echo base_url("Welcome/profil")?>"><strong>View Profil </strong></a>
                                </li>                                 
                                <li>
                                    <a href="<?php echo base_url("Welcome/logout")?>"><strong>Logout </strong></a>
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
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-9"> 
                    <div class="well well-lg offer-box text-center"> 
                        Today's Offer : Free Shipping all around Indonesia on purchase of Rp 200.000; and above till 15 Mei only! Grab it fast!                
                    </div>                     
                    <div class="main box-border"> 
                        <div id="mi-slider" class="mi-slider"> 
                            <ul> 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/1.jpg" alt="img01">
                                        <h4>Handy Bottle</h4> 
                                    </a>
                                </li>                                 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/2.jpg" alt="img02">
                                        <h4>Eco Bottle</h4> 
                                    </a>
                                </li>                                 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/3.jpg" alt="img03">
                                        <h4>Tumbler</h4> 
                                    </a>
                                </li>                                 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/4.jpg" alt="img04">
                                        <h4>Baby Bottle</h4> 
                            </ul>                             
                            <ul> 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/5.jpg" alt="img05">
                                        <h4>Plate</h4> 
                                    </a>
                                </li>                                 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/6.jpg" alt="img06">
                                        <h4>Glass</h4> 
                                    </a>
                                </li>                                 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/7.jpg" alt="img07">
                                        <h4>Bowl</h4> 
                                    </a>
                                </li>                                 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/8.jpg" alt="img08">
                                        <h4>Mug</h4> 
                                    </a>
                                </li>                                 
                            </ul>                             
                            <ul> 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/9.jpg" alt="img09">
                                        <h4>Pan</h4> 
                                    </a>
                                </li>                                 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/10.jpg" alt="img10">
                                        <h4>Store</h4> 
                                    </a>
                                </li>                                 
                                <li>
                                    <a href="#"> 
                                        <img src="assets/ItemSlider/images/11.jpg" alt="img11">
                                        <h4>Rice Smart</h4> 
                                    </a>
                                </li>                                 
                            </ul>                                           
                            <nav> 
                                <a href="#">Bottle</a> 
                                <a href="#">Table Collection</a> 
                                <a href="#">Kitchen Set</a> 
                            </nav>                             
                        </div>                         
                    </div>                     
                    <br /> 
                </div>                 
                <!-- /.col -->                 
                <div class="col-md-3 text-center"> 
                    <div class=" col-md-12 col-sm-6 col-xs-6"> 
                        <div class="offer-text"> 
                            30% off here
</div>                         
                        <div class="thumbnail product-box"> 
                            <img src="assets/img/dummyimg.png" alt="" /> 
                            <div class="caption"> 
                                <h3><a href="#">Miss Belle</a></h3> 
                            </div>                             
                        </div>                         
                    </div>

                    <div class=" col-md-12 col-sm-6 col-xs-6"> 
                        <div class="offer-text2"> 
                            30% off here
</div>                         
                        <div class="thumbnail product-box"> 
                            <img src="assets/img/dummyimg.png" alt="" /> 
                            <div class="caption"> 
                                <h3><a href="#">
                                        <a href="file:///D:/IS'15/Assaignment/SEMESTER%204/PBW/template/bs-digishop-mini/index.html?pgid=3&amp;pgedit=1&amp;pglive=1#" style="color: rgb(0, 0, 0); outline: -webkit-focus-ring-color auto 5px; outline-offset: -2px; line-height: 26.3999996185303px; background-color: rgb(255, 255, 255);">Miss Belle</a>
                                    </a></h3> 
         
                            </div>                             
                        </div>

                    </div>                     
                </div>                 
                <!-- /.col -->                 
            </div>             
            <!-- /.row -->             
            <div class="row"> 
                <div class="col-md-3"> 
                    <div> 
                        <a href="#" class="list-group-item active">Bottle</a> 
                        <ul class="list-group"> 
                            <li class="list-group-item">Handy Bootle 
                            </li>                            
                            <li class="list-group-item">Eco Bottle
                            </li>                             
                            <li class="list-group-item">Tumbler
                            </li>                             
                            <li class="list-group-item">Baby Bottle
                            </li>                             
                            <li class="list-group-item">Mug
                            </li>                             
                        </ul>                         
                    </div>                     
                    <!-- /.div -->                     
                    <div> 
                        <a href="#" class="list-group-item active list-group-item-success">Kitchen Set</a> 
                        <ul class="list-group"> 
</li>                         
                        <li class="list-group-item">Pan
                        </li>                         
                        <li class="list-group-item">Stove
                        </li>                         
                    </li>                     
                    <li class="list-group-item">Store
                    </li>                     
                    <li class="list-group-item">Other
                    </li>                     
                </ul>                 
            </div>             
            <!-- /.div -->             
            <div> 
                <a href="#" class="list-group-item active">Table Collection</a> 
                <ul class="list-group"> 
                    <li class="list-group-item">Saver
                    </li>                     
                    <li class="list-group-item">Plate
                    </li>                     
                    <li class="list-group-item">Glass
                    </li>                     
                    <li class="list-group-item">Tumbler
                    </li>                     
                    <li class="list-group-item">Bowl
                    </li>                     
                    <li class="list-group-item">Soup Server
                    </li>   
                    <li class="list-group-item">Cutlery
                    </li>                   
                </ul>                 
            </div>   

             <div> 
                 <a href="#" class="list-group-item active list-group-item-success">Freezer Collection</a> 
                        <ul class="list-group"> 
                    <li class="list-group-item">Saver 
                    </li>                                         
                    <li class="list-group-item">Other
                    </li>                                        
                </ul>                 
            </div>          

        </div>         
        <!-- /.col -->         
        <div class="col-md-9"> 
            <div> 
                <ol class="breadcrumb"> 
                    <li>
                        <a href="<?php echo base_url("Welcome")?>">Home</a>                   
                </ol>                 
            </div>             
            <!-- /.div -->             
           <!--  <div class="row"> 
                <div class="btn-group alg-right-pad"> 
                    <button type="button" class="btn btn-default">
                        <strong>56  </strong>items
                    </button>                     
                    <div class="btn-group"> 
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"> 
                            Sort Products &nbsp;
                            <span class="caret"></span> 
                        </button>                         
                        <ul class="dropdown-menu"> 
                            <li>
                                <a href="<?php base_url().'Welcome/harga_terendah'?>">By Price Low</a>
                            </li>                             
                            <li class="divider"></li>                             
                            <li>
                                <a href="#">By Price High</a>
                            </li>                                                        
                        </ul>                         
                    </div>                     
                </div>                 
            </div>             
            <!-- /.row -->           
            <div class="container"> 
            <div class="row"> 
            <?php foreach ($data as $x) { ?>
                    
                <div class="col-md-4 text-center col-sm-6 col-xs-6" style="margin: auto; margin-left: 10px"> 
                    <div class="thumbnail product-box"  >
                        <div class="offer-text2"> 
                            10% off here
                        </div>              
                        <img class="img-responsive" src="<?php echo base_url().$x['gambar']; ?>" > 
                        <div class="caption"> 
                            <p><a href="#"> <?= $x['nama_barang']  ?></a></p> 
                            <p>Harga : <strong>Rp <?= $x['harga_barang'] ?></strong> </p>
                         <a href="<?php echo base_url().'Welcome/add_to_cart/'.$x['id_barang'];?>" class="btn btn-success" role="button">Add To Cart</a> 
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
<div class="col-md-12 download-app-box text-center">TuppiNesia! It's Funtastic!</div> 
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
