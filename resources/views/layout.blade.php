<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body>
  <nav>
    <ul class="flex flex-row bg-blue-800 justify-end items-center w-screen text-white gap-8 p-5">
      <a href="/">
        <li class="hover:cursor-pointer hover:text-black">Home</li>
      </a>
      <a href="/unite">
        <li class="hover:cursor-pointer hover:text-black">Unité</li>

      </a>
      <a href="/produit">
        <li class="hover:cursor-pointer hover:text-black">Produit</li>
      </a>
      

    </ul>
  </nav>
@yield('content')

</body>

</html>