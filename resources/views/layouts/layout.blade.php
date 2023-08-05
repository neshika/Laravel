<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Симулятор заводчика</title>

     <!-- Подключение CSS файла bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Далее может идти подключение любого другого CSS файла сайта -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    {{--menu --}}
 <nav class="container-xxl">
            <div class="row align-items-center p-2">
                <div class="col">
                    <h1>Симулятор заводчика</h1>
                </div>
                <div class="col">
                  
                </div>
                <div class="col">
                    <img src="{{asset('images/logo_mini.png')}}">
                </div>
              </div>
           
        <div id="nav">
            <ul>
                <li><a href="/"><span>главная</span></a></li>
                <li><a href="{{route('office.index')}}"><span>офис</span></a></li>

                <li class="dropdown">
                    <a href="/"><span>Админка</span></a>
                    <ul>
                        <li><a href="/"><span>всехПоказать</span></a></li>
                        <li><a href="{{route('kennel.create')}}"><span>создатьПитомник</span></a></li>
                        <li><a href="{{route('kennel.index')}}"><span>Питомники</span></a></li>
                         <li><a href="{{route('image.create')}}"><span>создать картинку</span></a></li>
                        
                    </ul>
                </li>
                <li><a href="#">выйти</a></li>
            </ul>
        </div>
    </nav>



    @yield('content')


    {{--footer--}}
    <footer class="text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3">
    © 2020 Copyright:
    <a class="text-light" href="">Симулятор заводчика</a>
  </div>
  <!-- Copyright -->
</footer>
   

<!-- Подключение JS файла Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- Подключение JS файла Bootstrap с плагинами -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script></body>
   
   
</body>
</html>