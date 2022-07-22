<?php

if( !session_id() ) session_start();

require "../includes/config.inc.php";
require "../includes/func.inc.php";
require "../includes/countAngkaKreditPendidikan.php";
require "../includes/countAngkaKreditPenunjang.php";
require "../includes/getAllAngkaKredit.php";
require "../includes/getAllBidang.php";
require "../includes/getPenghitung.php";

require_once '../includes/init.php';

$app = new App;