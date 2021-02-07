<link rel="stylesheet" href="../bootstrap.css">
<style>
      .post{
        width:600px;
        height:200px;
        background-color: #f4f2f2;
        border-radius:13px;
        Box-shadow:0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
       
    }
    .inside{
        margin-left:20px;
    }
</style>
<div class="post">
    <div class="inside">
     <p class="pt-4">Bienvenue sur Blogger <span style="color:#141e45;text-transform:uppercase"><b> <?=$_SESSION['pseudo']?></b> </span></p>
     <hr>
     <form action="" method="post">
        <div class="form-group">
        <input type="text" class="form-control" name="post" id="" placeholder="poster un commentaire">
        </div>
        <input type="submit"  class="btn btn-primary btn-lg" value="Publier">
     </form>
    
    </div>
  
</div>