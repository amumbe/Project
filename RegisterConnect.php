<?php 
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'donationsystem');

$db = new mysqli('localhost', 'root', '', 'blooddonationsystem');

    or die("Failed to connect to MySQL: " . mysql_error()); 

function NewUser() { $NationalId = $_POST['NationalId']; 
                    $FirstName = $_POST['FirstName'];
                    $SecondName = $_POST['SecondName'];
                    $EmailAddress = $_POST['EmailAddress']; 
                    $PhoneNumber = $_POST['PhoneNumber'];
                    $Type = $_POST['Type'];
                    $BloodType = $_POST['BloodType'];
                    $Reason = $_POST['Reason'];
                    $Password = $_POST['Password'];
                    $Age = $_POST['Age'];
                    
                    
                    $query = "INSERT INTO Users (NationalId, FirstName, SecondName, EmailAddress, PhoneNumber, Password, , Age, Type, BloodType) VALUES ('$NationalId','$FirstName','$SecondName','$EmailAddress','$PhoneNumber', '$Password','$PhoneNumber', '$Age', '$Type', '$BloodType' )"; 
                    
                    $query = "INSERT INTO Recipients (Reason) VALUES ('$Reason')"; 
                    
                    $data = mysql_query ($query)
                        
                        or die(mysql_error()); 
                    
                    if($data) { echo "YOUR REGISTRATION IS COMPLETED..."; } } 
