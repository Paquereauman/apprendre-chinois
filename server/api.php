<?php
// Sauvegarde de progression : 1 fichier JSON par code secret + copies de sécurité horodatées.
header("Content-Type: application/json; charset=utf-8");
header("Cache-Control: no-store");
$k = $_GET["k"] ?? "";
if (!preg_match("/^[a-z0-9]{8,40}$/", $k)) { http_response_code(400); echo "{\"error\":\"bad key\"}"; exit; }
$h = hash("sha256", $k);
$f = "/var/lib/chinois/$h.json";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $b = file_get_contents("php://input", false, null, 0, 300001);
  if (strlen($b) > 300000 || !is_array(json_decode($b, true))) { http_response_code(400); echo "{\"error\":\"bad body\"}"; exit; }
  // copie de sécurité de la version précédente (au plus 1 toutes les 10 min, 40 gardées)
  if (is_file($f)) {
    $dir = "/var/lib/chinois/bak"; $last = glob("$dir/{$h}_*.json"); sort($last);
    if (!$last || filemtime(end($last)) < time() - 600) {
      copy($f, "$dir/{$h}_" . date("Ymd_His") . ".json");
      $last = glob("$dir/{$h}_*.json"); sort($last);
      while (count($last) > 40) { unlink(array_shift($last)); }
    }
  }
  file_put_contents($f, $b, LOCK_EX);
  echo "{\"ok\":true}";
} else {
  echo is_file($f) ? file_get_contents($f) : "null";
}
