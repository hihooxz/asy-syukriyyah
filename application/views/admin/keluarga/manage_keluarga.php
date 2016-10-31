<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Lihat Data Keluarga</h2>
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
                  'nama_pasangan' => 'Nama Pasangan',
                  'status_pernikahan' => 'Status'
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
    <div class="x_content"><?php
    if($this->session->userdata('role')==1){
      ?>
    <a href="<?php echo base_url($this->uri->segment(1).'/add-keluarga')?>"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
    <?php } ?>
      <a href="<?php echo base_url($this->uri->segment(1).'/export-keluarga')?>" class="btn btn-default blue-stripe ajax" ><img src="<?php echo base_url('asset/images/photos/file_exel.png')?>"  style= "width:30px;"> export</a>
      <?php
                echo "<center>".$links."</center>";
              ?>
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th class="column-title">Nama Pegawai </th>
              <th class="column-title">Status Pernikahan </th>
              <th class="column-title">Nama Pasangan </th>
              <th class="column-title">Pekerjaan Pasangan </th>
              <th class="column-title">Anak Kandung </th>
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
                      if( $rows->status_pernikahan == 0)
                        echo "Belum Menikah";
                      else if( $rows->status_pernikahan == 1)
                        echo "Sudah Menikah";
                      else if( $rows->status_pernikahan == 2)
                        echo "Janda";
                      else if( $rows->status_pernikahan == 3)
                        echo "Duda";
                        ?></td>
                      <td><?php echo $rows->nama_pasangan ?></td>
                      <td><?php echo $rows->pekerjaan_pasangan ?></td>
                      <td><?php echo $rows->anak_kandung ?></td>
                      <?php
                      if($this->session->userdata('role')==1){
                        ?>
                      <td>
                        <!--<a title="Edit Keluarga" href ="<?php echo base_url($this->uri->segment(1).'/edit-keluarga/'.$rows->id_keluarga)?>"><i class="glyphicon glyphicon-edit"></i></a> |-->
                        <a title="Edit Detail Keluarga" href ="<?php echo base_url($this->uri->segment(1).'/edit-detail-keluarga/'.$rows->id_keluarga)?>"><i class="fa fa-users"></i></a>
                        <!--<a href ="<?php echo base_url($this->uri->segment(1).'/delete-keluarga/'.$rows->id_keluarga)?>" onclick="return confirm('Are You Sure want to delete?')">
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
