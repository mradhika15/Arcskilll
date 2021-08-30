


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8 />
<title>Arcskill</title>
</head>
<style>

p{
    margin:10px;
} 
.right {
    float:right;
}   
    </style>
<body>

<fieldset>
<legend>Arcskill-form</legend>
<form method="post" action="Arcskill.php">
<p>
<label for="FirstName">First Name </label>
<input type="text" name="Firstname" id="Firstname">
</p>
<p>
<label for="LastName">Last Name </label>
<input type="text" name="Lastname" id="Lastname">
</p>
<p>
<label for="email">Mail Id</label>
<input type="text" name="MailId" id="MailId">
</p>
<p>
<label for="country">Country</label>
<input type="text" name="Country" id="Country">
</p>
<p>
<label for="message">Message</label>
<textarea name="Message" id="Message"></textarea>
</p>
<p>
<label for="gender">Gender</label><br>
<input type="radio" name="gender" id="gender">Male
<input type="radio" name="gender" id="gender">Female
<input type="radio" name="gender" id="gender">Other
</p>
<div class="right">
<a href="Edit.html"> <input type="button" name="Edit" id="Edit" value="Edit" ></a>
</div>



<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit" >
</p>
</form>
</fieldset>
</body>
</html>

<?php
    // database connection code
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root','','arcskill');


// get the post records
if(isset($_POST[Submit]))
{
$Firstname = $_POST['Firstname'];
$LastName = $_POST['Lastname'];
$MailId = $_POST['MailId'];
$Country = $_POST['Country'];
$Message = $_POST['Message'];

// database insert SQL code
$sql = "INSERT INTO tbl_contact (Firstname,Lastname,MailId,Country,Message) VALUES ('$Firstname','$Lastname','$MailId','$Country','$Message')";

// insert in database 
$q = mysqli_query($con, $sql);

if($q)
{
	echo "Contact Records Inserted";
}
}
?>

