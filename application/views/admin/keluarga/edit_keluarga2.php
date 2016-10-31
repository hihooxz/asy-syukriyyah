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
                      <input type="text"  name="nama_pegawai_1" class="form-control" value="<?php if(isset($nama_pegawai_1)) echo $nama_pegawai_1?>">
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
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_1',$options,$jk,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($kandung_1)){
                        $kandung = $kandung_1;
                      }
                      else $kandung = '';
                      echo form_dropdown('kandung_1',$options,$kandung,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-3">
                    <input type="text"  name="pekerjaan_1" class="form-control" value="<?php if(isset($pekerjaan_1)) echo $pekerjaan_1?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Suami/Istri</h4>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <input type="text"  name="nama_pegawai_2" class="form-control" value="<?php if(isset($nama_pegawai_2)) echo $nama_pegawai_2?>">
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
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_2',$options,$jk,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($kandung_2)){
                        $kandung = $kandung_2;
                      }
                      else $kandung = '';
                      echo form_dropdown('kandung_2',$options,$kandung,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-3">
                    <input type="text"  name="pekerjaan_2" class="form-control" value="<?php if(isset($pekerjaan_2)) echo $pekerjaan_2?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text"  name="nama_anak_1" class="form-control" value="<?php if(isset($nama_anak_1)) echo $nama_anak_1?>">
                      <input type="hidden"  name="sort_order_anak_1" class="form-control" value="1">
                      <input type="hidden"  name="id_data_keluarga_anak_1" class="form-control" value="<?php if(isset($id_data_keluarga_anak_1)) echo $id_data_keluarga_anak_1; else echo "-";?>">
                  </div>
                </div>
                <div class="col-md-1">
                     <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_anak_1)){
                        $jk = $jenis_kelamin_anak_1;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_anak_1',$options,$jk,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($status_anak_1)){
                        $kandung = $status_anak_1;
                      }
                      else $kandung = '';
                      echo form_dropdown('status_anak_1',$options,$kandung,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_anak_1" class="form-control" value="<?php if(isset($pekerjaan_anak_1)) echo $pekerjaan_anak_1?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text"   name="nama_anak_2" class="form-control" value="<?php if(isset($nama_anak_2)) echo $nama_anak_2?>">
                      <input type="hidden"  name="sort_order_anak_2" class="form-control" value="2">
                      <input type="hidden"  name="id_data_keluarga_anak_2" class="form-control" value="<?php if(isset($id_data_keluarga_anak_2)) echo $id_data_keluarga_anak_2; else echo "-";?>">
                  </div>
                </div>
                <div class="col-md-1">
                     <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_anak_2)){
                        $jk = $jenis_kelamin_anak_2;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_anak_2',$options,$jk,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($status_anak_2)){
                        $kandung = $status_anak_2;
                      }
                      else $kandung = '';
                      echo form_dropdown('status_anak_2',$options,$kandung,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_anak_2" class="form-control" value="<?php if(isset($pekerjaan_anak_2)) echo $pekerjaan_anak_2?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text"  name="nama_anak_3" class="form-control" value="<?php if(isset($nama_anak_3)) echo $nama_anak_3?>">
                      <input type="hidden"  name="sort_order_anak_3" class="form-control" value="3">
                      <input type="hidden"  name="id_data_keluarga_anak_3" class="form-control" value="<?php if(isset($id_data_keluarga_anak_3)) echo $id_data_keluarga_anak_3; else echo "-";?>">
                  </div>
                </div>
                <div class="col-md-1">
                     <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_anak_3)){
                        $jk = $jenis_kelamin_anak_3;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_anak_3',$options,$jk,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($status_anak_3)){
                        $kandung = $status_anak_3;
                      }
                      else $kandung = '';
                      echo form_dropdown('status_anak_3',$options,$kandung,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_anak_3" class="form-control" value="<?php if(isset($pekerjaan_anak_3)) echo $pekerjaan_anak_3?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text"  name="nama_anak_4" class="form-control" value="<?php if(isset($nama_anak_4)) echo $nama_anak_4?>">
                      <input type="hidden"  name="sort_order_anak_4" class="form-control" value="4">
                      <input type="hidden"  name="id_data_keluarga_anak_4" class="form-control" value="<?php if(isset($id_data_keluarga_anak_4)) echo $id_data_keluarga_anak_4; else echo "-";?>">
                  </div>
                </div>
                <div class="col-md-1">
                     <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_anak_4)){
                        $jk = $jenis_kelamin_anak_1;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_anak_4',$options,$jk,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($status_anak_4)){
                        $kandung = $status_anak_4;
                      }
                      else $kandung = '';
                      echo form_dropdown('status_anak_4',$options,$kandung,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_anak_4" class="form-control" value="<?php if(isset($pekerjaan_anak_4)) echo $pekerjaan_anak_4?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h4>Anak</h4>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="nama_anak_5" class="form-control" value="<?php if(isset($nama_anak_5)) echo $nama_anak_5?>">
                      <input type="hidden"  name="sort_order_anak_5" class="form-control" value="5">
                      <input type="hidden"  name="id_data_keluarga_anak_5" class="form-control" value="<?php if(isset($id_data_keluarga_anak_5)) echo $id_data_keluarga_anak_5; else echo "-";?>">
                  </div>
                </div>
                <div class="col-md-1">
                     <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_anak_5)){
                        $jk = $jenis_kelamin_anak_5;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_anak_5',$options,$jk,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-2">
                    <?php
                      $options = array(0=>'Kandung',1=>'Bukan Kandung');
                      if(isset($status_anak_5)){
                        $kandung = $status_anak_5;
                      }
                      else $kandung = '';
                      echo form_dropdown('status_anak_5',$options,$kandung,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_anak_5" class="form-control" value="<?php if(isset($pekerjaan_anak_5)) echo $pekerjaan_anak_5?>">
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
                      <input type="text"  name="nama_sk_1" class="form-control" value="<?php if(isset($nama_sk_1)) echo $nama_sk_1?>">
                      <input type="hidden"  name="sort_order_sk_1" class="form-control" value="1">
                      <input type="hidden"  name="id_saudara_kandung_1" class="form-control" value="<?php if(isset($id_saudara_kandung_1)) echo $id_saudara_kandung_1; else echo "-";?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <input type="text"  name="ttl_sk_1" class="form-control" value="<?php if(isset($ttl_sk_1)) echo $ttl_sk_1?>">
                  </div>
                <div class="col-md-1">
                <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_sk_1)){
                        $jk = $jenis_kelamin_sk_1;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_sk_1',$options,$jk,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_sk_1" class="form-control" value="<?php if(isset($pekerjaan_sk_1)) echo $pekerjaan_sk_1?>">
                </div>
                <div class="col-md-3">
                  <input type="text"  name="alamat_sk_1" class="form-control" value="<?php if(isset($alamat_sk_1)) echo $alamat_sk_1?>">
                </div>
              </div>
              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="text"  name="nama_sk_2" class="form-control" value="<?php if(isset($nama_sk_2)) echo $nama_sk_2?>">
                      <input type="hidden"  name="sort_order_sk_2" class="form-control" value="2">
                      <input type="hidden"  name="id_saudara_kandung_2" class="form-control" value="<?php if(isset($id_saudara_kandung_2)) echo $id_saudara_kandung_2; else echo "-";?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <input type="text"  name="ttl_sk_2" class="form-control" value="<?php if(isset($ttl_sk_2)) echo $ttl_sk_2?>">
                  </div>
                <div class="col-md-1">
                <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_sk_2)){
                        $jk = $jenis_kelamin_sk_2;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_sk_2',$options,$jk,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_sk_2" class="form-control" value="<?php if(isset($pekerjaan_sk_2)) echo $pekerjaan_sk_2?>">
                </div>
                <div class="col-md-3">
                  <input type="text"  name="alamat_sk_2" class="form-control" value="<?php if(isset($alamat_sk_2)) echo $alamat_sk_2?>">
                </div>
              </div>
              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="text"  name="nama_sk_3" class="form-control" value="<?php if(isset($nama_sk_3)) echo $nama_sk_3?>">
                      <input type="hidden"  name="sort_order_sk_3" class="form-control" value="3">
                      <input type="hidden"  name="id_saudara_kandung_3" class="form-control" value="<?php if(isset($id_saudara_kandung_3)) echo $id_saudara_kandung_3; else echo "-";?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <input type="text"  name="ttl_sk_3" class="form-control" value="<?php if(isset($ttl_sk_3)) echo $ttl_sk_3?>">
                  </div>
                <div class="col-md-1">
                <?php
                      $options = array(1=>'L',0=>'P');
                      if(isset($jenis_kelamin_sk_3)){
                        $jk = $jenis_kelamin_sk_3;
                      }
                      else $jk = '';
                      echo form_dropdown('jenis_kelamin_sk_3',$options,$jk,'class="form-control"'); 
                    ?>
                </div>
                <div class="col-md-3">
                  <input type="text"  name="pekerjaan_sk_3" class="form-control" value="<?php if(isset($pekerjaan_sk_3)) echo $pekerjaan_sk_3?>">
                </div>
                <div class="col-md-3">
                  <input type="text"  name="alamat_sk_3" class="form-control" value="<?php if(isset($alamat_sk_3)) echo $alamat_sk_3?>">
                </div>
              </div>

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
