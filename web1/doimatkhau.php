<?php 
session_start();
    $msg="";
    if(isset($_SESSION['msg']))
  {
    $msg=$_SESSION['msg'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
 

<title>đổi mật khẩu</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="./xulydoimatkhau.php" method="post">
    <div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">đổi mật khẩu</h2>
			</div>
			<div class="panel-body">
				<div class="form-group">
				  <label for="usr">Email:</label>
				  <input required="true" type="email" name="email" class="form-control" id="usr">
				</div>
				<div class="form-group">
				  <label for="matkhaunew">nhập mật khẩu mới:</label>
				  <input required="true" type="text" name="matkhaunew" class="form-control" id="matkhaunew">
				</div>
                <div class="form-group">
				  <label for="matkhaunew1">nhập lại mật khẩu:</label>
				  <input required="true"  type="text" name="matkhaunew1" class="form-control" id="matkhaunew1">
				</div>	
				<button type="submit" name="btn_dangky" class="btn btn-success">đổi mật khẩu</button>
               <div><?php echo $msg ?></div> 
			</div>
		</div>
	</div>
    </form>
</body>
</html>