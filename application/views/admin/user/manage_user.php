

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Manage User</h2>
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
                  'username'=>'Username',
                  'email' => 'Email',
                  'role' => 'Role'
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
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th class="column-title">Username </th>
              <th class="column-title">Email </th>
              <th class="column-title">Role </th>
              <th class="column-title">Date Register </th>
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
                      <td><?php echo $rows->username ?></td>
                      <td><?php echo $rows->email ?></td>
                      <td><?php if($rows->role==1) echo "Kepegawaian"; elseif($rows->role==2) echo "IT"; elseif($rows->role==3) echo "Keuangan"; elseif($rows->role==4) echo "Yayasan";?></td>
                      <td><?php echo date('D, d M Y H:i',strtotime($rows->date_register)) ?></td>

                      <td>
                        <a href ="<?php echo base_url('user/edit_user/'.$rows->id_user)?>"><i class="glyphicon glyphicon-edit"></i></a> 
                      <!--<span class="glyphicon-class"><span class="glyphicon glyphicon-trash" aria-hidden="true"><a href ="<?php echo base_url('user/delete_user/'.$rows->id_user)?>" onclick="return confirm('Are You Sure want to delete?')"></a></span></span>-->


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
