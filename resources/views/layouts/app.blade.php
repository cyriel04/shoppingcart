<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/ico" href="do.ico"/>
    <title>  @yield('title') - OBS</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.semanticui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="do.ico" alt="logo" width="25px;" height="25px;" style="float: left; margin-top: 13px;" />
      <a class="navbar-brand" href="{{ route('home') }}">&nbsp BayCurry Shop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">


        <li style="margin-top: 15px;" id="clock">
        </li>

        <li>
            <a href="{{route('product.shoppingCart')}}"><i class="shop icon"></i> Shopping Cart
                <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
            </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if(Auth::check())
                <li><a href="{{ route('user.profile') }}">User Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('user.logout')}}">Logout</a></li>
            @else
                <li><a href="{{ route('user.signup') }}">Sign Up</a></li>
                <li><a href="{{ route('user.signin') }}">Sign In</a></li>
            @endif
            
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <div class="pusher">
        <div class="ui basic segment">
            <div class="ui container">
                @yield('content')
            </div>
        </div>
    </div>









 




            
        <div class="copyright">
            <ul>
                <li><span>© 2017 <a href="http://bakerymobato.herobo.com/">BAKERYMOBATO BAKERY</a></span></li>
                <li><span>ALL RIGHTS RESERVED</span></li>
            </ul>
        </div><br>




    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58d2a370d996840012c0285d&product=sticky-share-buttons"></script>


    
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/semantic.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.semanticui.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mask.js')}}"></script>
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(".dropdown-toggle").dropdown();

    function startTime() {
            var today = new Date();
            var utc = today.toJSON().slice(0,10).replace(/-/g,'/');
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            var ampm = h >= 12 ? 'PM' : 'AM';
            h = h % 12;
            h = h ? h : 12; // the hour '0' should be '12'
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('clock').innerHTML =
            utc + " " + h + ":" + m + ":" + s + ' ' + ampm;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }

        $(document).ready(function()
        {
           setInterval('startTime()', 1000);

           
        });
        
    



    </script>

    @yield('js')








    <style type="text/css">
    ul {
    list-style: none; /* Remove list bullets */
    
    }
.copyright{width:960px;margin:0 auto;text-align:center; max-width:100%;}
.copyright a {}
.copyright a:hover {color:#229d8a;}

    </style>
</body>
</html>
