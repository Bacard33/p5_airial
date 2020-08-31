<!DOCTYPE html>
<html lang="fr">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>L'Airial</title>
      <link rel="stylesheet" href="public/css/p5_airial.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   </head>
   <div class="container-fluid">    
        <header>
            <!--Navigation
             ==================================================--> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Restaurant L'Airial</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Où nous trouver</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Nous contacter</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Notre Carte
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Nos menus</a>
                        <a class="dropdown-item" href="#">À la carte</a>
                        <a class="dropdown-item" href="#">Nos desserts</a>
                        <a class="dropdown-item" href="#">Nos boissons</a>
                      </div>
                    </li>
                  </ul>
                </div>
            </nav>
        </header>
        <!-- Caroussel
        ==================================================-->
        <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="p5_airial/public/img/salle.jpg" class="d-block w-100" alt="salle">
            </div>
            <div class="carousel-item">
              <img src="public/img/cabanes.jpg" class="d-block w-100" alt="cabanes">
            </div>
            <div class="carousel-item">
              <img src="public/img/terrasse.jpg" class="d-block w-100" alt="terrasse">
            </div>
            <div class="carousel-item">
              <img src="public/img/andernos.jpg" class="d-block w-100" alt="bassin">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>