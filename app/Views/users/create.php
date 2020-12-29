<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>
<section>
  <br><br>
  <form id="formulario" action="create" method="POST">
     
    <table id="tabla">
      <tr class="usuario">
        <td>
          <label for="usuario">Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" id="usuario" name="usuario">
        </td>
        <td>
          <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="email" id="email" name="email">
        </td>
      </tr>
      <tr class="usuario">
        <td>
          <label for="pass">Contraseña:</label>
          <input type="password" id="pass" name="pass">
        </td>
      </tr>
    </table>
    <br><br>
    <p><input type="submit" value="Crear" name="submit" id="crear"></p>
    <p><input type="reset" value="Cancelar" id="cancelar"></p>
  </form>
</section>
