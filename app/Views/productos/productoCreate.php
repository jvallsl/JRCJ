<h1>ALTA DE PRODUCTOS</h1>
</header>
<!-- CONTENT -->
<section>
  <br><br>
  <form id="formulario" action="AltaProducto" method="POST">
    <table id="tabla">
      <tr class="producto">
        <td>
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombretabla" name="nombre">
        </td>
        <td>
          <label for="descripcion">Descripción:</label>
          <textarea name="descripcion"></textarea>
        </td>
      <tr class="producto">
        <td>
          <label for="imagen">Imagen:</label>
          <input type="text" id="imagen" name="imagen">
        </td>
      </tr>
      </tr>
    </table>
    <br><br>
    <input type=hidden name="seccionId" value= 1>
    <p><input type="submit" value="Crear" id="crear"></p>
    <p><input type="reset" value="Cancelar" id="cancelar"></p>
  </form>
</section>
