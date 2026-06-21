<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="Post">
        @csrf
        Email<input type="text" name="email" placeholder="donnez votre email">
        Pwd <input type="password" name="password" placeholder="donnez votre mot de pass">
        <button>valider</button>
   </form>
</body>
</html>
