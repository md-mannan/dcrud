<?php


include'inc/header.php';




?>
    
        <div class="panel-heading">
            <h3>Student List <a class="pull-right" href="add_student.php">Add Student</a></h3>
        </div>
        <table class="table table-striped">
            <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            
            <tr>
                <td>1</td>
                <td>Mohammad Abdul Mannan</td>
                <td>mdmannan580@gmail.com</td>
                <td>55-543-543</td>
                <td>
                  <a  class="btn btn-info" href="update_student.php?id=3">Edit</a>  <a class="btn btn-danger" href=""  onclick="return confirm('Are You Sure to Remove Student From Database?')">Delete</a>  
                </td>
            </tr>
            
              <tr>
                <td colspan="5" style="text-align:center"><h2>No Data found!</h2></td>
              </tr>
             
        </table>
    

    
<?php


include'inc/footer.php';



?>