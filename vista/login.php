<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>
<div class="container">
  <div class="starter-template">
    <br>
    <div class="row text-center">
      <div class="col-md-4 col-md-offset-4">
				<div class="card">
					<div class="card-body">
						<form id="loginForm" action="validarCode.php" method="POST" role="form">
						<h3>Iniciar Sesion</h3>
						<div class="form-group  text-left">
						<div class="form-group">
							<label for="txtUsuario" >Usuario</label>
							<input type="text" required autofocus name="txtUsuario" class="form-control" id="usuario" placeholder="Nombre de Usuario">
						</div>
						<div class="form-group">
							<label for="" >Password</label>
							<input type="password" required name="txtPassword" class="form-control" id="password" placeholder="Contraseña">
						</div>
						</div>
						<button type="submit" class="btn btn-success">Login</button>
						</form>
					</div>
				
				</div>
      </div>
    </div>
</div><!-- /.container -->

<?php include 'partials/footer.php'; ?>