<?php


include'inc/header.php';



?>
    
        <div class="panel-heading">
            <h3>Update Student Data <a class="pull-right" href="index.php">Back</a></h3>
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
            
            <input type="hidden" name="id" value="1" class="">
            <input type="hidden" name="action" value="edit" class="">
            <input type="submit" name="submit" value="Update Student" class="btn btn-primary">
        </div>
        
    </form>
    </div>

    
<?php


include'inc/footer.php';



?>