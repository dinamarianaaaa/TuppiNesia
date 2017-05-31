  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form" method="Post" action="<?php echo base_url("Welcome/do_editprofil"); ?>">
        <fieldset>
          
          <!-- Form Name -->
          <legend>Edit Profil</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Username</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Username" class="form-control" name="username" value="<?php echo $username ?>">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Full Name</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Full Name" class="form-control" name="nama" value="<?php echo $nama ?>">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Password</label>
            <div class="col-sm-10">
              <input type="password" placeholder="City" class="form-control" name="password" value="<?php echo $password ?>">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Email</label>
            <div class="col-sm-4">
              <input type="email" placeholder="Email" class="form-control" name="email" value="<?php echo $email ?>">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Address</label>
            <div class="col-sm-4">
              <input type="text" placeholder="Address" class="form-control" name="alamat" value="<?php echo $alamat ?>">
            </div>
          </div>
          
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">City</label>
            <div class="col-sm-10">
              <input type="text" placeholder="City" class="form-control" name="kota" value="<?php echo $kota ?>">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Postal Code</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Postal Code" class="form-control" name="kodepos" value="<?php echo $kodepos ?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php base_url()."Welcome/profil" ?>"><button class="btn btn-default">Cancel</button></a>
              </div>
            </div>
          </div>
        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->