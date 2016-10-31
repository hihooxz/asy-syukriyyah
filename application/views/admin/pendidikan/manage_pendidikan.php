<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Lihat Data Pendidikan</h2>
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
      <?php
      if($this->session->userdata('role')==1){
        ?>
      <a href="<?php echo base_url($this->uri->segment(1).'/add-pendidikan')?>"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
      <?php } ?>
      <a href="<?php echo base_url($this->uri->segment(1).'/export-pendidikan')?>" class="btn btn-default blue-stripe ajax" ><img src="<?php echo base_url('asset/images/photos/file_exel.png')?>"  style= "width:30px;"> export</a>
              <?php
                echo "<center>".$links."</center>";
              ?>
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th class="column-title">Nama Pegawai </th>
              <th class="column-title">Pendidikan Terakhir </th>
              <th class="column-title">Nama Institusi</th>
              <th class="column-title">Pendidikan Ditempuh</th>
              <th class="column-title">Nama Institusi</th>
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
                    $status = $this->mod->getDataWhere('riwayat_kerja','id_pegawai',$rows->id_pegawai);
                    if($status != FALSE){
                      if($status['status_aktif'] == 1)
                        $class = "class='text-danger'";
                      else echo $class = "";  
                    }
                    else echo $class = "";
                    ?>
                    <tr <?php echo $class;?>>
                      <td><?php echo $rows->nama_lengkap ?></td>
                      <td><?php
                      if( $rows->pendidikan_terakhir == 0)
                        echo "Tidak Sekolah";
                      else if( $rows->pendidikan_terakhir == 1)
                        echo "SD";
                      else if( $rows->pendidikan_terakhir == 2)
                        echo "SMP";
                      else if( $rows->pendidikan_terakhir == 3)
                        echo "SMA";
                      else if( $rows->pendidikan_terakhir == 4)
                        echo "D1";
                      else if( $rows->pendidikan_terakhir == 5)
                        echo "D2";
                      else if( $rows->pendidikan_terakhir == 6)
                        echo "D3";
                      else if( $rows->pendidikan_terakhir == 7)
                        echo "D4";
                      else if( $rows->pendidikan_terakhir == 8)
                        echo "S1";
                      else if( $rows->pendidikan_terakhir == 9)
                        echo "S2";
                      else if( $rows->pendidikan_terakhir == 10)
                        echo "S3";
                      else if( $rows->pendidikan_terakhir == 11)
                        echo "Paket B, C";
                        ?></td>
                      <td><?php echo $rows->nama_pt ?></td>
                      <td><?php
                      if( $rows->pendidikan_ditempuh == 0)
                        echo "Tidak Ada";
                      else if( $rows->pendidikan_ditempuh == 1)
                        echo "SD";
                      else if( $rows->pendidikan_ditempuh == 2)
                        echo "SMP";
                      else if( $rows->pendidikan_ditempuh == 3)
                        echo "SMA";
                      else if( $rows->pendidikan_ditempuh == 4)
                        echo "D1";
                      else if( $rows->pendidikan_ditempuh == 5)
                        echo "D2";
                      else if( $rows->pendidikan_ditempuh == 6)
                        echo "D3";
                      else if( $rows->pendidikan_ditempuh == 7)
                        echo "D4";
                      else if( $rows->pendidikan_ditempuh == 8)
                        echo "S1";
                      else if( $rows->pendidikan_ditempuh == 9)
                        echo "S2";
                      else if( $rows->pendidikan_ditempuh == 10)
                        echo "S3";
                      else if( $rows->pendidikan_ditempuh == 11)
                        echo "Paket B, C";
                        ?></td>
                      <td><?php echo $rows->nama_pt_pd; ?></td>
                      <?php
                      if($this->session->userdata('role')==1){
                        ?>

                      <td>
                        <!--<a title="Edit Pendidikan" href ="<?php echo base_url($this->uri->segment(1).'/edit-pendidikan/'.$rows->id_pendidikan)?>"><i class="glyphicon glyphicon-edit"></i></a> |-->
                        <a title="Edit Detail Pendidikan" href ="<?php echo base_url($this->uri->segment(1).'/edit-detail-pendidikan/'.$rows->id_pendidikan)?>"><i class="fa fa-users"></i></a>
                      <!--  <a href ="<?php echo base_url($this->uri->segment(1).'/delete-pendidikan/'.$rows->id_pendidikan)?>" onclick="return confirm('Are You Sure want to delete?')">
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
