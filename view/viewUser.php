
<div class="container">
<div class="py-5 text-center">
    <h1>Vista de dades d'users</h1>
    </div>
<div class="alert alert-success text-center" role="alert">
</div>
<div class="text-left">
    <form>
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label font-weight-bold">Id</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="id" value="<?php echo $users[0]['id']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="Nom" value="<?php echo $users[0]['nom']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="Data_naixement" class="col-sm-2 col-form-label font-weight-bold">Rol</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="Data_naixement" value="<?php echo $users[0]['rol']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="ensenyament" class="col-sm-2 col-form-label font-weight-bold">Usuari</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="ensenyament" value="<?php echo $users[0]['usuari']; ?>">
            </div>
        </div>
    </form>				
</div>
</div>
