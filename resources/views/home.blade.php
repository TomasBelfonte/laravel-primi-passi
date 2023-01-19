<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="text-center mt-5">
        <h1 class="text-center text-primary mt-5"> Hello World</h1>
        <a href="{{ route("benvenuto") }}" class="text-primary mt-5 ms-5 align-items-center">Benvenuto</a>
        <a href="{{ route("chi_sono") }}" class="text-primary mt-5 ms-5 align-items-center">Chi Sono</a>
        <a href="{{ route("cosa_faccio") }}" class="text-primary mt-5 ms-5 align-items-center">Cosa Faccio</a>
        <a href="{{ route("developed_skills") }}" class="text-primary mt-5 ms-5 align-items-center">Developed Skills</a>
        <a href="{{ route("special_thanks") }}" class="text-primary mt-5 ms-5 align-items-center">Special thanks</a>
    </div>


</body>
</html>
