  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo base_url($this->uri->segment(1)) ?>">Dashboard</a></li>
            <li><a href="<?php echo base_url($this->uri->segment(1).'/statistik') ?>">Statistik</a></li>
        </ul>
      </li>
      <?php
        if($this->session->userdata('role') == 2){
          ?>
          <li><a><i class="fa fa-user"></i>User <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url('user/add-user') ?>">Add User</a></li>
              <li><a href="<?php echo base_url('user/manage-user') ?>">Manage User</a></li>
            </ul>
          </li>
          <?php
        }
        else if($this->session->userdata('role') == 1){
          ?>
          <!--
          <li><a><i class="fa fa-users"></i>Pegawai <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url('kepegawaian/add-pegawai') ?>">Tambah Pegawai</a></li>
              <li><a href="<?php echo base_url('kepegawaian/manage-pegawai') ?>">Data Pegawai</a></li>
            </ul>
          </li>
        -->
          <li><a><i class="fa fa-info"></i>Informasi Personal <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url('kepegawaian/add-info-pegawai') ?>">Tambah Informasi Personal</a></li>
              <li><a href="<?php echo base_url('kepegawaian/info-pegawai') ?>">Data Informasi Personal</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-heart"></i>Keluarga <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url('kepegawaian/add-keluarga') ?>">Tambah Data Keluarga</a></li>
              <li><a href="<?php echo base_url('kepegawaian/manage-keluarga') ?>">Data Keluarga</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-graduation-cap"></i>Pendidikan <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url('kepegawaian/add-pendidikan') ?>">Tambah Data Pendidikan</a></li>
              <li><a href="<?php echo base_url('kepegawaian/manage-pendidikan') ?>">Data Pendidikan</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-suitcase"></i>Pekerjaan & Jabatan <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url('kepegawaian/add-pekerjaan') ?>">Tambah Data Pekerjaan</a></li>
              <li><a href="<?php echo base_url('kepegawaian/manage-pekerjaan') ?>">Data Pekerjaan & Jabatan</a></li>
            </ul>
          </li>
          <!--<li><a><i class="fa fa-thumbs-up"></i>Keg. Organisasi <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url('kepegawaian/add-organisasi') ?>">Tambah Data Organisasi</a></li>
              <li><a href="<?php echo base_url('kepegawaian/manage-organisasi') ?>">Data Keg. Sosial & Organisasi</a></li>
            </ul>
          </li>-->
          <?php
        }   else if($this->session->userdata('role') == 3){
       ?>
      <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="tables.html">Tables</a></li>
          <li><a href="tables_dynamic.html">Table Dynamic</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="chartjs.html">Chart JS</a></li>
          <li><a href="chartjs2.html">Chart JS2</a></li>
          <li><a href="morisjs.html">Moris JS</a></li>
          <li><a href="echarts.html">ECharts</a></li>
          <li><a href="other_charts.html">Other Charts</a></li>
        </ul>
      </li>
      <?php
    }
      ?>
    </ul>
  </div>

</div>
<!-- /sidebar menu -->
