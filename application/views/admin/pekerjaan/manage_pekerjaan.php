<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Lihat Data Pekerjaan</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="title_right">
      <form method="POST" action="">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
          <?php
            $options = array(
                  'nama_lengkap'=>'Nama Pegawai',
            );
            echo form_dropdown('by',$options,set_value('by'),"class='form-control'");
          ?>
        </div>
        <div class="input-group top_search">
          <input type="text" name="search" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Go!</button>
          </span>
        </div>
        </form>
      </div>
    </div>
    <div class="x_content">
      <?php if($this->session->userdata('role')==1){ ?>
      <a href="<?php echo base_url($this->uri->segment(1).'/add-pekerjaan')?>"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
      <?php } ?>
      <a href="<?php echo base_url($this->uri->segment(1).'/export-pekerjaan')?>" class="btn btn-default blue-stripe ajax" ><img src="<?php echo base_url('asset/images/photos/file_exel.png')?>"  style= "width:30px;"> export</a>
      <?php
          echo "<center>".$links."</center>";
        ?>
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th class="column-title">Nama Pegawai </th>
              <th class="column-title">Jabatan </th>
              <th class="column-title">Status Kepegawaian</th>
              <th class="column-title">Unit Kerja</th>
              <th class="column-title">Mulai Tugas</th>
              <th class="column-title">Status</th>
              <?php
              if($this->session->userdata('role')==1){
                ?>
              <th class="column-title no-link last"><span class="nobr">Action</span>
              </th>
              <?php } ?>
            </tr>
          </thead>

          <tbody>
            <tr class="even pointer">
              <?php
            		if($results!=FALSE){
            			foreach ($results as $rows) {
            				?>
            				<tr>
                      <td><?php echo $rows->nama_lengkap ?></td>
                      <td><?php echo $rows->jabatan ?></td>
                      <td><?php
                        if($rows->status_kepegawaian == 1)
                          echo "Pegawai Tetap";
                        else if($rows->status_kepegawaian == 2)
                          echo "Pegawai Honorer";
                        else if($rows->status_kepegawaian == 3)
                          echo "Pegawai Kontrak";
                        else if($rows->status_kepegawaian == 4)
                          echo "Calon Pegawai Tetap";
                        else if($rows->status_kepegawaian == 5)
                          echo "DPK / GBS";
                      ?></td>
                      <td><?php
                        if($rows->unit_kerja == 0)
                          echo "Tidak Ada";
                        else if($rows->unit_kerja == 1)
                          echo "Dept. Support";
                        else if($rows->unit_kerja == 2)
                          echo "LPIA";
                        else if($rows->unit_kerja == 3)
                          echo "LDSM";
                        else if($rows->unit_kerja == 4)
                          echo "LPP";
                        else if($rows->unit_kerja == 5)
                          echo "LEKU";
                        else if($rows->unit_kerja == 6)
                          echo "TK Islam";
                        else if($rows->unit_kerja == 7)
                          echo "SDIT";
                        else if($rows->unit_kerja == 8)
                          echo "MI Plus";
                        else if($rows->unit_kerja == 9)
                          echo "MTS Plus";
                        else if($rows->unit_kerja == 10)
                          echo "SMPIT";
                        else if($rows->unit_kerja == 11)
                          echo "SMAIT";
                        else if($rows->unit_kerja == 12)
                          echo "STAI";
                        else if($rows->unit_kerja == 13)
                          echo "Lainnya";
                      ?></td>
                      <td><?php echo $rows->mulai_tugas ?></td>

                      <td><?php
                        if($rows->status_aktif == 0)
                          echo "Aktif";
                        else if($rows->status_aktif == 1)
                          echo "Non Aktif";
                        ?></td>

                        <?php
                        if($this->session->userdata('role')==1){
                      ?>
                      <td>
                        <a title="Edit Pekerjaan" href ="<?php echo base_url($this->uri->segment(1).'/edit-pekerjaan/'.$rows->id_riwayat_kerja)?>"><i class="glyphicon glyphicon-edit"></i></a> |
                        <a title="Edit Detail Pekerjaan" href ="<?php echo base_url($this->uri->segment(1).'/edit-detail-pekerjaan/'.$rows->id_riwayat_kerja)?>"><i class="fa fa-users"></i></a>
                        <!--<a href ="<?php echo base_url($this->uri->segment(1).'/delete-pekerjaan/'.$rows->id_riwayat_kerja)?>" onclick="return confirm('Are You Sure want to delete?')">
                      <span class="glyphicon-class"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></span></span>
                    -->
                      </td>
                      <?php } ?>
                    </tr>
            				<?php
            			}
            		}
            	?>
            </tr>
          </tbody>
        </table>
        <?php
          echo "<center>".$links."</center>";
        ?>
      </div>
    </div>
  </div>
</div>
