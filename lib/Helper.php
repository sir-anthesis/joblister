<?php

function redirect($page = false, $message = null, $message_type = null)
{
    if (is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    if ($message != null) {
        $_SESSION['message'] = $message;
    }

    if ($message_type != null) {
        $_SESSION['message_type'] = $message_type;
    }

    header('Location:' . $location);
    exit;
}

function displayMessage()
{
    if (!empty($_SESSION['message'])) {
        // assign message var
        $message = $_SESSION['message'];

        if (!empty($_SESSION['message_type'])) {
            // assign type var
            $message_type = $_SESSION['message_type'];
            // creating output
            if ($message_type == 'error') {
                echo '<div class="alert alert-danger">' . $message . '</div>';
            } else {
                echo '<div class="alert alert-success">' . $message . '</div>';
            }
        }
        // unseting message
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    } else {
        echo '';
    }
}