
<?php
include 'common.php';

if ($user->hasLogin()) {
    $response->redirect($options->adminUrl);
}
$rememberName = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_name'));
Typecho_Cookie::delete('__typecho_remember_name');

$bodyClass = 'body-100';

include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="static/css/login.css">
</head>
<body id="anemone_body">
	<div class="tpl-wrap">
		<div class="tpl-user-modal-wrapper">
			<div class="tpl-modal">
				<div class="tpl-modal-item">
						<div style="width: 100%;text-align: center;font-size:20px;">
							<p class="sub-title"><strong>Anemone 登录界面</strong></p>
							</div>
						<div class="left-form-item" id="anemone_item">
							
							<form action="<?php $options->loginAction(); ?>" method="post" name="login" role="form">
								
								<div class="group">
									<label><i class="fa fa-user-o"></i></label>
									<input type="text" name="name" class="inp" value="<?php echo $rememberName; ?>" placeholder="<?php _e('用户名'); ?>">
								</div>
								<div class="group">
									<label><i class="fa fa-lock"></i></label>
									<input type="password" name="password" class="inp" placeholder="<?php _e('密码'); ?>">
								</div>
								<div class="group sm-font">
									<label for="remember">
										<input type="checkbox" id="remember">
											<span class="option"><span class="option-item"><span class="opspan"></span></span></span>
											<span class="check-text">记住我</span>
									</label>
								</div>
								<div class="group">
									<button class="submit" type="submit"><?php _e('登录'); ?></button>
									<input type="hidden" name="referer" value="<?php echo htmlspecialchars($request->get('referer')); ?>" />
								</div>
							</form>
						</div>
						<div class="right-bg-item" id="anemone_img">
							<img src="static/images/right.jpg">
						</div>
						
						<div style="width: 100%;text-align: center;font-size: 15px;float: left;">
							Copyright ©  2020 <a href="https://www.teamep.cn" class="font-weight-bold ml-1" target="_blank"> Anemone</a> All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</div>
<script src="static/js/jquery.min.js"></script>
<script src="https://www.layuicdn.com/layui/layui.js"></script>
<script src="static/js/app.js"></script>
<script>

	$(function(){
		var userAgentInfo = navigator.userAgent;
	    var Agents = ["Android", "iPhone",
	        "SymbianOS", "Windows Phone",
	        "iPad", "iPod"];
	    for (var v = 0; v < Agents.length; v++) {
	        if (userAgentInfo.indexOf(Agents[v]) > 0) {
	            let anemone_img = document.getElementById("anemone_img");
    			anemone_img.setAttribute("hidden",true);
    			let anemone_item = document.getElementById("anemone_item");
    			anemone_item.style.width = "100%"
    			let anemone_body = document.getElementById("anemone_body");
    			anemone_body.style.backgroundImage = 'url(static/images/login_yd.jpg)';
	        }
	    }
	})
</script>
</body>
</html>
	<?php
	include 'common-js.php';
	?>
	<script>
	$(document).ready(function () {
	    $('#name').focus();
	});
	</script>
	<?php
	include 'footer.php';
	?>
