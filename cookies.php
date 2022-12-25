<?php

include_once'config.php';

?>

<?php
$cookie_name = "User";
$cookie_value = "Parking";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>

<html>
<body>
<br>
<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<br>
<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else 
{
  echo "Cookies are disabled.";
}
?>

</body>
</html>