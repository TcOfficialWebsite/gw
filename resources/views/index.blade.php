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
		  <div class="container-fluid">
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
		        <li class="active"><a href="#"><i class="glyphicon glyphicon-flag"></i> PHP基础教程 <span class="sr-only">(current)</span></a></li>
		        <li><a href="#"><i class="glyphicon glyphicon-book"></i> PHP高级教程</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-fire" style="color: red"></i> PHP视频教程 <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		        <li><a href="#"><i class="glyphicon glyphicon-book"></i> JAVA基础教程 <span class="sr-only">(current)</span></a></li>
		        <li><a href="#"><i class="glyphicon glyphicon-download-alt"></i> 编程杂志</a></li>
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
		          <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1511350588&di=c4850c00f0137bdd261f17f1fa98ff8c&imgtype=jpg&er=1&src=http%3A%2F%2Fimg.mp.sohu.com%2Fq_mini%2Cc_zoom%2Cw_640%2Fupload%2F20170624%2F7cdfadc2a5bd491e8dfff62ada3c4fad.jpg" class="img-circle" style="width: 50px;height: 50px;"> <span class="caret"></span></a>
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
		    	<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
		    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
		  	</ul>
		  	<!-- Tab panes -->
		  	<div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="home">
			    	111111111111111111111111<br>
			    	111111111111111111111111<br>
			    	111111111111111111111111<br>
			    	111111111111111111111111<br>
			    	111111111111111111111111<br>
			    	111111111111111111111111<br>
			    	111111111111111111111111<br>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="profile">
			    	222222222222222222222222<br>
			    	222222222222222222222222<br>
			    	222222222222222222222222<br>
			    	222222222222222222222222<br>
			    	222222222222222222222222<br>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="messages">
			    	333333333333333333333333<br>
			    	333333333333333333333333<br>
			    	333333333333333333333333<br>
			    	333333333333333333333333<br>
			    	333333333333333333333333<br>
			    	333333333333333333333333<br>
			    	333333333333333333333333<br>
			    	333333333333333333333333<br>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="settings">
			    	4444444444444444444444444<br>
			    	4444444444444444444444444<br>
			    	4444444444444444444444444<br>
			    	4444444444444444444444444<br>
			    	4444444444444444444444444<br>
			    	4444444444444444444444444<br>
			    	4444444444444444444444444<br>
			    	4444444444444444444444444<br>
			    </div>
		  	</div>
		</div>
	</div>
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>