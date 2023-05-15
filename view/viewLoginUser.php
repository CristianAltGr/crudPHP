<div class="LoginModal">
    <section class="cardLogin">
        <form action="login.php" method="post" onsubmit="window.location.href = './controllers/login';">
            NOM: <input type="text" name="name" id="name">
            PASSWORD: <input type="password" name="password" id="password">
            <input type="hidden" name="action" value="log">
            <input type="submit" value="Enviar">
        </form>
    </section>
</div>