<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Registros</title>

  </head>
  <body>

    <?php require_once 'process.php'; ?>

    <?php if (isset($_SESSION['message'])): ?>

      <div class="alert alert-<?=$_SESSION['msg_type']?>" style="text-align: right;">
        <?php

          echo $_SESSION['message'];
          unset($_SESSION['message']);

        ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

    <?php endif; ?>

    <?php 
    
      $mysqli = new mysqli('localhost','root','','data') or die(mysqli_error($mysqli));
      $result = $mysqli -> query("SELECT * FROM offices") or die($mysqli->error);

    ?>

    <br>

    <div class="container">
    <h3>Registros</h3>
      <table class="table table-hover table-primary table-striped">
        <thead class="table">
          <tr>
            <th class="text-center" style="width: 10%;">Ciudad</th>
            <th class="text-center" style="width: 10%;">Teléfono</th>
            <th class="text-center" style="width: 15%;">Dirección 1</th>
            <th class="text-center" style="width: 15%;">Dirección 2</th>
            <th class="text-center" style="width: 10%;">Estado</th>
            <th class="text-center" style="width: 10%;">País</th>
            <th class="text-center" style="width: 10%;">Código Postal</th>
            <th class="text-center" style="width: 10%;">Territorio</th>
            <th class="text-center" colspan="2" style="width: 10%;">Acción</th>
          </tr>
        </thead>
        <?php while ($row = $result -> fetch_assoc()): ?>
          <tr>
            <td class="text-center" style="vertical-align: middle;"><?php echo $row['city']; ?></td>
            <td class="text-center" style="vertical-align: middle;"><?php echo $row['phone']; ?></td>
            <td class="text-center" style="vertical-align: middle;"><?php echo $row['addressLine1']; ?></td>
            <td class="text-center" style="vertical-align: middle;"><?php echo $row['addressLine2']; ?></td>
            <td class="text-center" style="vertical-align: middle;"><?php echo $row['states']; ?></td>
            <td class="text-center" style="vertical-align: middle;"><?php echo $row['country']; ?></td>
            <td class="text-center" style="vertical-align: middle;"><?php echo $row['postalCode']; ?></td>
            <td class="text-center" style="vertical-align: middle;"><?php echo $row['territory']; ?></td>
            <td class="text-center">
              <a href="FormEditar.php?edit=<?php echo $row['officeCode']; ?>" type="button" class="btn btn-primary" style="width: 40%; vertical-align: middle;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
              </a>
              <a href="FormEditar.php?delete=<?php echo $row['officeCode']; ?>" type="button" class="btn btn-danger" style="width: 40%; vertical-align: middle;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                </svg>
              </a>
            </td>
          </tr>
        <?php endwhile; ?>
      </table>
    </div>

    <br>

    <div class="mx-auto" style="width: 200px;">
      <a href="FormRegistrar.php" type="button" class="btn btn-primary text-center" style=" display: flex; justify-content: center;">Registrar</a>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  </body>
</html>