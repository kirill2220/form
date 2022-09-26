<?php
setcookie('user',$user['name'],time()-60,"/");
header('Location: /Log.php');
