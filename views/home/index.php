
<?php  require_once "views/shared/header.php"; ?>



<?php
    if(isset($_SESSION["numeroDocumento"]))
    {

        //echo $_SESSION["numeroDocumento"];
    }
    else
    {
        echo "Usuario no ha ingresado";
    }

?>


<body background="https://i.pinimg.com/236x/7f/4a/01/7f4a0137f1eb7dfea2419adef7663ac4--pattern-wallpaper-girly.jpg">
  
<h1>BIENVENIDO</h1>
    </div>
      </div>
    </nav>
    <br>
    <div class="container">
    <div class="carousel slide" data-ride="carousel" id="micarousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images-gmi-pmc.edge-generalmills.com/a32379ab-65fb-4242-9e07-28fbb087524e.jpg" class="d-block w-100" width="100%"height="400px"alt="">
            </div>
            <div class="carousel-item">
                <img src="https://i.blogs.es/948245/mousse_yogur/1366_2000.jpg"class= "d-block w-100"width="100%"height="400px" alt="">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.kiwilimon.com/recetaimagen/35969/43836.jpg"class= "d-block w-100"width="100%"height="400px" alt="">
            </div>
            <div class="carousel-item">
                <img src="https://img-global.cpcdn.com/recipes/recipes_37300_v1393350201_receta_foto_00037300/1200x630cq70/photo.jpg"class= "d-block w-100"width="100%"height="400px" alt="">
            </div>
            <div class="carousel-item">
                <img src="https://elgourmet.s3.amazonaws.com/recetas/share/spagh_e8DiuI5qVF4d3xokhn0EQAtHJYXSU6.png"class= "d-block w-100"width="100%"height="400px" alt="">
            </div>
        </div>
        <a class="carousel-control-prev"href="#micarousel"
        role="button"data-slide="prev">
        <span  class="carousel-control-prev-icon"></span>
            <span class="sr-only">previous</span>
        </a>
        <a class="carousel-control-next"href="#micarousel"
        role="button"data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">next</span>
        </a>
        </div>
    </div>
    



</body>

<?php  require_once "views/shared/footer.php"; ?>



