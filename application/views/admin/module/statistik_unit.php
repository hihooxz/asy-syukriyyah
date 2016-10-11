<div class="container" role="main">
  <div class="container">
        <center>
          <h1>
            <?php
              $id = $this->uri->segment(3);
              if($id == "yayasan"){
                echo "Yayasan";
              }
              else if($id == 6){
                echo "TK Islam";
              }
              else if($id == 7){
                echo "SDIT";
              }
              else if($id == 8){
                echo "MI Plus";
              }
              else if($id == 9){
                echo "MTs";
              }
              else if($id == 10){
                echo "SMPIT";
              }
              else if($id == 11){
                echo "SMAIT";
              }
              else{
                echo "Lainnya";
              }
            ?>
          </h1>
        </center>
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
        <div class="clearfix"></div>
        <?php if($this->session->userdata('role')!=2) { ?>
        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr class="headings">
                <th class="column-title">Nama Pegawai </th>
                <th class="column-title">Jabatan </th>
                <th class="column-title">Status Kepegawaian</th>
                <th class="column-title">Unit Kerja</th>
                <th class="column-title">Mulai Tugas</th>
                <th class="column-title">Status</th>
                <?php
                if($this->session->userdata('role')==1){
                  ?>
                <th class="column-title no-link last"><span class="nobr">Action</span>
                  </th>
                <?php } ?>


              </tr>
            </thead>

            <tbody>
              <tr class="even pointer">
                <?php
                  if($results!=FALSE){
                    foreach ($results as $rows) {
                      ?>
                      <tr>
                        <td><?php echo $rows->nama_lengkap ?></td>
                        <td><?php echo $rows->jabatan ?></td>
                        <td><?php
                          if($rows->status_kepegawaian == 1)
                            echo "Pegawai Tetap";
                          else if($rows->status_kepegawaian == 2)
                            echo "Pegawai Honorer";
                          else if($rows->status_kepegawaian == 3)
                            echo "Pegawai Kontrak";
                          else if($rows->status_kepegawaian == 4)
                            echo "Calon Pegawai Tetap";
                          else if($rows->status_kepegawaian == 5)
                            echo "DPK / GBS";
                        ?></td>
                        <td><?php
                          if($rows->unit_kerja == 0)
                            echo "Tidak Ada";
                          else if($rows->unit_kerja == 1)
                            echo "Dept. Support";
                          else if($rows->unit_kerja == 2)
                            echo "LPIA";
                          else if($rows->unit_kerja == 3)
                            echo "LDSM";
                          else if($rows->unit_kerja == 4)
                            echo "LPP";
                          else if($rows->unit_kerja == 5)
                            echo "LEKU";
                          else if($rows->unit_kerja == 6)
                            echo "TK Islam";
                          else if($rows->unit_kerja == 7)
                            echo "SDIT";
                          else if($rows->unit_kerja == 8)
                            echo "MI Plus";
                          else if($rows->unit_kerja == 9)
                            echo "MTS Plus";
                          else if($rows->unit_kerja == 10)
                            echo "SMPIT";
                          else if($rows->unit_kerja == 11)
                            echo "SMAIT";
                          else if($rows->unit_kerja == 12)
                            echo "Lainnya";
                        ?></td>
                        <td><?php echo $rows->mulai_tugas ?></td>
                        <td><?php
                          if($rows->status_aktif == 0)
                            echo "Aktif";
                          else if($rows->status_aktif == 1)
                            echo "Non Aktif";
                          ?></td>
                          <?php
                          if($this->session->userdata('role')==1){
                        ?>
                        <td>
                      <a target="_blank" href ="<?php echo base_url($this->uri->segment(1).'/download_data/'.$rows->id_pegawai)?>"> <i class="fa fa-download"></i> </a></span>
                      </td>
                      <?php
                      }
                      ?>
                      </tr>
                      <?php
                    }
                  }
                ?>
                <?php

                ?>
              </tr>
            </tbody>
          </table>
        </div>
      <?php } ?>
     </div>

        <a href="<?php echo base_url($this->uri->segment(1).'/statistik')?>">
          <button class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button>
        </a>
    </div>
