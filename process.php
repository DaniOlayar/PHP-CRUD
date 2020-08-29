<?php

  session_start();

  $officeCode = 0;
  $city = '';
  $phone = '';
  $addressLine1 = '';
  $addressLine2 = '';
  $states = '';
  $country = '';
  $postalCode = '';
  $territory = '';

  $update = false;

  $mysqli = new mysqli('localhost','root','','data') or die(mysqli_error($mysqli));

  if (isset($_POST['save'])) {
    
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $addressLine1 = $_POST['addressLine1'];
    if (empty($_POST['addressLine2'])) {
      $addressLine2 = '-/-';
    } else {
      $addressLine2 = $_POST['addressLine2'];
    }
    $states = 'Activo';
    $country = $_POST['country'];
    $postalCode = $_POST['postalCode'];
    $territory = $_POST['territory'];

    $mysqli -> query ("INSERT INTO offices (city, phone, addressLine1, addressLine2, states, country, postalCode, territory) VALUES ('$city','$phone','$addressLine1','$addressLine2', '$states', '$country','$postalCode','$territory')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: Index.php");

  }

  if (isset($_GET['delete'])) {
    
    $officeCode = $_GET['delete'];

    $mysqli -> query ("DELETE FROM offices WHERE officeCode = $officeCode") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: Index.php");

  }

  if (isset($_GET['edit'])) {
    
    $officeCode = $_GET['edit'];
    $update = true;

    $result = $mysqli -> query ("SELECT * FROM offices WHERE officeCode = $officeCode") or die($mysqli->error);
    if ($result -> num_rows) {

      $row = $result -> fetch_assoc();
      $city = $row['city'];
      $phone = $row['phone'];
      $addressLine1 = $row['addressLine1'];
      $addressLine2 = $row['addressLine2'];
      $states = $row['states'];
      $country = $row['country'];
      $postalCode = $row['postalCode'];
      $territory = $row['territory'];

    }

  }

  if (isset($_POST['update'])) {
    
    $officeCode = $_POST['officeCode'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $addressLine1 = $_POST['addressLine1'];
    $addressLine2 = $_POST['addressLine2'];
    $states = $_POST['states'];
    $country = $_POST['country'];
    $postalCode = $_POST['postalCode'];
    $territory = $_POST['territory'];

    $mysqli -> query ("UPDATE offices SET city = '$city', phone = '$phone', addressLine1 = '$addressLine1', addressLine2 = '$addressLine2', states = '$states', country = '$country', postalCode = '$postalCode', territory = '$territory' WHERE officeCode = $officeCode") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header("location: Index.php");

  }

?>