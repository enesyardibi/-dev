<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
    </style>
</head>
<body>
<h1>
    STUDENT REGISTRATION FORM
</h1>

<form action="connection.php" method="post" >

    <label>Full Name:</label><br>
    <input type = "text" id="full_name" name = "full_name" placeholder="name" ><br>

    <label>E-Mail:</label><br>
    <input type = "email" id="email" name="email" placeholder="e-mail" ><br>
    <label>Gender:</label><br>

    <input type = "radio" value="male" id="male" name ="gender">
    <label>Male:</label><br>

    <input type = "radio" value="female" id="female" name="gender">
    <label>Female:</label><br>

    <input type = "submit" name="button" value="Submit">


</form>

</body>

</html>
