<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/ico" href="do.ico"/>
  <title>@yield('title') - OBS</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.semanticui.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
</head>
<body>
  <div class="ui top attached menu">
    <a id="toggle" class="item">
      <i class="sidebar icon"></i>
      Menu
    </a>
    <div class="item">
    <img src="do.ico" alt="logo" width="25px;" height="25px;" style="float: left;" />
      <a class="navbar-brand" href="{{ route('home') }}">&nbsp BayCurry Shop</a>
    </div>
    <div class="right menu">
      
        <div class="item" id="clock">
        
      </div>
    </div>
  </div>

  </div>
  <div class="ui bottom attached segment">
    <div class="ui wide inverted left inline vertical sidebar menu">
      <div class="item">
        <strong>ONLINE BAKERY SHOP</strong>
      </div>
    <a href="{{ route('home') }}" class="item"><strong>HOMEPAGE</strong></a>
    <div class="item">
      <strong>MAINTENANCE</strong><br><br>
      <div class="row">
        <div class="ui inverted accordion">

          <div class="title">
            <i class="dropdown icon"></i>
            Products
          </div>
          <div class="content">
            <a href="{{ url('/') }}" class="item">Title</a>
            <a href="{{ url('/') }}" class="item">Price</a>
           
          </div>

       </div>
    </div>
    <div class="item">
      <strong>REPORTS</strong><br><br>
      <a href="#" class="item">Client Report</a>
      <a href="{{ route('pdf') }}" class="item">Sales Report</a>
    </div>
    </div>
    </div>
    <div class="row"></div>
    <div class="pusher">
      <div class="ui basic segment">
        <div class="ui container">
            @yield('content')
        </div>
      </div>
    </div>

  <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/semantic.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.dataTables.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/dataTables.semanticui.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/mask.js')}}"></script>

  <script type="text/javascript">
    $('.ui.sidebar').sidebar({
        context: $('.bottom.segment')
      })
      .sidebar('attach events', '#toggle');
    $('.ui.accordion').accordion();

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
</body>
</html>
