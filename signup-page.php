<?php include('./controllers/register.php'); ?>


<?php include('./header.php'); ?>

  <div class="page-header header-filter" style="background-image: url('./assets/img/bg.jpg'); background-size: cover; background-position: top center;">
  <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form"    action="" method="post">
                      
            
            
            <div class="card-header card-header-warning text-center">
                <h4 class="card-title "> Inscrivez-Vous</h4>
             
              </div>
              <p class="description text-center">
                <a href="./login-page.php" class="text-secondary">  OU S'inscrire

              </a>
               </p>

               <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>

                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>


              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control " name="username" id="username" placeholder="First Name...">
                  <?php echo $fNameEmptyErr; ?>
                        <?php echo $f_NameErr; ?>
                </div>


                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control " name="email" id="email"  placeholder="Email...">
                         <?php echo $_emailErr; ?>
                        <?php echo $emailEmptyErr; ?>
                </div>



                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control " name="password" id="password"  placeholder="Password...">
                  <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>
                </div>
             
              </div>
              <div class="footer text-center">
                <button type="submit" name="submit" id="submit" class="btn btn-default btn-link btn-wd btn-lg">Get Started </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    </div>
  
</div>
</div>


    <?php include('./footer.php'); ?>

