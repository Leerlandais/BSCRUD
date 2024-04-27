<!-- 
Le formulaire pour ajouter un nouvel endroit. Réalisé comme une inclusion pour garder les pages principales dégagées du désordre.
Même chose pour les autres 'include'
-->

<div class="row w-auto">
              <div class="col">
                <p class="h4">Ajouter un lien ici</p>
            <form class="d-flex flex-column align-items-center justify-content-center" method="POST" action="">
                 <div class="form-group">
                   <label for="nomInp">Nom</label>
                   <input type="text" class="form-control text-center" name="userNameInp" id="nomInp" aria-describedby="userNameField" placeholder="Votre Nom">
                 </div>
                 <div class="form-group">
                   <label for="pwdInp">Password</label>
                   <input type="password" class="form-control text-center" name="userPassInp" id="pwdInp" placeholder="Password">
                 </div>
                 <button type="submit" class="btn btn-dark rounded-pill mt-3" id="sayBye">Submit</button> 
                </form>
                </div>
            </div>