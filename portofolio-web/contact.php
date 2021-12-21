<?php
    include("index.php");
?>

<?php
    include("connection.php");
    $name = "";
    $email = "";
    $message = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    }
    if($name!="" || $email="" || $message=""){
        $sql = "INSERT INTO contact(name, email, message)
            VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql)===TRUE){
            echo "Success";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

<div id="section">
    <div id="table">
        <table width=100%>
            <thead>
                <th> Name </th>
                <th> Email</th> 
                <th> Message</th>
            </thead>
            
            <tbody>
                <tr>
                    <?php
                        $sql = "SELECT * FROM contact ORDER BY name DESC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // ouput data dari setiap baris
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                <td>".$row["name"]."</td>
                                <td>".$row["email"]."</td>
                                <td>".$row["message"]."</td>
                                </tr>";
                            }
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>