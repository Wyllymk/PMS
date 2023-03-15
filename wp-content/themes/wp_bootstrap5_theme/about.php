<?php
/**
 * Template Name:My About
 */
get_header();

?>

<head>

  
<style>
.nav { 
  background-color: #37362A;


  margin-top:-15px;
 
}

.nav li {
  list-style: none;
}

.nav a {
  color: white;
  text-decoration: none;
  padding: 10px;

}

.nav li a:hover {
  color: red;
} 
ul{
    display:flex;
}

</style>
</head>
<body>

<div class="nav">
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
      <a class="nav-link active" aria-current="page" href="#" style="color:#fff "></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/PMS/" style="color:#fff ">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PMS/about/">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PMS/contacts/">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PMS/wp-login.php">LOGIN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<style>
.nav-item{
    padding:0 20px 0 40px;
}


</style>
<section id="ABOUT">
     <div class="about-1">
         <h1> About Us </h1>
         <P>Welcome to Easy-Manage, a project management system designed to make your work easier and more efficient. Our goal is to provide a simple, user-friendly platform that helps you keep track of your projects and team members, so you can focus on delivering high-quality work and achieving your goals.</P>
     </div>
     <div id="about-2">
     <div class="content-box-lg">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-book"></i>
                     <h3>OUR MISSION</h3>
                     <hr>
                     <p>Our mission is to help teams manage their projects and tasks in a more efficient and organized manner. We believe that effective project management is the key to success, and we are committed to providing the tools and resources that make it easier for you to manage your projects, no matter how big or small. </p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-globe"></i>
                     <h3> OUR FEATURES</h3>
                     <hr>
                     <p>Easy-Manage comes with a range of powerful features that help you manage your projects and team members more effectively. From creating projects and assigning tasks, to tracking progress and receiving notifications, our platform has everything you need to stay on top of your work and deliver outstanding results.</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-pencil"></i>
                     <h3>OUR ACHIEVEMENTS</h3>
                     <hr>

                     <p> We are proud of our achievements in providing a project management system that makes work easier and more efficient for our users. We have successfully launched our platform and gained a growing user base of satisfied customers who have found our software to be intuitive, user-friendly, and effective in managing their projects and teams.</p>
                     </div>
                  </div>
              </div>
            </div>
         </div>
      </div>   
 </section>
 <style>

*{
    padding: 0;
    margin: 0;
}
body{
    background-color: white;
}



.about-1{
    margin: 30px;
    padding: 5px;
}
.about-1 h1{
    text-align: center;
    color: black;
    font-weight: bold;
}
.about-1 p{
    text-align: center;
    padding: 3px;
    color: black;
}



.about-item{
    margin-bottom: 20px;
    margin-top: 20px;
    background-color: white;
    padding: 80px 30px;
    box-shadow: 0 0 9px rgba(0,0,0.6);
}


.about-item i{
    font-size: 43px;
    margin: 0;
}


.about-item h3{
    font-size: 25px;
    margin-bottom: 10px;
}


.about-item hr{
    width: 46px;
    height: 3px;
    background-color: #5fbff9;
    margin: 0 auto;
    border: none;
    text-align: center;
}


.about-item:hover{
    background-color: #222F77;
}
.about-item:hover i,
.about-item:hover h3,
.about-item:hover p{
    color: #fff;
}
.about-item:hover hr{
    background-color: #fff;
}


.about-item:hover i{
    transform: translateY(-20px);
}
.about-item:hover i,
.about-item:hover h3,
.about-item:hover hr{
    transition: all 400ms ease-in-out;
}



 </style>


</body>
<?php

 get_footer();

?>