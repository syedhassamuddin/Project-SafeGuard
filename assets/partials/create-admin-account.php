<form action="assets/php-scripts/account-creation-script.php" method="post">
    <div class="row">
        <div class="col-md-6 pr-md-1">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="Fname" placeholder="First Name" required>
        </div>
        </div>
        <div class="col-md-6 pl-md-1">
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="Lname" placeholder="Last Name" required>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 pr-md-1">
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="example@example.com" required>
        </div>
        </div>
        <div class="col-md-6 pl-md-1">
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password"  required>
        </div>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" name="admin-create" class="btn btn-fill btn-primary">Create Account</button>
    </div>
</form>