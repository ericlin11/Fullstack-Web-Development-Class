<?php 

    function select ($sql){
        $db = parse_ini_file("shared.ini",true) ["db"];
        
        $servername = $db["servername"];
        $username = $db["username"];
        $password = $db["password"];
        $dbname = $db["dbname"];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($sql);

        $data = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($data, $row);
            }
        }

        $conn->close();
        return $data;
    }


    function update($sql){
        $db = parse_ini_file("shared.ini",true) ["db"];
        
        $servername = $db["servername"];
        $username = $db["username"];
        $password = $db["password"];
        $dbname = $db["dbname"];

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $status = 0;
        if ($conn->query($sql) === TRUE){
            $status = 1; 
        } else {
            $status = -1;
        }

        $conn->close();

        return $status;

    }

?>