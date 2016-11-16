<div class="" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ubah Detail Data Pendidikan</h3>
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
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $result['nama_lengkap']?>
          </label>
        </div>
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="" >
          <?php echo validation_errors()?>
          <div class="col-md-12">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Pegawai
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="pegawai" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $result['nama_lengkap']?>" readonly>
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
                  echo form_dropdown('pendidikan_terakhir',$options,$result['pendidikan_terakhir'],"class='form-control'");
               ?>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Institusi Pendidikan Terakhir</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="nama_pt" class="form-control col-md-7 col-xs-12"  value="<?php echo $result['nama_pt']?>">
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
                  echo form_dropdown('pendidikan_ditempuh',$options,$result['pendidikan_ditempuh'],"class='form-control'");
               ?>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Institusi Pendidikan Ditempuh</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="nama_pt_pd" class="form-control col-md-7 col-xs-12" value="<?php echo $result['nama_pt_pd']?>" >
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Program</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="program_pd" class="form-control col-md-7 col-xs-12" value="<?php echo $result['program_pd']?>" >
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="jurusan_pd" class="form-control col-md-7 col-xs-12" value="<?php echo $result['jurusan_pd']?>" >
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Masuk</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" name="tahun_masuk_pd" class="form-control col-md-7 col-xs-12" value="<?php echo $result['tahun_masuk_pd']?>">
            </div>
          </div>
                    <div class="row">
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
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk1" class="form-control" value="<?php if(isset($tahun_masuk_1)) echo $tahun_masuk_1?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai1" class="form-control" value="<?php if(isset($tahun_selesai_1)) echo $tahun_selesai_1?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi1" class="form-control" value="<?php if(isset($nama_instansi_1)) echo $nama_instansi_1?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan1" class="form-control" value="<?php if(isset($jurusan_1)) echo $jurusan_1?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>SMP</h4>
                        <input type="hidden" name="id_formal2" value="<?php if(isset($id_formal_2)) echo $id_formal_2?>">
                        <input type="hidden" name="tingkat2" value="2">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk2" class="form-control" value="<?php if(isset($tahun_masuk_2)) echo $tahun_masuk_2?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai2" class="form-control" value="<?php if(isset($tahun_selesai_2)) echo $tahun_selesai_2?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi2" class="form-control" value="<?php if(isset($nama_instansi_2)) echo $nama_instansi_2?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan2" class="form-control" value="<?php if(isset($jurusan_2)) echo $jurusan_2?>">
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
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk3" class="form-control" value="<?php if(isset($tahun_masuk_3)) echo $tahun_masuk_3?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai3" class="form-control" value="<?php if(isset($tahun_selesai_3)) echo $tahun_selesai_3?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi3" class="form-control" value="<?php if(isset($nama_instansi_3)) echo $nama_instansi_3?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan3" class="form-control" value="<?php if(isset($jurusan_3)) echo $jurusan_3?>">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>D1</h4>
                        <input type="hidden" name="id_formal4" value="<?php if(isset($id_formal_4)) echo $id_formal_4?>">
                        <input type="hidden" name="tingkat4" value="4">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk4" class="form-control" value="<?php if(isset($tahun_masuk_4)) echo $tahun_masuk_4?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai4" class="form-control" value="<?php if(isset($tahun_selesai_4)) echo $tahun_selesai_4?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi4" class="form-control" value="<?php if(isset($nama_instansi_4)) echo $nama_instansi_4?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan4" class="form-control" value="<?php if(isset($jurusan_4)) echo $jurusan_4?>">
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
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk5" class="form-control" value="<?php if(isset($tahun_masuk_5)) echo $tahun_masuk_5?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai5" class="form-control" value="<?php if(isset($tahun_selesai_5)) echo $tahun_selesai_5?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi5" class="form-control" value="<?php if(isset($nama_instansi_5)) echo $nama_instansi_5?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan5" class="form-control" value="<?php if(isset($jurusan_5)) echo $jurusan_5?>">
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
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk6" class="form-control" value="<?php if(isset($tahun_masuk_6)) echo $tahun_masuk_6?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai6" class="form-control" value="<?php if(isset($tahun_selesai_6)) echo $tahun_selesai_6?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi6" class="form-control" value="<?php if(isset($nama_instansi_6)) echo $nama_instansi_6?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan6" class="form-control" value="<?php if(isset($jurusan_6)) echo $jurusan_6?>">
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
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk8" class="form-control" value="<?php if(isset($tahun_masuk_8)) echo $tahun_masuk_8?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai8" class="form-control" value="<?php if(isset($tahun_selesai_8)) echo $tahun_selesai_8?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi8" class="form-control" value="<?php if(isset($nama_instansi_8)) echo $nama_instansi_8?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan8" class="form-control" value="<?php if(isset($jurusan_8)) echo $jurusan_8?>">
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
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk9" class="form-control" value="<?php if(isset($tahun_masuk_9)) echo $tahun_masuk_9?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai9" class="form-control" value="<?php if(isset($tahun_selesai_9)) echo $tahun_selesai_9?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi9" class="form-control" value="<?php if(isset($nama_instansi_9)) echo $nama_instansi_9?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan9" class="form-control" value="<?php if(isset($jurusan_9)) echo $jurusan_9?>">
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
                            <input type="text"  placeholder="Tahun Masuk" name="tahun_masuk10" class="form-control" value="<?php if(isset($tahun_masuk_10)) echo $tahun_masuk_10?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  placeholder="Tahun Keluar" name="tahun_selesai10" class="form-control" value="<?php if(isset($tahun_selesai_10)) echo $tahun_selesai_10?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Nama Sekolah / PT" name="nama_instansi10" class="form-control" value="<?php if(isset($nama_instansi_10)) echo $nama_instansi_10?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text"  placeholder="Program / Jurusan" name="jurusan10" class="form-control" value="<?php if(isset($jurusan_10)) echo $jurusan_10?>">
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
                            <input type="text"  placeholder="Tahun " name="tahun1" class="form-control"  value="<?php if(isset($tahun_1)) echo $tahun_1?>">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanya1" class="form-control"  value="<?php if(isset($lamanya_1)) echo $lamanya_1?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembaga1" class="form-control"  value="<?php if(isset($lembaga_1)) echo $lembaga_1?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenis1" class="form-control"  value="<?php if(isset($jenis_1)) echo $jenis_1?>">
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="hidden" name="id_nonformal2" value="<?php if(isset($id_nonformal_2)) echo $id_nonformal_2?>">
                            <input type="hidden" name="sort_order2" value="2">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahun2" class="form-control" value="<?php if(isset($tahun_2)) echo $tahun_2?>">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanya2" class="form-control" value="<?php if(isset($lamanya_2)) echo $lamanya_2?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembaga2" class="form-control" value="<?php if(isset($lembaga_2)) echo $lembaga_2?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenis2" class="form-control" value="<?php if(isset($jenis_2)) echo $jenis_2?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="hidden" name="id_nonformal3" value="<?php if(isset($id_nonformal_3)) echo $id_nonformal_3?>">
                            <input type="hidden" name="sort_order3" value="3">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahun3" class="form-control" value="<?php if(isset($tahun_3)) echo $tahun_3?>">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanya3" class="form-control" value="<?php if(isset($lamanya_3)) echo $lamanya_3?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembaga3" class="form-control" value="<?php if(isset($lembaga_3)) echo $lembaga_3?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenis3" class="form-control" value="<?php if(isset($jenis_3)) echo $jenis_3?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <input type="hidden" name="id_nonformal4" value="<?php if(isset($id_nonformal_4)) echo $id_nonformal_4?>">
                          <input type="hidden" name="sort_order4" value="4">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahun4" class="form-control" value="<?php if(isset($tahun_4)) echo $tahun_4?>">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanya4" class="form-control" value="<?php if(isset($lamanya_4)) echo $lamanya_4?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembaga4" class="form-control" value="<?php if(isset($lembaga_4)) echo $lembaga_4?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenis4" class="form-control" value="<?php if(isset($jenis_4)) echo $jenis_4?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <input type="hidden" name="id_nonformal5" value="<?php if(isset($id_nonformal_5)) echo $id_nonformal_5?>">
                          <input type="hidden" name="sort_order5" value="5">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahun5" class="form-control" value="<?php if(isset($tahun_5)) echo $tahun_5?>">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanya5" class="form-control" value="<?php if(isset($lamanya_5)) echo $lamanya_5?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembaga5" class="form-control" value="<?php if(isset($lembaga_5)) echo $lembaga_5?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenis5" class="form-control" value="<?php if(isset($jenis_5)) echo $jenis_5?>">
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
                            value="<?php if(isset($tahun_td1)) echo $tahun_td1?>">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanyatd1" class="form-control"  value="<?php if(isset($lamanya_td1)) echo $lamanya_td1?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembagatd1" class="form-control"  value="<?php if(isset($lembaga_td1)) echo $lembaga_td1?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenistd1" class="form-control"  value="<?php if(isset($jenis_td1)) echo $jenis_td1?>">
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="hidden" name="id_nonformal_td2" value="<?php if(isset($id_nonformal_td2)) echo $id_nonformal_td2?>">
                            <input type="hidden" name="sort_ordertd2" value="2">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahuntd2" class="form-control" value="<?php if(isset($tahun_td2)) echo $tahun_td2?>">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanyatd2" class="form-control" value="<?php if(isset($lamanya_td2)) echo $lamanya_td2?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembagatd2" class="form-control" value="<?php if(isset($lembaga_td2)) echo $lembaga_td2?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenistd2" class="form-control" value="<?php if(isset($jenis_td2)) echo $jenis_td2?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="hidden" name="id_nonformal_td3" value="<?php if(isset($id_nonformal_td3)) echo $id_nonformal_td3?>">
                            <input type="hidden" name="sort_ordertd3" value="3">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahuntd3" class="form-control" value="<?php if(isset($tahun_td3)) echo $tahun_td3?>">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanyatd3" class="form-control" value="<?php if(isset($lamanya_td3)) echo $lamanya_td3?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembagatd3" class="form-control" value="<?php if(isset($lembaga_td3)) echo $lembaga_td3?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenistd3" class="form-control" value="<?php if(isset($jenis_td3)) echo $jenis_td3?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <input type="hidden" name="id_nonformal_td4" value="<?php if(isset($id_nonformal_td4)) echo $id_nonformal_td4?>">
                          <input type="hidden" name="sort_ordertd4" value="4">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahuntd4" class="form-control" value="<?php if(isset($tahun_td4)) echo $tahun_td4?>">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanyatd4" class="form-control" value="<?php if(isset($lamanya_td4)) echo $lamanya_td4?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembagatd4" class="form-control" value="<?php if(isset($lembaga_td4)) echo $lembaga_td4?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenistd4" class="form-control" value="<?php if(isset($jenis_td4)) echo $jenis_td4?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <input type="hidden" name="id_nonformal_td5" value="<?php if(isset($id_nonformal_td5)) echo $id_nonformal_td5?>">
                          <input type="hidden" name="sort_ordertd5" value="5">
                          <div class="form-group">
                            <input type="text"  placeholder="Tahun " name="tahuntd5" class="form-control" value="<?php if(isset($tahun_td5)) echo $tahun_td5?>">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text"  placeholder="Lamanya" name="lamanyatd5" class="form-control" value="<?php if(isset($lamanya_td5)) echo $lamanya_td5?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Nama Lembaga " name="lembagatd5" class="form-control" value="<?php if(isset($lembaga_td5)) echo $lembaga_td5?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text"  placeholder="Jenis " name="jenistd5" class="form-control" value="<?php if(isset($jenis_td5)) echo $jenis_td5?>">
                      </div>
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
