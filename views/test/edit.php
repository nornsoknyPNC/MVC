
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-center text-white">Student Edit Information Form</h3>
                    </div>
                    <div class="card-body">
                    <?php 
                         if(isset($data['view'])){
                         foreach($data['view'] as $col){
                     ?>
                        <form action="index.php?action=add_info" method="post">
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $col['name']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="class">Class:</label>
                                <select class="form-control" name="class">
                                    <option <?php if ($col['class']== "WEP-2020A"){?> selected="selected" <?php } ?> value="WEP-2020A">WEP-2020A</option>
                                    <option <?php if ($col['class']== "WEP-2020B"){?> selected="selected" <?php } ?> value="WEP-2020B">WEP-2020B</option>
                                    <option <?php if ($col['class']== "SNA-2020"){?> selected="selected" <?php } ?> value="SNA-2020">SNA-2020</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="number">Mark:</label>
                                <input type="number" name="score" class="form-control" value="<?php echo $col['mark'];?>">
                            </div>
                            <div class="form-group">
                                <label for="radio">Gender:</label><br>
                                <input type="radio" name="sex" value="Male" checked='male'>Male <br>
                                <input type="radio" name="sex" value="Female"  checked='female'>Female
                            </div>
                            </div>
                            <div class="card-footer">
                                <a href="index.php?action=view" class="btn btn-success" id="back">Go Back</a>
                                <input type="submit" class="btn btn-primary float-right" value="Submit">
                            </div>
                            <?php 
                                }
                            
                            }
                            ?>
                        </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>