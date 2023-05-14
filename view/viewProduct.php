



<div class="container">
<div class="py-5 text-center">
    <h1>Vista de dades d'un producte</h1>
    </div>
<div class="alert alert-success text-center" role="alert">
</div>
<div class="text-left">
    <form>
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label font-weight-bold">Id</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="id" value="<?php echo $producte[0]['id']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="nomProd" value="<?php echo $producte[0]['nom']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="Data_naixement" class="col-sm-2 col-form-label font-weight-bold">Descripció</label>
            <div class="col-sm-10">
                <textarea rows="10" readonly class="form-control-plaintext" id="descripcio"><?php echo $producte[0]['descripcio']; ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="ensenyament" class="col-sm-2 col-form-label font-weight-bold">Foto</label>
            <div class="col-sm-10">
                <!--<input type="text" readonly class="form-control-plaintext" id="ensenyament" value="<?php //echo $users[0]['foto']; ?>">-->
                <td class='align-middle'><img src="<?php echo $producte[0]['foto']; ?>" id='imgProducte'></td>
            </div>
        </div>
        <div class="form-group row">
        <label for="Data_naixement" class="col-sm-2 col-form-label font-weight-bold">Stock</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="stock" value="<?php if($producte[0]['stock'] == 1) {
                        echo 'Si';}else {
                        echo 'No';
                        } ?>">
            </div>
        </div>
        <div class="form-group row">
        <label for="Data_naixement" class="col-sm-2 col-form-label font-weight-bold">Menu</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="menu" value="<?php if($producte[0]['menu'] == 1) {
                        echo 'Si';}else {
                        echo 'No';
                        } ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="Data_naixement" class="col-sm-2 col-form-label font-weight-bold">Mida</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="mides" value="<?php echo $producte[0]['mides']; ?>">
            </div>
        </div>
    </form>				
</div>
</div>

