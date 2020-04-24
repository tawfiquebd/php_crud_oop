<!doctype html>
<html>
<head>
 <title>Crud App - PHP OOP</title>
 <style>

  	body{
  		font-family:verdana
	}
  	.phpcoding{
  		width:80%; 
  		max-width: 960px;
  		margin: 0 auto;
  		background:#f1f1f1
  	}
	.headeroption, .footeroption{
		background:#2B81D7;
		color:#fff;
		text-align:center;
		padding:20px;
	}
	.headeroption h2, .footeroption h2{
		margin:0
	}
	.maincontent{
		height: 400px;
		overflow: hidden;
		padding:20px;
	}
	.table {
		width: 100%;
		text-align: center;
		border: 1px solid #000;
	}
	.table th{
		background: #ccc;
	}
	.table td{
		background: #ddd;
		border: 1px solid #000;
		padding: 5px;
	}
	.btn {
		background: #17ac9b;
		color: #fff;
		padding: 10px 15px;
		margin-top: 20px;
		display: inline-block;
		text-decoration: none;
	}
	input[type="text"],
	input[type="email"] {
		font-size: 16px;
		padding: 10px 20px;
		width: 100%;
		box-sizing: border-box;
	}
	input[type="submit"]{
		font-size: 16px;
		padding: 10px 20px;
		width: 48%;
		background: #3dc824;
	}
	input[type="reset"] {
		font-size: 16px;
		padding: 10px 20px;
		width: 48%;
		background: #ec1a1a;
	}
	span{
		margin: 20px 0;
		text-align: center;
		display: block;
	}

 </style>
</head>
<body>

	<div class="phpcoding">
		 <section class="headeroption">
		  <h2><?php echo "CRUD APP - PHP OOP"; ?></h2>
		 </section> 
		
		<section class="maincontent">