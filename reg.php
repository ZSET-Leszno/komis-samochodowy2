<?php
            
    if(isset($_POST['email_r'])){
                    
        $log_r = $_POST['log_r'];
        $email_r = $_POST['email_r'];
        $email_r_sanitized = filter_var($email_r,FILTER_SANITIZE_EMAIL);
        $passwd_r = $_POST['passwd_r'];

        $errors = false;

        if((!filter_var($email_r_sanitized,FILTER_VALIDATE_EMAIL)== false) ||($email_r_sanitized != $email_r)){
            $errors = true;
            $_SESSION['e_email'] = "Podaj poprawny adres e-mail";
        }

        if(strlen($passwd_r)<6){
            $errors = true;
            $_SESSION['e_passwd'] = "Hasło musi zawierać przynajmniej 6 znaków";
        }

        if((empty($log_r)) || (empty($log_r)) || (empty($log_r))){
            $errors = true;
            $_SESSION['e_fields'] = "Wszystkie pola muszą być wypełnione";
        }

        $passwd_r_hash = password_hash($passwd_r,PASSWORD_DEFAULT);


        if($errors == false){
            // git
        }
    }

?>