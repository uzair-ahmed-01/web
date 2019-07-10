<!DOCTYPE html>
<html>
    <head>
       
 <?php
        include_once '../includes/header.php';
        ?>
        
    </head>
    <body>
        
        <?php
        include_once '../includes/nav-bar.php';
        include_once '../includes/side-bar.php';
        ?>
        
        <div class="container" style="padding-left: 100px">
            <a href="../public/add.php" class="btn btn-primary glyphicon-plus">Add</a>
        </div>
        <br>
        
        <?php
        include_once '../includes/table-display.php';
        
        ?>
    </body>
    <script type="text/javascript" src="../assests/js/checkbox-delete.js"></script>
        
</html>
