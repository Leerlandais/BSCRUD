<!--
Bien que l'utilisation de l'animation soit amusante, elle peut rapidement devenir ennuyeuse à regarder. Les versions "statiques" des sections sont des copies exactes moins l'animation.
La variable $_SESSION["pageCount"] s'assure que l'animation se produit seulement quelques fois (se déconnecter réinitialisera ce compteur, bien sûr).
-->

<div class="container mt-5">
<hr class="border border-secondary border-1 opacity-25">
<li class="nav-item dropdown list-unstyled">
<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Couleur
  </button>
          <ul class="dropdown-menu bg-warning-subtle" aria-labelledby="navbarDropdown">
            <li><span class="dropdown-item" id="bodyClassic">Classic</span></li>
            <li><span class="dropdown-item" id="bodyRed">Rouge</span></li>
            <li><span class="dropdown-item" id="bodyGreen">Vert</span></li>
            <li><span class="dropdown-item" id="bodyBlue">Bleu</span></li>
          </ul>
        </li>
<div class="text-center">
<p class="h6"><a href="https://leerlandais.com">&copy; Lee Brennan</p></a>
</div>
<hr class="border border-secondary border-1 opacity-25 ">
</div>