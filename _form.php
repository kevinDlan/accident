<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Ajouter un Accident
        </div> 
        <div class="col-md-8 ">
            <form method="POST" action="">
            <div class="form-group row mt-4">
                <label for="nbrevictime" class=" label col-sm-4 col-form-label col-form-label-sm">Nombre de victime</label>
                <div class="col-sm-8">
                    <input name="nb_victime" id="nb_victime" type="number" class="form-control form-control-sm"
                        id="nbrevictime" placeholder="Veuillez entrer le nombre de victime" require>
                </div>
            </div>
            <div class="form-group row">
                <label for="lieu" class="label col-sm-4 col-form-label col-form-label-sm">Lieu</label>
                <div class="col-sm-8">
                    <input name="lieu" id="lieu" type="text" class="form-control form-control-sm"
                        placeholder="Veuillez entrer le lieu de l'accident" require>
                </div>
            </div>
            <div class="form-group row">
                <label for="date" class="label col-sm-4 col-form-label col-form-label-sm">Date</label>
                <div class="col-sm-8">
                    <input name="date" id="date" type="date" class="form-control form-control-sm" id="date"
                        placeholder="Veuillez choisir une date" require>
                </div>
            </div>
            <div class="form-group row">
                <label for="mise_en_cause" class=" label col-sm-4 col-form-label col-form-label-sm">Mise en Cause</label>
                <div class="col-sm-8">
                    <input name="mise_en_cause" id="mise_en_cause" type="text" class="form-control form-control-sm"
                        id="mise_en_cause" placeholder="Veuillez entrer la mise en cause" require>
                </div>
            </div>
            <button type="submit" class="btn btn-danger col-lg-4 offset-4 btn">Enregistrer</button>
        </form>
        </div>
    </div>
</div>
</div>