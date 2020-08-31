<!doctype html>
<html lang="zh-CN">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>土味儿情话 - 很肉麻很腻人又有点乡土感的情话！</title>
	<meta name="description" content="1000多条经典土味儿情话,是居家必备，情侣喜爱的制胜法宝。">
	<meta name="keywords" content="情话,土味儿情话,土味情话">
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<meta name="author" content="Duke Yin" />
	<meta name="apple-mobile-web-app-status-bar-style" content="default" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-title" content="土味情话" />
	<meta property="og:title" content="土味儿情话 - 很肉麻很腻人又有点乡土感的情话！" />
	<meta property="og:url" content="https://www.dukeyin.com/love/" />
	<meta property="og:image" content="./img/logo.svg" />
	<meta property="og:site_name" content="土味儿情话 - 很肉麻很腻人又有点乡土感的情话！" />
	<meta property="og:description" content="1000多条经典土味儿情话,是居家必备，情侣喜爱的制胜法宝。"/>
	<link rel="icon" href="./img/icons/icon-512x512.png" type="image/x-icon" id="page_favionc">
	<link href="./style.css" rel="stylesheet">
	<link rel="alternate icon" type="image/png" href="./img/icons/icon-512x512.png">
	<link rel="apple-touch-icon-precomposed" href="./img/icons/icon-512x512.png">
	<link rel="manifest" href="./manifest.json">
	<link rel="stylesheet" href="//cdn.staticfile.org/animsition/4.0.2/css/animsition.min.css">
	<script src="//cdn.staticfile.org/jquery/1.11.0/jquery.min.js"></script>
	<script src="//cdn.staticfile.org/animsition/4.0.2/js/animsition.min.js"></script>
</head>
<body>
<div class="top-wrap"> 
<div class="container">
	<div class="row" style="margin-top: 30px;">
	    <div class="col">
	      <a href="" id="logo_a"><img class="logo" src="./img/logo.svg" alt="土味儿情话"></a>
	    </div>
	    <div class="col">
	    	<div class="float-right">
	    		<a class="btn btn-primary" href="https://github.com/yduke/love" target="_blank">GitHub</a>
	    	</div>
	    </div>
		</div>
</div>
</div>
<div class="main-wrapper animsition">
	<div class="container main-sentence justify-content-center text-center">
		<div class="row">
			<span id="sentence" style=""><script src="api.php"></script></span>
		</div>
		<div class="row">
			<span id="bar" data-progress="10"></span>
		</div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="row" style="margin-bottom:60px">
			<div class="col text-center">
			<a class="btn btn-primary btn-filled btn-sm" href="">
			<img class="reload" src="./img/reload.svg" alt="Reload">换一句
			</a>
			</div>
		</div>
		<div class="row">
			<div class="col text-center">
	            <p>by <a target="_blank" href="https://www.dukeyin.com/">Duke Yin</a></p>
	    </div>
  		</div>
	</div>
</div>
<script>
window.onload = function(){
	var bar = document.getElementById("bar");
	var int=setInterval(function(){
		bar.dataset.progress--;
		if(bar.dataset.progress<=9){
			bar.dataset.progress='0'+ bar.dataset.progress;
			bar.style.width = bar.dataset.progress *10-10 +'%'
		}
		if(bar.dataset.progress==0){
			clearInterval(int);
			window.location.reload();
		}
	},1000);
};
jQuery(document).ready(function($){
 $('.main-wrapper').animsition({
	inDuration: 800,
    outDuration: 200,
	linkElement: 'a:not([target="_blank"]):not([href^="#"])',
	timeout: true,
	timeoutCountdown: 5000,
 });
url = window.location.href;
$('#logo_a').attr("href",url);
 });
</script>
</body>
</html>