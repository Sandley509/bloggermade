<?php


if (isset($_POST['submit'])) {
    // database include
    include_once('db.php');
    // recover values
    $pseudo=mysqli_real_escape_string($pdo,$_POST['pseudo']);
      $psw=($_POST['psw']);
   


    // error handlers
    // letsh check for empty field
    if(empty($pseudo)){
        header("Location: ../inc/register.php?=Empty_field");
        exit();

    }else{
        // lets check if input chracteres are valid
        if (preg_match("/^[a-zA-Z]*$",$pseudo)) {
            header("Location: ../inc/register.php?=invalid");
            exit();
        }
            else{
                // lets check if the pseudo is not taken
                $sql="SELECT * FROM users WHERE pseudo='$pseudo'";
                $result=mysqli_query($pdo,$sql);
                $resultCheck=mysqli_num_rows($result);
                if($resultCheck > 0){
                    header("Location: ../inc/register.php?=pseudo deja prix");
                    exit();
                }else{
                    // lets Hashing the password
                  
                        $hashpassword=password_hash($psw,PASSWORD_DEFAULT);
                    
                    $sql="INSERT INTO users (pseudo,psw)
                                     VALUES ('$pseudo','$hashpassword')";
                    mysqli_query($pdo,$sql);


                    $_SESSION['pseudo']=$pseudo;
                  
              
                    header("Location: ../inc/index.php?=Connection_success");
                    exit();
                }
            }
        }

    }
    
  

    
    



















else{
    header("Location: ../register.php?=error-LOGIN");
    exit();
}

?>