<?php
   
    // Database connection
    include('./config/db.php');

   
    
    // Error & success messages
    global $success_msg, $email_exist, $f_NameErr, $_emailErr, $_passwordErr;
    global $fNameEmptyErr, $emailEmptyErr,  $passwordEmptyErr, $email_verify_err, $email_verify_success;
    
    // Set empty form vars for validation mapping
    $_username  = $_email  = $_password = "";

    if(isset($_POST["submit"])) {
        $username     = $_POST["username"];
        $email         = $_POST["email"];
        $password      = $_POST["password"];

        // check if email already exist
        $email_check_query = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}' ");
        $rowCount = mysqli_num_rows($email_check_query);


        // PHP validation
        // Verify if form values are not empty
        if(!empty($username) &&  !empty($email)  && !empty($password)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } else {
                // clean the form data before sending to database
                $_username = mysqli_real_escape_string($connection, $username);
                $_email = mysqli_real_escape_string($connection, $email);
                $_password = mysqli_real_escape_string($connection, $password);

                // perform validation
               
                if(!preg_match("/^[a-zA-Z ]*$/", $_username)) {
                    $l_NameErr = '<div class="text-danger">
                            Only letters and white space allowed.
                        </div>';
                }
                if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                    $_emailErr = '<div class="text-danger">
                            Email format is invalid.
                        </div>';
                }
             
                if(!preg_match( "/^[A-Za-z0-9 ]*$/", $_password)) {
                    $_passwordErr = '<div class="text-danger">
                             Password should be between 6 to 20 charcters long, contains only chacter and degit .
                        </div>';
                }
                
                // Store the data in db, if all the preg_match condition met
                if((preg_match("/^[a-zA-Z ]*$/", $_username)) &&
                 (filter_var($_email, FILTER_VALIDATE_EMAIL)) && 
                 (preg_match("/^[A-Za-z0-9 ]*$/", $_password))){

                    // Generate random activation token
                    $token = md5(rand().time());

                    // Password hash
                    $password_hash = password_hash($password, PASSWORD_BCRYPT);

                    // Query
                    $sql = "INSERT INTO users (username,  email, password, token
                    ) VALUES ('{$username}', '{$email}', '{$password_hash}', 
                    '{$token}' )";
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);

                    header("location: index.php");
                    
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($connection));
                    } 

                   
                }
            }
        } else {
            if(empty($username)){
                $fNameEmptyErr = '<div class="text-danger">
                   username can not be blank.
                </div>';
            }
            
            if(empty($email)){
                $emailEmptyErr = '<div class="text-danger">
                    Email can not be blank.
                </div>';
            }
          
            if(empty($password)){
                $passwordEmptyErr = '<div class="text-danger">
                    Password can not be blank.
                </div>';
            }            
        }
    }
?>