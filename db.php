<?php

        // Create connection
        $connection = new mysqli("localhost", "root", "", "php_user");

        if (!$connection) {
            die ("Connection failed");
        }

?>