<?php require __DIR__ . '/partials/header.php' ?>

<form method="POST" action="register">
    <label>Ime</label><br />
    <input type="text" name="ime" id="ime" /><br /><br />
    <label>Email</label><br />
    <input type="email" name="email" id="email" /><br /><br />
    <label>Password</label><br />
    <input type="password" name="password" id="password" /><br /><br />
    <label>Cofnirm your password</label><br />
    <input type="password" name="conf_pass" id="conf_pass" /><br /><br />
    <input type="submit" />
</form>

<?php require __DIR__ . '/partials/footer.php' ?>
