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
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"  >
          <?php echo validation_errors()?>
          <div class="col-md-12">
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
                        <input type="hidden" name="id_formal_0" value="<?php if(isset($id_formal_0)) echo $id_formal_0?>">
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk_0" class="form-control" value="<?php if(isset($tahun_masuk_0)) echo $tahun_masuk_0?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_selesai_0" class="form-control" value="<?php if(isset($tahun_selesai_0)) echo $tahun_selesai_0?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_instansi_0" class="form-control" value="<?php if(isset($nama_instansi_0)) echo $nama_instansi_0?>">
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="jurusan_0" class="form-control" value="<?php if(isset($jurusan_0)) echo $jurusan_0?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>SMP</h4>
                        <input type="hidden" name="id_formal_1" value="<?php if(isset($id_formal_1)) echo $id_formal_1?>">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk_1" class="form-control" value="<?php if(isset($tahun_masuk_1)) echo $tahun_masuk_1?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_selesai_1" class="form-control" value="<?php if(isset($tahun_selesai_1)) echo $tahun_selesai_1?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_instansi_1" class="form-control" value="<?php if(isset($nama_instansi_1)) echo $nama_instansi_1?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="jurusan_1" class="form-control" value="<?php if(isset($jurusan_1)) echo $jurusan_1?>">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>SMA</h4>
                        <input type="hidden" name="id_formal_2" value="<?php if(isset($id_formal_2)) echo $id_formal_2?>">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk_2" class="form-control" value="<?php if(isset($tahun_masuk_2)) echo $tahun_masuk_2?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_selesai_2" class="form-control" value="<?php if(isset($tahun_selesai_2)) echo $tahun_selesai_2?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_instansi_2" class="form-control" value="<?php if(isset($nama_instansi_2)) echo $nama_instansi_2?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="jurusan_2" class="form-control" value="<?php if(isset($jurusan_2)) echo $jurusan_2?>">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>D1</h4>
                        <input type="hidden" name="id_formal_3" value="<?php if(isset($id_formal_3)) echo $id_formal_3?>">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk_3" class="form-control" value="<?php if(isset($tahun_masuk_3)) echo $tahun_masuk_3?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_selesai_3" class="form-control" value="<?php if(isset($tahun_selesai_3)) echo $tahun_selesai_3?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_instansi_3" class="form-control" value="<?php if(isset($nama_instansi_3)) echo $nama_instansi_3?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="jurusan_3" class="form-control" value="<?php if(isset($jurusan_3)) echo $jurusan_3?>">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>D2</h4>
                        <input type="hidden" name="id_formal_4" value="<?php if(isset($id_formal_4)) echo $id_formal_4?>">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk_4" class="form-control" value="<?php if(isset($tahun_masuk_4)) echo $tahun_masuk_4?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_selesai_4" class="form-control" value="<?php if(isset($tahun_selesai_4)) echo $tahun_selesai_4?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_instansi_4" class="form-control" value="<?php if(isset($nama_instansi_4)) echo $nama_instansi_4?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="jurusan_4" class="form-control" value="<?php if(isset($jurusan_4)) echo $jurusan_4?>">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>D3</h4>
                        <input type="hidden" name="id_formal_5" value="<?php if(isset($id_formal_5)) echo $id_formal_5?>">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk_5" class="form-control" value="<?php if(isset($tahun_masuk_5)) echo $tahun_masuk_5?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_selesai_5" class="form-control" value="<?php if(isset($tahun_selesai_5)) echo $tahun_selesai_5?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_instansi_5" class="form-control" value="<?php if(isset($nama_instansi_5)) echo $nama_instansi_5?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="jurusan_5" class="form-control" value="<?php if(isset($jurusan_5)) echo $jurusan_5?>">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>S1</h4>
                        <input type="hidden" name="id_formal_6" value="<?php if(isset($id_formal[6])) echo $id_formal[6] ?>">
                      </div>
                      <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk_6" class="form-control" value="<?php if(isset($tahun_masuk_6)) echo $tahun_masuk_6?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_selesai_6" class="form-control" value="<?php if(isset($tahun_selesai_6)) echo $tahun_selesai_6?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_instansi_6" class="form-control" value="<?php if(isset($nama_instansi_6)) echo $nama_instansi_6?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="jurusan_6" class="form-control" value="<?php if(isset($jurusan_6)) echo $jurusan_6?>">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>S2</h4>
                        <input type="hidden" name="id_formal_7" value="<?php if(isset($id_formal_7)) echo $id_formal_7?>">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk_7" class="form-control" value="<?php if(isset($tahun_masuk_7)) echo $tahun_masuk_7?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_selesai_7" class="form-control" value="<?php if(isset($tahun_selesai_7)) echo $tahun_selesai_7?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_instansi_7" class="form-control" value="<?php if(isset($nama_instansi_7)) echo $nama_instansi_7?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="jurusan_7" class="form-control" value="<?php if(isset($jurusan_7)) echo $jurusan_7?>">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <h4>S3</h4>
                        <input type="hidden" name="id_formal_8" value="<?php if(isset($id_formal_8)) echo $id_formal_8?>">
                        </div>
                        <div class="col-md-5">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun Masuk" name="tahun_masuk_8" class="form-control" value="<?php if(isset($tahun_masuk_8)) echo $tahun_masuk_8?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="text" placeholder="Tahun Keluar" name="tahun_selesai_8" class="form-control" value="<?php if(isset($tahun_selesai_8)) echo $tahun_selesai_8?>">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Sekolah / PT" name="nama_instansi_8" class="form-control" value="<?php if(isset($nama_instansi_8)) echo $nama_instansi_8?>">
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" placeholder="Program / Jurusan" name="jurusan_8" class="form-control" value="<?php if(isset($jurusan_8)) echo $jurusan_8?>">
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
                            <input type="text" name="text" placeholder="Tahun " name="tahun_nonformal_diutus[0]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text" name="text" placeholder="Lamanya" name="lamanya_nonformal_diutus[0]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Lembaga " name="lembaga_nonformal_diutus" class="form-control">
                      </div>
                      <div class="form-group">
                        <div class="col-md-3">
                          <?php
                            $options = array(
                                1 => 'Pelatihan',
                                2 => 'Kursus',
                                3 => 'Job Training'
                              );
                              echo form_dropdown('jenis',$options,set_value('jenis'),"class='form-control'");
                           ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun " name="tahun_nonformal_diutus[0]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text" name="text" placeholder="Lamanya" name="lamanya_nonformal_diutus[0]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Lembaga " name="lembaga_nonformal_diutus" class="form-control">
                      </div>
                      <div class="form-group">
                        <div class="col-md-3">
                          <?php
                            $options = array(
                                1 => 'Pelatihan',
                                2 => 'Kursus',
                                3 => 'Job Training'
                              );
                              echo form_dropdown('jenis',$options,set_value('jenis'),"class='form-control'");
                           ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun " name="tahun_nonformal_diutus[0]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text" name="text" placeholder="Lamanya" name="lamanya_nonformal_diutus[0]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Lembaga " name="lembaga_nonformal_diutus" class="form-control">
                      </div>
                      <div class="form-group">
                        <div class="col-md-3">
                          <?php
                            $options = array(
                                1 => 'Pelatihan',
                                2 => 'Kursus',
                                3 => 'Job Training'
                              );
                              echo form_dropdown('jenis',$options,set_value('jenis'),"class='form-control'");
                           ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun " name="tahun_nonformal_diutus[0]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text" name="text" placeholder="Lamanya" name="lamanya_nonformal_diutus[0]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Lembaga " name="lembaga_nonformal_diutus[0]" class="form-control">
                      </div>
                      <div class="form-group">
                        <div class="col-md-3">
                          <?php
                            $options = array(
                                1 => 'Pelatihan',
                                2 => 'Kursus',
                                3 => 'Job Training'
                              );
                              echo form_dropdown('jenis',$options,set_value('jenis'),"class='form-control'");
                           ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun " name="tahun_nonformal_diutus[0]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text" name="text" placeholder="Lamanya" name="lamanya_nonformal_diutus[0]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Lembaga " name="lembaga_nonformal_diutus[0]" class="form-control">
                      </div>
                      <div class="form-group">
                        <div class="col-md-3">
                          <?php
                            $options = array(
                                1 => 'Pelatihan',
                                2 => 'Kursus',
                                3 => 'Job Training'
                              );
                              echo form_dropdown('jenis',$options,set_value('jenis'),"class='form-control'");
                           ?>
                        </div>
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
                            <input type="text" name="text" placeholder="Tahun " name="tahun_nonformal[0]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text" name="text" placeholder="Lamanya" name="lamanya_nonformal[0]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Lembaga " name="lembaga_nonformal[0]" class="form-control">
                      </div>
                      <div class="form-group">
                        <div class="col-md-3">
                          <?php
                            $options = array(
                                1 => 'Pelatihan',
                                2 => 'Kursus',
                                3 => 'Job Training'
                              );
                              echo form_dropdown('jenis',$options,set_value('jenis'),"class='form-control'");
                           ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun " name="tahun_nonformal[0]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text" name="text" placeholder="Lamanya" name="lamanya_nonformal[0]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Lembaga " name="lembaga_nonformal[0]" class="form-control">
                      </div>
                      <div class="form-group">
                        <div class="col-md-3">
                          <?php
                            $options = array(
                                1 => 'Pelatihan',
                                2 => 'Kursus',
                                3 => 'Job Training'
                              );
                              echo form_dropdown('jenis',$options,set_value('jenis'),"class='form-control'");
                           ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun " name="tahun_nonformal[0]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text" name="text" placeholder="Lamanya" name="lamanya_nonformal[0]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Lembaga " name="lembaga_nonformal[0]" class="form-control">
                      </div>
                      <div class="form-group">
                        <div class="col-md-3">
                          <?php
                            $options = array(
                                1 => 'Pelatihan',
                                2 => 'Kursus',
                                3 => 'Job Training'
                              );
                              echo form_dropdown('jenis',$options,set_value('jenis'),"class='form-control'");
                           ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun " name="tahun_nonformal[0]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text" name="text" placeholder="Lamanya" name="lamanya_nonformal[0]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Lembaga " name="lembaga_nonformal[0]" class="form-control">
                      </div>
                      <div class="form-group">
                        <div class="col-md-3">
                          <?php
                            $options = array(
                                1 => 'Pelatihan',
                                2 => 'Kursus',
                                3 => 'Job Training'
                              );
                              echo form_dropdown('jenis',$options,set_value('jenis'),"class='form-control'");
                           ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="text" placeholder="Tahun " name="tahun_nonformal[0]" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <input type="text" name="text" placeholder="Lamanya" name="lamanya_nonformal[0]" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="text" placeholder="Nama Lembaga " name="lembaga_nonformal[0]" class="form-control">
                      </div>
                      <div class="form-group">
                        <div class="col-md-3">
                          <?php
                            $options = array(
                                1 => 'Pelatihan',
                                2 => 'Kursus',
                                3 => 'Job Training'
                              );
                              echo form_dropdown('jenis',$options,set_value('jenis'),"class='form-control'");
                           ?>
                        </div>
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
