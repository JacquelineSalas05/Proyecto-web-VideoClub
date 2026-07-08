<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comedia</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

        <form action="" class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                </div>
                <button type="submit" class="btn btn-mute">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </form>

        <nav>
                <section class="jumbotron">
                    <h2 class="titulo">Video Club Lisa</h2>
                </section>
                <br>
                <label for="drop" class="toggle">Menú</label>
                <div class="sub">Alquiler de películas</div>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                    <li><a href="cliente.php">Home</a></li>
                    <li>
                        <label for="drop-1" class="toggle">Categorías +</label>
                        <a href="#">Categorías</a>
                        <input type="checkbox" id="drop-1" />
                        <ul>
                            <li><a href="caccion.php">Acción</a></li>
                            <li><a href="ccomedia.php">Comedia</a></li>
                            <li><a href="cfantasia.php">Fantasía</a></li>
                            <li><a href="cinfantil.php">Infantil</a></li>
                            <li><a href="cterror.php">Terror</a></li>
                        </ul>

                    </li>

                    <li><a href="ccontacto.php">Contacto</a></li>
                </ul>
            </nav>


            <section class="comedia">
                    <h2>Comedia</h2>
                </section>



                <footer>
                        <span class="badge">
                            &copy;VideoClub Lisa - Derechos Reservados 2019
                        </span>
                </footer>



    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="../js/index.js"></script>
</body>
</html>
