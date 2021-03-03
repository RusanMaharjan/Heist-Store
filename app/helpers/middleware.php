<?php


    //functions for users only
    function usersOnly($redirect = '/index.php')
    {
        if (empty($_SESSION['id'])) {
            $_SESSION['message'] = 'You need to login first';
            $_SESSION['type'] = 'error'; 
            header('location: '. BASE_URL . $redirect);
            exit(0);
        }
    }


    //functions for admin only
    function adminOnly($redirect = '/index.php')
    {
        if (empty($_SESSION['id']) || (empty($_SESSION['admin']))) {
            $_SESSION['message'] = 'You are not authorized';
            $_SESSION['type'] = 'error'; 
            header('location: '. BASE_URL . $redirect);
            exit(0);
        }
    }


    //function for guest only
    function guestsOnly($redirect = '/index.php')
    {
        if (isset($_SESSION['id'])) {
            header('location: '. BASE_URL . $redirect);
            exit(0);
        }
    }
?>