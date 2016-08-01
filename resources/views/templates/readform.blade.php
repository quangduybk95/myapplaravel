<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="{{ URL::asset('//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css') }}"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
  .letter{position:relative;top:-webkit-calc(50% - 60px);top:calc(50% - 60px);text-shadow:0px 0px 3px white}.letter:nth-child(1){-webkit-animation:fade 4s infinite 200ms;animation:fade 4s infinite 200ms}.letter:nth-child(2){-webkit-animation:fade 4s infinite 400ms;animation:fade 4s infinite 400ms}.letter:nth-child(3){-webkit-animation:fade 4s infinite 600ms;animation:fade 4s infinite 600ms}.letter:nth-child(4){-webkit-animation:fade 4s infinite 800ms;animation:fade 4s infinite 800ms}.letter:nth-child(5){-webkit-animation:fade 4s infinite 1000ms;animation:fade 4s infinite 1000ms}.letter:nth-child(6){-webkit-animation:fade 4s infinite 1200ms;animation:fade 4s infinite 1200ms}.letter:nth-child(7){-webkit-animation:fade 4s infinite 1400ms;animation:fade 4s infinite 1400ms}.letter:nth-child(8){-webkit-animation:fade 4s infinite 1400ms;animation:fade 4s infinite 1600ms}.letter:nth-child(9){-webkit-animation:fade 4s infinite 1400ms;animation:fade 4s infinite 1800ms}.letter:nth-child(10){-webkit-animation:fade 4s infinite 1400ms;animation:fade 4s infinite 2000ms}@-webkit-keyframes fade{50%{opacity:0.02}}@keyframes fade{50%{opacity:0.02}.jumbotron{color:blue;background-color:#000022}}</style>
  <title>Truyện Hay</title>
</head>
<body>
  <div class="container">
    <div class="content">
      <!--navbar-->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"href="index.php"><big>Truyện Hay</big></a>
          </div>

          <!-- Collect the nav links,forms,and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Danh mục<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="https://google.com">Info</a></li>
                  <li><a href="#">Notication</a></li>
                  <li><a href="#">Pay</a></li>
                  <li class="divider"></li>
                  <li><a href="#">More...</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
             <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm">
              </div>
              <button type="submit" class="btn btn-default canle"><i class="fa fa-search"></i></button>
            </form>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  
<!--jumbotron-->

<div class="jumbotron text-center"><h1><span class='letter'>T</span><span class='letter'>R</span><span class='letter'>U</span><span class='letter'>Y</span>Ệ<span class='letter'>N</span><span class='letter'> </span><span class='letter'>H</span><span class='letter'>A</span><span class='letter'>Y</span><span class='letter'>!</span><small> Đọc là mê </small></h1>
</div>

@yield('content')

<hr>

<!--footer-->
<div class="row text-center">
  <div class="col-xs-12 col-md-12 footer">
    <br>
    <p>Dương Quang Duy</p>
    <p>Bách Khoa Hà Nội</p>
    <br>

  </div>
  <br>
  <br>
  <br>
  <br>
</div>
</body>
<style type="text/css">
 .danhmuc{background-color:#CFCFCF}
 body{background-color: #09020C}.hienthi{height:140px;margin-bottom:20px}.hienthi:hover{border-color:blue;box-shadow:0 0 5px 5px #B5B5B5}.hang{margin-bottom:20px}.footer{color:white}.jumbotron{color:blue;background-color:#000022;margin-top: 10px}
 .canle{margin-right: 10px;}

</style>

</html>