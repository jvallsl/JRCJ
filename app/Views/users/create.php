<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/users/create" method="post">
    <?= csrf_field() ?>

    <label for="username">Username</label>
    <input type="input" name="username" /><br />

    <label for="email">Email</label>
    <input type="email" name="email"></input><br />

    <label for="contrasena">Contraseña</label>
    <input type="password" name="contrasena">

    <input type="submit" name="submit" value="Create new User" />

</form>