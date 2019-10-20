<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>Login form</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- <link rel="stylesheet" href="style.css"> -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- <script src="main.js"></script> -->
		<script src="../adder/tools.js"></script>
		<link rel="stylesheet" href="../adder/adder.css">
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		<?php
require_once "../data.php";
?>
	</head>
	<body>
		<div class="container">
			<!-- <div class="newF">
                <form action="Loged.php" method="post">

                    <p>Your   I  D   :<input type="text" name="userid"></p>
                    <p>Your Password :<input type="password" name="password"></p>
                    <br>
                    <p>Your UserName :<input type="text" name="username"></p>

                    <br>
                    <input type="submit" value="送信！！">
                </form>
            </div> -->
		</div>
		<div Con>
			<form class="form-horizontal" action="Loged.php" method="post">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Your ID</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="ID" name="userid">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Your UserName</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputtext3" placeholder="Enter your name" name="username">
					</div>
				</div>
				<div class="form-group">
					<!-- ////////////// -->
					<label for="inputPassword3" class="col-sm-2 control-label">Your 趣味</label>
					<div class="col-sm-10">
						<input type="text" name="hobby" id="setHobby" class="hobby form-control" readonly value="set from bellow">
						<!-- ////////////////// -->
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Sign up</button>
					</div>
				</div>
			</form>
		</div>
		<!-- ////////////////////////////////////// -->
<!-- ////////////////////////////////////// -->
                    <div class="container">
                    <div class="hobby-shows">
                        <h3>趣味</h3>
                        <p>ここにドロップ</p>
                        <script>drop();</script>
                        <?php foreach($hobbies as $hobby) : ?>
                        <div class="<?php echo $hobby?>-a"></div>
                        <?php endforeach ?>
                        <ul id="uls">
                        </ul>
                        <br><br>
                        <div>
                        <input type="button" value="この内容でセットする" onclick="setHobby()">
                  </div>
                        
                      </div>
                      <!--趣味のパネルを置く場所-->
                      <div class="hobby-box">
                      <!--趣味パネルを設定-->
                      <?php $i = 0 ?>
                        <?php foreach($hobbies as $hobby) : ?>
                          <div class="<?php echo $hobby?>"  id="hobby">
                            <p><?php echo $hobby?></p>
                            <script>drag("<?php echo $hobby?>")</script>
                            <?php if($i % 4 == 3) : ?>
                              <div class="floatClear"></div>
                            <?php endif ?>
                          </div>
                          <?php $i++; ?>
                        <?php endforeach ?>
                      </div>
                </div>
<!-- ///////////////////////////////////////////////////////// -->
		<!-- ///////////////////////////////////////////////////////// -->
		<a href="../Main/main.php">メインページへ</a>
	</body>
</html>