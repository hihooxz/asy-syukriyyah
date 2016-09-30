
<div class="" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah Data Pekerjaan</h3>
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
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"  >
          <?php echo validation_errors()?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Pegawai
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php
                $options = array();
                if($pegawai!=FALSE){
                  foreach ($pegawai as $rows) {
                      $options[$rows->id_pegawai] = $rows->nama_lengkap;
                  }
                  echo form_dropdown('pegawai',$options,set_value('pegawai'),"class='form-control'");
                }
               ?>

            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="jabatan" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo set_value('jabatan')?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit Kerja
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php
                $options = array(
                    0 => 'Tidak Ada',
                    1 => 'Dept. Support',
                    2 => 'LPIA',
                    3 => 'LDSM',
                    4 => 'LPP',
                    5 => 'LEKU',
                    6 => 'TK Islam',
                    7 => 'SDIT',
                    8 => 'MI Plus',
                    9 => 'MTS Plus',
                    10 => 'SMPIT',
                    11 => 'SMAIT',
                    12 => 'STAI',
                    13 => 'Lainnya'
                  );
                  echo form_dropdown('unit_kerja',$options,set_value('unit_kerja'),"class='form-control'");
               ?>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit Kerja Sebelumnya
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php
                $options = array(
                  0 => 'Tidak Ada',
                  1 => 'Dept. Support',
                  2 => 'LPIA',
                  3 => 'LDSM',
                  4 => 'LPP',
                  5 => 'LEKU',
                  6 => 'TK Islam',
                  7 => 'SDIT',
                  8 => 'MI Plus',
                  9 => 'MTS Plus',
                  10 => 'SMPIT',
                  11 => 'SMAIT',
                  12 => 'STAI',
                  13 => 'Lainnya'
                  );
                  echo form_dropdown('unit_kerja_sebelumnya',$options,set_value('unit_kerja_sebelumnya'),"class='form-control'");
               ?>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mulai Tugas</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="mulai_tugas" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('mulai_tugas') ?>" id="mulai_tugas">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Kepegawaian
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php
                $options = array(
                    1 => 'Pegawai Tetap',
                    4 => 'Calon Pegawai Tetap',
                    2 => 'Pegawai Honorer ',
                    5 => 'DPK / GBS',
                    3 => 'Pegawai Kontrak',
                  );
                  echo form_dropdown('status_kepegawaian',$options,set_value('status_kepegawaian'),"class='form-control'");
               ?>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengangkatan Sebagai Calon Pegawai Tetap</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="calon_tetap" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('calon_tetap')?>" id="calon_tetap">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengangkatan Sebagai Pegawai Tetap</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="tetap" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('tetap')?>" id="tetap">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Fungsi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label><input type="radio" name="fungsi" value="1"> Guru / Tenaga Pendidik</label>
              <label><input type="radio" name="fungsi" value="2"> Non Guru / Tenaga Kependidikan</label>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sertifikasi Pendidik</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label><input type="radio" name="sertifikasi" value="1"> Ya</label>
              <label><input type="radio" name="sertifikasi" value="2"> Dalam Proses</label>
              <label><input type="radio" name="sertifikasi" value="3"> Tidak / Belum</label>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jika Ya, Tahun..</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="tahun_sertifikasi" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('tahun_sertifikasi')?>" id="tahun_sertifikasi">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Yang Mengeluarkan Sertifikat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="sertifikat" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('sertifikat')?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label><input type="radio" name="status_aktif" value="0"> Aktif</label>
              <label><input type="radio" name="status_aktif" value="1"> Non Aktif</label>
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
