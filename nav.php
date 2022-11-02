<?php
if(!isset($_SESSION['id'])){
?>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #D3D3D3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="bi bi-pencil-square"></i> เข้าสู่ระบบ</a>
        </li>
      </ul>

  </div>
</nav>

<?php }else{ ?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #D3D3D3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a>

      <ul class="navbar-nav">
       <div class="dropdown">
        <a type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm" id="dropdown1" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person-lines-fill"></i> <?php echo $_SESSION["username"]; ?>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdown1">
            <li><a href="logout.php" class="dropdown-item"><i class="bi bi-power"></i> ออกจากระบบ</a></li>
        </ul>
       </div>
      </ul>
  </div>
</nav>

<?php } ?>