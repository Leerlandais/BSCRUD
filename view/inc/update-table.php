    <div class="container text-center w-25">
    <p class="h4">Voulez-vous changer ce lieu?</p>
    <div class="border border-warning rounded-5">
    <p><?=$map["nom"]?></p>
    <p><?=$map["desc"]?></p>
    </div>
    <div class="mt-2">
    <a href="?page=seetable&action=update&item=<?=$map["map_id"]?>&confirm=ok"><span class="btn btn-danger mx-3">Oui</span></a>
    <a href="?page=seetable"><span class="btn btn-info mx-3">Non</span></a>
    </div>
    </div>