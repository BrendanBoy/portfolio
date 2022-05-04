<?php

try {
    $db = new PDO("mysql:host=localhost;port=3306;dbname=brendanb_portfolio", "brendanb_bnadnerb", "=[A8Oqc@jriX");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Unable to connect<br>\n";
    echo $e->getMessage();
    exit;
}