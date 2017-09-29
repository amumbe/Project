<!DOCTYPE HTML> 
<html>
<head>
    <title>Sign-Up</title>
    <script src="https:ajax.googleapis.com/ajax/libs/jquery.min.js"></script>  
</head>
<body> 
<div id="Sign-Up"> 
    <form id="signUpForm" method="POST" action="RegisterConnect.php"> 
        <fieldset style="width:30%">
            <legend>Registration Form</legend>
            <table border="0"> 
                <tr> <td>National Id</td><td> <input type="int" name="NationalId"></td> </tr>
                <tr> <td>First Name</td><td> <input type="text" name="FirstName"></td> </tr> 
                <tr> <td>Second Name</td><td> <input type="text" name="SecondName"></td> </tr>        
                <tr> <td>Email Address</td><td> <input type="text" name="EmailAddres"></td> </tr>
                <tr> <td>Phone Number</td><td> <input type="int" name="PhoneNumber"></td> </tr> 
                <tr> <td>Age</td><td> <input type="int" name="Age"></td> </tr> 
                <tr><td>User Type</td></tr>
                <tr>
                    <td>
                        <input type="radio" name="Type" value="Donor" onclick="disableReasons()">Donor<br>
                        <input type="radio" name="Type" value="Recipient" id="reason" onclick="enableReasons()">Recipient<br>
                    </td>
                </tr> 
                <tr>
                    Blood Group 
                    <select name ="BloodType">
                        <option value="A+"> A+</option>
                        <option value="A-"> A-</option>
                        <option value="B+"> B+</option>
                        <option value="B-"> B-</option>
                        <option value="AB+"> AB+</option>
                        <option value="AB-"> AB-</option>
                        <option value="O+"> O+</option>
                        <option value="O-"> O-</option>
                    </select>
                </tr>
                <tr><td>Reason</td></tr>
                <tr>
                <td id="reasons">
                    <input type="radio" name="Reason" value="Accident">Accident<br>
                    <input type="radio" name="Reason" value="Sickness">Sickness<br>
                    <input type="radio" name="Reason" value="Surgery">Surgery <br>
                    <input type="radio" name="Reason" value="Any other reason">Any other reason<br>
                </td>
                </tr>
                <tr> <td>Password</td><td> <input type="password" name="Password"></td> </tr> 
                <tr> <td>Confirm Password </td><td><input type="password" name="cpass"></td> </tr>
                <tr> <td><input id="button" type="submit" name="submit" value="Sign-Up"></td> </tr>

            </table> 
        </fieldset> 
    </form>

</div>

<script>
	var reasons = document.getElementById('reasons');
	
	function disableReasons(){
		reasons.style.display = 'none';
	}
	
	function enableReasons(){
		reasons.style.display = 'block';
	}
	
</script>

</body>
</html>

