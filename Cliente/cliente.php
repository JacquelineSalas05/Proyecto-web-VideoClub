<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Club Lisa</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home - Cliente</title>

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
            <li><a href="#">Home</a></li>
            <li>
                <label for="drop-1" class="toggle">Categorías +</label>
                <a href="#">Categorías</a>
                <input type="checkbox" id="drop" />
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
    <section class="peliculas">
        <p>Películas de estrenos</p>
        <div id="carousel">

            <div class="hideLeft">
                <img src="../img/dory.jpg">
            </div>

            <div class="prevLeftSecond">
                <img src="../img/devoluciones.jpg">
            </div>

            <div class="prev">
                <img src="../img/it.jpg">
            </div>

            <div class="selected">
                <img src="../img/busqueda.jpg">
            </div>

            <div class="next">
                <img src="../img/Joker.jpg">
            </div>

            <div class="nextRightSecond">
                <img src="../img/museo2.jpg">
            </div>

            <div class="hideRight">
                <img src="../img/mision.jpg">
            </div>

        </div>
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
