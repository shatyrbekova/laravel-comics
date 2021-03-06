<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics - @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

 
    <div class="container">
    
    <header>
        
        @include('templates.header')
    </header>

   
    <main>
        @include('templates.comics')
        @yield('main')
    </main>
    <section>
        @include('templates.section-shop')
   </section>
    <footer>
         @include('templates.footer')
    </footer>
      
    
    </div>
</body>
</html>