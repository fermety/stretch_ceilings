<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Натяжные потолки: @yield('title')</title>
    <link href="/css/style.css" rel="stylesheet"> 
    <link href="https://fonts.fontstorage.com/import/baronneue.css" rel = "stylesheet">      
    <link href="https://fonts.fontstorage.com/import/fog6.css" rel = "stylesheet">      
    <link href="https://fonts.fontstorage.com/import/arnamu.css" rel = "stylesheet">      
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet">    
  </head>
  <body>  
    <div class = "container">
      <div class = "container__inner">        
          <div class = "container__logo">ALSO</div>
          <nav class = "nav">
              <a class="nav__link" href="{{ route('index') }}">Главная</a>
              <a class="nav__link" href="{{ route('company') }}">О компании</a>
              <a class="nav__link" href="{{ route('type') }}">Виды натяжных потолков</a>
              <a class="nav__link" href="{{ route('gallary') }}">Галерея</a>
              <a class="nav__link" href="#content3">Контакты</a>
          </nav>
      </div>        
  </div>  
    @yield('content')
    <div id = "content3" class = "epilogue">
        <div class = "epilogue__inner">
          <div class = "epilogue__logo">ALSO</div>        
          <div class = "epilogue__contacts">
            <p class = "epilogue__phone">8 (906) 426 56 49</p>
            <p class = "epilogue__adress">Пн.-Вс. с 8.00 до 20.00</p>
            <p class = "epilogue__adress">sergant5@mail.ru</p>
          </div>                  
        </div>
      </div>     
  </body>
</html>