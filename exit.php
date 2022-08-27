<?php
setcookie('user',$user['Name'],time()-60,"/");
header('Location: /Log.php');
