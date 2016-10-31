<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $this->load->view('admin/common/header'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><img src="<?php echo base_url('asset/asset_index/images/logo_st.png')?>"> <span>Asy-Syukriyyah</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url('asset/asset_index/images/img.jpg')?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('username');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <?php $this->load->view('admin/common/sidebar'); ?>
            </div>
            <!-- /menu footer buttons -->
                      <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <?php $this->load->view('admin/common/topnav'); ?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
              <div class="row tile_count">
              <?php $this->load->view($path_content); ?>
              </div>
      </div>
                  <div class="clearfix"></div>

          <!-- /top tiles -->

        <!-- /page content -->
        <footer>
            <?php $this->load->view('admin/common/footer'); ?>

          </footer>

        <!-- footer content -->
              <!-- /footer content -->
        </div>
      </div>
      <?php $this->load->view('admin/common/script'); ?>
      <!-- /gauge.js -->
  </body>
</html>
