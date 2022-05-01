<?php
    // Global connection
    $connection = null;

    function database_connect() {
        // Use the global connection
        global $connection;

        // Server
        $server = "localhost";
        // Username
        $username = "root";
        // If using XAMPP, 
        //  the password is an empty string.
        $password = "root";
        // Database
        $database = "platform";

        if($connection == null) {
            $connection = mysqli_connect($server, $username, $password, $database);
        }
    }
    
    function database_addUser($username, $password) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            // Overwrite the existing password value as a hash
            $password = password_hash($password, PASSWORD_DEFAULT);
            // Insert username and hashed password
            mysqli_query($connection, "INSERT INTO users (username, password) VALUES ('{$username}', '{$password}');");
        }
    }
    
    
    function database_verifyUser($username, $password) {
        // Use the global connection
        global $connection;
        
        // Create a default value
        $status = false;
        
        if($connection != null) {
            // Use WHERE expressions to look for username
            $results = mysqli_query($connection, "SELECT password FROM users WHERE username = '{$username}';");
            
            // mysqli_fetch_assoc() returns either null or row data
            $row = mysqli_fetch_assoc($results);
            
            // If $row is not null, it found row data.
            if($row != null) {
                // Verify password against saved hash
                if(password_verify($password, $row["password"])) {
                    $status = true;
                }
            }
        }
        
        return $status;
    }
    
    function database_deleteUser($username, $password) {
        // Use the global connection
        global $connection;
        // Status is given the value of $username, $password
        $status = database_verifyUser($username, $password);
        
        if($connection !=  null) {
            if($status) {
                $deleteUsers = "DELETE FROM users WHERE username = '{$username}'";
                mysqli_query($connection, $deleteUsers);
            }
        }
    }

    function database_updatePassword($username, $password, $newPassword) {
        global $connection;

        $status = database_verifyUser($username, $password);
        if($connection !=  null) {

            if($status) {
                
                $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                $updatePassword = "UPDATE user SET password = '{$newPassword}' WHERE username = '{$username}'";
                mysqli_query($connection, $updatePassword);

            }
        }
    }

    function database_close() {
        // user global connection
        global $connection;

        if($connection != null) {
            mysqli_close($connection);
        }
    }
?>