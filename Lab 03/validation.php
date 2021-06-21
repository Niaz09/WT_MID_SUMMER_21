<?php
			
			$name="";
			$err_name="";
			$username="";
			$err_username="";
			$password="";
			$err_password="";
			$conpassword="";
			$err_conpassword="";
			$email="";
			$err_email="";
			$phone="";
			$err_phone-"";
			$address="";
			$err_address="";
			$day="";
			$err_day="";
			$month="";
			$err_month="";
			$year="";
			$err_year="";
			$gender="";
			$err_gender="";
			$wheredidhear=[];
			$err_wheredidhear="";
			$bio="";
			$err_bio="";
			$hash = #;
			$question = ?;
			$space = &nbsp;
			$at = @;
			$dot = .;
			
			$hasError = false;
			
			if($_SERVER["REQUEST METHOD"] == "POST"){
				
				if(empty($_POST["name"])){
					$hasError = true;
					$err_name = "Name Required";
				}
				else if(strlen($_POST["name"]) <= 2){
					$hasError = true;
					$err_name = "Name must be greater than 2 characters";
					
				}
				else{
					$name = $_POST["name"];
				}
				
			if($_SERVER["REQUEST METHOD"] == "POST"){
				if(empty($_POST["username"])){
					$hasError = true;
					$err_username = "Username Required";
				}
				else if(strlen($_POST["username"] <= 6 && !$space)){
					$hasError = true;
					$err_username = "Username must be greater than 6 characters";
				}
				else{
					$username = $_POST["username"];
				}
			}
			if($_SERVER["REQUEST METHOD"] == "POST"){
				if(empty($_POST["password"])){
					$hasError = true;
					$err_password = "Password Required";
				}
				else if(strlen($_POST["password"] <= 8 && ($hash || $question))){
					$hasError = true;
					$err_password = "Password does not complete 8 letters or do not have # or ?";
				}
				else{
					$password = $_POST["password"];
				}
			}
			if($_SERVER["REQUEST METHOD"] == "POST"){
				if(empty($_POST["confirm_password"])){
					$hasError = true;
					$err_conpassword = "Password Required";
				}
				else if(strlen($_POST["confirm_password"] <= 8 && ($hash || $question))){
					$hasError = true;
					$err_conpassword = "Password does not complete 8 letters or do not have # or ?";
				}
				else{
					$conpassword = $_POST["confirm_password"];
				}
			}
			if($_SERVER["REQUEST METHOD"] == "POST"){
				if(empty($_POST["email"])){
					$hasError = true;
					$email = "Email Required";
				}
				else if(strlen($_POST["email"] == ($at && $dot))){
					$hasError = true;
					$err_email = "Email address require @ or a .";
				}
				else{
					$email = $_POST["email"];
				}
			}
			
				
				echo $_POST["name"]."<br>";
				echo $_POST["username"]."<br>";
				echo $_POST["password"]."<br>";
				echo $_POST["confirm password"]."<br>";
				echo $_POST["email"]."<br>";
				echo $_POST["phone"]."<br>";
				echo $_POST["address"]."<br>";
				echo $_POST["day"]."<br>";
				echo $_POST["month"]."<br>";
				echo $_POST["year"]."<br>";
				echo $_POST["gender"]."<br>";
				$arr = $_POST["where did you hear about us?"]."<br>";
				echo $_POST["bio"]."<br>";
				
				foreach($arr as $e){
				echo "$e<br>";
			  }
			}
		?>






<html>
	<body>
		<form action="" method="post">
			<fieldset>
			<table>
				<tr>
					<td><h1>Club Member Registration</h1></td>
				</tr>
				<tr>
					<td align="right">Name:</td>
					<td><input name="name" type="text"></td>
					<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Username:</td>
					<td><input name="username" type="text"></td>
					<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Password:</td>
					<td><input name="password" type="password"></td>
					<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Confirm Password:</td>
					<td><input name="confirm_password" type="password"></td>
					<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Email:</td>
					<td><input name="email" type="text"></td>
					<td><span></span></td>
				</tr>
				<tr>
					
						<td align="right">Phone:</td>
						<td><input name="phone" type="text" placeholder="code"> - <input name="phone" type="text" placeholder="Number"></td>
						<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Address:</td>
					<td><input name="address" type="text" placeholder="Street Address"> <input name="address" type="text" placeholder="City"> - <input name="address" type="text" placeholder="State"></td>
					<td align="right"></td>
					<br><td><input name="address" type="text" placeholder="Postal/Zip Code"></td>
					<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Birth Date:</td>
					<td><select name="day">
						<option>Day</option>
						<?php
							for($i=1; $i<=31; $i++){
								echo "<option>$i</option>";
							}
						?>
					</select>
					
					<select name="month">
						<option>Month</option>
						<?php
							for($i=1; $i<=12; $i++){
								echo "<option>$i</option>";
							}
						?>
					</select>
					<select name="year">
						<option>Year</option>
						<?php
							for($i=1980; $i<=2021; $i++){
								echo "<option>$i</option>";
							}
						?>
					</select></td>
				</tr>
				<tr>
					<td align="right">Gender:</td>
					<td><input type="radio" value="Male" name="gender"> Male <input type="radio" value="Female" name="gender"> Female</td>
				</tr>
				<tr>
					<td align="right">Where did you hear <br>about us?</td>
					<td>
						<input type="checkbox" value="A friend or a Colleague" name="where did you hear about us?[]">A friend or a Colleague
						<br><input type="checkbox" value="Google" name="where did you hear about us?[]">Google
						<br><input type="checkbox" value="Blog Post" name="where did you hear about us?[]">Blog Post
						<br><input type="checkbox" value="News Article" name="where did you hear about us?[]">News Article
					</td>
				</tr>
				<tr>
					<td align="right">Bio:</td>
					<td><textarea name="bio"></textarea></td>
				</tr>
				<tr>
					<td align="right"></td>
					<td><input type="submit" value="register"></td>
				</tr>
			</table>
			</fieldset>
		</form>
	</body>
</html>