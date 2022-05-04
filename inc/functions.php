<?php

function add_contact($first_name, $last_name, $mail, $phone, $subject = null, $message) {
    include("connect.php");

    $sql = "INSERT INTO Contact_form(first_name, last_name, mail, phone, subject, message) VALUE(?, ?, ?, ?, ?, ?)";

    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $first_name, PDO::PARAM_STR);
        $results->bindValue(2, $last_name, PDO::PARAM_STR);
        $results->bindValue(3, $mail, PDO::PARAM_STR);
        $results->bindValue(4, $phone, PDO::PARAM_STR);
        $results->bindValue(5, $subject, PDO::PARAM_STR);
        $results->bindValue(6, $message, PDO::PARAM_STR);
    } catch (Exception $e) {
        echo "Error!: " . $e->gerMessage() . "<br>";
        return false;
    }
    return true;
}