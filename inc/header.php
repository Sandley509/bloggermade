
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggermade</title>
    <!-- bootstrap integration -->
    <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <!-- own style -->
    <link rel="stylesheet" href="style.css">
    <!-- font awesome kit -->
			<script src="https://kit.fontawesome.com/76de3b60a5.js" crossorigin="anonymous"></script>
</head>
<body>
<header>

<ul class="nav flex-column" style="background-color:#141e45 ;">
<a class="navbar-brand text-white" href="#">Bloggermade</a>
<li class="nav-item active">
        <a class="nav-link text-white ml-4" href="#"><i class="fas fa-home" style="font-size:30px"></i> <span style="margin-left:10px "><b>ACCEUIL</b></span></a>
</li>
 
  <li class="nav-item">
        <a class="nav-link text-white ml-4"  href="#"><i class="fas fa-clipboard"style="font-size:30px"></i>  <span style="margin-left:20px"><B>POST</B></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white ml-4" href="#"><i class="fas fa-bell" style="font-size:30px"></i> <sup class="text-danger" style="font-weight:bolder;font-size:20px">4</sup>  <B>NOTIFICATION</B></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white ml-4"  href="#"><i class="fas fa-user" style="font-size:30px"> </i> <span style="margin-left:20px"> <B>PROFILE</B></span></a>
      
      </li>
      <form action="logout.inc.php" method="post">
        <input type="submit" name='logout' value="deconnection" class="btn btn-danger" >
      
      </form>
</ul>
</header>
<!-- <i class="fas fa-sign-out-alt"style="font-size:30px" type="submit" name="logout"> -->