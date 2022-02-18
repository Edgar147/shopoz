<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Welcome to ShopOz</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
        <div class="navbar navbar-dark bg-dark box-shadow justify-content-end">

            @if (Route::has('login'))
                    @auth
                        <a   class="p-2" href="{{ url('/home') }}">Home</a>
                    @else
                        <a  class="text-warning" class="p-2" href="{{ route('login') }}"  >Sign in</a>
<span style="color:white;">&nbsp;or&nbsp;&nbsp;</span>
                        @if (Route::has('register'))
                            <a   href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
</div>


<div  class="card mx-auto" style="width: 50%;margin-top:10px;">
<div class="card-body bg-dark">
    <p style="color:white" class="card-text text-center ">Welcome  to our e-commerce website...</p>
  </div>
  <img class="card-img-top" src="{{URL::asset('/welcome.jpg')}}" alt="Card image cap">
 
</div>


    </body>
</html>
