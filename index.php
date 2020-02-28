<?php


include'inc/header.php';
include'lib/Student.php';
$student=new Student();




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
            <?php
            $table='tbl_student';
            $order_by=array('order_by'=>'id ASC');
            $selectcond=array('select'=>'name');
            $wherecond=array(
              'where'=>array('id'=>'3','email'=>'mdmannan580#gmail.com'),
              'return_type'=>'single'
            );
              $limit=array('start'=>'2','limit'=>'5');
              $studentData=$student->select($table,$limit);
           
            ?>

            <?php

              if(!empty($studentData)){
                $i=0;
                foreach ($studentData as $sdata) {
                 $i++;
                
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $sdata['name'];?></td>
                <td><?php echo $sdata['email'];?></td>
                <td><?php echo $sdata['phone'];?></td>
                <td>
                  <a  class="btn btn-info" href="update_student.php?id=<?php echo $sdata['id'];?>">Edit</a>  <a class="btn btn-danger" href="delete.php?id=<?php echo $sdata['id'];?>"  onclick="return confirm('Are You Sure to Remove Student From Database?')">Delete</a>  
                </td>
            </tr>
            <?php
            }
          }else{
            ?>
              <tr>
                <td colspan="5" style="text-align:center"><h2>No Data found!</h2></td>
              </tr>
             <?php } ?>
        </table>
    

    
<?php


include'inc/footer.php';



?>