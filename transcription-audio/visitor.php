<?php
	function getIp() {
  $ip = $_SERVER['REMOTE_ADDR'];

  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }

  return $ip;
}

$visitor = getIp();
global $wpdb;
$audio = $wpdb->prefix . "transcriAudio";

    $cont = $wpdb->get_var("SELECT COUNT(*) FROM $audio where order_id = '{$visitor}'");

    if ($cont > 0) {
        $client = $wpdb->get_results("SELECT * FROM $audio where order_id='{$visitor}'");
        $i      = 0;
        foreach ($client as $audio) {
            $data[$i] = array('comment' => $audio->comment, 'download' => $audio->download, 'duration' => $audio->duration, 'duration_for_humans' => $audio->duration_for_humans, 'from' => 0, 'from_human' => '00:00:00', 'id' => $audio->item_id, 'original_duration' => $audio->original_duration, 'original_filename' => $audio->original_filename, 'till' => $audio->duration, 'till_human' => $audio->till_human, 'negado' => $audio->negado);
            $i++;
        }

    } else {
        $data = 0;
    }
    exit(json_encode($data));
?>