<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo L('phpcms_logon')?></title>
<style type="text/css">
	div{overflow:hidden; *display:inline-block;}div{*display:block;}
	.login_box{background:url(<?php echo IMG_PATH?>admin_img/login_bg.jpg) no-repeat; width:602px; height:416px; overflow:hidden; position:absolute; left:50%; top:50%; margin-left:-301px; margin-top:-208px;}
	.login_iptbox{bottom:90px;_bottom:72px;color:#FFFFFF;font-size:12px;height:30px;left:50%;
margin-left:-280px;position:absolute;width:560px; overflow:visible;}
	.login_iptbox .ipt{height:24px; width:110px; margin-right:22px; color:#fff; background:url(<?php echo IMG_PATH?>admin_img/ipt_bg.jpg) repeat-x; *line-height:24px; border:none; color:#000; overflow:hidden;}
	<?php if(SYS_STYLE=='en'){ ?>
	.login_iptbox .ipt{width:100px; margin-right:12px;}
	<?php }?>
	.login_iptbox label{ *position:relative; *top:-6px;}
	.login_iptbox .ipt_reg{margin-left:12px;width:46px; margin-right:16px; background:url(<?php echo IMG_PATH?>admin_img/ipt_bg.jpg) repeat-x; *overflow:hidden;text-align:left;padding:2px 0 2px 5px;font-size:16px;font-weight:bold;}
	.login_tj_btn{ background:url(<?php echo IMG_PATH?>admin_img/login_dl_btn.jpg) no-repeat 0px 0px; width:52px; height:24px; margin-left:16px; border:none; cursor:pointer; padding:0px; float:right;}
	.yzm{position:absolute; background:url(<?php echo IMG_PATH?>admin_img/login_ts140x89.gif) no-repeat; width:140px; height:89px;right:56px;top:-96px; text-align:center; font-size:12px; display:none;}
	.yzm a:link,.yzm a:visited{color:#036;text-decoration:none;}
	.yzm a:hover{color:#C30;}
	.yzm img{cursor:pointer; margin:4px auto 7px; width:130px; height:50px; border:1px solid #fff;}
	.cr{font-size:12px;font-style:inherit;text-align:center;color:#ccc;width:100%; position:absolute; bottom:58px;}
	.cr a{color:#ccc;text-decoration:none;}
	
	
	
	
	/**
	 * @Author		kuaping@kuaping.com
	 * @lastmodify	2019.7.19
	 */
	@media only screen and (max-width: 1000px) {
		.login_box{
			width: auto; position: relative; margin: 0; left: 0; top: 0; padding-top: 150px; margin: 20px; border: #323637 solid 1px; height: auto;
			box-shadow: rgba(0,0,0,0.2) 0 10px 10px; background: #17a8d4;
		}
		.login_box:after{
			content: ""; position: absolute; left: 0; right: 0; top: 0; background: url(http://localhost/phpcms/statics/images/admin_img/login_bg.jpg) center top no-repeat; height: 150px;
			background-size: auto 250px;
		}
		.login_iptbox{
			background: #262626; position: relative; height: auto; width: auto; margin: 0;  left: 0; bottom: inherit; padding: 20px 30px; padding-bottom: 45px;
			border-bottom: #010101 solid 1px;
			
			/* Firefox 3.6+ */
background: -moz-linear-gradient(top, #4e504d, #1b1b1b); 
/* Safari 4-5, Chrome 1-9 */
/* -webkit-gradient(,  [, ]?,  [, ]? [, ]*) */
background: -webkit-gradient(linear,top,from(#4e504d),to(#1b1b1b));
/* Safari 5.1+, Chrome 10+ */
background: -webkit-linear-gradient(top, #4e504d, #1b1b1b);
/* Opera 11.10+ */
background: -o-linear-gradient(top, #4e504d, #1b1b1b);


		}
		.login_iptbox label{
			margin-bottom: 5px; display: inline-block;
		}
		.login_iptbox .ipt{
			display: block; margin-bottom: 15px; width: 100%; box-sizing: border-box; height: auto; padding: 8px 5px;
		}
		.login_tj_btn{
			float: none; position: absolute; bottom: 20px; margin-left: 0;
		}
		.login_iptbox .ipt_reg{
			margin-left: 0; background: rgb(232, 240, 254);
		}
		.cr{
			background: #515151; position: static; padding: 15px; width: auto; border-top: #686868 solid 1px;
		}
		.yzm{
			position: static; display: block; background: #e3e3e2; border: #b4b4b4 solid 1px; width: auto; height: auto; display: block; padding: 5px; margin-bottom: 15px;
		}
		.yzm img{
			margin: 0; width: 100px; height: 40px;
		}
	}
</style>
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
</head>

<body onload="javascript:document.myform.username.focus();">
<div id="login_bg" class="login_box">
	<div class="login_iptbox">
   	 <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform"><input name="dosubmit" value="" type="submit" class="login_tj_btn" /><label><?php echo L('username')?>：</label><input name="username" type="text" class="ipt" value="" /><label><?php echo L('password')?>：</label><input name="password" type="password" class="ipt" value="" /><label><?php echo L('security_code')?>：</label><input name="code" type="text" class="ipt ipt_reg" onfocus="document.getElementById('yzm').style.display='block'" />
    <div id="yzm" class="yzm"><?php echo form::checkcode('code_img')?><br /><a href="javascript:document.getElementById('code_img').src='<?php echo SITE_PROTOCOL.SITE_URL.WEB_PATH;?>api.php?op=checkcode&m=admin&c=index&a=checkcode&time='+Math.random();void(0);"><?php echo L('click_change_validate')?></a></div>
     </form>
    </div>
    <div class="cr"><?php echo L("copyright")?></div>
</div>
</body>
</html>