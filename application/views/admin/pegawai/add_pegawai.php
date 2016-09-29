<div class="">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> Tambah Pegawai</h2>
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
          <li class="<?php if($this->uri->segment(3) == "") echo "active";?>"><a href="#info" data-toggle="tab">Info Pegawai</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == "keluarga") echo "active";?>"><a href="#keluarga" data-toggle="tab">Keluarga</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == "pendidikan") echo "active";?>"><a href="#pendidikan" data-toggle="tab">Pendidikan</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == "pekerjaan") echo "active";?>"><a href="#pekerjaan" data-toggle="tab">Pekerjaan Dan Jabatan</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == "sosial") echo "active";?>"><a href="#sosial" data-toggle="tab">Kegiatan Sosial Dan Organisasi</a>
          </li>
        </ul>
      </div>
      <div class="col-xs-10">
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane <?php if($this->uri->segment(3) == "") echo "active"?>" id="info">
            <p class="lead">Personal Info Pegawai</p>
            <form action="<?php echo base_url($this->uri->segment(1).'/process-data-pegawai/'.$this->uri->segment(2))?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal form-label-left" id="form_info">
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
                  <input type="text" id="last-name" name="gelar_depan" class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('gelar_depan')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Gelar Belakang</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="gelar_belakang"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('gelar_belakang')?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
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
                  <input  type="text" name="tempat_lahir"  class="form-control col-md-7 col-xs-12" value="<?php echo set_value('tempat_lahir')?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="tanggal_lahir" type="text"  value="<?php echo set_value('birthday')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" name="agama">
                    <option value="Islam">Islam</option>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat KTP
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="alamat_ktp" class="form-control col-md-7 col-xs-12"><?php echo set_value('alamat_tinggal')?></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">RT </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="rt_ktp"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('rt_ktp')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">RW </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="rw_ktp"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('rw_ktp')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kelurahan_ktp"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('kelurahan_ktp')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kecamatan_ktp"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('kecamatan_ktp')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kota </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kota_ktp"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('kota_ktp')?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat Tinggal
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="alamat_tinggal" class="form-control col-md-7 col-xs-12"><?php echo set_value('alamat_tinggal')?></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">RT </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="rt_tinggal"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('rt_tinggal')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">RW </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="rw_tinggal"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('rw_tinggal')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kelurahan_tinggal"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('kelurahan_tinggal')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kecamatan_tinggal"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('kecamatan_tinggal')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Kota </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="kota_tinggal"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('kota_tinggal')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="no_telepon"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('no_telepon')?>">
                </div>
              </div>
              <div class="item form-group">
                <label  class="control-label col-md-3 col-sm-3 col-xs-12">Handphone</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  type="text" name="handphone"  class="form-control col-md-7 col-xs-12"  value="<?php echo set_value('handphone')?>">
                </div>
              </div>
              <div class="item form-group">
              <label  class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <button type="submit" class="btn btn-success" id="add-info">Save & Next</button>
                </div>
              </div>
          </form>
          </div>
          <div class="tab-pane <?php if($this->uri->segment(3) == "keluarga") echo "active"?>" id="keluarga">
            <p class="lead">Data Keluarga</p>
            <form class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Pegawai
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="nama_pegawai" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('nama_pegawai')?>">
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
                      <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                </div>
                <div class="col-md-2">
                  <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Suami/Istri</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                  </div>
                </div>
                <div class="col-md-1">
                  <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                </div>
                <div class="col-md-2">
                  <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="text" name="text"  name="tahun_masuk[1]" class="form-control">
                </div>
              </div>
              <?php
                $i = 0;$max = 5;
                for($i;$i<$max;$i++){
              ?>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="text"  name="nama_anak[<?php echo $i?>]" class="form-control">
                  </div>
                </div>
                <div class="col-md-1">
                    <input type="text" name="text"  name="jenis_kelamin_anak[<?php echo $i?>]" class="form-control">
                </div>
                <div class="col-md-2">
                  <input type="text" name="text"  name="status_anak[<?php echo $i?>]" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text"  name="pekerjaan[<?php echo $i?>]" class="form-control">
                </div>
              </div>
              <?php
                }
              ?>
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
          <div class="tab-pane <?php if($this->uri->segment(3) == "pendidikan") echo "active"?>" id="pendidikan">
            <p class="lead">Pendidikan</p>
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
          <div class="tab-pane <?php if($this->uri->segment(3) == "pekerjaan") echo "active"?>" id="pekerjaan">
            <form class="form-horizontal form-label-left">
            <p class="lead">Riwayat Pekerjaan dan Jabatan</p>
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
                  <option value="1">Pegawai Tetap</option>
                  <option value="2">Calon Pegawai Tetap</option>
                  <option value="3">Pegawai Kontrak</option>
                  <option value="4">Pegawai Honorer</option>
                  <option value="5">DPK/GBS</option>
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
                    <input type="text" name="text" placeholder="Nama Instansi" name="lamanya" class="form-control">
                  </div>
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan " name="Lembaga" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Alasan" name="pelatihan" class="form-control">
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
                    <input type="text" name="text" placeholder="Nama Instansi" name="lamanya" class="form-control">
                  </div>
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="Lembaga" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Alasan" name="pelatihan" class="form-control">
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
                    <input type="text" name="text" placeholder="Nama Instansi" name="lamanya" class="form-control">
                  </div>
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="Lembaga" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Alasan" name="pelatihan" class="form-control">
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
                    <input type="text" name="text" placeholder="Nama Instansi" name="lamanya" class="form-control">
                  </div>
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="Lembaga" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Alasan" name="pelatihan" class="form-control">
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
                    <input type="text" name="text" placeholder="Nama Instansi" name="lamanya" class="form-control">
                  </div>
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Jabatan" name="Lembaga" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text" placeholder="Alasan" name="pelatihan" class="form-control">
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane <?php if($this->uri->segment(3) == "sosial") echo "active"?>" id="sosial">
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
      </div>

      <div class="clearfix"></div>

    </div>
  </div>
</div>

<!-- Modal for Add to Info -->
                                <div id="infoModal" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <!-- <div class="modal-header">
                                      </div> -->
                                      <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                        <h4 class="modal-title text-center"></h4>
                                      <div class="modal-body">
                                           <div id="result"></div>
                                      </div> 
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.Modal for Add to Cart -->   