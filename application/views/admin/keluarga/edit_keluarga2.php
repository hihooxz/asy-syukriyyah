<div class="" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ubah Data Keluarga</h3>
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
              <input type="text" id="last-name" name="nama_pegawai" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $result['nama_lengkap']?>" readonly>
              <input type="hidden" id="last-name" name="id_pegawai" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $result['id_pegawai']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pasangan
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="last-name" name="nama_pasangan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $result['nama_pasangan']?>" readonly>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Pasangan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="pekerjaan_pasangan" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $result['pekerjaan_pasangan']?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Anak Kandung</label>
            <div class="col-md-6 col-sm-6 col-xs-12" readonly>
              <?php
                $options = array(
                    0 => 0,
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 'Lebih dari 3'
                  );
                echo form_dropdown('anak_kandung',$options,$result['anak_kandung'],'class="form-control" readonly');
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
                echo form_dropdown('bukan_anak_kandung',$options,$result['bukan_anak_kandung'],'class="form-control" readonly');
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
                echo form_dropdown('jumlah_saudara_kandung',$options,$result['jumlah_saudara_kandung'],'class="form-control" readonly');
              ?>
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ayah
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="nama_ayah" value="<?php echo set_value('nama_ayah')?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ibu
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="nama_ibu" value="<?php echo set_value('nama_ibu')?>" readonly>
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
                      <input type="text"  name="nama_pegawai[1]" class="form-control">
                      <input type="hidden"  name="hub_keluarga[1]" class="form-control" value="0">
                    </div>
                </div>
                <div class="col-md-1">
                    <select class="form-control" name="jenis_kelamin[1]">
                        <option value="1">L</option>
                        <option value="2">P</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <select class="form-control" name="kandung[1]">
                        <option value="0">Kandung</option>
                        <option value="1">Bukan Kandung</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text"  name="pekerjaan[1]" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Suami/Istri</h4>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <input type="text"  name="nama_pegawai[2]" class="form-control">
                      <input type="hidden"  name="hub_keluarga[2]" class="form-control" value="1">
                    </div>
                </div>
                <div class="col-md-1">
                    <select class="form-control" name="jenis_kelamin[2]">
                        <option value="1">L</option>
                        <option value="2">P</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="kandung[2]">
                        <option value="0">Kandung</option>
                        <option value="1">Bukan Kandung</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text"  name="pekerjaan[2]" class="form-control">
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
                    <select class="form-control" name="jenis_kelamin_anak[<?php echo $i;?>]">
                        <option value="1">L</option>
                        <option value="2">P</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <select class="form-control" name="status_anak[<?php echo $i;?>]">
                        <option value="0">Kandung</option>
                        <option value="1">Bukan Kandung</option>
                    </select>
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
              <?php
                $i = 0;$max = 5;
                for($i;$i<$max;$i++){
              ?>
              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="text" name="text"  name="nama_sk[<?php echo $i; ?>]" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="text"  name="ttl_sk[<?php echo $i; ?>]" class="form-control">
                  </div>
                <div class="col-md-1">
                  <select class="form-control" name="jenis_kelamin_sk[<?php echo $i; ?>]">
                        <option value="1">L</option>
                        <option value="2">P</option>
                    </select>
                </div>
                <div class="col-md-3">
                  <input type="text" name="text"  name="pekerjaan[<?php echo $i; ?>]" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name="text"  name="alamat[<?php echo $i; ?>]" class="form-control">
                </div>
              </div>
              <?php
                }
              ?>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-1 col-sm-6 col-xs-12 col-md-offset-11">
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
