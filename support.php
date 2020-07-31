<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/functions.php';

$sitelevel = "5";
if (!login_check($sitelevel)) {
  header("Location: /login.php");
  die();
}

//Wenn abgesendet dann... 
if ($_SERVER['REQUEST_METHOD'] == "POST")  {
    $typ = filter_input(INPUT_POST, 'typ', FILTER_SANITIZE_STRING);
    $betreff = filter_input(INPUT_POST, 'betreff', FILTER_SANITIZE_STRING);
    $inhalt = filter_input(INPUT_POST, 'inhalt', FILTER_SANITIZE_STRING);

    $empfaenger = $projektemail;
    $mailbetreff = $typ." - ".$betreff;
    $from = "From: Backend - ".$projektname." <".$projektemail.">\r\n";
    $from .= "Reply-To: ".$projektemail."\r\n";
    $from .= "Content-Type: text/html\r\n";
    $text = "<h2 style='text-align: left; padding-left: 90px;'><strong>Neue Support-Anfrage von .$projektname.</strong></h2>
    <hr />
    <p><strong>Absender:</strong></p>
    <p>".$_SESSION['name']."</p>
    <p><strong>Anfragetyp:</strong></p>
    <p>".$typ."</p>
    <p><strong>Betreff:</strong></p>
    <p>".$betreff."</p>
    <p><strong>Inhalt:</strong></p>
    <p>".$inhalt."</p>";
    mail($empfaenger, $mailbetreff, $text, $from);
    notification("success","Anfrage abgesendet!","Wir versuchen dies schnellstmöglich anzupassen / Sie zu kontaktieren!");
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/menu.php';

?>

        <div class="content">
         <div class="container-xl">
          <!-- Page title -->
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-auto">
                <h2 class="page-title">
                  Support
                </h2>
              </div>
            </div>
          </div>
    <form action="support.php" method="post">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Support</h3>
                    </div>
                    <div class="card-body">
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Thema</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="typ" id="typ" value="AnpassungSuchender" class="selectgroup-input">
                                            <span class="selectgroup-button">Anpassung Suchender</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="typ" id="typ" value="AnpassungHelfer" class="selectgroup-input">
                                            <span class="selectgroup-button">Anpassung Helfer</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="typ" id="typ" value="TechnischesProblem" class="selectgroup-input">
                                            <span class="selectgroup-button">Technisches Problem</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Betreff</label>
                                    <input type="text" class="form-control" id="betreff" name="betreff" placeholder="Betreff">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">Inhalt</label>
                                    <textarea rows="5" class="form-control" id="inhalt" name="inhalt" placeholder="Wie können wir weiter helfen?" value="inhalt"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="support.php" class="btn btn-danger btn-block">Löschen</a>
                            </div>
                            <div class="col-lg-6">
                                
                                    <input type="submit" class="btn btn-success btn-block" value="Absenden" />
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>



</div>
        </div>

        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';?>