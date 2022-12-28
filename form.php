<html>

<body>
    <form  action = "form.php" method= "post">
       Name:  <input type = "text" name = "username" id =""><br>
        Email: <input type = "email" name ="email" id = ""><br>
        Comment:<textarea name = "comment" id ="" cols ="5" row ="10"></textarea><br>
        <br>
       Gender: <input type = "radio" name = "gender" value = "male">Male
         <input type = "radio" name = "gender" value = "female"> Female<br>
         <input type = "submit" name = "submit" id = "" value = "submit">

    </form>
    <?php
    if(isset($_POST['submit'])){
        echo $_POST['submit']."<br>";
       echo $_POST['username']."<br>";
       echo $_POST['email']."<br>";
        echo $_POST['comment']."<br>";
        echo isset($_POST['gender'])? $_POST['gender'] : ""."<br>";
    }
    
    ?>
</body>
</html>