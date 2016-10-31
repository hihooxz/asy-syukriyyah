<div class="" role="main">
    <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Pegawai Aktif</span>
          <div class="count"><?php echo $data_pegawai['total_pegawai']?></div>
      <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-male"></i> Pegawai Laki-laki</span>
      <div class="count"><?php echo $data_pegawai['pegawai_laki_laki']?></div>
      <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> -->
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-female"></i> Pegawai Perempuan</span>
      <div class="count"><?php echo $data_pegawai['pegawai_perempuan']?></div>
      <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
      <a href="<?php echo base_url($this->uri->segment(1).'/statistik/')?>">Lihat Semuanya <i class="fa fa-arrow-right fa-fw"></i></a>
    </div>

    <?php
      if($this->session->userdata('role') ==1){
    ?>
   <div class="col-md-4 col-md-offset-4 col-xs-12 text-center">
      <div class="action" >
        <a href="<?php echo base_url('kepegawaian/add-info-pegawai');?>" class="btn btn-default blue-stripe" style="width:250px; height:200px; border-radius:20px;padding-top:50px;margin-top:50px;">
            <i class="fa fa-user fa-5x"></i> <br />
            <i class="fa fa-plus"></i> Tambah Informasi Pribadi <br />Pegawai
        </a>
     </div>
   </div>
   <?php
  }
   ?>
   <?php
  if($this->session->userdata('role') == 4 || $this->session->userdata('role') == 3){
    $this->load->view('admin/pegawai/info_pegawai');
  }
?>
 </div>
