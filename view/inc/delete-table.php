    <div class="container text-center w-25">
    <p class="h4">Êtes-vous sur vous voulez supprimer ce lieu?</p>
    <div class="border border-warning rounded-5">
    <p><?=$mapDelete["nom"]?></p>
    <p><?=$mapDelete["desc"]?></p>
    </div>
    <div class="mt-2">
    <a href="?page=seetable&action=delete&item=<?=$mapDelete["id"]?>&confirm=ok"><span class="btn btn-danger mx-3">Oui</span></a>
    <a href="?page=seetable"><span class="btn btn-info mx-3">Non</span></a>
    </div>
    </div>