<div class="">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Data Pegawai</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <div class="col-xs-2">
        <!-- required for floating -->
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs-left">
          <li class="active"><a href="#pegawai" data-toggle="tab">Pegawai</a>
          </li>
          <li><a href="#keluarga" data-toggle="tab">Keluarga</a>
          </li>
          <li><a href="#pendidikan" data-toggle="tab">Pendidikan</a>
          </li>
          <li><a href="#pekerjaan" data-toggle="tab">Pekerjaan Dan Jabatan</a>
          </li>
          <!-- <li><a href="#sosial" data-toggle="tab">Kegiatan Sosial Dan Organisasi</a>
          </li> -->
        </ul>
      </div>

      <div class="col-xs-9">
        <?php
          if($this->session->flashdata('error')){
            echo $this->session->flashdata('error');
          }
         ?>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="pegawai">
            <p class="lead">Info Personal Pegawai</p>
            <form action="<?php echo base_url($this->uri->segment(1).'/process-info-pegawai/'.$this->uri->segment(3))?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal form-label-left" id="form-info">
              <?php echo validation_errors()?>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Foto Pegawai
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="foto_pegawai" class="form-control col-md-7 col-xs-12" name="userfile">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama_lengkap" value="<?php echo $result['nama_lengkap']?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Gelar Depan
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="gelar_depan"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['gelar_depan']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Gelar Belakang</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="gelar_belakang"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['gelar_belakang']?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default <?php if($result['jenis_kelamin']==1) echo "active"?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="jenis_kelamin" value="1" <?php if($result['jenis_kelamin']==1) echo "selected"?>"> &nbsp; Laki-Laki &nbsp;
                    </label>
                    <label class="btn btn-default <?php if($result['jenis_kelamin']==2) echo "active"?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="jenis_kelamin" value="2" <?php if($result['jenis_kelamin']==2) echo "selected"?>"> Perempuan
                    </label>
                  </div>
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="tempat_lahir"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['tempat_lahir']?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="tanggal_lahir" type="text" value="<?php echo date('d M Y',strtotime($result['tanggal_lahir']))?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" name="agama" value="<?php echo $result['agama']?>" >
                    <option value="islam">islam</option>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat KTP
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="alamat_ktp" class="form-control col-md-7 col-xs-12" ><?php echo $result['alamat_ktp']?></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">RT </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="rt_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['rt_ktp']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">RW </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="rw_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['rw_ktp']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kelurahan_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kelurahan_ktp']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kecamatan_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kecamatan_ktp']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kota </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kota_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kota_ktp']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat tinggal
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="alamat_tinggal" class="form-control col-md-7 col-xs-12" ><?php echo $result['alamat_tinggal']?></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">RT </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="rt_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['rt_tinggal']?>"  >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">RW </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="rw_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['rw_tinggal']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kelurahan_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kelurahan_tinggal']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kecamatan_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kecamatan_tinggal']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kota </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kota_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['kota_tinggal']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="no_telepon"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['no_telepon']?>" >
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Handphone</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="handphone"  class="form-control col-md-7 col-xs-12" value="<?php echo $result['handphone']?>" >
                </div>
              </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
          </form>
          </div>
          <div class="tab-pane" id="keluarga">
            <p class="lead">Data Keluarga</p>
            <form action="<?php echo base_url($this->uri->segment(1).'/process-info-keluarga/'.$this->uri->segment(3))?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal form-label-left" id="form-info">
              <?php echo validation_errors()?>
              <input type="hidden" name="id_pegawai" value="<?php echo $this->uri->segment(3)?>">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Pegawai
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="nama_pasangan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $result['nama_lengkap'] ?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pasangan
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="nama_pasangan" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($keluarga['nama_pasangan'])) echo $keluarga['nama_pasangan'] ?>" >
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Pasangan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="pekerjaan_pasangan"  class="form-control col-md-7 col-xs-12" value="<?php if(isset($keluarga['pekerjaan_pasangan'])) echo $keluarga['pekerjaan_pasangan'] ?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heard">Status Pernikahan</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?php
                  $options = array(
                      0 => 'Belum Menikah',
                      1 => 'Menikah',
                      2 => 'Janda',
                      3 => 'Duda'
                    );
                  echo form_dropdown('status_pernikahan',$options,$keluarga['status_pernikahan'],'class="form-control" ');
                ?>
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
                      3 => 3
                    );
                  echo form_dropdown('anak_kandung',$options,$keluarga['anak_kandung'],'class="form-control" ');
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
                      3 => 3
                    );
                  echo form_dropdown('bukan_anak_kandung',$options,$keluarga['bukan_anak_kandung'],'class="form-control" ');
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
                      3 => 3
                    );
                  echo form_dropdown('jumlah_saudara_kandung',$options,$keluarga['jumlah_saudara_kandung'],'class="form-control" ');
                ?>
              </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ayah
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="nama_ayah" value="<?php if(isset($keluarga['nama_ayah'])) echo $keluarga['nama_ayah'] ?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ibu
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="nama_ibu" value="<?php if(isset($keluarga['nama_ibu'])) echo $keluarga['nama_ibu'] ?>" >
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Hubungan Keluarga</h4>
                </div>
                <div class="col-md-3">
                  <h4>Nama Anggota Keluarga (Sesuai KTP)</h4>
                </div>
                <div class="col-md-1">
                  <h4>L/P</h4>
                </div>
                <div class="col-md-2">
                  <h4>Kandung/Bukan Kandung</h4>
                </div>
                <div class="col-md-3">
                  <h4>Pekerjaan</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Pegawai</h4>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <input type="text"  name="nama_pegawai_1" class="form-control" value="<?php if(isset($nama_pegawai_1)) echo $nama_pegawai_1?>" >
                      <input type="hidden"  name="hub_keluarga_1" class="form-control" value="0">
                      <input type="hidden"  name="sort_order_1" class="form-control" value="1">
                      <input type="hidden"  name="id_data_keluarga_1" class="form-control" value="<?php if(isset($id_data_keluarga_1)) echo $id_data_keluarga_1?>">
                    </div>
                </div>
                <div class="col-md-1">
                    <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_1)){
                        $jk = $jenis_kelamin_1;
                        if($jk == 1)
                          $jk =  1;
                        else if($jk == 0)
                          $jk = 0;
                      }
                      else $jk = '';
                        echo form_dropdown('jenis_kelamin_1',$options,$jk,'class="form-control" ');
                    ?>

                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($kandung_1)){
                        $kandung = $kandung_1;
                      }
                      else $kandung = '';
                      echo form_dropdown('kandung_1',$options,$kandung,'class="form-control" ');
                    ?>
                </div>
                <div class="col-md-3">
                    <input type="text"  name="pekerjaan_1" class="form-control" value="<?php if(isset($pekerjaan_1)) echo $pekerjaan_1?>" >
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Suami/Istri</h4>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <input type="text"  name="nama_pegawai_2" class="form-control" value="<?php if(isset($nama_pegawai_2)) echo $nama_pegawai_2?>" >
                      <input type="hidden"  name="hub_keluarga_2" class="form-control" value="1">
                      <input type="hidden"  name="sort_order_2" class="form-control" value="2">
                      <input type="hidden"  name="id_data_keluarga_2" class="form-control" value="<?php if(isset($id_data_keluarga_2)) echo $id_data_keluarga_2?>">
                    </div>
                </div>
                <div class="col-md-1">
                     <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_2)){
                        $jk = $jenis_kelamin_2;
                        if($jk == 1)
                          $jk =  1;
                        else if($jk == 0)
                          $jk = 0;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_2',$options,$jk,'class="form-control" ');
                    ?>

                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($kandung_2)){
                        $kandung = $kandung_2;
                      }
                      else $kandung = '';
                      echo form_dropdown('kandung_2',$options,$kandung,'class="form-control" ');
                    ?>
                </div>
                <div class="col-md-3">
                    <input type="text"  name="pekerjaan_2" class="form-control" value="<?php if(isset($pekerjaan_2)) echo $pekerjaan_2?>" >
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text"  name="nama_anak_1" class="form-control" value="<?php if(isset($nama_anak_1)) echo $nama_anak_1?>" >
                      <input type="hidden"  name="sort_order_anak_1" class="form-control" value="1">
                      <input type="hidden"  name="id_data_keluarga_anak_1" class="form-control" value="<?php if(isset($id_data_keluarga_anak_1)) echo $id_data_keluarga_anak_1; else echo "-";?>">
                  </div>
                </div>
                <div class="col-md-1">
                     <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_anak_1)){
                        $jk = $jenis_kelamin_anak_1;
                        if($jk == 1)
                          $jk =  1;
                        else if($jk == 0)
                          $jk = 0;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_anak_1',$options,$jk,'class="form-control" ');
                    ?>

                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($status_anak_1)){
                        $kandung = $status_anak_1;
                      }
                      else $kandung = '';
                      echo form_dropdown('status_anak_1',$options,$kandung,'class="form-control" ');
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_anak_1" class="form-control" value="<?php if(isset($pekerjaan_anak_1)) echo $pekerjaan_anak_1?>" >
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text"   name="nama_anak_2" class="form-control" value="<?php if(isset($nama_anak_2)) echo $nama_anak_2?>"  >
                      <input type="hidden"  name="sort_order_anak_2" class="form-control" value="2">
                      <input type="hidden"  name="id_data_keluarga_anak_2" class="form-control" value="<?php if(isset($id_data_keluarga_anak_2)) echo $id_data_keluarga_anak_2 ; else echo "-";?>" >
                  </div>
                </div>
                <div class="col-md-1">
                    <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_anak_2)){
                        $jk = $jenis_kelamin_anak_2;
                        if($jk == 1)
                          $jk =  1;
                        else if($jk == 0)
                          $jk = 0;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_anak_2',$options,$jk,'class="form-control" ');
                    ?>

                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($status_anak_2)){
                        $kandung = $status_anak_2;
                      }
                      else $kandung = '';
                      echo form_dropdown('status_anak_2',$options,$kandung,'class="form-control" ');
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_anak_2" class="form-control" value="<?php if(isset($pekerjaan_anak_2)) echo $pekerjaan_anak_2?>" >
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text"  name="nama_anak_3" class="form-control" value="<?php if(isset($nama_anak_3)) echo $nama_anak_3?>" >
                      <input type="hidden"  name="sort_order_anak_3" class="form-control" value="3">
                      <input type="hidden"  name="id_data_keluarga_anak_3" class="form-control" value="<?php if(isset($id_data_keluarga_anak_3)) echo $id_data_keluarga_anak_3; else echo "-";?>">
                  </div>
                </div>
                <div class="col-md-1">
                     <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_anak_3)){
                        $jk = $jenis_kelamin_anak_3;
                        if($jk == 1)
                          $jk =  1;
                        else if($jk == 0)
                          $jk = 0;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_anak_3',$options,$jk,'class="form-control" ');
                    ?>

                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($status_anak_3)){
                        $kandung = $status_anak_3;
                      }
                      else $kandung = '';
                      echo form_dropdown('status_anak_3',$options,$kandung,'class="form-control" ');
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_anak_3" class="form-control" value="<?php if(isset($pekerjaan_anak_3)) echo $pekerjaan_anak_3?>" >
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text"  name="nama_anak_4" class="form-control" value="<?php if(isset($nama_anak_4)) echo $nama_anak_4?>" >
                      <input type="hidden"  name="sort_order_anak_4" class="form-control" value="4">
                      <input type="hidden"  name="id_data_keluarga_anak_4" class="form-control" value="<?php if(isset($id_data_keluarga_anak_4)) echo $id_data_keluarga_anak_4; else echo "-";?>">
                  </div>
                </div>
                <div class="col-md-1">
                     <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_anak_4)){
                        $jk = $jenis_kelamin_anak_4;
                        if($jk == 1)
                          $jk =  1;
                        else if($jk == 0)
                          $jk = 0;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_anak_4',$options,$jk,'class="form-control" ');
                    ?>

                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($status_anak_4)){
                        $kandung = $status_anak_4;
                      }
                      else $kandung = '';
                      echo form_dropdown('status_anak_4',$options,$kandung,'class="form-control" ');
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_anak_4" class="form-control" value="<?php if(isset($pekerjaan_anak_4)) echo $pekerjaan_anak_4?>" >
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="nama_anak_5" class="form-control" value="<?php if(isset($nama_anak_5)) echo $nama_anak_5?>" >
                      <input type="hidden"  name="sort_order_anak_5" class="form-control" value="5">
                      <input type="hidden"  name="id_data_keluarga_anak_5" class="form-control" value="<?php if(isset($id_data_keluarga_anak_5)) echo $id_data_keluarga_anak_5; else echo "-";?>">
                  </div>
                </div>
                <div class="col-md-1">
                     <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_anak_5)){
                        $jk = $jenis_kelamin_anak_5;
                        if($jk == 1)
                          $jk =  1;
                        else if($jk == 0)
                          $jk = 0;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_anak_5',$options,$jk,'class="form-control" ');
                    ?>

                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($status_anak_5)){
                        $kandung = $status_anak_5;
                      }
                      else $kandung = '';
                      echo form_dropdown('status_anak_5',$options,$kandung,'class="form-control" ');
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_anak_5" class="form-control" value="<?php if(isset($pekerjaan_anak_5)) echo $pekerjaan_anak_5?>" >
                </div>
              </div>
              <div class="row">
                <span><h5>Data Saudara Kandung(Cukup 3 orang saudara kandung)</h5></span>
                <div class="col-md-2">
                  <h4>Nama Saudara Kandung</h4>
                </div>
                <div class="col-md-3">
                  <h4>Tanggal Lahir/Umur</h4>
                </div>
                <div class="col-md-1">
                  <h4>L/P</h4>
                </div>
                <div class="col-md-3">
                  <h4>Pekerjaan</h4>
                </div>
                <div class="col-md-3">
                  <h4>Alamat(Tulis Kota Saja)</h4>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="text"  name="nama_sk_1" class="form-control" value="<?php if(isset($nama_sk_1)) echo $nama_sk_1?>" >
                      <input type="hidden"  name="sort_order_sk_1" class="form-control" value="1">
                      <input type="hidden"  name="id_saudara_kandung_1" class="form-control" value="<?php if(isset($id_saudara_kandung_1)) echo $id_saudara_kandung_1; else echo "-";?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <input type="text"  name="ttl_sk_1" class="form-control" value="<?php if(isset($ttl_sk_1)) echo $ttl_sk_1?>" >
                  </div>
                <div class="col-md-1">
               <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_sk_1)){
                        $jk = $jenis_kelamin_sk_1;
                        if($jk == 1)
                          $jk =  1;
                        else if($jk == 0)
                          $jk = 0;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_sk_1',$options,$jk,'class="form-control" ');
                    ?>

                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_sk_1" class="form-control" value="<?php if(isset($pekerjaan_sk_1)) echo $pekerjaan_sk_1?>" >
                </div>
                <div class="col-md-3">
                  <input type="text"  name="alamat_sk_1" class="form-control" value="<?php if(isset($alamat_sk_1)) echo $alamat_sk_1?>" >
                </div>
              </div>
              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="text"  name="nama_sk_2" class="form-control" value="<?php if(isset($nama_sk_2)) echo $nama_sk_2?>" >
                      <input type="hidden"  name="sort_order_sk_2" class="form-control" value="2">
                      <input type="hidden"  name="id_saudara_kandung_2" class="form-control" value="<?php if(isset($id_saudara_kandung_2)) echo $id_saudara_kandung_2; else echo "-";?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <input type="text"  name="ttl_sk_2" class="form-control" value="<?php if(isset($ttl_sk_2)) echo $ttl_sk_2?>" >
                  </div>
                <div class="col-md-1">
                <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_sk_2)){
                        $jk = $jenis_kelamin_sk_2;
                        if($jk == 1)
                          $jk =  1;
                        else if($jk == 0)
                          $jk = 0;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_sk_2',$options,$jk,'class="form-control" ');
                    ?>

                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_sk_2" class="form-control" value="<?php if(isset($pekerjaan_sk_2)) echo $pekerjaan_sk_2?>" >
                </div>
                <div class="col-md-3">
                  <input type="text"  name="alamat_sk_2" class="form-control" value="<?php if(isset($alamat_sk_2)) echo $alamat_sk_2?>" >
                </div>
              </div>
              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="text"  name="nama_sk_3" class="form-control" value="<?php if(isset($nama_sk_3)) echo $nama_sk_3?>" >
                      <input type="hidden"  name="sort_order_sk_3" class="form-control" value="3">
                      <input type="hidden"  name="id_saudara_kandung_3" class="form-control" value="<?php if(isset($id_saudara_kandung_3)) echo $id_saudara_kandung_3; else echo "-";?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <input type="text"  name="ttl_sk_3" class="form-control" value="<?php if(isset($ttl_sk_3)) echo $ttl_sk_3?>" >
                  </div>
                <div class="col-md-1">
               <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_sk_3)){
                        $jk = $jenis_kelamin_sk_3;
                        if($jk == 1)
                          $jk =  1;
                        else if($jk == 0)
                          $jk = 0;
                      }
                      else $jk = '';
                        echo form_dropdown('jenis_kelamin_sk_3',$options,$jk,'class="form-control" ');
                    ?>

                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_sk_3" class="form-control" value="<?php if(isset($pekerjaan_sk_3)) echo $pekerjaan_sk_3?>" >
                </div>
                <div class="col-md-3">
                  <input type="text"  name="alamat_sk_3" class="form-control" value="<?php if(isset($alamat_sk_3)) echo $alamat_sk_3?>" >
                </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
            </form>
          </div>
          <div class="tab-pane" id="pendidikan">
            <form action="<?php echo base_url($this->uri->segment(1).'/process-info-pendidikan/'.$this->uri->segment(3))?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal form-label-left" id="form-info">
            <div class="col-md-12">
              <div class="row">
                      <p class="lead">Data Pendidikan</p>
                        <span><h5>Riwayat Pendidikan Formal</h5></span>
                      <div class="col-md-1">
                        <h4>Tingkat</h4>
                      </div>
                      <div class="col-md-5">
                        <h4>Tahun</h4>
                      </div>
                      <div class="col-md-3">
                        <h4>Nama Sekolah / PT</h4>
                      </div>
                      <div class="col-md-3">
                        <h4>Program / Jurusan</h4>
                      </div>
                    </div>
                    <input type="hidden" name="id_pendidikan_normal" value="<?php echo $this->uri->segment(3); ?>">
                    <div class="row">
                      <div class="col-md-1">
                        <h4>SD</h4>
                        <input type="hidden" name="id_formal1" value="<?php if(isset($id_formal_1)) echo $id_formal_1?>">
                          <input type="hidden" name="tingkat1" value="1">
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk1" class="form-control" value="<?php if(isset($tahun_masuk_1)) echo $tahun_masuk_1?>" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai1" class="form-control" value="<?php if(isset($tahun_selesai_1)) echo $tahun_selesai_1?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi1" class="form-control" value="<?php if(isset($nama_instansi_1)) echo $nama_instansi_1?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan1" class="form-control" value="<?php if(isset($jurusan_1)) echo $jurusan_1?>" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>SMP</h4>
                        <input type="hidden" name="id_formal2" value="<?php if(isset($id_formal_2)) echo $id_formal_2?>">
                        <input type="hidden" name="tingkat2" value="2" >
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk2" class="form-control" value="<?php if(isset($tahun_masuk_2)) echo $tahun_masuk_2?>" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai2" class="form-control" value="<?php if(isset($tahun_selesai_2)) echo $tahun_selesai_2?>" >
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi2" class="form-control" value="<?php if(isset($nama_instansi_2)) echo $nama_instansi_2?>" >
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan2" class="form-control" value="<?php if(isset($jurusan_2)) echo $jurusan_2?>" >
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>SMA</h4>
                        <input type="hidden" name="id_formal3" value="<?php if(isset($id_formal_3)) echo $id_formal_3?>">
                        <input type="hidden" name="tingkat3" value="3">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk3" class="form-control" value="<?php if(isset($tahun_masuk_3)) echo $tahun_masuk_3?>" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai3" class="form-control" value="<?php if(isset($tahun_selesai_3)) echo $tahun_selesai_3?>" >
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi3" class="form-control" value="<?php if(isset($nama_instansi_3)) echo $nama_instansi_3?>" >
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan3" class="form-control" value="<?php if(isset($jurusan_3)) echo $jurusan_3?>" >
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>D1</h4>
                        <input type="hidden" name="id_formal4" value="<?php if(isset($id_formal_4)) echo $id_formal_4?>">
                        <input type="hidden" name="tingkat4" value="4" >
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk4" class="form-control" value="<?php if(isset($tahun_masuk_4)) echo $tahun_masuk_4?>" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai4" class="form-control" value="<?php if(isset($tahun_selesai_4)) echo $tahun_selesai_4?>" >
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi4" class="form-control" value="<?php if(isset($nama_instansi_4)) echo $nama_instansi_4?>" >
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan4" class="form-control" value="<?php if(isset($jurusan_4)) echo $jurusan_4?>" >
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>D2</h4>
                        <input type="hidden" name="id_formal5" value="<?php if(isset($id_formal_5)) echo $id_formal_5?>">
                        <input type="hidden" name="tingkat5" value="5">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk5" class="form-control" value="<?php if(isset($tahun_masuk_5)) echo $tahun_masuk_5?>" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai5" class="form-control" value="<?php if(isset($tahun_selesai_5)) echo $tahun_selesai_5?>" >
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi5" class="form-control" value="<?php if(isset($nama_instansi_5)) echo $nama_instansi_5?>" >
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan5" class="form-control" value="<?php if(isset($jurusan_5)) echo $jurusan_5?>" >
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>D3</h4>
                        <input type="hidden" name="id_formal6" value="<?php if(isset($id_formal_6)) echo $id_formal_6?>">
                        <input type="hidden" name="tingkat6" value="6">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk6" class="form-control" value="<?php if(isset($tahun_masuk_6)) echo $tahun_masuk_6?>" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai6" class="form-control" value="<?php if(isset($tahun_selesai_6)) echo $tahun_selesai_6?>" >
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi6" class="form-control" value="<?php if(isset($nama_instansi_6)) echo $nama_instansi_6?>" >
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan6" class="form-control" value="<?php if(isset($jurusan_6)) echo $jurusan_6?>" >
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>S1</h4>
                        <input type="hidden" name="id_formal8" value="<?php if(isset($id_formal_8)) echo $id_formal_8 ?>">
                        <input type="hidden" name="tingkat8" value="8">
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk8" class="form-control" value="<?php if(isset($tahun_masuk_8)) echo $tahun_masuk_8?>" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai8" class="form-control" value="<?php if(isset($tahun_selesai_8)) echo $tahun_selesai_8?>" >
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi8" class="form-control" value="<?php if(isset($nama_instansi_8)) echo $nama_instansi_8?>" >
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan8" class="form-control" value="<?php if(isset($jurusan_8)) echo $jurusan_8?>" >
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>S2</h4>
                        <input type="hidden" name="id_formal9" value="<?php if(isset($id_formal_9)) echo $id_formal_9?>">
                        <input type="hidden" name="tingkat9" value="9">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk9" class="form-control" value="<?php if(isset($tahun_masuk_9)) echo $tahun_masuk_9?>" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai9" class="form-control" value="<?php if(isset($tahun_selesai_9)) echo $tahun_selesai_9?>" >
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi9" class="form-control" value="<?php if(isset($nama_instansi_9)) echo $nama_instansi_9?>" >
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan9" class="form-control" value="<?php if(isset($jurusan_9)) echo $jurusan_9?>" >
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>S3</h4>
                        <input type="hidden" name="id_formal10" value="<?php if(isset($id_formal_10)) echo $id_formal_10?>">
                        <input type="hidden" name="tingkat10" value="10">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk10" class="form-control" value="<?php if(isset($tahun_masuk_10)) echo $tahun_masuk_10?>" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai10" class="form-control" value="<?php if(isset($tahun_selesai_10)) echo $tahun_selesai_10?>" >
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi10" class="form-control" value="<?php if(isset($nama_instansi_10)) echo $nama_instansi_10?>" >
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan10" class="form-control" value="<?php if(isset($jurusan_10)) echo $jurusan_10?>" >
                        </div>
                    </div>
                    <div class="row">
                      <span><h5>Pendidkan Non Formal Diutus Oleh Asy-Syukriyah</h5></span>
                      <div class="col-md-3">
                        <h4>Tahun</h4>
                      </div>
                      <div class="col-md-3">
                        <h4>Lamanya</h4>
                      </div>
                      <div class="col-md-3">
                        <h4>Nama Lembaga Penyelenggara</h4>
                      </div>
                      <div class="col-md-3">
                        <h4>Jenis Pelatihan/Kursus/Job Training</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="hidden" name="id_nonformal1" value="<?php if(isset($id_nonformal_1)) echo $id_nonformal_1?>">
                            <input type="hidden" name="sort_order1" value="1">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahun1" class="form-control"
                            value="<?php if(isset($tahun_1)) echo $tahun_1?>" >
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanya1" class="form-control"  value="<?php if(isset($lamanya_1)) echo $lamanya_1?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembaga1" class="form-control"  value="<?php if(isset($lembaga_1)) echo $lembaga_1?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenis1" class="form-control"  value="<?php if(isset($jenis_1)) echo $jenis_1?>" >
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="hidden" name="id_nonformal2" value="<?php if(isset($id_nonformal_2)) echo $id_nonformal_2?>">
                            <input type="hidden" name="sort_order2" value="2">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahun2" class="form-control" value="<?php if(isset($tahun_2)) echo $tahun_2?>" >
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanya2" class="form-control" value="<?php if(isset($lamanya_2)) echo $lamanya_2?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembaga2" class="form-control" value="<?php if(isset($lembaga_2)) echo $lembaga_2?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenis2" class="form-control" value="<?php if(isset($jenis_2)) echo $jenis_2?>" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="hidden" name="id_nonformal3" value="<?php if(isset($id_nonformal_3)) echo $id_nonformal_3?>">
                            <input type="hidden" name="sort_order3" value="3">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahun3" class="form-control" value="<?php if(isset($tahun_3)) echo $tahun_3?>" >
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanya3" class="form-control" value="<?php if(isset($lamanya_3)) echo $lamanya_3?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembaga3" class="form-control" value="<?php if(isset($lembaga_3)) echo $lembaga_3?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenis3" class="form-control" value="<?php if(isset($jenis_3)) echo $jenis_3?>" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <input type="hidden" name="id_nonformal4" value="<?php if(isset($id_nonformal_4)) echo $id_nonformal_4?>">
                          <input type="hidden" name="sort_order4" value="4">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahun4" class="form-control" value="<?php if(isset($tahun_4)) echo $tahun_4?>" >
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanya4" class="form-control" value="<?php if(isset($lamanya_4)) echo $lamanya_4?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembaga4" class="form-control" value="<?php if(isset($lembaga_4)) echo $lembaga_4?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenis4" class="form-control" value="<?php if(isset($jenis_4)) echo $jenis_4?>" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <input type="hidden" name="id_nonformal5" value="<?php if(isset($id_nonformal_5)) echo $id_nonformal_5?>">
                          <input type="hidden" name="sort_order5" value="5">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahun5" class="form-control" value="<?php if(isset($tahun_5)) echo $tahun_5?>" >
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanya5" class="form-control" value="<?php if(isset($lamanya_5)) echo $lamanya_5?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembaga5" class="form-control" value="<?php if(isset($lembaga_5)) echo $lembaga_5?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenis5" class="form-control" value="<?php if(isset($jenis_5)) echo $jenis_5?>" >
                      </div>
                    </div>
                    <div class="row">
                      <span><h5>Eksternal Asy-Syukriyyah atau diutus oleh Lembaga lain atau inisiatif sendiri</h5></span>
                      <div class="col-md-3">
                        <h4>Tahun</h4>
                      </div>
                      <div class="col-md-3">
                        <h4>Lamanya</h4>
                      </div>
                      <div class="col-md-3">
                        <h4>Nama Lembaga Penyelenggara</h4>
                      </div>
                      <div class="col-md-3">
                        <h4>Jenis Pelatihan/Kursus/Job Training</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="hidden" name="id_nonformal_td1" value="<?php if(isset($id_nonformal_td1)) echo $id_nonformal_td1?>">
                            <input type="hidden" name="sort_ordertd1" value="1">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahuntd1" class="form-control"
                            value="<?php if(isset($tahun_td1)) echo $tahun_td1?>" >
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanyatd1" class="form-control"  value="<?php if(isset($lamanya_td1)) echo $lamanya_td1?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembagatd1" class="form-control"  value="<?php if(isset($lembaga_td1)) echo $lembaga_td1?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenistd1" class="form-control"  value="<?php if(isset($jenis_td1)) echo $jenis_td1?>" >
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="hidden" name="id_nonformal_td2" value="<?php if(isset($id_nonformal_td2)) echo $id_nonformal_td2?>">
                            <input type="hidden" name="sort_ordertd2" value="2">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahuntd2" class="form-control" value="<?php if(isset($tahun_td2)) echo $tahun_td2?>" >
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanyatd2" class="form-control" value="<?php if(isset($lamanya_td2)) echo $lamanya_td2?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembagatd2" class="form-control" value="<?php if(isset($lembaga_td2)) echo $lembaga_td2?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenistd2" class="form-control" value="<?php if(isset($jenis_td2)) echo $jenis_td2?>" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="hidden" name="id_nonformal_td3" value="<?php if(isset($id_nonformal_td3)) echo $id_nonformal_td3?>">
                            <input type="hidden" name="sort_ordertd3" value="3">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahuntd3" class="form-control" value="<?php if(isset($tahun_td3)) echo $tahun_td3?>" >
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanyatd3" class="form-control" value="<?php if(isset($lamanya_td3)) echo $lamanya_td3?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembagatd3" class="form-control" value="<?php if(isset($lembaga_td3)) echo $lembaga_td3?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenistd3" class="form-control" value="<?php if(isset($jenis_td3)) echo $jenis_td3?>" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <input type="hidden" name="id_nonformal_td4" value="<?php if(isset($id_nonformal_td4)) echo $id_nonformal_td4?>">
                          <input type="hidden" name="sort_ordertd4" value="4">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahuntd4" class="form-control" value="<?php if(isset($tahun_td4)) echo $tahun_td4?>" >
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanyatd4" class="form-control" value="<?php if(isset($lamanya_td4)) echo $lamanya_td4?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembagatd4" class="form-control" value="<?php if(isset($lembaga_td4)) echo $lembaga_td4?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenistd4" class="form-control" value="<?php if(isset($jenis_td4)) echo $jenis_td4?>" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <input type="hidden" name="id_nonformal_td5" value="<?php if(isset($id_nonformal_td5)) echo $id_nonformal_td5?>">
                          <input type="hidden" name="sort_ordertd5" value="5">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahuntd5" class="form-control" value="<?php if(isset($tahun_td5)) echo $tahun_td5?>" >
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanyatd5" class="form-control" value="<?php if(isset($lamanya_td5)) echo $lamanya_td5?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembagatd5" class="form-control" value="<?php if(isset($lembaga_td5)) echo $lembaga_td5?>" >
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenistd5" class="form-control" value="<?php if(isset($jenis_td5)) echo $jenis_td5?>" >
                      </div>
                    </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
          </form>
          </div>
          <div class="tab-pane" id="pekerjaan">
              <form action="<?php echo base_url($this->uri->segment(1).'/process-info-pekerjaan/'.$this->uri->segment(3))?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal form-label-left" id="form-info">
                <input type="hidden" name="id_riwayat_kerja" value="<?php echo $pekerjaan['id_riwayat_kerja'] ?>">
                <?php echo validation_errors()?>
                <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Pegawai
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="pegawai" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $result['nama_lengkap']?>" readonly>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="jabatan" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $pekerjaan['jabatan']?>" >
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
                  echo form_dropdown('unit_kerja',$options,$pekerjaan['unit_kerja'],"class='form-control' ");
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
                  echo form_dropdown('unit_kerja_sebelumnya',$options,$pekerjaan['unit_kerja_sebelumnya'],"class='form-control' ");
               ?>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mulai Tugas</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="mulai_tugas" class="form-control col-md-7 col-xs-12" value="<?php echo $pekerjaan['mulai_tugas'] ?>" id="mulai_tugas" >
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
                  echo form_dropdown('status_kepegawaian',$options,$pekerjaan['status_kepegawaian'],"class='form-control' ");
               ?>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengangkatan Sebagai Calon Pegawai Tetap</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="calon_tetap" class="form-control col-md-7 col-xs-12" value="<?php if($pekerjaan['pengangkatan_calon_tetap'] != 0) echo $pekerjaan['pengangkatan_calon_tetap']?>" id="calon_tetap" >
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengangkatan Sebagai Pegawai Tetap</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="tetap" class="form-control col-md-7 col-xs-12" value="<?php if($pekerjaan['pengangkatan_tetap'] != 0) echo $pekerjaan['pengangkatan_tetap']?>" id="tetap" >
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Fungsi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label><input  type="radio" name="fungsi" value="1" <?php if($pekerjaan['fungsi'] == 1) echo "checked";?>> Guru / Tenaga Pendidik</label>
              <label><input  type="radio" name="fungsi" value="2" <?php if($pekerjaan['fungsi'] == 2) echo "checked";?>> Non Guru / Tenaga Kependidikan</label>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sertifikasi Pendidik</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label><input  type="radio" name="sertifikasi" value="1" <?php if($pekerjaan['status_sertifikasi'] == 1) echo "checked";?>> Ya</label>
              <label><input  type="radio" name="sertifikasi" value="2" <?php if($pekerjaan['status_sertifikasi'] == 2) echo "checked";?>> Dalam Proses</label>
              <label><input  type="radio" name="sertifikasi" value="3" <?php if($pekerjaan['status_sertifikasi'] == 3) echo "checked";?>> Tidak / Belum</label>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jika Ya, Tahun..</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="tahun_sertifikasi" class="form-control col-md-7 col-xs-12" value="<?php echo $pekerjaan['tahun_sertifikasi']?>" id="tahun_sertifikasi" >
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Yang Mengeluarkan Sertifikat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="sertifikat" class="form-control col-md-7 col-xs-12" value="<?php echo $pekerjaan['sertifikasi_pendidik']?>" >
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label><input   type="radio" name="status_aktif" value="0" <?php if($pekerjaan['status_aktif'] == 0) echo "checked";?>>Aktif</label>
              <label><input   type="radio" name="status_aktif" value="1" <?php if($pekerjaan['status_aktif'] == 1) echo "checked";?>> Non Aktif</label>
            </div>
          </div>
          <div class="row">
            <span><h5>Riwayat Pekerjaan dan Jabatan di asy-syukriyyah</h5></span>
            <div class="col-md-3">
              <h4>Tahun Mulai</h4>
            </div>
            <div class="col-md-3">
              <h4>Tahun Selesai</h4>
            </div>
            <div class="col-md-3">
              <h4>Unit</h4>
            </div>
            <div class="col-md-3">
              <h4>Jabatan</h4>
            </div>
          </div>
          <?php
            for($i=1;$i<=5;$i++){
          ?>
          <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <input type="hidden" name="id_riwayat_jabatan_<?php echo $i;?>" value="<?php if(isset($pekerjaan['id_riwayat_jabatan_'.$i])) echo $pekerjaan['id_riwayat_jabatan_'.$i] ?>">
                    <input type="hidden"  name="sort_order_<?php echo $i?>" class="form-control" value="<?php echo $i?>">
                  <input type="text" placeholder="Tahun " name="tahun_mulai_<?php echo $i?>" class="form-control" value="<?php if(isset($pekerjaan['tahun_mulai_'.$i])) echo $pekerjaan['tahun_mulai_'.$i] ?>" >
                </div>
              </div>
              <div class="col-md-3">
                  <input type="text" placeholder="Tahun " name="tahun_selesai_<?php echo $i?>" class="form-control" value="<?php if(isset($pekerjaan['tahun_selesai_'.$i])) echo $pekerjaan['tahun_selesai_'.$i] ?>" >
              </div>
            <div class="col-md-3">
              <input type="text"  placeholder="Unit " name="unit_<?php echo $i?>" class="form-control" value="<?php if(isset($pekerjaan['unit_'.$i])) echo $pekerjaan['unit_'.$i] ?>" >
            </div>
            <div class="col-md-3">
              <input type="text" placeholder="Jabatan" name="jabatan_<?php echo $i?>" class="form-control" value="<?php if(isset($pekerjaan['jabatan_'.$i])) echo $pekerjaan['jabatan_'.$i] ?>" >
            </div>
          </div>
          <?php
            }
          ?>
          <div class="row">
            <span><h5>Riwayat Pekerjaan dan Jabatan Selain di asy-syukriyyah</h5></span>
            <div class="col-md-3">
              <h4>Tahun</h4>
            </div>
            <div class="col-md-3">
              <h4>Nama Instansi/Lembaga</h4>
            </div>
            <div class="col-md-3">
              <h4>Lembaga / Instansi</h4>
            </div>
            <div class="col-md-3">
              <h4>Alasan Berhenti Keluar</h4>
            </div>
          </div>
           <?php
            for($i=1;$i<=5;$i++){
          ?>
           <div class="row">
            <div class="col-md-6">
              <div class="col-md-6">
                <div class="form-group">
                    <input type="hidden" name="id_riwayat_jabatan_diluar<?php echo $i;?>" value="<?php if(isset($pekerjaan['id_riwayat_jabatan_diluar'.$i])) echo $pekerjaan['id_riwayat_jabatan_diluar'.$i] ?>">
                    <input type="hidden"  name="sort_order_diluar_<?php echo $i?>" class="form-control" value="<?php echo $i?>">
                  <input type="text" placeholder="Tahun " name="tahun_diluar_<?php echo $i?>" class="form-control" value="<?php if(isset($pekerjaan['tahun_diluar_'.$i])) echo $pekerjaan['tahun_diluar_'.$i]?>" >
                </div>
              </div>
              <div class="col-md-5">
                <input type="text" placeholder="Instansi" name="nama_instansi_<?php echo $i?>" class="form-control" value="<?php if(isset($pekerjaan['nama_instansi_'.$i])) echo $pekerjaan['nama_instansi_'.$i]?>" >
              </div>
            </div>
            <div class="col-md-3">
              <input type="text" placeholder="Nama Lembaga " name="jabatan_diluar_<?php echo $i?>" class="form-control" value="<?php if(isset($pekerjaan['jabatan_diluar_'.$i])) echo $pekerjaan['jabatan_diluar_'.$i]?>" >
            </div>
            <div class="col-md-3">
              <input type="text" placeholder="Alasan" name="alasan_keluar_<?php echo $i?>" class="form-control" value="<?php if(isset($pekerjaan['alasan_keluar_'.$i])) echo $pekerjaan['alasan_keluar_'.$i]?>" >
            </div>
          </div>
          <?php
          }
          ?>
          <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
            </form>
          </div>
          <!-- <div class="tab-pane" id="sosial">
            <form class="form-horizontal form-label-left">
              <div class="row">
                <span><h5>Riwayat Kegiatan Sosial Dan Organisasi</h5></span>
                <div class="col-md-3">
                  <h4>Tahun</h4>
                </div>
                <div class="col-md-3">
                  <h4>Nama Organisasi</h4>
                </div>
                <div class="col-md-3">
                  <h4>Jenis Organisasi</h4>
                </div>
                <div class ="col-md-3">
                  <h4>Jabatan</h4>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control" >
                    </div>
                  </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Unit " name="unit" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jenis Organisasi" name="jabatan" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="jabatan" class="form-control" >
                </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control" >
                    </div>
                  </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Unit " name="unit" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jenis Organisasi" name="jabatan" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="jabatan" class="form-control" >
                </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control" >
                    </div>
                  </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Unit " name="unit" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jenis Organisasi" name="jabatan" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="jabatan" class="form-control" >
                </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control" >
                    </div>
                  </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Unit " name="unit" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jenis Organisasi" name="jabatan" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="jabatan" class="form-control" >
                </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control" >
                    </div>
                  </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Unit " name="unit" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jenis Organisasi" name="jabatan" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="jabatan" class="form-control" >
                </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                    </div>
                  </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Unit " name="unit" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jenis Organisasi" name="jabatan" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="jabatan" class="form-control">
                </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                    </div>
                  </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Unit " name="unit" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jenis Organisasi" name="jabatan" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="jabatan" class="form-control">
                </div>
              </div>
            </form>
          </div> -->
        </div>
      </div>

      <div class="clearfix"></div>

    </div>
  </div>
</div>
