<?php
if (isset($_POST["data"])) {
  $data = filter_input(INPUT_POST, "data", FILTER_SANITIZE_STRING);
  $filename = "location.txt";
  $file = fopen($filename, "w");
  fwrite($file, $data);
  fclose($file);
  echo "success";
} else {
  echo "error";
}
?>
