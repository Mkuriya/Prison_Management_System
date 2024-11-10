<?php include ('template/a_header.php');?>


<div class="sidebar">
      <div class="logo-details">
        <div class="logo_name">
          <img src="./assets/img/logo.png" width="20%" alt="">Bilang-Ghost

        </div>
        <i class='fas fa-align-justify' id="btn"></i>
        
      </div>
      <ul class="nav-list">
        
        <li>
          <a href="ahome.php">
          <i class='fab fa-microsoft'></i> 
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="a_pb_home.php">
          <i class='fas fa-list'></i>
            <span class="links_name">Prison List</span>
          </a>
          <span class="tooltip">Prison List</span>
        </li>
        <li>
          <a href="a_cb_home.php">
          <i class='fas fa-border-all'></i>
            <span class="links_name">Cell List</span>
          </a>
          <span class="tooltip">Cell List</span>
        </li>
        <li>
          <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class='fas fa-user-cog' ></i>
              <span class="links_name">Accounts</span>
            </a>
            
            <span class="tooltip">Accounts</span>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" id="items" href="a_admin_home.php">Admin</a>
              <a class="dropdown-item" id="items" href="a_off_home.php">Officer</a>
              <a class="dropdown-item" id="items" href="a_jai_home.php">Jailer</a>
            </div>
        </li>
        <li>
          <a href="a_in_home.php">
          <i class='fas fa-user-alt'></i>
            <span class="links_name">Inmate List</span>
          </a>
          <span class="tooltip">Inmates</span>
        </li>
        <li>
          <a href="a_vi_home.php">
          <i class='far fa-id-card'></i>
            <span class="links_name">Visitor List</span>
          </a>
          <span class="tooltip">Visitor List</span>
        </li>
        <li>
          <a href="a_rep_home.php">
          <i class='far fa-file-alt'></i>
            <span class="links_name">Reports</span>
          </a>
          <span class="tooltip">Reports</span>
        </li>
        <li class="profile">
          <a href="a_logout.php">
          <i class='fas fa-sign-out-alt'></i>
            <span class="links_name">Logout</span>
         
          <i class='fas fa-sign-out-alt' id="log_out"></i> </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
<!--  
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
          <a href="ahome.php">
          <i class='fab fa-microsoft'></i> 
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <hr>
        <li>
          <a href="a_pb_home.php">
          <i class='fas fa-list'></i>
            <span class="links_name">Prison List</span>
          </a>
          <span class="tooltip">Prison List</span>
        </li>
        <li>
          <a href="a_cb_home.php">
          <i class='fas fa-border-all'></i>
            <span class="links_name">Cell List</span>
          </a>
          <span class="tooltip">Cell List</span>
        </li>
        <li>
          <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class='fas fa-user-cog' ></i>
            <span class="links_name">Accounts</span>
          </a>
          
          <span class="tooltip">Accounts</span>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" id="items" href="a_admin_home.php">Admin</a>
            <a class="dropdown-item" id="items" href="a_off_home.php">Officer</a>
            <a class="dropdown-item" id="items" href="a_jai_home.php">Jailer</a>
          </div>
        </li>
        <hr>
        <li>
          <a href="a_in_home.php">
          <i class='fas fa-user-alt'></i>
            <span class="links_name">Inmate List</span>
          </a>
          <span class="tooltip">Inmates</span>
        </li>
        <li>
          <a href="a_vi_home.php">
          <i class='far fa-id-card'></i>
            <span class="links_name">Visitor List</span>
          </a>
          <span class="tooltip">Visitor List</span>
        </li>
        <li>
          <a href="a_rep_home.php">
          <i class='far fa-file-alt'></i>
            <span class="links_name">Reports</span>
          </a>
          <span class="tooltip">Reports</span>
        </li>

        <li class="profile">
          <a href="a_logout.php">
            &emsp;
            <span class="links_name">Logout</span>
          <i class='fas fa-sign-out-alt' id="log_out"></i></a>
          
        </li>
      </ul>
    </div>
<br>
<!--
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-black" href="ahome.php">
    <img src="assets/img/logo.png" alt="Bootstrap" width="40" height="40">
    Bilang-Go</a>
    <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="ahome.php">Dashboard</a>
        </li>
        <hr>
        <li class="nav-item">
          <a class="nav-link text-black " href="a_pb_home.php">Prison List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="a_cb_home.php">Cell List</a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Accounts
            </a>

            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="a_admin_home.php">Admin</a></li>
              <li><a class="dropdown-item" href="a_off_home.php">Officer</a></li>
              <li><a class="dropdown-item" href="a_jai_home.php">Jailer</a></li>
            </ul>
          </div>
        </li>
        <hr>
        <li class="nav-item">
          <a class="nav-link text-black" href="a_in_home.php">Inmate List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="a_vi_home.php">Visitor List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black " href="a_rep_home.php">Reports</a>
        </li>
      </ul>
      <hr>
       <button class="btn btn-dark text-white" data-toggle="modal" data-target="#exampleModal" >Log-Out</button>
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Are you sure to log-out?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <a href="a_logout.php"> <button type="button" class="btn btn-primary">Yes</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>-->