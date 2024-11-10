<?php include ('template/o_header.php');?>
<div class="sidebar">
      <div class="logo-details">
        <div class="logo_name">
          &ensp;<img src="assets/img/logo.png" width="20%" alt="">
          &ensp;Bilang-Go
        </div>
        <i class='fas fa-align-justify' id="btn"></i>
      </div>
      <ul class="nav-list">
        
        <li>
          <a href="ohome.php">
          <i class='fab fa-microsoft'></i> 
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <hr>
        <li>
          <a href="o_in_home.php">
          <i class='fas fa-user-alt'></i>
            <span class="links_name">Inmate List</span>
          </a>
          <span class="tooltip">Inmates</span>
        </li>
        <li>
          <a href="o_rep_home.php">
          <i class='far fa-file-alt'></i>
            <span class="links_name">Reports</span>
          </a>
          <span class="tooltip">Reports</span>
        </li>
        <hr>
        <li>
          <a href="o_pb_home.php">
          <i class='fas fa-list'></i>
            <span class="links_name">Prison List</span>
          </a>
          <span class="tooltip">Prison List</span>
        </li>
        <li>
          <a href="o_cb_home.php">
          <i class='fas fa-border-all'></i>
            <span class="links_name">Cell List</span>
          </a>
          <span class="tooltip">Cell List</span>
        </li>
        
   <!--     <li>
          <a href="o_vi_home.php">
          <i class='far fa-id-card'></i>
            <span class="links_name">Visitor List</span>
          </a>
          <span class="tooltip">Visitor List</span>
        </li>
-->

        <li class="profile">
          <a href="o_logout.php">
            &emsp;
            <span class="links_name">Logout</span>
          <i class='fas fa-sign-out-alt' id="log_out"></i></a>
        </li>
      </ul>
    </div>
<br>