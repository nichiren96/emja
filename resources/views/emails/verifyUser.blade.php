<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Vérification compte utilisateur</title>
</head>

<body>
<h2>Bienvenue sur Emploi Mahajanga {{$user['name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
<br/>
<a href="{{url('user/verify', $user->verifyUser->token)}}">Verify Email</a>
</body>

</html>
