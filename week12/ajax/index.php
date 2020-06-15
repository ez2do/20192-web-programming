<?php
print('start');
print($_GET['inputText']);
if(isset($_GET['inputText'])){
  print("OK");
  print($_GET['inputText']);
  echo strtoupper($_GET['inputText']);
}
?>