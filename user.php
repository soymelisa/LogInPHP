<?php
require "database.php";

Class User{

  public static function create($CORREO, $CONTRASENA) {
    $sql = 'INSERT INTO TABLAWEB (CORREO, CONTRASENA) VALUES (:CORREO,:CONTRASENA)';
    try {
      $db = Database::connect();
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':CORREO', $CORREO);
      $stmt->bindParam(':CONTRASENA', $CONTRASENA);
      $stmt->execute();
      Database::disconnect();
      echo "<script>alert('EL REGISTRO FUE EXITOSO'); location.href='index.php'</script>";
      return true;
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      return false;
    }
  }
}

?>