<?php require __DIR__ . '/partials/header.php' ?>

<form method="POST" action="login">
    <label>Email</label><br />
    <input type="email" name="email" id="email" /><br /><br />
    <label>Password</label><br />
    <input type="password" name="password" id="password" /><br /><br />

    <input type="submit" />
</form>

<?php require __DIR__ . '/partials/footer.php' ?>
