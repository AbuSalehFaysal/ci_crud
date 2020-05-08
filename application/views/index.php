<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">CodeIgniter CRUD Application</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	</nav>
  <hr>
  <div class="container">
      <a type="button" class="btn btn-primary btn-lg btn-block" href="<?php echo base_url(); ?>add_user">Add User</a>
  </div>
  <hr>
	

	<div class="container">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-dark">
      <th scope="row">Dark</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>
      	<a href="<?php echo base_url(); ?>view" type="button" class="btn btn-outline-success">View</a>
      	<a href="<?php echo base_url(); ?>edit" type="button" class="btn btn-outline-info">Edit</a>
      	<a href="<?php echo base_url(); ?>delete" type="button" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr>
  </tbody>
</table>
</div> 

</body>
</html>