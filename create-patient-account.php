<form action="account-creation-script.php" method="post">
    <div class="row">
        <div class="col-md-6 pr-md-1">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="Fname" placeholder="First Name" >
        </div>
        </div>
        <div class="col-md-6 pl-md-1">
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="Lname" placeholder="Last Name" >
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 pr-md-1">
        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age" placeholder="18" >
        </div>
        </div>
        <div class="col-md-6 pl-md-1">
        <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="gender" placeholder="Male" >
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
        <button type="submit" name="submit" class="btn btn-fill btn-primary">Create Account</button>
    </div>
</form>