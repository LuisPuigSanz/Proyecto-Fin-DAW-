<?php
    echo "<form method='POST' action='".getLogin($conn)."'>
        <input type='text' name='uid'>
        <input type='password' name='pwd'>
        <button type='submit' name='loginSubmit'>Login</button>
        <br>
        ";

        if (isset($_SESSION['id'])) {
            echo "Estás loggeado";
        }
        else{
            echo "No estás loggeado";
        }
?>