
<link rel="stylesheet" href="style.css">
<style>
    .user{
        width:200px;
        height:100px;
        background-color: #f4f2f2;
        border-radius:13px;
        Box-shadow:0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }
    .userImg{
        width:70px;
        height:70px;
        border-radius:50%;
        background-color: #141e45;
        border:4px dotted #fff;

    }
</style>
<div class="user">
  <div class="row">
      <div class="col-lg-4">
           
          <div class="userImg ml-2"></div>
          
    </div>
      <div class="col-lg-2"><p style="color:#141e45;margin-left:20px;text-align:left"><?= $_SESSION['pseudo'];?></p></div>
     
  </div>
</div>
