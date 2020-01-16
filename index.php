<<!Doctype html>
<html>
<head>
    <title>CRUD demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
    <body> 
        
    <?php require_once "process.php";?>
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'crud') or die (mysqli_error($mysqli));
        $result = $mysqli -> query ("SELECT * FROM data") or
            die($mysqli->error);
        pre_r($result);

        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>'
        }
    ?>
        <div class="row justify-content-center">
            <form action="process.php" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="Enter your name">                
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" value="Enter location">
                </div>
                <div class="form-group">
                    <button type="submit" name="save" class="btn btn-primary">Save</button> 
                </div>               
            </form>
        </div>


        <!--jquerry, popper.js, bootstrap.js -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    </body>
</html>