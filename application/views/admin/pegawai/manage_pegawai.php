
<?php $this->load->view('admin/common/header_manage');?>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Data Pegawai</h2>
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
    <a href="<?php echo base_url($this->uri->segment(1).'/add-pegawai')?>"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>

      <div class="table-responsive">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr class="headings">
              <th class="column-title">NIPA/th>
              <th class="column-title">Nama Lengkap </th>
              <th class="column-title">Jenis Kelamin </th>
              <th class="column-title">TTL </th>
              <th class="column-title">Alamat Ktp </th>
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
            				?>
            				<tr>
                      <td><?php echo $rows->nik?></td>
                      <td><?php echo $rows->gelar_depan."". $rows->nama_lengkap ." ". $rows->gelar_belakang ?></td>
                      <td><?php if($rows->jenis_kelamin==1) echo "Laki-Laki"; else echo "Perempuan"; ?></td>
                      <td><?php echo $rows->tempat_lahir.", ".date(' d M Y ',strtotime($rows->tanggal_lahir))?></td>
                      <td><?php echo $rows->alamat_ktp?></td>
                      <td><?php echo $rows->alamat_tinggal?></td>
                      <td><?php echo $rows->handphone?></td>
                      <td><?php echo date('D, d M Y H:i',strtotime($rows->tanggal_input)) ?></td>
                      <td><?php echo $rows->username ?></td>
                    <td>
                    <a href ="<?php echo base_url($this->uri->segment(1).'/view-pegawai/'.$rows->id_pegawai)?>"><i class="glyphicon glyphicon-eye-open"></i></a> |
                    <?php
                    if($this->session->userdata('role')==1){
                  ?>
                  <a href ="<?php echo base_url($this->uri->segment(1).'/edit-pegawai/'.$rows->id_pegawai)?>"><i class="glyphicon glyphicon-edit"></i></a> |
                  <a href ="<?php echo base_url($this->uri->segment(1).'/delete-pegawai/'.$rows->id_pegawai)?>" onclick="return confirm('Are You Sure want to delete?')"><i class="glyphicon glyphicon-trash"></i></a></span>
                  <?php
                }
                  ?>
                  </td>
                    </tr>
            				<?php
            			}
            		}
            	?>
            	<?php
            		echo $links;
            	?>

            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
