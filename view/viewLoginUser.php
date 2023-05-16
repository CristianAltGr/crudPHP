<div class="container mb-5">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-6 mb-5">
            <div class="card mb-5">
                <div class="card-body m-4">
                    <form action="index.php" method="post" onsubmit="window.location.href = 'index.php';">
                        <div class="form-group">
                            <label for="nameUser">NOM:</label>
                            <input type="text" class="form-control" name="nameUser" id="nameUser" required>
                        </div>
                        <div class="form-group">
                            <label for="password">PASSWORD:</label>
                            <input type="password" class="form-control" name="passwordUser" id="password" required>
                        </div>
                        <input type="hidden" name="action" value="logUser">
                        <button type="submit" class="btn btn-primary mt-4 col-lg-12">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>