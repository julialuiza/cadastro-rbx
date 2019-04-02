 <?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script type="text/javascript" src="view/js/bootstrap.min.js"></script>

</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light" >
      <a class="navbar-brand" href="#">
        <img src="view/imgs/axes2.png" width="30" height="30" class="d-inline-block align-top" alt="logo axes">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="nav ">
          <li class="nav-item">
            <a class="nav-link active text-dark" href="#">DASHBOARD</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card rounded">
                            <div class="card-header bg-white">
                                <img src="view/imgs/axes2.png" class="rounded mx-auto d-block" alt="..." width="200"  height="180" >
                            </div>
                            <div class="card-body">
                                <form class="form" id="loginAdmin" action="model/validaLoginAdmin.php" method="POST">
                                    <div class="form-group">
                                        <label for="loginAdmin">Login</label>
                                        <input type="text" class="form-control form-control-lg rounded" name="loginAdmin" id="login" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="senhaAdmin">Senha</label>
                                        <input type="password" class="form-control form-control-lg rounded" name="senhaAdmin" id="senha" required="true">
                                    </div>
                                     <button type="submit" value="submit" name="submit" class="btn btn-primary btn-md btn-block">Entrar</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



 