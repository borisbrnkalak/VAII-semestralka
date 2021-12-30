<?php
session_cache_limiter('private_no_expire');
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
setlocale(LC_ALL, "sk-SK");
date_default_timezone_set('Europe/Bratislava');
error_reporting(E_ERROR | E_PARSE);
