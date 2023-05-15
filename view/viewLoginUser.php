<div class="LoginModal">
    <section class="cardLogin">
        <form action="/index.php" method="post" onsubmit="window.location.href = '/index.php';">
            NOM: <input type="text" name="name" id="nameUser">
            PASSWORD: <input type="password" name="passwordUser" id="password">
            <input type="hidden" name="action" value="logUser">
            <input type="submit" value="Enviar">
        </form>
    </section>
</div>