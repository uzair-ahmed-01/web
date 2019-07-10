<div class="modal-body" style="padding-left: 170px"> <br>
            <form method="POST">
                <div>
                    <?php
                    if (isset($message)) {
                        echo $message;
                    }
                    ?>
                </div>
                <div>
                    <a href="../list.php"></a>
                </div>
                <input type="hidden" name="new" value="1" />
                <div class="form-group">
                    <label>Title</label>
                    <input name="title"type="text" class="form-control" value="<?php echo $row['title']; ?>" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label type="text">Add Content</label>
                    
                    <input name="textarea" type="text"   class="form-control" value="<?php echo $row['textarea']; ?>" placeholder="Enter Content">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>