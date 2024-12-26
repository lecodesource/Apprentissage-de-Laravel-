
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    {{-- integration d'un component  --}}
    <x-navbar/>
       
    <div>
    @yield('content')
    </div>
    <x-message  color="text-red-500" msg="erreur"/>
    <x-message  color="text-green-500" msg="Succès"/>
    <x-message  color="text-orange-500" msg="Avertissement"/>
  
   
</body>
</html>
