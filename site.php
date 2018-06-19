

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			LocUploader
		</title>
		<link rel="shortcut icon" href="favicon.ico">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>
		<style>
		body {
     background: #FAFAFA;
		}
		.center {
    margin: auto;
    width: 50%;
    padding: 70px;
}
	</style>
	</head>
	<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  			<a class="navbar-brand" href="#">LocUploader</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav ml-auto">
      				<li class="nav-item">
        				<a class="nav-link"><?php error_reporting(0); include("validacao.php"); echo $_SESSION['email']; ?></a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="fim.php">Sair</a>
      				</li>
    			</ul>
  			</div>
		</nav>


	<div class="center">
		<div class="card border-dark mb-3">
	<div class="card" >
        <div class="card-body">
		<form action="upload.php" method="POST" enctype = "multipart/form-data">
		<div class="form-group">



    		<table align="center">
                <tr>
                    <td colspan="2" align="center"><b>Upload</b></td>
                </tr>

    			<tr>

    				<td>Selecione a foto:</td>

    				<td><input type ="file" name="arquivo" class="btn btn-dark" placeholder="Escolha uma imagem"></td>

				</tr>
				<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                <tr>
                    
                    <td colspan="2" align="center"><input type="submit" value="enviar" name="enviar" class="btn btn-dark"></td>
                
                </tr>
				
    		</table>
    	</div>
    	</form>
    </div>
    </div>
</div>
</body>
</html>
