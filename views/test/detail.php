<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Mark</th>
            <th>Sex</th>
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
        </tr>
    </tbody>
    <?php 
        }
    }
    ?>
</table>
<a href="index.php?action=view" class="btn btn-success" id="back">Go Back</a>