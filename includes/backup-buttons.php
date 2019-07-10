        <div class="row">
            <div class="col-md-2 col-md-offset-1" style="padding-left: 100px">
                <form action="../controllers/import.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="jsonFile"><br>
                    <input name="import" value="Import" type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-2" style="padding-top: 41px">
                <a href="../controllers/export.php" type="submit" class="btn btn-primary"> Export</a>
            </div>
        </div>