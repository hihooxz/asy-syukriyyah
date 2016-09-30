<div class="container" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Quick Action</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                  </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Data Karyawan </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div id="wizard_verticle" class="form_wizard wizard_verticle">
              <ul class="list-unstyled wizard_steps">
                <li>
                  <a href="#step-11">
                    <span class="step_no">1</span>
                  </a>
                </li>
                <li>
                  <a href="#step-22">
                    <span class="step_no">2</span>
                  </a>
                </li>
                <li>
                  <a href="#step-33">
                    <span class="step_no">3</span>
                  </a>
                </li>
                <li>
                  <a href="#step-44">
                    <span class="step_no">4</span>
                  </a>
                </li>
                <li>
                  <a href="#step-55">
                    <span class="step_no">5</span>
                  </a>
                </li>
              </ul>

              <div id="step-11">
                <h2 class="StepTitle">Step 1 karyawan</h2>
                <form class="form-horizontal form-label-left">

                  <span class="section">Personal Info</span>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama_lengkap" value="<?php echo set_value('nama_lengkap')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Gelar Depan
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="last-name" name="gelar_depan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('gelar_depan')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Gelar Belakang</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="gelar_belakang"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('gelar_belakang')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div id="gender" class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                          <input type="radio" name="jenis_kelamin" value="1"> &nbsp; Laki-Laki &nbsp;
                        </label>
                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                          <input type="radio" name="jenis_kelamin" value="2"> Perempuan
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="tempat_lahir"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('tempat_lahir')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="tanggal_lahir" type="text">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="heard" class="form-control" name="agama" value="<?php echo set_value('agama')?>">
                        <option value="islam">islam</option>
                      </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat Ktp
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea id="textarea" required="required" name="alamat_ktp" class="form-control col-md-7 col-xs-12"><?php echo set_value('alamat_ktp')?></textarea>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Rt </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="rt_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('rt_ktp')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Rw </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="rw_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('rw_ktp')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="kelurahan_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('kelurahan_ktp')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="kecamatan_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('kecamatan_ktp')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kota </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="kota_ktp"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('kota_ktp')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat tinggal
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea id="textarea" required="required" name="alamat_tinggal" class="form-control col-md-7 col-xs-12"><?php echo set_value('alamat_tinggal')?></textarea>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Rt </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="rt_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('rt_tinggal')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Rw </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="rw_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('rw_tinggal')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="kelurahan_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('kelurahan_tinggal')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="kecamatan_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('kecamatan_tinggal')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kota </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="kota_tinggal"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('kota_tinggal')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="no_telepon"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('no_telepon')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Handphone</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input  type="text" name="handphone"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('handphone')?>">
                    </div>
                  </div>
                </form>
              </div>
              <div id="step-22">
                <h2 class="StepTitle">Step 2 Keluarga</h2>
                <form class="form-horizontal form-label-left">

                  <span class="section">Personal Info</span>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Karyawan
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <?php
                        $options = array();
                        if($karyawan!=FALSE){
                          foreach ($karyawan as $rows) {
                              $options[$rows->id_karyawan] = $rows->nama_lengkap;
                          }
                          echo form_dropdown('karyawan',$options,set_value('karyawan'),"class='form-control'");
                        }
                       ?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pasangan
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="last-name" name="nama_pasangan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('nama_pasangan')?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Pasangan</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="heard" class="form-control" name="status" >
                        <option>Choose option</option>
                        <option value="0">PNS</option>
                        <option value="1">TNI/Polri</option>
                        <option value="2">Swasta</option>
                        <option value="3">Lainnya</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heard">Status Pernikahan</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" name="status" >
                      <option>Choose option</option>
                      <option value="0">Belum Menikah</option>
                      <option value="1">Menikah</option>
                      <option value="2">Janda</option>
                      <option value="3">Duda</option>
                    </select>
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
                    <select id="heard" class="form-control" name="role" value="<?php echo set_value('bukan_anak_kandung')?>">
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
                      <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="nama_ayah" value="<?php echo set_value('nama_ayah')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ibu
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="nama_ibu" value="<?php echo set_value('nama_ibu')?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1">
                      <h4>Hubungan Keluarga</h4>
                    </div>
                    <div class="col-md-3">
                      <h4>Nama Anggota Keluarga(Sesuai KTP)</h4>
                    </div>
                    <div class="col-md-2">
                      <h4>L/P</h4>
                    </div>
                    <div class="col-md-3">
                      <h4>Kandung/Bukan Kandung</h4>
                    </div>
                    <div class="col-md-3">
                      <h4>Pekerjaan</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1">
                      <h4>Pegawai</h4>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1">
                      <h4>Suami/Istri</h4>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1">
                      <h4>Anak</h4>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1">
                      <h4>Anak</h4>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1">
                      <h4>Anak</h4>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1">
                      <h4>Anak</h4>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1">
                      <h4>Anak</h4>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                    <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
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
                          <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text"  name="tahun_keluar[1]" class="form-control">
                      </div>
                    <div class="col-md-1">
                      <input type="text" name="text"  name="nama_sekolah[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="program[1]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="program[1]" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text"  name="tahun_keluar[1]" class="form-control">
                    </div>
                  <div class="col-md-1">
                    <input type="text" name="text"  name="nama_sekolah[1]" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="text"  name="program[1]" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="text" name="program[1]" class="form-control">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" name="tahun_keluar[1]" class="form-control">
                    </div>
                  <div class="col-md-1">
                    <input type="text" name="text"   name="nama_sekolah[1]" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="text"  name="program[1]" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="text"  name="program[1]" class="form-control">
                  </div>
              </div>
                </form>
              </div>
              <div id="step-33">
                <h2 class="StepTitle">Step 3 Content</h2>
                  <form class="form-horizontal form-label-left">
                  <div class="col-md-12">
                    <div class="row">
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
                    <div class="row">
                      <div class="col-md-1">
                        <h4>SD</h4>
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk[1]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_keluar[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_sekolah[1]" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="program[1]" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>SMP</h4>
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                          <input type="text"  name="text" placeholder="Tahun Masuk" name="tahun_masuk[1]" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_keluar[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_sekolah[1]" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="program[1]" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>SMA</h4>
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk[1]" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_keluar[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_sekolah[1]" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="program[1]" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>D1</h4>
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk[1]" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_keluar[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_sekolah[1]" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="program[1]" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>D2</h4>
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk[1]" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_keluar[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_sekolah[1]" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="program[1]" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>D3</h4>
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk[1]" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_keluar[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_sekolah[1]" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="program[1]" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>S1</h4>
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk[1]" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_keluar[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_sekolah[1]" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="program[1]" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>S2</h4>
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk[1]" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_keluar[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_sekolah[1]" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="program[1]" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>S3</h4>
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk[1]" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_keluar[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_sekolah[1]" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="program[1]" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="heard" class="form-control" name="pendidikan_terakhir" value="<?php echo set_value('pendidikan_terakhir')?>">
                        <option value="1">SD</option>
                        <option value="2">SMP</option>
                        <option value="3">SMA</option>
                        <option value="4">D1</option>
                        <option value="5">D2</option>
                        <option value="6">D3</option>
                        <option value="7">S1</option>
                        <option value="8">S2</option>
                        <option value="9">S3</option>
                      </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Yang di Tempuh</label><span>*wajib diisi apabila pada saat ini masih sedang menempuh pendidikan lanjutan</span>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="heard" class="form-control" name="pendidikanditempuh">
                        <option value="1">Paket B,C</option>
                        <option value="4">D1</option>
                        <option value="5">D2</option>
                        <option value="6">D3</option>
                        <option value="7">S1</option>
                        <option value="8">S2</option>
                        <option value="9">S3</option>
                      </select>
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
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
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
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
              <div id="step-44">
                <h2 class="StepTitle">Step 4 Content</h2>
                <form class="form-horizontal form-label-left">

                  <span class="section">RIWAYAT PEKERJAAN DAN JABATAN</span>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Kerja Sekarang</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="unit_sekarang" >
                        <option>Choose option</option>
                        <option value="Dept Support">Dept Support</option>
                        <option value="LPIA">LPIA</option>
                        <option value="LDSM">LDSM</option>
                        <option value="LPP">LEKU</option>
                        <option value="TKislam">TK Islam</option>
                        <option value="Miplus">MI Plus</option>
                        <option value="MTs Plus">MTs Plus</option>
                        <option value="SMPIT">SMPIT</option>
                        <option value="SMAIT">SMAIT</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Kerja Sebelumnya</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="unit_sebelumnya" >
                        <option>Choose option</option>
                        <option value="Dept Support">Dept Support</option>
                        <option value="LPIA">LPIA</option>
                        <option value="LDSM">LDSM</option>
                        <option value="LPP">LEKU</option>
                        <option value="TKislam">TK Islam</option>
                        <option value="Miplus">MI Plus</option>
                        <option value="MTs Plus">MTs Plus</option>
                        <option value="SMPIT">SMPIT</option>
                        <option value="SMAIT">SMAIT</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mulai Bertugas
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="mulai_bertugas" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heard">Status Kepegawaian</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" name="status_kepegawain" >
                      <option>Choose option</option>
                      <option value="0">Pegawai Tetap</option>
                      <option value="1">Calon Pegawai Tetap</option>
                      <option value="2">Pegawai Honorer</option>
                      <option value="3">DPK/GBS</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <span>Bagi Pegawai Tetap dan Calon Pegawai Tetap</span>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengangkatan Sebagai Calon Pegawai Tetap
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="calon_tetap" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengangkatan Sebagai Pegawai Tetap
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="tetap" type="text">
                  </div>
                </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heard">Fungsi</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" name="fungsi" >
                      <option>Choose option</option>
                      <option value="0">Tenaga Pendidik/Guru</option>
                      <option value="1">Tenaga Kependidikan/Non Guru</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heard">Sertifikasi Pendidik</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" name="fungsi" >
                      <option>Choose option</option>
                      <option value="0">YA</option>
                      <option value="1">Dalam Proses</option>
                      <option value="2">Belum/Tidak</option>
                    </select>
                  </div>
                  </div>
                  <div class="row">
                    <span><h5>Riwayat Jabatan Di Asy-Syukriyah</h5></span>
                    <div class="col-md-3">
                      <h4>Tahun</h4>
                    </div>
                    <div class="col-md-3">
                      <h4>Unit</h4>
                    </div>
                    <div class="col-md-6">
                      <h4>Jabatan</h4>
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                      <input type="text" name="text" placeholder="Jabatan" name="jabatan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <span><h5>RiwayatPekerjaan dan Jabatan Selain di asy-syukriyyah</h5></span>
                    <div class="col-md-3">
                      <h4>Tahun</h4>
                    </div>
                    <div class="col-md-3">
                      <h4>Nama Instansi/Lembaga</h4>
                    </div>
                    <div class="col-md-3">
                      <h4>Jabatan</h4>
                    </div>
                    <div class="col-md-3">
                      <h4>Alasan Berhenti Keluar</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Tahun " name="tahun[1]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="text" placeholder="Lamanya" name="lamanya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Nama Lembaga " name="Lembaga" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="text" placeholder="Pelatihan" name="pelatihan" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
              <div id="step-55">
                <h2 class="StepTitle">Step 5 Content</h2>
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
              </div>
            </div>
            <!-- End SmartWizard Content -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/common/script_add'); ?>
