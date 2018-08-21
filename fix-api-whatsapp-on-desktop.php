<?php
// Fix Api Whatsapp on Desktops

$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

// check if is a mobile
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
  header('Location: https://api.whatsapp.com/send?phone=5535992421113');
  //OR
  echo "<script>window.location='https://api.whatsapp.com/send?phone=553599242111'</script>";
}

// all others
else {
  header('Location: https://web.whatsapp.com/send?phone=553599242111');
  //OR
  echo "<script>window.location='https://web.whatsapp.com/send?phone=553599242111'</script>";
}
?>
