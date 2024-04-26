<div class="container my-3 border border-success pt-3">
    <div class="text-center">
    <div class="container">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered table-striped" data-toggle="table" data-show-columns="true" data-search="false" data-pagination="true" data-checkbox-header="true">
                        <thead>
                                <tr>
                                    <th data-checkbox="true" data-click-to-select="true">Id</th>
                                    <th class="text-center">Titre</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Latitude</th>
                                    <th class="text-center">Longitude</th>
                                    <th class="text-center">Modifier</th>
                                    <th class="text-center">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($getUsers as $user) {
                                        
                                        ?>
                                    <tr>
                                        <td><?=$user["nom"]?></td>
                                        <td>A Table of Two Cities</td>
                                        <td>Making a table or two</td>
                                        <td>50.825</td>
                                        <td>4.338</td>
                                        <td><img src="images/pencil.svg" alt="update"></td>
                                        <td><img src="images/trash.svg" alt="delete"></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
</div>
    </div>
</div>