<?php
/**
 * Template Name:easy-projects
 */
get_header();
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
    .topnav { 
  background-color: #37362A;


  margin-top:-70px;
 
}

.topnav li {
  list-style: none;
}

.topnav a {
  color: white;
  text-decoration: none;
  padding: 10px;

}

.topnav li a:hover {
  color: red;
} 
/* ul{
    display:flex;
} */
  </style>
</head>
<body>
    





<div class="topnav">
<a class="navbar-brand" href="#"><div class="logo"><img src="<?php echo get_template_directory_uri()?>/assets/img/Free_sample_By_Wix.jpg" alt="" height="60px"></div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
      <li class="nav-item">
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#" style="color:#fff; list-style:none;padding:20px; text-decoration:none; "></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/PMS/" style="color:#fff; list-style:none;padding:20px; text-decoration:none; ">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PMS/about/"style="color:#fff; list-style:none;padding:20px; text-decoration:none; ">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PMS/contacts/"style="color:#fff; list-style:none;padding:20px; text-decoration:none; ">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PMS/wp-login.php"style="color:#fff; list-style:none;padding:20px; text-decoration:none; ">LOGIN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>



<div class="container-fluid" >
  <div class="row content">
    <div class="col-sm-3 col-md-2  sidenav hidden-xs">
      
      <ul class="nav nav-pills " style="background-color: #37362A; margin-left: -15px;">
      <h2 style=" color: #fff; text-align: center">Logo</h2>
        <li><a href="../../wordpress/dash/">Dashboard</a></li>
        <li ><a href="#section2">Profile</a></li>
        <li><a href="../../PMS/users/">Users</a></li>
        <li><a href="../../PMS/new/">Projects list</a></li>
        <li class="active"><a href="../../PMS/approve/">Approve User</a></li>
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