<?php
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $audio               = $wpdb->prefix . "transcriAudio";
    $order_transcription = $wpdb->prefix . "transcriOrder";

    $created = dbDelta(
        "CREATE TABLE $audio (
      item_id int(11) NOT NULL,
      original_filename varchar(900) COLLATE utf8_spanish2_ci NOT NULL,
      original_duration varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
      comment text COLLATE utf8_spanish2_ci,
      download varchar(900) COLLATE utf8_spanish2_ci NOT NULL,
      duration_for_humans varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
      till_human varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
      link varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
      duration double DEFAULT NULL,
      order_id varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
      negado int(2) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

    CREATE TABLE $order_transcription (
    `order_id` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
    `text_format` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `timestamping` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `subtitle` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `speaker` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `tat` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `language` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `low_quality` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `open_captions` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `external_minutes` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    `total_min` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
    ALTER TABLE $audio
      ADD PRIMARY KEY (item_id);
      ALTER TABLE $order_transcription
      ADD PRIMARY KEY (order_id);
    COMMIT;");

 ?>