<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<div class="container">
		<h1>This is contact page from Controller</h1>
		<form>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea>

			<button type="submit">Send</button>
		</form>
	</div>
    <a href="{{route( 'about.page')}}">About</a>
</body>
</html>