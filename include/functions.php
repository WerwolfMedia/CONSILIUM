<?php
#Timestamp Variable
date_default_timezone_set('Europe/Berlin');
$timestamp = date('Y-m-d H:i:s');

#SecSessionStart
function sec_session_start() {
    $session_name = 'WurzachBringtsSession';   // vergib einen Sessionnamen
    $secure = true;
    // Damit wird verhindert, dass JavaScript auf die session id zugreifen kann.
    $httponly = true;
    // Holt Cookie-Parameter.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"], 
        $cookieParams["domain"], 
        $secure,
        $httponly);
    // Setzt den Session-Name zu oben angegebenem.
    session_name($session_name);
    session_start();            // Startet die PHP-Sitzung 
    session_regenerate_id();    // Erneuert die Session, löscht die alte. 
}

sec_session_start();

#Datenbank
#Datenbank Parameter nachladen
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/datenbank.php';
#Verbindungsaufbau
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
#SQL Charset auf UFT8 setzen
if (!$mysqli->set_charset("utf8")) {
	printf("Error loading character set utf8: %s\n", $mysqli->error);
}

#SMSVersand
function sendSMS($projektname, $smswebservicestoken, $number, $message)
{
	$messageurl = urlencode("--" . $projektname . "--**" . $message);
	$message = str_replace("%2A", "%0A", $messageurl);
	$url = "http://tbxaknxgok2kxvhz.myfritz.net:39887/playsms/index.php?app=ws&u=wurzachbringts&h=" . $smswebservicestoken . "&op=pv&to=" . $number . "&msg=" . $message;
	$ch = curl_init();
	$optArray = array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true
	);
	curl_setopt_array($ch, $optArray);
	$result = curl_exec($ch);
	curl_close($ch);
}

##LoginCheck
function login_check($sitelevel) {
    if (isset($_SESSION['user_id'], $_SESSION['login_string'])) {
		global $mysqli;
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
        if ($stmt = $mysqli->prepare("SELECT `grouprights`, `session_id` FROM `users` WHERE `user_id` = ? LIMIT 1")) {
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($grouprights, $session_id);
				$stmt->fetch();
				$login_check = hash('sha512', $session_id . $user_browser);
                if ($login_check == $login_string) {
					if($sitelevel >= $grouprights ){
						return true;
					}else{
						return false;
					}
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}
##Für Logging in der DB Funktion zum IP Suchen
function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
##Schreibt Log in die DB
function logging($entry){
    global $mysqli;
    //Analyse IP
    $ip = get_client_ip_env();
    //Session User wenn vorhanden
    $user_id = $_SESSION['user_id'];
    //DB Write
    $prep_stmt = "INSERT INTO `log`(`user_id`, `entry`, `ip`) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($prep_stmt);
    $stmt->bind_param('sss',$user_id,$entry,$ip);
    if (!$stmt->execute()) {
        return false;
    }else{
        $stmt->close();
        return true;
    }
}

function notification($typ, $title, $message){
    $_SESSION['notificationtyp'] = $typ;
    $_SESSION['notificationtitle'] = $title;
    $_SESSION['notification'] = $message;
}

