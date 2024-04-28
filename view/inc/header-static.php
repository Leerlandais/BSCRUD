<hr class="border border-secondary border-1 opacity-25">
<div class="text-center">
    <p class="h1">Bienvenue Dans Ma Nouvelle Expérience</p>
</div>
<nav class="navbar">
<div class="container-fluid">
<!--
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
-->
    <div class="collapse-sm navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row justify-content-evenly">
        <li class="nav-item">
          <?php
              if(isset($_GET["page"]) && $_GET["page"] !== "home") {
          ?>
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
          <?php
            }else {
              ?>
          <a class="nav-link disabled" aria-current="page" href="?page=home">Home</a>
              <?php
            }
          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=showmap">Carte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=create">Ajouter un Lieu</a>
        </li>
 <!--       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle animate__animated animate__delay-3s animate__fadeIn" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
-->
        <li class="nav-item">
          <?php
            if (isset($_SESSION["monID"])) {
              ?>
          <a class="nav-link animate__animated animate__delay-2s animate__fadeIn" href="?logout" tabindex="-1" aria-disabled="true">Déconnexion</a>
              <?php
            }else  {
          ?>
          <a class="nav-link animate__animated animate__delay-2s animate__fadeIn" href="?login" tabindex="-1" aria-disabled="true">Connexion</a>
          <?php
          }
          ?>
        </li>
      </ul>
      <!--
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
-->
    </div>
  </div>
</nav>

<hr class="border border-secondary border-1 opacity-25">