<!DOCTYPE html>
<html lang="en">

<head>
  <title>OCD Restaurent</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('menubar.php') ?>
    <?php 
    if(isset($_GET['quanly'])){
		$tam = $_GET['quanly'];
	}else{
		$tam = '';
	}

	if($tam=='monchinh'){
		include('monchinh.php');
	}elseif ($tam=='monthem') {
		include('monthem.php');
	}
    elseif ($tam=='nuoc') {
		include('nuoc.php');
	}
    else{
		include('index.php'); 
	}
	include('footer.php');
	?> ?>
</body>
</html>