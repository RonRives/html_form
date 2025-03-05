<?php
    echo"<pre>";
    var_dump($_POST);
    echo"</pre>";
    echo"<br><br>";

    $fullname = $_POST['name'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wait_lang_sir";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo"Connected successfull";

    $sql = "INSERT INTO student_records (Id, Full_Name,Gender,Country)
    VALUES ('', '$fullname', '$gender' , '$country')";
    
    if ($conn->query($sql) === TRUE) {
      echo " New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

    $conn->close();
?>