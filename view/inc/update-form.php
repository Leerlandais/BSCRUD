<div class="row w-auto">
              <div class="col">
            <form class="d-flex flex-column align-items-center justify-content-center" method="POST" action="" id="updateForm">
                 <div class="form-group">
                   <label for="itemNom">Nom</label>
                   <input type="text" class="form-control text-center" name="updateNameInp" id="nomInpUpdate" aria-describedby="updateNameField" placeholder="<?=$updateItem["nom"]?>" value="<?=$updateItem["nom"]?>">
                 </div>
                 <div class="form-group">
                   <label for="itemDesc">Déscription</label>
                   <input type="text" class="form-control text-center" name="updateDescInp" id="descInpUpdate" aria-describedby="updateDescField" placeholder="<?=$updateItem["desc"]?>" value="<?=$updateItem["desc"]?>">
                 </div>
                 <div class="form-group">
                   <label for="itemLat">Latitude</label>
                   <input type="text" class="form-control text-center" name="updateLatInp" id="latInpUpdate" aria-describedby="updateLatField" placeholder="<?=$updateItem["lat"]?>" value="<?=$updateItem["lat"]?>">
                 </div>
                 <div class="form-group">
                   <label for="itemLon">Longitude</label>
                   <input type="text" class="form-control text-center" name="updateLonInp" id="lonInpUpdate" aria-describedby="updateLonField" placeholder="<?=$updateItem["lon"]?>" value="<?=$updateItem["lon"]?>">
                 </div>
                 <button type="submit" class="btn btn-dark rounded-pill mt-3" id="sayBye">Changer</button> 
                </form>
                <p class="h3 text-center text-warning" id="insertError"></p>
                </div>
            </div>