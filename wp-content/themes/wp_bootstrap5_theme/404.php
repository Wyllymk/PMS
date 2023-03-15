<?php 

//get_header();?>
<div class="wrapper">
  <div class="error-container">
   <h1 class="error-title">Oops! Page Not Found</h1>
   <p class="error-message">The page you are looking for might have been removed,<br> had its name changed, or is temporarily unavailable.</p>
   <a href="<?php //echo home_url(); ?>" class="error-button">
  <button>Go to homepage</button>
</a>

 </div>
  <div class="svg">
   <img src="wp-content/themes/wp_bootstrap5_theme/assets/img/people.svg" height="400px" alt="img">
  </div>
</div>
<style>
  .wrapper{
    display:flex;
    flex-direction:row;
    justify-content:space-around;
  }
  .error-container{
    margin-top:80px;
  }
  button{
    background-color:#222F77;
    color:white;
    padding:10px;
    border:1px solid black;
    border-radius:5px;
  }

</style>




<?php get_footer();?>