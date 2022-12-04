<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <h1>Add Syllabus</h1>
    <a href="../index.php">Home</a>
    <br/><br/>

    <form action="../functions/addsyllabus.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Syllabus Code</td>
                <td><input type="text" name="code"></td>
            </tr>

            <tr>
                <td>Syllabus Author</td>
                <td><input type="text" name="author"></td>
            </tr>

            <tr>
                <td>Subject</td>
                <td>
                    <select name="subject">
                        <?php
                        require_once("../database/connection.php");
                        $query = "SELECT * FROM tblsubjects";
                        $result = mysqli_query($dbc, $query);
                        while($res = mysqli_fetch_array($result)){
                            echo "<option value=\"".$res['subject_id']."\">";
                            echo $res['subject_name'];
                            echo"</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' name='Submit' value='Add'</td>
            </tr>
        </table>
    </form>  
</body>
</html>