<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

</head> 
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Adm Gim</a>
        </div>
    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- <li ><a href="#"> Inicio <span class="sr-only">(current)</span></a></li> -->
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión recursos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="./html/productos.php">Productos</a></li>
                      <li><a href="./html/proveedores.php">Proveedores</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="./html/informesprodprov.php">Informes</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión socios <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Matrículas</a></li>
                          <li><a href="#">Cuotas</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Informes</a></li>

                        </ul>
                      </li>
            
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión inventarios <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Maquinarias</a></li>
                      <li><a href="#">Solicitudes</a></li>
                      <li><a href="./controllers/altapedido.php">Pedidos</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Informes</a></li>
  
                    </ul>
                  </li>



          </ul>
    
          <ul class="nav navbar-nav navbar-right">
            <li><a href="controllers/login.php">Log in</a></li>
            <li><a href="controllers/logout.php">Log out</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>
    </nav>



    <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="content">
        <h1><i class="fas fa-dumbbell" aria-hidden="true"></i>
          Administración de Gimnasio
        </h1>
            <h3>sistema de administración comercial</h3>
				<hr>
				<a href="controllers/login.php"><button class="btn btn-default btn-lg"><i class="fas fa-user-tie" aria-hidden="true"></i>Login</button></a>
				</div>
			</div>
		</div>
  </div>
  


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>