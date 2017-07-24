<?php
include('database_connection.php');
if(isset($_POST['Submit'])){
    
    $status = strip_tags($_POST['status']);
    $idnumber = strip_tags($_POST['number']);
    $username = strip_tags($_POST['username']);
    $emailid = strip_tags($_POST['emailid']);
    $passwordget = strip_tags($_POST['password']);
    $contactno = strip_tags($_POST['contactnum']);
    $imagename = strip_tags($_FILES['file_nm']['name']);

    $password = md5($passwordget);

    $profilephoto = (file_get_contents($_FILES['file_nm']['tmp_name']));

    $alreadyuser = mysql_query("SELECT * FROM employees WHERE email_id = '$emailid' AND user_name = '$username' ");
    $rowuser = mysql_num_rows($alreadyuser);
    if($rowuser != 0){
            echo '<script type="text/javascript">
							alert ("Sorry You are already registered user");
							window.location="../index.php";
							</script>';
    }else{
        if($status == 'user'){
            $status = 'user';
            $query = "INSERT INTO employees(id_number,user_name,email_id,password,contact_no,profile_photo,status) VALUES ('$idnumber','$username','$emailid','$password','$contactno','$imagename','$status')";

            $data = mysql_query($query) or die(mysql_error());

            if($data){
                echo '<script type="text/javascript">
							alert ("Your Register is completed");
							window.location="../index.php";
							</script>';
                }
        } 
        else if($status == 'developer'){
            $status = 'developer';
                $query = "INSERT INTO employees(id_number,user_name,email_id,password,contact_no,profile_photo,status) VALUES ('$idnumber','$username','$emailid','$password','$contactno','$imagename','$status')";
                
                $data = mysql_query($query) or die(mysql_error());

                if($data){
                    echo '<script type="text/javascript">
                                alert ("Your Register is completed");
                                window.location="../index.php";
                                </script>';
                }
            
            } 
        }
    }

?>