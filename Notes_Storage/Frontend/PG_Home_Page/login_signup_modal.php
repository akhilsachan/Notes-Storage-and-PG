<!-- Login SignUp Modal -->

<div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button data-dismiss="login" class="close">&times;</button>
          <div class="modal_box" id="modal_box">
            <div class="form-container sign-up-container">
              <form autocomplete="false" id="form" name="signupForm" action="db_dataForms.php" onsubmit="return validateForm()" method="POST" class="modal_form">
                <h1 class="create_account_heading">Create Account</h1>
                <div class="social-container">
                  <a href="#" class="social alternate_login_signup_links"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="social alternate_login_signup_links"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#" class="social alternate_login_signup_links"><i class="fab fa-linkedin-in"></i></a>
                </div>
                
                <span class="login_modal_span_tag">or use your email for registration</span>
                <span class="form_error" id="signup_error" style="display:none;"></span>
                <input type="text" placeholder="Enter Your Name" class="modal_input" name="name" id="name" autocomplete="off"/>
                <span class="form_error" id="span_name"></span>
                <input type="tel" placeholder="Mobile number" class="modal_input" name="Mobile_no" id="Mobile_no" autocomplete="off"/>
                <span class="form_error" id="span_mob"></span>
                <input type="email" placeholder="Email" class="modal_input" name="email" id="email" autocomplete="off"/>
                <span class="form_error" id="span_email"></span>
                <input type="password" placeholder="Password" class="modal_input" name="password" id="password" autocomplete="off" />
                <span class="form_error" id="span_pass"></span>
                <input type="password" placeholder="Confirm Password" class="modal_input" id="confirm_password" name="confirm_password" autocomplete="off"/>
                <span class="form_error" id="span_cpass"></span>
                <input id="signup" class="login_signup_modal_btn mt-2" type="submit" name="signup_submit" value="Signup" />
              </form>
            </div>
            <div class="form-container sign-in-container">
              <form action="db_login.php" method="POST" class="modal_form">
                <h1 class="create_account_heading">Sign in</h1>
                <div class="social-container">
                  <a href="#" class="social alternate_login_signup_links"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="social alternate_login_signup_links"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#" class="social alternate_login_signup_links"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span class="login_modal_span_tag">or use your account</span>
                <span class="form_error" id="login_error" style="display:none;"></span>
                <input type="email" placeholder="Email" class="modal_input" name="username" autocomplete="off"/>
                <input type="password" placeholder="Password" class="modal_input" name="passwordlog" autocomplete="off" />
                <a href="Frontend/PG_Home_Page/forget_password.php" class="alternate_login_signup_links">Forgot your password?</a>
                <input id="login" class="login_signup_modal_btn" type="submit" name="login_submit" value="Sign In" />
              </form>
            </div>
            <div class="overlay-container">
              <div class="overlay">
                <div class="overlay-panel overlay-left">
                  <h1 class="create_account_heading">Welcome Back!</h1>
                  <p class="login_modal_p_tag">To keep connected with us please login with your personal info</p>
                  <button class="ghost login_signup_modal_btn" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                  <h1 class="create_account_heading">Hello, Friend!</h1>
                  <p class="login_modal_p_tag">Enter your personal details and start journey with us</p>
                  <button class="ghost login_signup_modal_btn" id="signUp">Sign Up</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Login SignUp Modal -->





  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
  <script src="JS/pg_password_generator.js"></script>
  <script src="JS/pg_login_modal.js"></script>
</body>

</html>