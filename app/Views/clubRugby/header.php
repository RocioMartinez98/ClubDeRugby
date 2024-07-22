<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club de Rugby</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
      .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
        background-color: #b20a2c !important;
        border: #b20a2c;
      }
      html{
				min-height: 100%;
				position: relative;
			}
			body {
				margin: 0;
				margin-bottom: 3rem;
			}
			.footer{
				background-color: black;
				position: absolute;
				bottom: 0;
				width: 100%;
				height: 40px;
				color: white;
			}
      </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <div class= "conteiner">
      <header>
        <nav class="navbar navbar-expand-lg  " style="background: #fffbd5;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to bottom, #b20a2c, #fffbd5);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to bottom, #b20a2c, #fffbd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        ;">
            <div class="container-fluid">
                <a class="navbar-brand mx-auto" href="#">
                    <!-- <img src="images/pelota.png" alt="" width="auto" height="30"> -->
                    Club de Rugby
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-auto">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url().'/listaSocios/' ?>"">Listar socios</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url().'/clubDeRugby/' ?>">Agregar socio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>