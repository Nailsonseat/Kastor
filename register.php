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
      <form class="form-horizontal" role="form" action="register.php" method="get" enctype="text/plain">
        <label for="email" class="col-sm-2 control-label">E-mail</label>
        <label for="domain"class="control-label">Domain</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="email" placeholder="abcd124" aria-label="E-mail">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" id="domain" placeholder="gmail.com" aria-label="Domain">
        </div>

        <div class="form-group">
				<label for="newName" class="col-sm-2 control-label">Name</label>
				<div class="col-12">
					<input type="text" class="form-control" id="newName" name="name" placeholder="Name" required>
				</div>
			</div>
      </div>
    </div>
  </div>
