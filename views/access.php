<?php
$isUserOnHisOwnPage = false;
if (isset($_SESSION['user'])) {
    $access=0;
    $_SESSION['user'] = (new User())::byId($this->conn, $_SESSION['user']['userID']);
    if (
        isset($user->userID) && $user->userID != "" &&
        $_SESSION['user']['userID'] == $user->userID)
    {
        $access = 1;
        $isUserOnHisOwnPage = true;
    }
    if ($_SESSION['user']['roleID']==1) {
        $access = 2;
    }
}
else{
    $access = -1;
}