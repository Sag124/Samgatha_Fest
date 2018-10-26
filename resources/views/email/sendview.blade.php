<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EMail verification</title>
</head>
<body>
<h1>Welcome to Laravel Mailable, {{ $user->name }} </h1>
	<p class="lead">
		{{-- <h1>Verify The Email To activate the account</h1> --}}

	<h1>TO verify the email click <a href="{{ route('sendEmailDone', ["email" => $user->email, "verifyToken" => $user->verifyToken]) }}">here</a></h1>
	</p>
</body>
</html>