<div class="" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit User</h3>
      </div>

          </div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">

        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
          <?php echo validation_errors()?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="username" value="<?php echo $result['username']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="last-name" name="password"  class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="password2" type="password"  data-validate-linked="password" class="form-control col-md-7 col-xs-12" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="fullname" value="<?php echo $result['fullname']?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="email" value="<?php echo $result['email']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heard">Role</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <?php
            $options = array(
                '1' => 'Kepegawaian',
                '2' => 'IT',
                '3' => 'Keuangan',
                '4' => 'Yayasan'
            );
            echo form_dropdown('role',$options,$result['role'],'class="form-control"');
            ?>
          </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php $this->load->view('admin/common/script_add'); ?>
