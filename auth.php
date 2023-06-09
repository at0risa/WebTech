<?php
const ADMIN_LOGIN = 'admin@gmail.com';
const ADMIN_PASSWORD = 'admin';

* @param $login
* @param $password
* @return bool

function login($login, $password) {
    if ($login === ADMIN_LOGIN && ADMIN_PASSWORD === $password) {
        $_SESSION['authorized'] = true;
    return true;
}
return false;
} 
* @return bool
function isAuthorized() {
    return isset($_SESSION['authorized']) && $_SESSION['authorized'] === true;
}

function logout() {
    unset($_SESSION['authorized']);
/** */
}

?>