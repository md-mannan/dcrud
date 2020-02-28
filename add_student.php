<?php


include'inc/header.php';



?>
    
        <div class="panel-heading">
            <h3>Add Student <a class="pull-right" href="index.php">Back</a></h3>
        </div>
       
    <div style="width:600px ;margin:0 auto">
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Student Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
            
            <input type="hidden" name="action" value="add" class="">
            <input type="submit" name="submit" value="Add Student" class="btn btn-primary">
        </div>
        
    </form>
    </div>

    
<?php


include'inc/footer.php';



?>