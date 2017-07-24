<?php
session_start();
include('database_connection.php');

if(isset($_POST['submit'])){
    $emailid2 = strip_tags($_POST['email']);
    $password2 = strip_tags($_POST['password']);

    if($query = mysql_query("SELECT * FROM employees WHERE email_id = '$emailid2' ")){
    
        $numrows = mysql_num_rows($query);
        
        if($numrows != 0){
            while($row = mysql_fetch_assoc($query)){
                $dbuemailid = $row['email_id'];
                $dbpassword = $row['password'];
                $dbstatus = $row['status'];
            }

            $password2 = md5($password2);

            if($emailid2==$dbuemailid && $password2==$dbpassword){

                if($dbstatus == 'user'){
                    header("location:../component/user-page/user_home.php");
                    $_SESSION['email_id'] = $emailid2;
                }
                else if($dbstatus == 'developer'){
                    header("location:../component/developer-page/developer_home.php");
                    $_SESSION['email_id'] = $emailid2;
                }
               /* else if($dbstatus == 'admin'){
                    header("location:../component/admin-page/admin_home.php");
                    $_SESSION['email_id'] = $emailid2;
                }*/
            }
            else{
                echo '<script type="text/javascript">
                                alert ("Sorry You email id or password are incorrect! ");
                                window.location="../index.php";
                                </script>';
            }
        }
        else{
             echo '<script type="text/javascript">
                                alert ("Sorry You are registered first! ");
                                window.location="../index.php";
                                </script>';
        }
    }else{
        
    }   

}

    

?>