<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../Theme/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../Theme/assets/css/style.css" rel="stylesheet">
    <link href="../Theme/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post" action="process.php">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
		            <br>
		            <input type="text" class="form-control" placeholder="Masukkan Nomor Induk" name="nis">
                <select name="lv" class="form-select mt-3">
                  <option value="">-- Pilih Level --</option>
                  <option value="guru">Guru</option>
                  <option value="siswa">Siswa</option>
                  <option value="admin">Admin</option>
                </select>
                <hr>
                    <center><input type="submit" value="Sign In" class="btn btn-theme"></center>
		
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../Theme/assets/js/jquery.js"></script>
    <script src="../Theme/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="../Theme/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("../Theme/assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
