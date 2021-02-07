<?php 
   session_start();
include('db.php');
if (isset($_POST['submit'])) {

    $pseudo=mysqli_real_escape_string($pdo,$_POST['pseudo']);
    $psw=$_POST['psw'];
      // error handlers
    // letsh check for empty field
    if( empty($psw)){
        header("Location: ../index.php?=Empty_field");
        exit();

    }else{
           // check if email is valid
           if(empty($pseudo)){
            header("Location: ../index.php?=invalid_pseudo");
        exit();
           }
           else{

            
               $sql="SELECT * FROM users WHERE pseudo='$pseudo'";
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
                         session_start();
                            $_SESSION['loggedin']=true;
                            $_SESSION['u_id']=$row['ID'];
                            $_SESSION['pseudo']=$row['pseudo'];
                             header("Location: ../inc/index.php?=Connection_success");

                            








                        }
                   }
               }

           }
    }
}else{
    header("Location: ../index.php?=empty");
    exit();
}



?>