<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>STT</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>UNIVERSITY</th>
        </tr>
    <?php
        for ($i=1;$i<=sizeof($studentList); $i++) {
            echo 
            "<tr>".
            "<td>".$i."</td>".
            "<td>".$studentList[$i]->name."</td>".
            "<td>".$studentList[$i]->age."</td>".
            "<td>".$studentList[$i]->university."</td>".
            "<td><a href='../Controller/C_Student.php?Delete=".$studentList[$i]->id."'>Delete</a></td>".
            "</tr>";
        }
    ?>
    </table>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>