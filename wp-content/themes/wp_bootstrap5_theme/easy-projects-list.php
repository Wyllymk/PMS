<?php
/**
 * Template Name:ADMIN CAN SEE PROJECTS
 */get_header();

?>

<head>
<link rel="stylesheet" href="wp-content/themes/wp_bootstrap5_theme/assets/css/front.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height:100%;
      margin-top:20px;
      background-color: #37362A;
      color:white;
    }
    .topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#37362A;
  margin-top:-70px;

}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 50px;
  text-decoration: none;
  margin-left: 100px;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #37362A;}

ul.topnav li.right {float: right;}

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<ul class="topnav">
  <li><div class="logo"> <img src="wp-content/themes/wp_bootstrap5_theme/assets/img/Free_sample_By_Wix.jpg" alt=""></div></li>
  <li><a  href="/Easy-manage/wordpress/">HOME</a></li>
  <li><a href="/Easy-manage/wordpress/about/">ABOUT</a></li>
  <li><a href="/Easy-manage/wordpress/contact/">CONTACT</a></li>
  </li> <a href="/Easy-manage/wordpress/wp-login.php"><button class="btn">LOGIN</button></a></li>

</ul>
<style>
    #nav{
        height: 300px;
    }
    .nav .navbar-nav{
        display: inline;
    }
</style>
<!-- <nav id='nav' class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Users</a></li>
        <li><a href="#">Projects list</a></li>
        <li><a href="#">Approve User</a></li>
        <li><a href="#">Account Settings</a></li>
        <li><a href="#">Deactivate User</a></li>
        <li><a href="#">Projects list</a></li>
      </ul>
    </div>
  </div>
</nav>  -->

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 col-md-2  sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills ">
        <li><a href="#section3">Dashboard</a></li>
        <li><a href="#section2">Profile</a></li>
        <li><a href="#section3">Users</a></li>
        <li  class="active"><a href="#section3">Projects list</a></li>
        <li><a href="#section3">Approve User</a></li>
        <li><a href="#section3">Account Settings</a></li>
        <li><a href="#section3">Deactivate User</a></li>
      </ul><br>
    </div>
    <br>
    <style>
        .col-sm-9 .well{
            margin-top:20px;
            
        }
        .nav-pills{
            display:flex;
            flex-direction: column;
            gap:20px;
        }
        #well{
          display:flex;
          flex-direction:row;
          /* margin-right:10px; */
          justify-content:space-between;
          flex-wrap:wrap;
        }
        #well button{
          background-color:red;
          color:white;
          width:100px;
          border-radius:20px;
          border:1px solid black;
        }
        #edit button{
          background-color:#10A54BC9;
          color:white;
          border:1px solid black;
          border-radius:5px;
          width:50px;


        }
        
        
 
    </style>
    <div class="col-sm-9 col-md-10">
      <div class="well" id="well" style='background-color: #37362A; color:white;'>
        <h4>Welcome to Easy Manage</h4>
        <button><h4>Logout</h4></button>

      </div> 
        
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Project Name</th>
      <th scope="col">Users</th>
      <th scope="col">Project Status</th>
      <th scope="col">Edit Project</th>
      <!-- <th scope="col">Deactivate User</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mobile Development</td>
      <td>@mdo</td>
      <td scope="col">Pending</td>
      <td scope="col" id="edit"><button>Edit</button></td>
      <!-- <td scope="col"><button>Deactivate User</button></td> -->
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Wordpress Theme Development</td>
      <td>@fat</td>
      <td>Pending</td>
      <td scope="col"  id="edit"><button>Edit </button></td>
      <!-- <td scope="col"><button>Deactivate User</button></td> -->
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Website Development</td>
      <td>@twitter</td>
      <td>Pending</td>
      <td scope="col"  id="edit"><button>Edit</button></td>
      <!-- <td scope="col"><button>Deactivate User</button></td> -->
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>



<?php

 get_footer();

?>