
<nav class="navbar navbar-expand-lg navbar-custom navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><img src="img/logo.png" alt=".." class ="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active text-center" aria-current="page" href="?quanly=monchinh">Món chính</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-center" href="?quanly=monthem">Món thêm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-center" href="?quanly=nuoc">Nước giải khát</a>
        </li>
        
      </ul>
      
    </div>
    <form class="d-flex timk" action="" method="POST">
				<input class="form-control me-2" name="tu_khoa" type="search" placeholder="Tìm món ăn..." aria-label="Search">
				<button class="btn btn-outline-info" name="tim_kiem" type="submit">Tìm</button>
			</form>
  </div>
</nav>