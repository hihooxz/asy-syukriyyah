<div class="" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah Data Pendidikan</h3>
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
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan Terakhir
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php
                $options = array(
                    0 => 'Tidak Sekolah',
                    1 => 'SD',
                    2 => 'SMP',
                    3 => 'SMA',
                    4 => 'D1',
                    5 => 'D2',
                    6 => 'D3',
                    7 => 'D4',
                    8 => 'S1',
                    9 => 'S2',
                    10 => 'S3',
                    11 => 'Paket B, C'
                  );
                  echo form_dropdown('pendidikan_terakhir',$options,set_value('pendidikan_terakhir'),"class='form-control'");
               ?>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Institusi Pendidikan Terakhir</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="nama_pt" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo set_value('nama_pt')?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan Sedang Ditempuh
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php
                $options = array(
                    0 => 'Tidak Ada',
                    1 => 'SD',
                    2 => 'SMP',
                    3 => 'SMA',
                    4 => 'D1',
                    5 => 'D2',
                    6 => 'D3',
                    7 => 'D4',
                    8 => 'S1',
                    9 => 'S2',
                    10 => 'S3',
                    11 => 'Paket B, C'
                  );
                  echo form_dropdown('pendidikan_ditempuh',$options,set_value('pendidikan_ditempuh'),"class='form-control'");
               ?>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Institusi Pendidikan Ditempuh</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="nama_pt_pd" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('nama_pt_pd')?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Program</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="program_pd" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('program_pd')?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="jurusan_pd" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('jurusan_pd')?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Masuk</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="tahun_masuk_pd" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('tahun_masuk_pd')?>">
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
