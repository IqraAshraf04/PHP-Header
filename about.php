<?php include_once 'header.php' ?>
<center><h1>About Page</h1></center>

<div class="col-md-6 offset-3">
    <form action="function.php" method="POST">
        <label class="w-100">
            Enter Your name
            <input type="text" class="form-control"name="username" placeholder="Name" >
            Enter Your Password
            <input type="password" class="form-control" placeholder="password" >
          
            <input type="submit" class=" btn btn-primary mt-2" placeholder="Name" >
        </label>
    </form>
</div>
<?php 
$name="ok";
?>
<?php include_once 'footer.php' ?>