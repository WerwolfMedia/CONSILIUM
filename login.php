<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/functions.php';
$sitelevel = "99";
if (login_check($sitelevel)) {
  header("Location: /index.php");
  die();
} 
function login($username, $password)
{
  global $mysqli;
  global $timestamp;
  $stmt = $mysqli->prepare("SELECT `vorname`, `nachname`, `user_id`, `grouprights`, `hash` FROM `users` WHERE `username` = ? LIMIT 1");
  $stmt->bind_param('s', $username);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($vorname, $nachname, $user_id, $grouprights, $hash);
  $stmt->fetch();
  if ($stmt->num_rows == 1) {
  if (password_verify($password, $hash)) {
    // Passwort ist korrekt!
    //RandomSessionID erzeuegen und in DB Schreiben
    $bytes = random_bytes(25);
    $session_id= bin2hex($bytes);
    $prep_stmt = "UPDATE `users` SET `session_id`= ?,`lastlogin`= ? WHERE `user_id` = ?";
    $stmt = $mysqli->prepare($prep_stmt);
    $stmt->bind_param('ssi',$session_id, $timestamp,$user_id);
    if (!$stmt->execute()) {
      //DB Write fehlerhaft
    }else{
      //DB Write erfolgreich
        $stmt->close();
    }
    //Speichern der SQL Abfrage in Session
    $_SESSION['vorname'] = $vorname;
    $_SESSION['nachname'] = $nachname;
    $_SESSION['name'] = $vorname." ".$nachname;
    $_SESSION['grouprights'] = $grouprights;
    $user_id = preg_replace("/[^0-9]+/", "", $user_id);
    $_SESSION['user_id'] = $user_id;
    // Hole den user-agent string des Benutzers.
    $user_browser = $_SERVER['HTTP_USER_AGENT'];
    //Login String anhand Session ID aus DB und User Agent Kennung Hashen und in Session speichern
    $_SESSION['login_string'] = hash('sha512', $session_id . $user_browser);
    //Ins LOG schreiben
    logging("Login Erfolg - '".$username."' erfolgreich ");
    //Function als Login erfolgreich zurück geben
    return true;
  }else{
    //Kennwort falsch
    notification("error","Login fehlgeschlagen!","Dein Nutzername oder dein Passwort ist ungültig. Probiere es nochmals oder wende dich an den Support!");
    logging("Login Fehler - '".$username."' falsches Passwort");
    return false;
  }
  }else{
  //Kein User 
  notification("error","Login fehlgeschlagen!","Dein Nutzername oder dein Passwort ist ungültig. Probiere es nochmals oder wende dich an den Support!");
  return false;
  }
};

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

  if (login($username, $password) == true) {
    // Login erfolgreich 
    header("Location: /index.php");
    echo "erolfg";
  } else {
    // Login fehlgeschlagen 
    echo "failed";
  }
}
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
?>
  
  
  <body class="antialiased theme-dark border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center">
      <div class="container-tight py-6">
        <div class="text-center mb-4">
            <img src="./static/logo-white.svg" alt="<?php echo $plattform_name;?>">
        </div>
        <form class="card card-md" method="POST" target="_top" action="login.php">
           <div class="card-body">
            <h2 class="mb-5 text-center"><?php echo $plattform_name;?></h2>
            <div class="mb-3">
              <label class="form-label">Benutzername</label>
              <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Benutzername">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Passwort
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" name="password" id="password" placeholder="Passwort">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="12" cy="12" r="2" /><path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" /><path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" /></svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="form-footer">
                  <button type="submit" name="process" class="btn btn-primary btn-block">Anmelden</button>
              </div>
              <div class="text-center text-muted">
              Passwort vergessen? Dann hilft <?php echo  $agentur_name;?>!
              </div>
          </div>
        </form>
        <div class="text-center text-muted">
        <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="<?php echo  $kunde_impressum;?>" class="link-secondary">Datenschutz</a></li>
                  <li class="list-inline-item"><a href="<?php echo  $kunde_datenschutz;?>" class="link-secondary">Impressum</a></li>
                </ul>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="./dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./dist/libs/jquery/dist/jquery.slim.min.js"></script>
    <script src="./dist/js/toastr.min.js">  </script>
  
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <?php
if (isset($_SESSION['notification'])) {
  ?>
  <?php echo $_SESSION['notificationtyp']; ?>"]("<?php echo $_SESSION['notification']; ?>", "<?php echo $_SESSION['notificationtitle']; ?>
  <script>
        toastr["<?php echo $_SESSION['notificationtyp']; ?>"]("<?php echo $_SESSION['notification']; ?>", "<?php echo $_SESSION['notificationtitle']; ?>");
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "10000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        };
  </script>
<?php
  unset($_SESSION['notificationtyp']);
  unset($_SESSION['notification']);
  unset($_SESSION['notificationtitle']);
}
?>
    <script>
      document.body.style.display = "block"
    </script>
  </body>
</html>