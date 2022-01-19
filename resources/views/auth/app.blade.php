<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
</head>

 <body class='bg-gray-100'>
    <nav class="h-10 p-4 bg-white flex justify-between">
     
     <ul class='mt-1 flex items-center'>
          <li><a href="{{ Route::is('sellerRegister') ? route('sellerdashboard') : route('dashboard')}} " class="p-5">Dashboard</a></li>
          <li><a href="{{Route::is('sellerRegister') ? route('products') :  route('posts')}} " class="p-5">
          {{Route::is('sellerRegister') ? 'products' : 'posts'}}  </a></li>
     </ul>
   
   

   <ul class='mt-1 flex items-center'>

     @auth
      
     <li><a href="" class="p-5">{{ auth()->user()->name }}</a></li> 
       
        <li>
           <form action="{{ route('logout') }}" method='post' class='inline'>
             @csrf
              <button type='submit' class="p-2">Logout</button>
           </form>
       </li>
   
      @endauth

      @guest
      
        <li><a href="{{ Route::is('sellerRegister') || Route::is('sellerlogin') ? route('sellerRegister') : route('register') }}" class="p-5">Register</a></li>
        <li><a href="{{ Route::is('sellerRegister') || Route::is('sellerlogin')  ? route('sellerlogin') : route('login') }}" class="p-5">Log in</a></li>

    @endguest

     </ul>
   </nav>
      
      @yield('content1')

</body>
</html>