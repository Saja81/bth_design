<?php
if (session_status() == PHP_SESSION_NONE) {
    $name = preg_replace("/[^a-z\d]/i", "", __DIR__);
    session_name($name);
    session_start();
}

// Se föreläsning kmom04, 10 min in för denna del av koden.

if (isset($_GET["action"])) {
  if ($_GET["action"] == "theme") {
      $previousValue = isset($_SESSION["theme"]) ? $_SESSION["theme"] : null;

      if ($previousValue == "dark") {
          unset($_SESSION["theme"]);
      } else {
          $_SESSION["theme"] = "dark";
      }

      // $url = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"];
      // $url = preg_replace("/index.php\//", "", $url);
      // header("Location: $url");

      // utkommenterad kod ledde till fel adress: http://127.0.0.1:8000/://127.0.0.1:8000/index.php. Jag har därför ändrat till nedanstående med hjälp av AI.

      $scheme = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off") ? "https" : "http";
      $host = $_SERVER["HTTP_HOST"];
      $path = $_SERVER["PHP_SELF"];
      $url = $scheme . "://" . $host . $path;

      // Justera om det finns en oönskad "index.php/" i URL:en
      $url = preg_replace("/index.php\/?/", "", $url);
      header("Location: $url");
  }
}

// utkommenterad kod ledde till fel adress: http://127.0.0.1:8000/://127.0.0.1:8000/index.php. Jag har därför ändrat till nedanstående med hjälp av AI.

// if ($_GET["action"] == "session_destroy") {
//   session_destroy();
//   $url = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"];
//   $url = preg_replace("/index.php\//", "", $url);
//   header("Location: $url");
// }

if ($_GET["action"] == "session_destroy") {
  session_destroy();

  $scheme = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off") ? "https" : "http";
  $host = $_SERVER["HTTP_HOST"];
  $path = $_SERVER["PHP_SELF"];
  $url = $scheme . "://" . $host . $path;

  // Justera om det finns en oönskad "index.php/" i URL:en
  $url = preg_replace("/index.php\/?/", "", $url);
  header("Location: $url");
}
