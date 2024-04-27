<div class="row w-auto">
              <div class="col">
            <form class="d-flex flex-column align-items-center justify-content-center" method="POST" action="" id="insertForm">
                 <div class="form-group">
                   <label for="itemNom">Nom</label>
                   <input type="text" class="form-control text-center" name="itemNameInp" id="nomInp" aria-describedby="itemNameField" placeholder="Nom">
                 </div>
                 <div class="form-group">
                   <label for="itemDesc">Déscription</label>
                   <input type="text" class="form-control text-center" name="itemDescInp" id="descInp" aria-describedby="itemDescField" placeholder="Déscription">
                 </div>
                 <div class="form-group">
                   <label for="itemLat">Latitude</label>
                   <input type="text" class="form-control text-center" name="itemLatInp" id="latInp" aria-describedby="itemLatField" placeholder="Latitude">
                 </div>
                 <div class="form-group">
                   <label for="itemLon">Longitude</label>
                   <input type="text" class="form-control text-center" name="itemLonInp" id="lonInp" aria-describedby="itemLonField" placeholder="Longitude">
                 </div>
                 <button type="submit" class="btn btn-dark rounded-pill mt-3" id="sayBye">Ajouter</button> 
                </form>
                <p class="h3 text-center text-warning" id="insertError"></p>
                </div>
            </div>