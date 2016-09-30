<div class="" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Keluarga</h3>
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
              <input type="text" id="last-name" name="id_pegawai" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $result['nama_lengkap']?>" readonly>
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
                echo form_dropdown('status_pernikahan',$options,$result['status_pernikahan'],"class='form-control'");
               ?>

            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pasangan
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="last-name" name="nama_pasangan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $result['nama_pasangan']?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Pasangan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="pekerjaan_pasangan" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $result['pekerjaan_pasangan']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Anak Kandung</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php
                $options = array(
                    0 => 0,
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 'Lebih dari 3'
                  );
                echo form_dropdown('anak_kandung',$options,$result['anak_kandung'],'class="form-control"');
              ?>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heard">Bukan Anak Kandung</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <?php
                $options = array(
                    0 => 0,
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 'Lebih dari 3'
                  );
                echo form_dropdown('bukan_anak_kandung',$options,$result['bukan_anak_kandung'],'class="form-control"');
              ?>
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heard">Jumlah Saudara Kandung</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <?php
                $options = array(
                    0 => 0,
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 'Lebih dari 3'
                  );
                echo form_dropdown('jumlah_saudara_kandung',$options,$result['jumlah_saudara_kandung'],'class="form-control"');
              ?>
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ayah
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="nama_ayah" value="<?php echo $result['nama_ayah']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ibu
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="nama_ibu" value="<?php echo $result['nama_ibu']?>">
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
