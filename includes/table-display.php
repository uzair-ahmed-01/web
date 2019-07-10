<div style="padding-left: 170px">
    <table id="productTable" class="table">
        <thead>
            <tr>
                <th>
                    <input type="checkbox" id="checkAll">
                </th>
                <th>Title</th>
                <th>Description</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                   
                    $servername = "localhost";
                    $username = "root";
                    $password = "12345";
                    $dbname = "web";

//create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

//check connection
                  
                    $query = "SELECT title ,textarea,id from web";
                    $result = $conn->query($query);
                    //if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <tr id="<?php echo $row['id'] ?>">
                            <td><input class="checkbox" type="checkbox" id="<?php echo $row['id'] ?>" name="id[]"></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['textarea'] ?></td>
                            <td>
                                <a href="../public/edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
        </tbody>
    </table>
    <div>
        <a type="button" id="delete" class="btn btn-danger">Delete Selected</a>

    </div>
</div>