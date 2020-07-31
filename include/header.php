<!doctype html>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Login - CONSILIUM</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css" rel="stylesheet"/>
    <style>
      body {
      	display: none;
      }
    </style>
  <?php if (isset($customcss)) echo $customcss; ?>
  <?php if (isset($_SESSION['notification'])) echo "<link href=\"./dist/css/toastr.min.css\" rel=\"stylesheet\"/>"; ?>
</head>

<?php
if (isset($_SESSION['notification'])) {
  ?>
  hello
  <script>
    requirejs(["toastr"], function(toastr) {
      $(function() {
        // Display a error toast, with a title
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
        }
        toastr["<?php echo $_SESSION['notificationtyp']; ?>"]("<?php echo $_SESSION['notification']; ?>", "<?php echo $_SESSION['notificationtitle']; ?>")
      });
    });
  </script>
<?php
  unset($_SESSION['notificationtyp']);
  unset($_SESSION['notification']);
  unset($_SESSION['notificationtitle']);
}
?>