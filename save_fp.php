<?php
    include("connexion_bdd.php"); 
?>

<?php
  $array = array(
    "browser" => $_POST['browser'], 
    "os" => $_POST['os'],
    "userAgent" => $_POST['userAgent'],
    "plugins" => $_POST['plugins'],
    "trueBrowser" => $_POST['trueBrowser'],
    "touch" => $_POST['touch'],
    "silverLight" => $_POST['silverLight'],
    "java" => $_POST['java'],
    "fonts" => $_POST['fonts'],
    "fontsmoothing" => $_POST['fontsmoothing'],
    "cookie" => $_POST['cookie'],
    "canvas" => $_POST['canvas'],
    "language" => $_POST['language'],
    // "" => $_POST['connection'],
    "flash" => $_POST['flash']
  );

  $json = json_encode($array, JSON_PRETTY_PRINT);
  //echo $json
  $date = date("Y/m/d h:i:sa");
  $id= md5($json);
  // prepare sql and bind parameters
  $stmt = $dbh->prepare("INSERT INTO browser_finger_print (FPKey, Fingerprint, Horodate)
  VALUES (:fp_key, :finger_print, :horodate)");
  $stmt->bindParam(':fp_key', $fp_key);
  $stmt->bindParam(':finger_print', $finger_print);
  $stmt->bindParam(':horodate', $horodate);
  // set parameters and execute
  $fp_key = "$id";
  $finger_print = "$json";
  $horodate = "$date";
  $stmt->execute();
  echo "New records created successfully";

?>