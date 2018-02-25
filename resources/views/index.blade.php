<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Html5xCss3 dot com - Free Responsive Html5 Templates">
    <meta name="author" content="#">
	
    <title>SimplePix | Free Html5 Templates by </title>
	
	
	<link rel="stylesheet" href="css/menu.css">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	
	<link rel="stylesheet" href="css/lightbox.css">
	
	<!-- Core JavaScript Files -->  	 
    
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<div class="header">
		<div id='cssmenu' >
			<ul>
			   <li class="active"><a href="{{ route('index') }}"><span>首页展示</span></a></li>
			   <li class=' has-sub'><a href='#'><span>照片分类</span></a>
				  <ul>
					 <li class='has-sub'><a href='#'><span>分类1</span></a>
						<ul>
						   <li><a href='#'><span>Sub Item</span></a></li>
						   <li class='last'><a href='#'><span>Sub Item</span></a></li>
						</ul>
					 </li>
					 <li class='has-sub'><a href='#'><span>分类2</span></a>
						<ul>
						   <li><a href='#'><span>Sub Item</span></a></li>
						   <li class='last'><a href='#'><span>Sub Item</span></a></li>
						</ul>
					 </li>
				  </ul>
			   </li>
			   <li><a href='#'><span>Gallery</span></a></li>
			   <li><a href='single.html'><span>About</span></a></li>
			   <li class='last'><a href='contact.html'><span>Contact</span></a></li>
				@if(Session::has('user_info'))
					<li class='last'><a href='contact.html'><span>{{ Session::get('user_info.name') }}</span></a></li>
				@else
					<li class='last'><a href='contact.html'><span>登陆</span></a></li>
				@endif
			</ul>
		</div>
	</div>
	<div id="page-content" class="index-page">
		<div id="container">
			<!-- These are our grid blocks -->
			<div class="item">
				<a class="example-image-link" href="images/25.jpg" data-lightbox="example-set" data-title="点击两侧按钮切换上下张图片"><img class="example-image" src="images/25.jpg" alt=""/></a>
				<div class="content-item">
					<h3 class="title-item"><a href="single.html">Children</a></h3>
					<div class="time"> SEPTEMBER 30TH</div>
					<p class="info">Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.Aenean feugiat in ante et blandit, Vestibulum e risu. Aenean feugiat in ante et blandit.</p>
					
				</div>
				<div class="bottom-item">
					<a href="#" class="btn btn-share share"><i class="fa fa-share-alt"></i> Share</a>
					<a href="#" class="btn btn-like"><i class="fa fa-heart-o"></i></a>
					<a href="#" class="btn btn-comment"><i class="fa fa-comment-o"></i></a>
					<a href="single.html" class="btn btn-more"><i class="fa fa-long-arrow-right "></i></a>
				</div>
			</div>
		</div>
	</div>
    <!-- Once the page is loaded, initialized the plugin. -->
    <script type="text/javascript" src="js/jquery-2.1.1.js" ></script>
	
	<!-- jQuery Pinterest -->
    <script type="text/javascript" src="js/jquery.pinto.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	
	<!-- Light Box -->
	<script src="js/lightbox-plus-jquery.min.js"></script>
	
	<!-- Menu -->
	<script src="js/script.js"></script>
	
	<script type="text/javascript">
		$('#container').pinto();
	</script>
	
</body>
</html>