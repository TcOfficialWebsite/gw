<!DOCTYPE html>
<html>
<head>
    <title>简夏莳光 - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/comman.css">
</head>
<body>
    <header role="banner">
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="/imgs/logo.png" alt="简夏莳光"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i> 首页</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-book"></i> Blog <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-road"></i> PHP 完全教程 <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">PHP 基础教程</a></li>
                    <li><a href="#">PHP 高级教程</a></li>
                    <li><a href="#">PHP 特级教程</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">PHP 视频教程</a></li>
                  </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-download-alt"></i> 资料下载 </a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
                          </span>
                        </div><!-- /input-group -->
                  </form>
                <!-- <li><a href="#">退出</a></li> -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <img src="/imgs/logo.png" class="img-circle" style="width: 35px;height: 35px;"> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">退出登录</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    @section('carousel')
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/imgs/banner1.png" alt="php">
                <div class="carousel-caption">
                    PHP基础教程，购买vip送妹子呦   
                </div>
            </div>
            <div class="item">
                <img src="/imgs/banner2.png" alt="java">
                <div class="carousel-caption">
                    JAVA基础教程，购买vip送妹子呦  
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    @show
    <div class="bodyer container">
        @yield('content')
    </div>
    @section('footer')
    <div class="footer">
        <div class="container">
          <div class="row footer-top">
            <div class="col-sm-6 col-lg-6">
              <h4>
                <img src="/imgs/logo.png" alt="简夏莳光">
              </h4>
              <p>简夏莳光由一群编程爱好者共同维护的社区，初衷是让广泛的it界同仁们有一个相对干净整洁的获取知识的平台。所有教程为<a href="http://www.jianxiashiguang.com/">简夏莳光</a>的成员编写、翻译，整理。 <img  style="cursor: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1397259493&o=jianxiashiguang.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');"  border="0" SRC=http://wpa.qq.com/pa?p=1:1397259493:10 alt="联系我们"></p>
            </div>
            <div class="col-sm-6  col-lg-5 col-lg-offset-1">
              <div class="row about">
                <div class="col-xs-4">
                  <h4>关于</h4>
                  <ul class="list-unstyled">
                    <li><a href="/about/">关于我们</a></li>
                    <li><a href="/ad/">广告合作</a></li>
                    <li><a href="/links/">友情链接</a></li>
                    <li><a href="/hr/">招聘</a></li>
                  </ul>
                </div>
                <div class="col-xs-4">
                  <h4>联系方式</h4>
                  <ul class="list-unstyled">
                    <li><a href="http://weibo.com/jxsg" title="简夏莳光官方微博" target="_blank">新浪微博</a></li>
                    <li><a href="mailto:jxsg@163.com">电子邮件</a></li>
                  </ul>
                </div>
                <div class="col-xs-4">
                  <h4>精品教程</h4>
                  <ul class="list-unstyled">
                    <li><a href="http://www.golaravel.com/" target="_blank">HTML5+CSS3</a></li>
                    <li><a href="http://www.ghostchina.com/" target="_blank">PHP</a></li>
                    <li><a href="http://www.ghostchina.com/" target="_blank">JAVA</a></li>
                    <li><a href="http://www.ghostchina.com/" target="_blank">Redis工作原理</a></li>
                  </ul>
                </div>
               <!--  <div class="col-xs-3">
                  <h4>赞助商</h4>
                  <ul class="list-unstyled">
                    <li><a href="https://www.upyun.com" target="_blank">又拍云</a></li>
                  </ul>
                </div> -->
              </div>
      
            </div>
          </div>
          <hr>
          <div class="row footer-bottom">
            <ul class="list-inline text-center">
              <li><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备1100fd8151号</a></li><li>京公网安备110103434802014853</li>
            </ul>
          </div>
        </div>
    </div>
    @show
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>