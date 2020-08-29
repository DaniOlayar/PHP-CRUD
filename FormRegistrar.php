<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Registrar</title>

  </head>
  <body>

  <?php require_once 'process.php'; ?>

  <br>
  
  <div class="container">
    <h3>Registrar</h3>
  </div>

  <div class="container">
    <form class="rog g-3" method="POST" action="process.php">
      <input type="hidden" name="officeCode" value="<?php echo $officeCode; ?>">
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">Ciudad</label>
          <input type="text" class="form-control" name="city" value="<?php echo $city; ?>" required>
        </div>
        <div class="col">
          <label class="form-label">Teléfono</label>
          <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" required>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">Dirección 1</label>
          <input type="text" class="form-control" name="addressLine1" value="<?php echo $addressLine1; ?>" required>
        </div>
        <div class="col">
          <label class="form-label">Dirección 2</label>
          <input type="text" class="form-control" name="addressLine2" value="<?php echo $addressLine2; ?>">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">País</label>
          <input type="text" class="form-control" name="country" value="<?php echo $country; ?>" required>
        </div>
        <div class="col">
          <label class="form-label">Código Postal</label>
          <input type="text" class="form-control" name="postalCode" value="<?php echo $postalCode; ?>" required>
        </div>
        <div class="col">
          <label class="form-label">Territorio</label>
          <input type="text" class="form-control" name="territory" value="<?php echo $territory; ?>" required>
        </div>
      </div>
        <button type="submit" class="btn btn-info" name="save" style="width: 10%;">Submit</button>
        <a href="Index.php" type="button" class="btn btn-danger" style="width: 10%;">Cancelar</a>
    </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  </body>
</html>