<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<div class="background fix">
		<div class="book fix  wow animated  zoomIn" data-wow-delay="3sec">
			<form action="action/book.php" method="post" enctype="multipart/form-data">
				<input name="name" type="text" placeholder="Name">
				<input name="email" type="email" placeholder="E-mail"  size="40">
				<input name="subject" type="text" placeholder="Subject"  size="40"><br/>
				<input name="enterdate" type="date" value="Date of arrival"  size="63">
				<input name="exitdate" type="date" value="Date of departure"  size="62"><br/>
					<select name="guest" type="int">
						<option>Guest</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
					</select>
					<select name="room" type="int">
						<option>Rooms</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
					</select>
				<br/>
				<textarea name="information" placeholder="Additional Information"></textarea><br/>
				<input type="submit" value="Send request">
			</form>
		</div>
	</div>
</body>
</html>