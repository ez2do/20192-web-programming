<html>
  <head><title>Front door</title></head>
  <?php
  $colors = array(
    'white' => '#000000',
    'black' => '#ffffff',
    'red' => '#ff0000',
    'blue' => '#0000ff'
  );
  
  session_start();
  $_SESSION['bg'] = 'bg';
  $_SESSION['fg'] = 'fg';
  
  $bg_name = $_POST['background'];
  $fg_name = $_POST['foreground'];
  
  $bg = $colors[$bg_name];
  $fg = $colors[$fg_name];
  print "<p>background $bg</p>";
  ?>
  <body bgcolor="<?= $bg ?>" text="<?= $fg ?>">
    <h1>Welcome to the store</h1>
    <p>Would you like to <a href="prefs.html">Change your preferences</a></p>
  </body>
</html>