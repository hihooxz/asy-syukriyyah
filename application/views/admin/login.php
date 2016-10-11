<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Kepegawaian - Asy-syukriyyah</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('asset/asset_index/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('asset/asset_index/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('asset/asset_index/build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form  action="" method="POST">
            <img src="<?php echo base_url('asset/asset_index/images/logo.png')?>" class="img-responsive" alt="Asy-syukriyyah" width="419px" height="88px" style="margin-bottom:50px;">
              <div class="clearfix">
                <?php	echo validation_errors();?>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" />
              </div>
              <div>
                <button type="submit" class="log-btn btn-submit" >Log in</button>
                </form>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signup" class="to_register">  </a>
                </p>


                <br />

                <div>
                  <h3>
                    <a href="<?php echo base_url('dashboard/visi-misi')?>">
                      Visi / Misi
                    </a>
                  </h3>
                  <h1>Dept. Support <br />
                  Asy-syukriyyah</h1>
                  <p>©2016 All Rights Reserved. Developed By <a href="http://dzillaweb.com">DzillWeb</a></p>
                </div>
              </div>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
