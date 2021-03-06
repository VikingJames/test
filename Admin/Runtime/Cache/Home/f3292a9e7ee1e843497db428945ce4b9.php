<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" />
		<title>登录界面 - 后台管理系统</title>

		<meta name="description" content="User login page" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/acephp/Public/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/acephp/Public/assets/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="/acephp/Public/assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/acephp/Public/assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/acephp/Public/assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/acephp/Public/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/acephp/Public/assets/css/ace-ie.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/acephp/Public/assets/css/ace.onpage-help.css" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/acephp/Public/assets/js/html5shiv.js"></script>
		<script src="/acephp/Public/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="white" id="id-text2">后台管理系统</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Company Name</h4>
							</div>
							<div class="space-6"></div>
							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												请登录
											</h4>
											<form method="post" action="<?php echo U('Login/login');?>">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="用户名" name="username" required autofocus/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密码" name="password" required/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
													<div class="space"></div>
													<div class="clearfix">
														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">登录</span>
														</button>
													</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
							    </div>
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div>
 

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/acephp/Public/assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/acephp/Public/assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/acephp/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

	</body>
</html>