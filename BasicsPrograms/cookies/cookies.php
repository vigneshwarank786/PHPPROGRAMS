<?php
$cookiename="user";
$cookievalue="mydata";
$expire=time()+(60 * 20);

setcookie($cookiename,$cookievalue,$expire);


echo ($_COOKIE[$cookiename]);

?>