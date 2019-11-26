<div class="container">
<a href="index.php?action=add_form" class="btn btn-success">Add New</a>
</div><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Mark</th>
            <th>Sex</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php 
        if(isset($data['view'])){
            foreach($data['view'] as $col){
    ?>
    <tbody>
        <tr>
            <td><?php echo $col['id']; ?></td>
            <td><?php echo $col['name']; ?></td>
            <td><?php echo $col['class']; ?></td>
            <td><?php echo $col['mark']; ?></td>
            <td><?php echo $col['sex']; ?></td>
            <td>
            <a href="index.php?action=detail&id=<?php echo $col['id'];?>"><i class="material-icons">remove_red_eye</i></a>
            <a href="index.php?action=edit&id=<?php echo $col['id'];?>"><i class="material-icons text-success">edit</i></a>
            <a href="index.php?action=delete&id=<?php echo $col['id'];?>" onClick="return confirm('Are your sure to delete?')"><i class="material-icons text-danger">delete</i></a>
            </td>
        </tr>
    </tbody>
    <?php 
        }
      
    }
    ?>
</table>