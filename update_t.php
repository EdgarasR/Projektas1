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
    $id = $_GET['id'];

    if ($error) {
        $error = (isset($error[0]) && $error[0]) ? "error={$error[0]}" : '';
        header("Location: update_t_form.php?ad_id=$id&$error");
    } else {
        $id = $_GET['id'];
        updateTransport($_POST, $id);
        header("Location: Transport.php");
    }

    exit;
}

handleInputs();

?>