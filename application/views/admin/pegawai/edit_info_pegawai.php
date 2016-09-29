<div class="" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Info Personal</h3>
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
        <a href="<?php echo base_url($this->uri->segment(1).'/info-pegawai')?>"><button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</button></a>
        <br />
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"  action="" enctype="multipart/form-data">
          <?php echo validation_errors()?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Foto Pegawai
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="file" id="foto_pegawai" class="form-control col-md-7 col-xs-12" name="userfile">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIK
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="nik" value="<?php echo $result['nik']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama_lengkap" value="<?php echo $result['nama_lengkap']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Gelar
            </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <input type="text" id="last-name" name="gelar_depan" class="form-control col-md-7 col-xs-12" value="<?php echo $result['gelar_depan']?>" placeholder="Gelar Depan">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <input  type="text" name="gelar_belakang"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['gelar_belakang']?>" placeholder="Gelar Belakang">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Tanggal Lahir</label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <input  type="text" name="tempat_lahir"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['tempat_lahir']?>" placeholder="Nama Kota Kelahiran">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="tanggal_lahir" type="text" value="<?php echo $result['tanggal_lahir']?>" placeholder="Tanggal Lahir">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div id="gender" class="btn-group" data-toggle="buttons">
                <label class="btn btn-default <?php if($result['jenis_kelamin']==1) echo "active"?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="jenis_kelamin" value="1" name="jenis_kelamin" <?php if($result['jenis_kelamin']==1) echo "checked"?>> &nbsp; Laki-Laki &nbsp;
                </label>
                <label class="btn btn-default <?php if($result['jenis_kelamin']==2) echo "active"?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="jenis_kelamin" value="2" name="jenis_kelamin" <?php if($result['jenis_kelamin']==2) echo "checked"?>> Perempuan
                </label>
              </div>
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select id="heard" class="form-control" name="agama" value="<?php echo $result['agama']?>">
                <option value="islam">islam</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat Ktp
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="textarea" required="required" name="alamat_ktp" class="form-control col-md-7 col-xs-12"><?php echo $result['alamat_ktp']?></textarea>
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Rt Ktp</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="rt_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['rt_ktp']?>">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Rw Ktp</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="rw_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['rw_ktp']?>">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan Ktp</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="kelurahan_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kelurahan_ktp']?>">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan Ktp</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="kecamatan_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kecamatan_ktp']?>">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kota Ktp</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="kota_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kota_ktp']?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat tinggal
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="textarea" required="required" name="alamat_tinggal" class="form-control col-md-7 col-xs-12"><?php echo $result['alamat_tinggal']?></textarea>
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Rt tinggal</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="rt_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['rt_tinggal']?>">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Rw tinggal</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="rw_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['rw_tinggal']?>">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan tinggal</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="kelurahan_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kelurahan_tinggal']?>">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan tinggal</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="kecamatan_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kecamatan_tinggal']?>">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kota tinggal</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="kota_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kota_tinggal']?>">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="no_telepon"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['no_telepon']?>">
            </div>
          </div>
          <div class="item form-group">
            <label  class="control-label col-md-3 col-sm-3 col-xs-12">Handphone</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="handphone"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['handphone']?>">
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
