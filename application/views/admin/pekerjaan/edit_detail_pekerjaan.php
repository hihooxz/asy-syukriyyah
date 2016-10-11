
<div class="" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ubah Data Pekerjaan</h3>
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
              <input  type="text" name="pegawai" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $result['nama_lengkap']?>" readonly>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="jabatan" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $result['jabatan']?>">
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
                  echo form_dropdown('unit_kerja',$options,$result['unit_kerja'],"class='form-control'");
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
                  echo form_dropdown('unit_kerja_sebelumnya',$options,$result['unit_kerja_sebelumnya'],"class='form-control'");
               ?>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mulai Tugas</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="mulai_tugas" class="form-control col-md-7 col-xs-12" value="<?php echo $result['mulai_tugas'] ?>" id="mulai_tugas">
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
                  echo form_dropdown('status_kepegawaian',$options,$result['status_kepegawaian'],"class='form-control'");
               ?>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengangkatan Sebagai Calon Pegawai Tetap</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="calon_tetap" class="form-control col-md-7 col-xs-12" value="<?php if($result['pengangkatan_calon_tetap'] != 0) echo $result['pengangkatan_calon_tetap']?>" id="calon_tetap">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengangkatan Sebagai Pegawai Tetap</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="tetap" class="form-control col-md-7 col-xs-12" value="<?php if($result['pengangkatan_tetap'] != 0) echo $result['pengangkatan_tetap']?>" id="tetap">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Fungsi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label><input type="radio" name="fungsi" value="1" <?php if($result['fungsi'] == 1) echo "checked";?>> Guru / Tenaga Pendidik</label>
              <label><input type="radio" name="fungsi" value="2" <?php if($result['fungsi'] == 2) echo "checked";?>> Non Guru / Tenaga Kependidikan</label>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sertifikasi Pendidik</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label><input type="radio" name="sertifikasi" value="1" <?php if($result['status_sertifikasi'] == 1) echo "checked";?>> Ya</label>
              <label><input type="radio" name="sertifikasi" value="2" <?php if($result['status_sertifikasi'] == 2) echo "checked";?>> Dalam Proses</label>
              <label><input type="radio" name="sertifikasi" value="3" <?php if($result['status_sertifikasi'] == 3) echo "checked";?>> Tidak / Belum</label>
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
              <label><input type="radio" name="status_aktif" value="0" <?php if($result['status_aktif'] == 0) echo "checked";?>>Aktif</label>
              <label><input type="radio" name="status_aktif" value="1" <?php if($result['status_aktif'] == 1) echo "checked";?>> Non Aktif</label>
            </div>
          </div>
          <div class="row">
            <span><h5>Riwayat Jabatan Di Asy-Syukriyah</h5></span>
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
          <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <input type="text" name="text" placeholder="Tahun " name="tahun_mulai_1" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                  <input type="text" name="text" placeholder="Tahun " name="tahun_selesai_1" class="form-control">
              </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Unit " name="unit_1" class="form-control">
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Jabatan" name="jabatan_1" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="text" placeholder="Tahun " name="tahun_mulai_2" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
                <input type="text" name="text" placeholder="Tahun " name="tahun_selesai_2" class="form-control">
            </div>
          <div class="col-md-3">
            <input type="text" name="text" placeholder="Unit " name="unit_2" class="form-control">
          </div>
          <div class="col-md-3">
            <input type="text" name="text" placeholder="Jabatan" name="jabatan_2" class="form-control">
          </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="text" placeholder="Tahun " name="tahun_mulai_3" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
                <input type="text" name="text" placeholder="Tahun " name="tahun_selesai_3" class="form-control">
            </div>
          <div class="col-md-3">
            <input type="text" name="text" placeholder="Unit " name="unit_3" class="form-control">
          </div>
          <div class="col-md-3">
            <input type="text" name="text" placeholder="Jabatan" name="jabatan_3" class="form-control">
          </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="text" placeholder="Tahun " name="tahun_mulai_4" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
                <input type="text" name="text" placeholder="Tahun " name="tahun_selesai_4" class="form-control">
            </div>
          <div class="col-md-3">
            <input type="text" name="text" placeholder="Unit " name="unit_4" class="form-control">
          </div>
          <div class="col-md-3">
            <input type="text" name="text" placeholder="Jabatan" name="jabatan_4" class="form-control">
          </div>
          </div>
          <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <input type="text" name="text" placeholder="Tahun " name="tahun_mulai_5" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                  <input type="text" name="text" placeholder="Tahun " name="tahun_selesai_5" class="form-control">
              </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Unit " name="unit_5" class="form-control">
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Jabatan" name="jabatan_5" class="form-control">
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
                  <input type="text" name="text" placeholder="Tahun " name="tahun_1" class="form-control">
                </div>
              </div>
              <div class="col-md-5">
                <input type="text" name="text" placeholder="" name="nama_instansi_1" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Nama Lembaga " name="jabatan_1" class="form-control">
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Pelatihan" name="alasan_keluar_1" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="text" placeholder="Tahun " name="tahun_2" class="form-control">
                </div>
              </div>
              <div class="col-md-5">
                <input type="text" name="text" placeholder="instansi" name="nama_instansi_2" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Nama Lembaga " name="jabatan_2" class="form-control">
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Pelatihan" name="alasan_keluar_2" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="text" placeholder="Tahun " name="tahun_3" class="form-control">
                </div>
              </div>
              <div class="col-md-5">
                <input type="text" name="text" placeholder="" name="nama_instansi_3" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Nama Lembaga " name="jabatan_3" class="form-control">
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Pelatihan" name="alasan_keluar_3" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="text" placeholder="Tahun " name="tahun_4" class="form-control">
                </div>
              </div>
              <div class="col-md-5">
                <input type="text" name="text" placeholder="" name="nama_instansi_4" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Nama Lembaga " name="jabatan_4" class="form-control">
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Pelatihan" name="alasan_keluar_4" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="text" placeholder="Tahun " name="tahun_5" class="form-control">
                </div>
              </div>
              <div class="col-md-5">
                <input type="text" name="text" placeholder="" name="nama_instansi_5" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Nama Lembaga " name="jabatan_5" class="form-control">
            </div>
            <div class="col-md-3">
              <input type="text" name="text" placeholder="Pelatihan" name="alasan_keluar_5" class="form-control">
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
