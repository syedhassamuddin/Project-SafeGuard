<form action="assets/php-scripts/account-creation-script.php" method="post">
    <div class="row">
        <div class="col-12">
        <div class="form-group">
            <label>Hospital Name</label>
            <input type="text" class="form-control" name="name" placeholder="Civil Hospital" >
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 pr-md-1">
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="example@example.com" >
        </div>
        </div>
        <div class="col-md-6 pl-md-1">
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" placeholder="Enter Password" >
        </div>
        </div>
    </div>

    <div class="card-footer">
        <input type="submit" name="hospital-create" class="btn btn-fill btn-primary" value="Create Account">
    </div>
</form>