<?php
$title = "sign up";
include ('include/header.php');
?>
<div class="container-fluid">
  <ol class="breadcrumb" style="background-color:#c9c8c3;margin:0rem -0.7rem;">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>

    <h1 class="text-center">Register</h1>
    <p class='lead text-center'>Create an Account Now For a Big W!</p>

    <div class="row justify-content-md-center">
    <div class="col-5">

      <div class="form-group">
        <label for="uname" class="col-sm-2 control-label">Username</label>
          <div class="col-12">
            <input type="text" class="form-control" id="uname" name="name" placeholder="SirLoneWolf_69" required>
          </div>
      </div>

      <form class="form-horizontal" role="form" action="register.php" method="get" enctype="text/plain" style="margin-top:1rem">
        <label for="email" class="col-sm-2 control-label">E-mail</label>
        <label for="domain"class="control-label" style="margin-left:15.3rem">Domain</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="email" placeholder="abcd124" aria-label="E-mail">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" id="domain" placeholder="gmail.com" aria-label="Domain">
        </div>

        <div class="form-group">
          <label for="fname" class="col-sm-2 control-label">First Name</label>
          	<div class="col-12">
              <input type="text" class="form-control" id="fname" placeholder="Joe" required>
            </div>
		  	</div>

        <div class="form-group" style="margin-top:1rem">
          <label for="lname" class="col-sm-2 control-label">Last Name</label>
          	<div class="col-12">
              <input type="text" class="form-control" id="lname" placeholder="Lanister" required>
            </div>
		  	</div>

        <div class="form-group" style="margin-top:1rem">
          <label for="newPassword" class="col-sm-2 control-label">Password</label>
          <div class="col-12">
            <input type="password" class="form-control" id="newPassword" name="password" placeholder="Password" required>
			  	</div>
        </div>

        <div class="form-group" style="margin-top:1.5rem">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Register</button>
          </div>
			 </div>

      </div>
    </div>
  </div>

  <?php
  include('include/footer.php');
  ?>
