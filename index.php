    <?php
        $db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $db_user = "	j3suevtbx1kkob0a";
        $db_password = "ejonmlc7rm6ha11x";
       
        $db_name = "lalz76htoqmmiv2r";
      $connection = mysqli_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'j3suevtbx1kkob0a', 'ejonmlc7rm6ha11x');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

    $sql_query = "SELECT * FROM contactos";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
