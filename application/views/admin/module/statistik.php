<div class="container" role="main">
  <div class="container">
        <h3>Kepegawaian</h3>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Pegawai</span>
          <div class="count"><?php echo $total_pegawai?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-male"></i> Pegawai Laki-laki</span>
          <div class="count"><?php echo $pegawai_laki_laki?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-female"></i> Pegawai Perempuan</span>
          <div class="count"><?php echo $pegawai_perempuan?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-suitcase"></i> Pegawai Tetap Seluruhnya</span>
          <div class="count"><?php echo $pegawai_tetap?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-suitcase"></i> Pegawai Honorer</span>
          <div class="count"><?php echo $pegawai_honorer?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-suitcase"></i> Pegawai Kontrak</span>
          <div class="count"><?php echo $pegawai_kontrak?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-suitcase"></i> Calon Pegawai Tetap</span>
          <div class="count"><?php echo $cpt?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-suitcase"></i> Pegawai DPK / GBS</span>
          <div class="count"><?php echo $dpk_gbs?></div>
        </div>
        <div class="clearfix"></div> 
        <h3>Perunit</h3>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <a href="<?php echo base_url($this->uri->segment(1).'/statistik-unit/yayasan')?>">
          <span class="count_top"><i class="fa fa-user"></i> Yayasan</span>
          <div class="count"><?php echo $yayasan?></div>
          </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> TK Islam</span>
          <a href="<?php echo base_url($this->uri->segment(1).'/statistik-unit/6')?>">
            <div class="count"><?php echo $tkit?></div>
          </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> SDIT</span>
          <a href="<?php echo base_url($this->uri->segment(1).'/statistik-unit/7')?>">
          <div class="count"><?php echo $sdit?></div>
          </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> MI Plus</span>
          <a href="<?php echo base_url($this->uri->segment(1).'/statistik-unit/8')?>">
            <div class="count"><?php echo $miplus?></div>
          </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> MTs</span>
          <a href="<?php echo base_url($this->uri->segment(1).'/statistik-unit/9')?>">
          <div class="count"><?php echo $mts?></div>
          </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> SMPIT</span>
          <a href="<?php echo base_url($this->uri->segment(1).'/statistik-unit/10')?>">
          <div class="count"><?php echo $smpit?></div>
          </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> SMAIT</span>
          <a href="<?php echo base_url($this->uri->segment(1).'/statistik-unit/11')?>">
          <div class="count"><?php echo $smait?></div>
          </a>
        </div> 
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"></span>
          <div class="count"></div>
        </div>
        <div class="clearfix"></div> 
        <h3>Pendidikan</h3>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> Tidak Sekolah</span>
          <div class="count"><?php echo $ts?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> SD</span>
          <div class="count"><?php echo $sd?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> SMP</span>
          <div class="count"><?php echo $smp?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> SMA</span>
          <div class="count"><?php echo $sma?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> D1</span>
          <div class="count"><?php echo $d1?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> D2</span>
          <div class="count"><?php echo $d2?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> D3</span>
          <div class="count"><?php echo $d3?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> D4</span>
          <div class="count"><?php echo $d4?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> S1</span>
          <div class="count"><?php echo $s1?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> S2</span>
          <div class="count"><?php echo $s2?></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-graduation-cap"></i> S3</span>
          <div class="count"><?php echo $s3?></div>
        </div>

    </div>
 </div>
