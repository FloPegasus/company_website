<?php

if(isSet($_GET['lang']))
    $lang = $_GET['lang'];
else $lang='fr';

include $lang.'.php';


