<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/functions.php';

$sitelevel = "5";
if (!login_check($sitelevel)) {
  header("Location: /login.php");
  die();
}

//Logout in Log
logging("Logout von User ".$_SESSION['name']."");

//User ID des eingeloggten Users
$user_id = $_SESSION['user_id'];

// Löschen aller Session-Variablen.
$_SESSION = array();

// Falls die Session gelöscht werden soll, löschen Sie auch das
// Session-Cookie.
// Achtung: Damit wird die Session gelöscht, nicht nur die Session-Daten!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"],
        $params["domain"], $params["secure"], $params["httponly"]
    );
}

// Zum Schluß, löschen der Session.
session_destroy();

//Session ID aus der Datenbank löschen
    $prep_stmt = "UPDATE `users` SET `session_id` = NULL WHERE `user_id` =  ? LIMIT 1 ";
    $stmt = $mysqli->prepare($prep_stmt);
    $stmt->bind_param('s', $user_id);
    $stmt->execute();
    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }

    if ($stmt->execute()) {
    header("Location: /login.php");
    die();
    }

