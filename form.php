<!DOCTYPE html>
<html>
<head>
	<title>Admin Form</title>
</head>
<body style="background-color:aqua">
<center>
    <form method="POST" action="connection.php">
        Fristname:
        <input type="text"name="fristname"><br><br>
        Lastname:
        <input type="text"name="lastname"><br><br>
        Gender:
        <input type="radio"name="gender"value="female">female
        <input type="radio"name="gender"value="male">male<br><br>
        Country:
        <select name="country">
            <option value="india">India</option>
            <option value="india">Canada</option>
            <option value="india">Japan</option>
            <option value="india">Germany</option>
            <option value="india">Brazil</option>
            <option value="india">Mexico</option>
            <select><br><br>
        Date:
        <input type="date"id="date"><br><br>
        From:
        <input type="date"name="from">
        To:
        <input type="date"name="To"><br><br>
        <input type="Submit"value="Submit">
</form>
    </center>
	</body>
</html>
