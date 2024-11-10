<?php include ('template/j_header.php');?>
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
          <a href="jhome.php">
          <i class='fab fa-microsoft'></i> 
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <hr>
        <li>
          <a href="j_in_home.php">
          <i class='fas fa-user-alt'></i>
            <span class="links_name">Inmate List</span>
          </a>
          <span class="tooltip">Inmates</span>
        </li>
        <li>
          <a href="j_vi_home.php">
          <i class='far fa-id-card'></i>
            <span class="links_name">Visitor List</span>
          </a>
          <span class="tooltip">Visitor List</span>
        </li>
        <li class="profile">
          <a href="j_logout.php">
            &emsp;
            <span class="links_name">Logout</span>
          <i class='fas fa-sign-out-alt' id="log_out"></i></a>
        </li>
      </ul>
    </div>
    <br>