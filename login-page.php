
<?php include('./controllers/login.php'); ?>

<?php include('./header.php'); ?>

  <div class="page-header header-filter" style="background-image: url('./assets/img/bg.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login card-special">
          <form class="form" action="" method="post">

          


              <div class="card-header card-header-warning text-center">
                <h4 class="card-title ">S'inscrire</h4>
             
              </div>
              <p class="description text-center">
                <a href="./signup-page.php" class="text-secondary">  OU inscrivez-vous </a>
               </p>
              <div class="card-body">

              <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>
                


                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" name="email_signin" id="email_signin" placeholder="Email...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                       <input type="password" class="form-control " name="password_signin" id="password_signin"  placeholder="Password...">
                       <?php echo $wrongPwdErr; ?>

                </div>
              </div>
              <div class="footer text-center">
              <button type="submit" name="login" id="sign_in" class="btn btn-default btn-link btn-wd btn-lg">Get Started </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    </div>
</div>
    <?php include('./footer.php'); ?>
