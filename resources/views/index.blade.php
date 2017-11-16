<!DOCTYPE html>
<html>
<head>
	<title>简夏莳光</title>
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
		      <a class="navbar-brand" href="#"><img src="./imgs/logo.png" alt="简夏莳光"></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#"><i class="glyphicon glyphicon-flag"></i> 编程杂志 <span class="sr-only">(current)</span></a></li>
		        <li><a href="#"><i class="glyphicon glyphicon-book"></i> MYSQL指南</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-fire" style="color: rgb(190,137,103)"></i> PHP 指南 <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">PHP 基础教程</a></li>
		            <li><a href="#">PHP 高级教程</a></li>
		            <li><a href="#">PHP 特级教程</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">PHP 视频教程</a></li>
		          </ul>
		        </li>
		        <!-- <li><a href="#"><i class="glyphicon glyphicon-book"></i> JAVA 基础教程 <span class="sr-only">(current)</span></a></li> -->
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
		        <li><a href="#">退出</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		          <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1511350588&di=c4850c00f0137bdd261f17f1fa98ff8c&imgtype=jpg&er=1&src=http%3A%2F%2Fimg.mp.sohu.com%2Fq_mini%2Cc_zoom%2Cw_640%2Fupload%2F20170624%2F7cdfadc2a5bd491e8dfff62ada3c4fad.jpg" class="img-circle" style="width: 35px;height: 35px;"> <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		</ol>

	  	<!-- Wrapper for slides -->
	  	<div class="carousel-inner" role="listbox">
	    	<div class="item active">
	      	<img src="./imgs/banner1.png" alt="php">
	      	<div class="carousel-caption">
	       		PHP基础教程，购买vip送妹子呦	
	      	</div>
	    </div>
	   	<div class="item">
	      	<img src="./imgs/banner2.png" alt="java">
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
	<div class="bodyer container">
		<div>
		  	<!-- Nav tabs -->
		  	<ul class="nav nav-tabs" role="tablist">
		  		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">最新文章</a></li>
		    	<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">热门文章</a></li>
		    	<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">电子书下载</a></li>
		    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">购买纸质旧书</a></li>
		  	</ul>
		  	<!-- Tab panes -->
		  	<div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="home">
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/laravel.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">
			    				数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!
			    				see? 提取文本和属性只需要像jquery那样获取即可, 这里获取了两个内容, title标签和a标签, 这样就不用再写那么多正则了. 数据采集变得非常的easy!!!
			    				see? 提取文本和属性只需要像jquery那样获取即可, 这里获取了两个内容, title标签和a标签, 这样就不用再写那么多正则了. 数据采集变得非常的easy!!!
			    			</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/zhizu.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/laravel.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/zhizu.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/laravel.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/zhizu.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/laravel.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/zhizu.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/laravel.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    </div>

			    <div role="tabpanel" class="tab-pane" id="profile">
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/https.png" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">
			    				数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!
			    				see? 提取文本和属性只需要像jquery那样获取即可, 这里获取了两个内容, title标签和a标签, 这样就不用再写那么多正则了. 数据采集变得非常的easy!!!
			    				see? 提取文本和属性只需要像jquery那样获取即可, 这里获取了两个内容, title标签和a标签, 这样就不用再写那么多正则了. 数据采集变得非常的easy!!!
			    			</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/zhizu.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/laravel.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/zhizu.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/laravel.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/zhizu.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/laravel.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/zhizu.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    	<hr>	
			    	<div class="row new-article">
			    		<div class="col-md-4">
			    			<img src="/imgs/laravel.jpg" class="img-rounded">
			    		</div>
			    		<div class="col-md-8">
			    			<h2><a href="#">不一样的数据采集</a></h2>
			    			<p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
			    			<p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
			    		</div>
			    	</div>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="messages">
			    	<div class="row e-book">
			    		<div class="col-md-4">
			    			<img src="//img11.360buyimg.com/n1/jfs/t4387/13/3609456811/30176/e818e490/58ff9806Nbd3b48a9.jpg" class="img-rounded" alt="PHP设计模式-简夏莳光">
			    		</div>
			    		<div class="col-md-8">
			    			<h2>
			    				<a href="#">PHP 设计模式</a>
			    			</h2>
			    			<hr>
			    			<div class="row">
			    				<div class="col-md-4">
			    					<p>出版社： 中国电力出版社</p>
			    					<p>ISBN：9787512352728</p>
			    					<p>版次：1</p>
			    				</div>
			    				<div class="col-md-4">
			    					<p>外文名称：Learning PHP ...</p>
			    					<p>出版时间：2014-02-01</p>
			    					<p>正文语种：中文</p>
			    				</div>
			    				<div class="col-md-4">
			    					<p>出版时间：2014-02-01</p>
			    					<p>作者：张春博、张凯、邓全泉</p>
			    					<p>
			    						<a href="#" class="btn btn-default">下载</a>
			    						<a href="#" class="btn btn-default">在线阅读</a>
			    					</p>
			    				</div>
			    			</div>
			    			<h2>内容简介</h2>
			    			<hr>
			    			<p>
			    				通过学习如何在代码中使用设计模式，可以更高效地构建服务器端应用，在这个过程中，你的php编程水平也将逐步提高。本书利用大量浅显易懂的例子告诉你如何应用多种面向对象模式，并展示了这些模式在一些成熟的实际项目中的具体应用。需要学习这些可重用的模式如何帮助你解决复杂的问题，如何组织面向对象代码，以及只改变一些小部分来完成整个大项目的修改。利用你手上的这本《learningphp设计模式》，将了解如何采用一种更精巧的编程风格，这将大大减少开发时间。
			    			</p>
			    		</div>
			    	</div>
			    	<hr>
			    	<div class="row e-book">
			    		<div class="col-md-4">
			    			<img src="//img11.360buyimg.com/n1/jfs/t1912/312/2154851930/104708/d5295cd3/56f63c22Nbb294bc0.jpg" class="img-rounded" alt="PHP经典实例-简夏莳光">
			    		</div>
			    		<div class="col-md-8">
			    			<h2>
			    				<a href="#">PHP 经典实例</a>
			    			</h2>
			    			<hr>
			    			<div class="row">
			    				<div class="col-md-4">
			    					<p>出版社： 中国电力出版社</p>
			    					<p>ISBN：9787512352728</p>
			    					<p>版次：1</p>
			    				</div>
			    				<div class="col-md-4">
			    					<p>外文名称：Learning PHP ...</p>
			    					<p>出版时间：2014-02-01</p>
			    					<p>正文语种：中文</p>
			    				</div>
			    				<div class="col-md-4">
			    					<p>出版时间：2014-02-01</p>
			    					<p>作者：张春博、张凯、邓全泉</p>
			    					<p>
			    						<a href="#" class="btn btn-default">下载</a>
			    						<a href="#" class="btn btn-default">在线阅读</a>
			    					</p>
			    				</div>
			    			</div>
			    			<h2>内容简介</h2>
			    			<hr>
			    			<p>
			    				想要掌握PHP编程技术？或者想要学习如何完成一个特定的任务？那么一定要先看看《PHP经典实例（第3版）》。本书介绍了专门为PHP 5.4和5.5修订的350个经典技巧，并提供了丰富的示例代码。特别是对生成动态Web内容的解决方案做了全面更新，从使用基本数据类型到查询数据库，从调用RESTful API到测试和保护网站安全都有涵盖。
							　　各个技巧都提供了示例代码，可以免费使用，另外还讨论了如何解决问题以及这些解决方案为什么可行。不论你是经验丰富的PHP程序员		，还是刚从其他语言转到PHP，本书都是一个理想的实用资源。
							　　《PHP经典实例（第3版）》提供的技巧包括：
							　　基本数据类型：字符串、数字、数组和日期时间。
							　　程序构建模块：变量、函数、类和对象。
							　　Web编程：cookie、表单、会话和认证。
							　　使用PDO、SQLite和其他扩展访问数据库。
							　　RESTful API客户端和服务器，包括HTTP、XML和OAuth。
							　　重要概念：email、正则表达式和图形创建。
							　　设计健壮的应用：安全和加密、错误处理、调试和测试，以及性能调优。
							　　文件、目录和PHP的命令行接口。
							　　库和包管理器，如Composer和PECL。
			    			</p>
			    		</div>
			    	</div>
			    	<hr>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="settings">
			    	<div class="row e-book">
			    		<div class="col-md-4">
			    			<img src="//img11.360buyimg.com/n1/jfs/t4387/13/3609456811/30176/e818e490/58ff9806Nbd3b48a9.jpg" class="img-rounded" alt="PHP设计模式-简夏莳光">
			    		</div>
			    		<div class="col-md-8">
			    			<h2>
			    				<a href="#">PHP 设计模式 <span class="price">￥10</span></a>
			    			</h2>
			    			<hr>
			    			<div class="row">
			    				<div class="col-md-4">
			    					<p>出版社： 中国电力出版社</p>
			    					<p>ISBN：9787512352728</p>
			    					<p>版次：1</p>
			    				</div>
			    				<div class="col-md-4">
			    					<p>外文名称：Learning PHP ...</p>
			    					<p>出版时间：2014-02-01</p>
			    					<p>正文语种：中文</p>
			    				</div>
			    				<div class="col-md-4">
			    					<p>作者：张春博、张凯、邓全泉</p>
			    					<p>售价：10元（邮费到付）</p>
			    					<p>
			    						<a href="#" class="btn btn-default">购买</a>
			    					</p>
			    				</div>
			    			</div>
			    			<h2>内容简介</h2>
			    			<hr>
			    			<p>
			    				通过学习如何在代码中使用设计模式，可以更高效地构建服务器端应用，在这个过程中，你的php编程水平也将逐步提高。本书利用大量浅显易懂的例子告诉你如何应用多种面向对象模式，并展示了这些模式在一些成熟的实际项目中的具体应用。需要学习这些可重用的模式如何帮助你解决复杂的问题，如何组织面向对象代码，以及只改变一些小部分来完成整个大项目的修改。利用你手上的这本《learningphp设计模式》，将了解如何采用一种更精巧的编程风格，这将大大减少开发时间。
			    			</p>
			    		</div>
			    	</div>
			    	<hr>
			    	<div class="row e-book">
			    		<div class="col-md-4">
			    			<img src="//img11.360buyimg.com/n1/jfs/t1912/312/2154851930/104708/d5295cd3/56f63c22Nbb294bc0.jpg" class="img-rounded" alt="PHP经典实例-简夏莳光">
			    		</div>
			    		<div class="col-md-8">
			    			<h2>
			    				<a href="#">PHP 经典实例 <span class="price">￥10</span></a>
			    			</h2>
			    			<hr>
			    			<div class="row">
			    				<div class="col-md-4">
			    					<p>出版社： 中国电力出版社</p>
			    					<p>ISBN：9787512352728</p>
			    					<p>版次：1</p>
			    				</div>
			    				<div class="col-md-4">
			    					<p>外文名称：Learning PHP ...</p>
			    					<p>出版时间：2014-02-01</p>
			    					<p>正文语种：中文</p>
			    				</div>
			    				<div class="col-md-4">
			    					<p>作者：张春博、张凯、邓全泉</p>
			    					<p>售价：10元（邮费到付）</p>
			    					<p>
			    						<a href="#" class="btn btn-default">购买</a>
			    					</p>
			    				</div>
			    			</div>
			    			<h2>内容简介</h2>
			    			<hr>
			    			<p>
			    				想要掌握PHP编程技术？或者想要学习如何完成一个特定的任务？那么一定要先看看《PHP经典实例（第3版）》。本书介绍了专门为PHP 5.4和5.5修订的350个经典技巧，并提供了丰富的示例代码。特别是对生成动态Web内容的解决方案做了全面更新，从使用基本数据类型到查询数据库，从调用RESTful API到测试和保护网站安全都有涵盖。
							　　各个技巧都提供了示例代码，可以免费使用，另外还讨论了如何解决问题以及这些解决方案为什么可行。不论你是经验丰富的PHP程序员		，还是刚从其他语言转到PHP，本书都是一个理想的实用资源。
							　　《PHP经典实例（第3版）》提供的技巧包括：
							　　基本数据类型：字符串、数字、数组和日期时间。
							　　程序构建模块：变量、函数、类和对象。
							　　Web编程：cookie、表单、会话和认证。
							　　使用PDO、SQLite和其他扩展访问数据库。
							　　RESTful API客户端和服务器，包括HTTP、XML和OAuth。
							　　重要概念：email、正则表达式和图形创建。
							　　设计健壮的应用：安全和加密、错误处理、调试和测试，以及性能调优。
							　　文件、目录和PHP的命令行接口。
							　　库和包管理器，如Composer和PECL。
			    			</p>
			    		</div>
			    	</div>
			    	<hr>
			    </div>
		  	</div>
		</div>
	</div>
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>