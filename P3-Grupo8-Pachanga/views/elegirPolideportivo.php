
<br>
<div class="input-group">

<span class="input-group-addon"><span class="glyphicon glyphicon-record"></span></span>
<select name="polideportivo" class="form-control buscar-partido-distrito"  onchange="mostrarMapa(this.value)" required>
  <option selected disabled hidden requiered>Polideportivo</option>
  <?php
    foreach ($polideportivos as $polideportivo) {
      echo "<option>";
      echo $polideportivo->getId();
      echo "</option>";
    }
   ?>
</select>
</div>
