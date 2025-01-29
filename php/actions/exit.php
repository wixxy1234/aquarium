<?php

setcookie('id', $user['idUser'], time() - 3600, '/');
setcookie('login', $user['loginUser'], time() - 3600, '/');
setcookie('role', $user['roleUser'], time() - 3600, '/');

header("Location: /");
?>