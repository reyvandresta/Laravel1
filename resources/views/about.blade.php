<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  @vite('resources/css/app.css') 
</head> 
<body>
<center> 
  <header> 
    <h1 class="text-3xl font-bold underline" style="background-color: rgb(153, 27, 27); color: black;"> 
      ABOUT ME 
    </h1> 
  </header> 

  <li><a href="{{ route('index')}}" class="w-full py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Index</a></li>
</center>
</body> 
</html>
