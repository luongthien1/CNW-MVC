<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/C_Student.php">
        <table>
            <tr>
                <td><label for="id">ID</label></td>
                <td><input name="id"></input></td>
            </tr>
            <tr>
                <td><label for="name">NAME</label></td>
                <td><input name="name"></input></td>
            </tr>
            <tr>
                <td><label for="age">AGE</label></td>
                <td><input name="age"></input></td>
            </tr>
            <tr>
                <td><label for="university">UNIVERSITY</label></td>
                <td><input name="university"></input></td>
            </tr>
        </table>
        <input type="submit" name="Add" value="SUBMIT">
    </form>
</body>
</html>