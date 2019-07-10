<div style = "padding-left: 170px"><br><br>
            <table class = "table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>

                <?php
        
	$servername = "localhost";
	$username = "root";
	$password = "12345";
	$dbname = "web";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
                $query = "SELECT id,title ,textarea from web";
                $result = $conn->query($query);
                //if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <tr id="<?php echo $row['id'] ?>">
                        <td><?php echo$row['id'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['textarea'] ?></td>
                    </tr>


                <?php } ?>
            </table>
        </div>