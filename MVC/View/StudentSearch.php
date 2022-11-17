<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgb(187,255,204);">
    <div style="text-align: center;">
        <h2>TÌM KIẾM</h2>
        <form action="../Controller/C_Student.php">
            <div style="display: inline-block; border: 1px solid black; padding: 5px 50px 20px">
            <table>
                <tr>
                <?php 
                    echo 
                    '<tr>
                        <th>Name
                        <input name="rabu" type="radio" onchange="changeph(this.value)" value="name">
                        </th>
                        </tr><tr>
                        <th>Age
                        <input name="rabu" type="radio" onchange="changeph(this.value)" value="age">
                        </th>
                        </tr><tr>
                        <th>University
                        <input name="rabu" type="radio" onchange="changeph(this.value)" value="university">
                        </th>
                    </tr>'
                ?>
                </tr>
            </table>
            <br>
            <label for="nhap"></label>
            <input type="text" id="inputfield" name="text" placeholder="Nhập ở đây">
            <input type="submit" name="Search" value="Search">
            <input type="button" value="Reset" onclick = "document.getElementById('inputfield').value=''">
            </div>
        </form>
    </div>
    <script>
        document.getElementsByName("rabu")[0].checked=true;
        function changeph(str) {
            document.getElementById("inputfield").placeholder = str+"";
        }
    </script>
</body>
</html>