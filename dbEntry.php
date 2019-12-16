<?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "gamelib";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                            
                            $Name = $_POST['name'];
                            $Platform = $_POST['platform'];
                            $Genre = $_POST['genre'];
                            $Date = $_POST['date'];
                            $Players = $_POST['players'];
                            $Publisher = $_POST['publisher'];
                            $Box = $_POST["image"];

                            $sql = "INSERT INTO library (Name, Platform, Genre, Date, Players, Publisher, Box)
                            VALUES ('$Name', '$Platform', '$Genre', '$Date', '$Players', '$Publisher', '$Box')";


                            if ($conn->query($sql) === TRUE) {
                                echo "Game added successfully in the PlayStation Database";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            $conn->close();


                        header("refresh:4; url=index.php");


?>