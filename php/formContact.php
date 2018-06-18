<?php
/**
 * Created by PhpStorm.
 * User: shockdream6
 * Date: 16.06.2018
 * Time: 15:45
 */

require_once 'init.php';

//gets the variable through post from index.php
$name = filter_input(INPUT_POST, 'name');
$eMail = filter_input(INPUT_POST, 'eMail');
$message = filter_input(INPUT_POST, 'message');
//variable if the whole operation adding contact was successfull
$successful = false;

//checks if name, eMail and message is not empty
//otherwise shows error message if the page is stuck or redirects back to page is variable false
if (!empty($name)) {
    if (!empty($eMail)) {
        if (!empty($message)) {
            $sql = "INSERT INTO Contact(name, eMail, message) VALUES ('$name','$eMail','$message')";
            //checks if the entry was able to be added
            if ($db->query($sql)) {
                echo "New record is inserted sucessfully";
                $successful = true;
                header('Location: index.php?successForm=' . $successful);
            } else {
                echo "Error: " . $sql . "<br>" . $db->error;
            }
        } else {
            echo "Nachrichtfeld sollte nicht leer sein";
            die();
            header('Location: index.php?successForm=' . $successful);
        }
    } else {
        echo "E-Mailfeld sollte nicht leer sein";
        die();
        header('Location: index.php?successForm=' . $successful);
    }
} else {
    echo "Name sollte nicht leer sein";
    die();
    header('Location: index.php?successForm=' . $successful);
}

