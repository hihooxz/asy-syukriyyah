<div class="" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah Data Keluarga</h3>
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
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Pernikahan
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php
                $options = array(
                    0=>'Belum Menikah',
                    1=>'Sudah Menikah',
                    2=>'Janda',
                    3=>'Duda'
                  );
                echo form_dropdown('status_pernikahan',$options,set_value('status_pernikahan'),"class='form-control'");
               ?>

            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pasangan
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="last-name" name="nama_pasangan"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('nama_pasangan')?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Pasangan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="pekerjaan_pasangan" class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('pekerjaan_pasangan')?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Anak Kandung</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" name="anak_kandung" value="<?php echo set_value('anak_kandung') ?>">
                <option>Choose option</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">Lebih dari 3</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heard">Bukan Anak Kandung</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select id="heard" class="form-control" name="bukan_anak_kandung" value="<?php echo set_value('bukan_anak_kandung')?>">
              <option>Choose option</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">Lebih dari 3</option>
            </select>
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heard">Jumlah Saudara Kandung</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select id="heard" class="form-control" name="jumlah_saudara_kandung" value="<?php echo set_value('jumlah_saudara_kandung')?>">
              <option>Choose option</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">Lebih dari 3</option>
            </select>
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ayah
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text"   class="form-control col-md-7 col-xs-12" name="nama_ayah" value="<?php echo set_value('nama_ayah')?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ibu
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text"   class="form-control col-md-7 col-xs-12" name="nama_ibu" value="<?php echo set_value('nama_ibu')?>">
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
