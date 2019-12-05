
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-center text-white">Change Profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php?action=change_profile" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <input type="file" name="file">
                            </div>
                            <div class="card-footer">
                                <a href="index.php?action=view" class="btn btn-warning" id="back">Go Back</a>
                                <input type="submit" class="btn btn-primary float-right" value="Submit">
                            </div>
                        </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>