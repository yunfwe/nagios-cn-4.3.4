<?php
include_once(dirname(__FILE__).'/includes/utils.inc.php');

$this_version = '4.3.4';
$link_target = 'main';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>

<head>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<title>综合监控</title>
<link href="stylesheets/common.css?<?php echo $this_version; ?>" type="text/css" rel="stylesheet">
<!-- <link href="bootstrap-3.3.0/css/bootstrap.min.css" type="text/css" rel="stylesheet"> -->
<link href="stylesheets/layui.css" type="text/css" rel="stylesheet">
</head>


<body class='navbar'>

<div class="navbarlogo">
	<!--<a href="https://www.nagios.org" target="_blank"><img src="images/sblogo.png" height="39" width="140" border="0" alt="Nagios" /></a>-->
	<!-- <h1><a href="/nagios">综合监控</a></h1> -->
	<h1 style="font-size: 30px;margin-top:5px;">综合监控</h1>
</div>

	<div class="navbarsearch">
		<form method="get" action="<?php echo $cfg["cgi_base_url"];?>/status.cgi" target="<?php echo $link_target;?>" class="layui-form">
			<!-- <fieldset>
				<legend>快速搜索:</legend>
				<input type='hidden' name='navbarsearch' value='1'>
				<input type='text' name='host' size='15' class="NavBarSearchItem">
			</fieldset> -->
			<fieldset>
				<div class="layui-form-item">
    			<label for="search"></label>
    			<input name='host' type="text" class="layui-input" id="search" placeholder="快速查找（主机IP）">
			  </div>
			</fieldset>
		</form>
	</div>
<!--<div class="navsection">
	<div class="navsectiontitle">常用</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li><a href="main.php" target="<?php echo $link_target;?>">主页</a></li>
			<li><a href="https://go.nagios.com/nagioscore/docs" target="_blank">文档(英文)</a></li>
		</ul>
	</div>
</div>-->

<div class="navsection">
	<div class="navsectiontitle">当前状态</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/tac.cgi" target="<?php echo $link_target;?>">状态总览</a></li>
			<li>
				<a href="map.php?host=all" target="<?php echo $link_target;?>">拓扑图</a>
				<a href="<?php echo $cfg["cgi_base_url"];?>/statusmap.cgi?host=all" target="<?php echo $link_target;?>">(遗留)</a>
			</li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=hostdetail" target="<?php echo $link_target;?>">主机</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all" target="<?php echo $link_target;?>">服务</a></li>
			<li>
				<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=overview" target="<?php echo $link_target;?>">主机组</a>
				<ul>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=summary" target="<?php echo $link_target;?>">摘要</a></li>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=grid" target="<?php echo $link_target;?>">网格</a></li>
				</ul>
			</li>
			<li>
				<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&amp;style=overview" target="<?php echo $link_target;?>">服务组</a>
				<ul>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&amp;style=summary" target="<?php echo $link_target;?>">摘要</a></li>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&amp;style=grid" target="<?php echo $link_target;?>">网格</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="navsectionheader">
		<ul>
			<li>故障
				<ul>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all&amp;servicestatustypes=28" target="<?php echo $link_target;?>">服务</a> (<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all&amp;type=detail&amp;hoststatustypes=3&amp;serviceprops=10&amp;servicestatustypes=28" target="<?php echo $link_target;?>">未处理</a>)</li>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=hostdetail&amp;hoststatustypes=12" target="<?php echo $link_target;?>">主机</a> (<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=hostdetail&amp;hoststatustypes=12&amp;hostprops=42" target="<?php echo $link_target;?>">未处理</a>)</li>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/outages.cgi" target="<?php echo $link_target;?>">网络故障</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>

<div class="navsection">
	<div class="navsectiontitle">报告</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/avail.cgi" target="<?php echo $link_target;?>">可用性</a></li>
			<li>
				<a href="trends.html" target="<?php echo $link_target;?>">趋势</a>
				<a href="<?php echo $cfg["cgi_base_url"];?>/trends.cgi" target="<?php echo $link_target;?>">(遗留)</a>
			</li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/history.cgi?host=all" target="<?php echo $link_target;?>">报警</a>
			<ul>
				<li><a href="<?php echo $cfg["cgi_base_url"];?>/history.cgi?host=all" target="<?php echo $link_target;?>">历史</a></li>
				<li><a href="<?php echo $cfg["cgi_base_url"];?>/summary.cgi" target="<?php echo $link_target;?>">摘要</a></li>
				<li>
					<a href="histogram.html" target="<?php echo $link_target;?>">历史图</a>
					<a href="<?php echo $cfg["cgi_base_url"];?>/histogram.cgi" target="<?php echo $link_target;?>">(遗留)</a>
				</li>
			</ul>
			</li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/notifications.cgi?contact=all" target="<?php echo $link_target;?>">通知</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/showlog.cgi" target="<?php echo $link_target;?>">事件日志</a></li>
		</ul>
	</div>
</div>

<div class="navsection">
	<div class="navsectiontitle">系统</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=3" target="<?php echo $link_target;?>">注释</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=6" target="<?php echo $link_target;?>">停机维护</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=0" target="<?php echo $link_target;?>">进程信息</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=4" target="<?php echo $link_target;?>">性能信息</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=7" target="<?php echo $link_target;?>">定时查询</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/config.cgi" target="<?php echo $link_target;?>">配置</a></li>
		</ul>
	</div>
</div>

</body>
</html>
