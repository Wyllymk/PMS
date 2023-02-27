<?php 
/**
 * Template Name: Registration
*/
get_header();?>
<?php
global $wpdb;

if($_POST){
    $username  = $wpdb->prepare($_POST['username']);
    $email = $wpdb->prepare($_POST['email']);
    $password = $wpdb->prepare($_POST['password']);
    $confirmpassword = $wpdb->prepare($_POST['confirmpassword']);

    $error = array();

    if(strpos($username, ' ') !== FALSE) {
        $error['username_space'] = "Username has space";
    }
    if(empty($username)){
        $error['username_empty'] = "Must Have Username";
    }
    if(username_exists($username)) {
        $error['username_exists'] = "Username already exists";
    }
    if(!is_email($email)) {
        $error['email_valid'] = "Email is Not Valid";
    }
    if(email_exists($email)) {
        $error['email_existence'] = "Email already exists";
    }
    if (strcmp($password, $confirmpassword) !==0) {
        $error['password'] = "Password didn't match";
    }
    if (count($error) == 0) {
        wp_create_user($username,$password,$email);
        echo "User created successfully";
        exit();
    }
    else print_r($error);
}
?>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container pb-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <h4 class="mt-1 mb-5 pb-1">We are The PMS Team</h4>
                </div>

                <form class="form" action="" method="post">
                  <p>Please Register a New Account</p>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example11">Username:</label>  
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" />
                  </div>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example11">Email:</label>  
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" />
                  </div>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example22">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                  </div>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example22">Confirm Password:</label>
                    <input type="password" id="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" />
                  </div>

                  <div class="text-center d-flex justify-content-center flex-column pt-1 mb-4 pb-1">
                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="register" href=""type="button">
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-2">
                    <p class="mb-0 me-2">Already have an account?</p>
                    <a type="button" href="../PMS/login"class="btn btn-outline-danger">Login</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>