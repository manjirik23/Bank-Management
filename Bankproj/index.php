<?php
    include './conect.php';
    $query="SELECT* FROM `customer`;";
    $result =mysqli_query($con,$query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
<style>
.link
{
  text-decoration: none;
  color: rgb(0,0,0);
}
.center
{
  background-color: rgb(252, 252, 252);
  border-radius: 10px;
  box-shadow: 0 0 12px 2px rgba(4, 104, 90, 0.9);
  overflow: hidden;  
}


</style>
    <title>Dunder Mifflin Bank</title>
  </head>
  <body style="font-family: 'Yusei Magic', sans-serif;">
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#456268">
  <div class="container-fluid">
    <a class="navbar-brand mb-0 h1" href="index.php"> 
    <img src="logo1.jpg" width="50" height="50" alt="" loading="lazy"> DUNDER MIFFLIN BANK
    </a> 
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <form class="form-inline">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" style="color: white;" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="transection.php" style="color: white;">TRANSFER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php" style="color: white;">HISTORY</a></li>
        </li>
        
      </ul>
    </div>
    </form>
  </div>
</nav>


<div class="container mt-5 p-2 center">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SR NO. </th>
      <th scope="col">NAME</th>
      <th scope="col">ACCOUNT NO.</th>
    </tr>
  </thead>
  <tbody>
  
  <?php while($row = mysqli_fetch_assoc($result))
             {?>
    <tr>
      <th scope="row">
    <a class="link" href="about.php?id=<?php echo $row['cust_id']?>"><?php echo $row['cust_id']?></a></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['ac_no']?></td>
    
    </tr>
          <?php   }?>
  </tbody>
</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>