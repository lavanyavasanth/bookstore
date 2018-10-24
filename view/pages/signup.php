<?php include('header.php');?>
<?php include('navbar.php');?>
<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Thank you for Sign Up!</div>
                <div class="panel-body">
                    <form role="Form" method="POST" action="../../control/pdoreg.php" accept-charset="UTF-8">
						<div class="form-group">
							<label for="username">username</label>
							<input type="text" id="uname" class="form-control" name="username" placeholder="" required pattern="[a-zA-Z]{3,}" title="Invalid Character">
						</div>
                        <div class="form-group">
							<label for="password">password</label>
							<input type="text" id="confirmpass" class="form-control" name="password" placeholder="" required pattern="[a-zA-Z0-9]{3,}" title="Invalid Character">
                        </div>
						<div class="form-group">
							<label for="firstname">FirstName</label>
							<input type="text" id="fname" class="form-control" name="firstname" placeholder="" required pattern="[a-zA-Z]{3,}" title="Invalid Character">
                        </div>
						<div class="form-group">
							<label for="lastname">LastName</label>
							<input type="text" id="lname" class="form-control" name="lastname" placeholder="" required pattern="[a-zA-Z]{3,}" title="Invalid Character">
                        </div>
                        <div class="form-group">
							<label for="email">Email</label>
							<input type="text" id="email" class="form-control" name="email" placeholder="" required pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="Please enter a valid email">
                        </div>
						<div class="form-group">
							<label for="verifypass">Role</label>
							<input type="text" id="role" class="form-control" name="role" placeholder="" required pattern="[a-zA-Z]{4,}" title="Invalid Character">
                        </div>
						<div class="form-group text-center">
							<input type="submit" class="btn btn-primary btn-lg" id="submitbtn" name="submit" value="signup">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>