<?php
require_once "connections.php";

function handleInputs()
{

    $error = [];

    if ($_POST) {
        foreach ($_POST as $name => $value) {
            if (!$value) {
                $error[] = "Value $name must be set";
            }
        }
    }

    if ($error) {
        $error = (isset($error[0]) && $error[0]) ? "error={$error[0]}" : '';
        header("Location: New_Transport.php?$error");
    } else {
        insertTransportRow($_POST);
        header("Location: Transport.php");
    }

    exit;
}

handleInputs();

?>