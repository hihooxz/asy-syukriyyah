
<?php $this->load->view('admin/common/header_manage');?>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Informasi Personal Pegawai</h2>
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
                  'nik' => 'NIK',
                  'nama_lengkap'=>'Nama Lengkap',
                  'gelar_depan' => 'Gelar Depan',
                  'gelar_belakang' => 'Gelar Belakang',
                  'tanggal_lahir' => 'Tanggal Lahir'
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
      <div class="table-responsive">
        <?php if($this->session->userdata('role')==1){ ?>
        <a href="<?php echo base_url($this->uri->segment(1).'/add-info-pegawai')?>"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
        <a href="<?php echo base_url($this->uri->segment(1).'/export')?>" class="btn btn-default blue-stripe ajax" ><img src="<?php echo base_url('asset/images/photos/file_exel.png')?>"  style= "width:30px;"> export</a>
        <?php } ?>
        <?php
                echo "<center>".$links."</center>";
              ?>
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr class="headings">
              <th class="column-title">Nama Lengkap </th>
              <th class="column-title">L/P </th>
              <th class="column-title">TTL </th><!--
              <th class="column-title">Alamat Ktp </th> -->
              <th class="column-title">Alamat Tinggal</th>
              <th class="column-title">Handphone </th>
              <th class="column-title">Tanggal Input</th>
              <th class="column-title">Input BY</th>
              <th class="column-title no-link last"><span class="nobr">Action</span>
                </th>

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
                      <td class="text-center" width="10%">
                        <?php
                          if($rows->foto_pegawai!=""){
                            ?>
                              <img src="<?php echo base_url($rows->foto_pegawai)?>" class="img-responsive">
                            <?php
                          }
                          else{
                            ?>
                              <i class="fa fa-user fa-3x"></i>
                            <?php
                          }
                        ?><br />
                        <?php echo $rows->gelar_depan."". $rows->nama_lengkap ."". $rows->gelar_belakang ?>
                      </td>
                      <td><?php if($rows->jenis_kelamin==1) echo "L"; else echo "P"; ?></td>
                      <td><?php echo $rows->tempat_lahir.", ".tgl_indo($rows->tanggal_lahir)?></td>
                      <!--<td><?php echo $rows->alamat_ktp?></td>-->
                      <td><?php echo $rows->alamat_tinggal?>
                      </td>
                      <td><?php echo $rows->handphone?></td>
                      <td><?php echo tgl_indo_timestamp(strtotime($rows->tanggal_input)) ?></td>
                      <td><?php echo $rows->username ?></td>
                    <td>
                      <?php
                      if($this->session->userdata('role')==1){
                    ?>
                  <a title="Edit" href ="<?php echo base_url($this->uri->segment(1).'/edit-info-pegawai/'.$rows->id_pegawai)?>"><i class="glyphicon glyphicon-edit"></i></a> |
                  <a title="Download" target="_blank" href ="<?php echo base_url($this->uri->segment(1).'/download_data/'.$rows->id_pegawai)?>"> <i class="fa fa-download"></i> </a></span>
                  <?php
                  }
                  ?>
                  <a title="View" href ="<?php echo base_url($this->uri->segment(1).'/lihat-pegawai/'.$rows->id_pegawai)?>"><i class="fa fa-eye"></i></a>
                  </td>

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
<?php $this->load->view('admin/common/script_manage'); ?>
