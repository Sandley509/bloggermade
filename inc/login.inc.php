<?php 

include('db.php');
if (isset($_POST['submit'])) {

    $pseudo=mysqli_real_escape_string($pdo,$_POST['pseudo']);
    $psw=$_POST['psw'];
      // error handlers
    // letsh check for empty field
    if( empty($psw)){
          $pseudo=mysqli_real_escape_string($pdo,$_POST['pseudo']);
        exit();

    }else{
           // check if email is valid
           if(empty($pseudo)){
            header("Location: ../inc/index.php?=Empty_field");
        exit();
           }
           else{

            
               $sql="SELECT * FROM users WHERE pseudo='$pseudo' ";
               $result=mysqli_query($pdo,$sql);
               $resultCheck=mysqli_num_rows($result);
               if ($resultCheck < 1) {
                header("Location: ../index.php?=error");
                exit();
               }
               else{
                   if($row=mysqli_fetch_assoc($result)){
                        $hashedpasswordCheck=password_verify($psw,$row['psw']);
                        if($hashedpasswordCheck == false){
                            header("Location: ../index.php?=wrong password");
                            exit();
                        }elseif($hashedpasswordCheck==true){
                            session_regenerate_id();
                            $_SESSION['loggedin'] = TRUE;
                            $_SESSION['u_id']=$row['ID'];
                            $_SESSION['pseudo']=$row['pseudo'];
                        
                        
                            // Verify if the user is an administrator
                            $sql="SELECT * FROM users WHERE level='1' ";
                            $result=mysqli_query($pdo,$sql);
                            $resultCheck=mysqli_num_rows($result);
                            if ($resultCheck < 1) {
                                header("Location: ../inc/index.php?=Connection_success");
                         
                            }
                        
                                
                         

                       
                           

                            exit();



                        }
                   }
               }

           }
    }
}else{
    header("Location: ../login.php=empty");
    exit();
}



?>