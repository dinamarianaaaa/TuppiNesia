<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profil</title>
        <!-- CORE CSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <style type="text/css">
           .user-row {
    margin-bottom: 14px;
}
<style> 
.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}


</style>

          <!-- Text input-->
         <div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="<?php echo base_url("Welcome/edit_profil") ?>" >Edit Profile</A>

        <A href="<?php echo base_url("Welcome/halaman_logout")?>" >Logout</A>
       <br>

      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Tupperware Indonesia</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <!-- <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div> -->
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    <?php foreach ($profil as $p) { ?>
                      <tr>
                        <td>Username </td>
                        <td><?= $p['username']?></td>
                      </tr>
                      <tr>
                        <td><?= $p['nama']?></td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td>01/24/1988</td>
                      </tr>
                      <tr>
                        <td><?= $p['email']?></td>
                        <td>Female</td>
                      </tr>
                      <tr>
                        <td><?= $p['alamat']?></td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                      <tr>
                        <td><?= $p['kota']?> </td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                      <tr>
                        <td><?= $p['kodepos']?></td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                  <div align="center">
      <?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary']) ?> 
                </div>
              </div>
            </div>
                 
            
          </div>
        </div>
      </div>
    </div>
</html>