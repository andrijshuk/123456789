
<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">‘айт отключен и недоступен длЯ остальных пользователей!</p>';
}

#################################################
# Kubelance.ru
# Дизайн адаптировал  Zorro
# Вконтакте: https://vk.com/kub_elance
# Skype: zorro.red (Готов принять ваши заказы)
# ICQ: 602930609
# E-mail: lavric.10@mail.ru
#################################################

?>




 <!DOCTYPE html>
<HTML>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
 <title><?php print $title; ?></title>
<meta name="keywords" content="<?php print $keywords; ?>" />
<meta name="description" content="<?php print $description; ?>" />
<link href="/files/styles.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="/files/scripts.js"></script>
<meta name="viewport" content="initial-scale=0.9, width=700, maximum-scale=1">
<!--js -->
<script type="text/javascript" src="/js/jquery-1.11.2.min.js">
</script>
<script src="/js/jquery.formstyler.min.js">
</script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js">
</script>
<script>
function sel() {$('select').styler();};$(document ).ready(function() {sel();});setInterval(sel, 1);
</script>
<link media="screen" href="/css/cab.css" type="text/css" rel="stylesheet">
<link media="screen" href="/styles_acc.css" type="text/css" rel="stylesheet">


</head>
<body contenteditable="false">
<div id="site">
<div class="top">
<div class="wfix">
<a href="/" class="logo">
ZC
</a>
<div class="mm">
<ul>
<li>
<a href="/">
Главная
</a>
</li>
<li>
<a href="/about">
О компании
</a>
</li>
<li>
<a href="/news">
Новости
</a>
</li>
<li>
<a href="/faq">
FAQ
</a>
</li>
<!--<li>
<a href="/support">
Контакты
</a>
</li>-->
</ul>
<div class="clr">
</div>
</div>
<div class="rr">
<!--<div class="lang">
<a class="active" href="/interface?lang=ru">
RU
</a>
<a href="/interface?lang=en">
EN
</a>
<div class="clr">
</div>
</div>-->
<div class="time">
<span id="clock">


<script type="text/javascript">
<!--
	var h=<?php print intval(date('G')); ?>;
	var m=<?php print intval(date('i')); ?>;
	var s=<?php print intval(date('s')); ?>;
	setInterval("showtime()",1000);

	function showtime() {
		s++;
		if (s>=60) {
			s=0;
			m++;
			if (m>=60) {
				m=0;
				h++;
				if (h>=24) h=0;
			}
		}
		s = s+"";
		m = m+"";
		h = h+"";
		if (s.length<2) s = "0"+s;
		if (m.length<2) m = "0"+m;
		if (h.length<2) h = "0"+h;
		document.getElementById("time").innerHTML = h+":"+m+":"+s;
	}

	$(document).ready(function(){
	$('#getContent').click(function(){
	$.ajax({
		url: "/adminpanel/modules/serverip.php",
		cache: false,
		beforeSend: function() {
			$('#divContent').html('<center><img src="images/loader.gif" width="16" height="16" border="0" alt="" /> Определяем IP адрес...</center>');
		},
		success: function(html){
			$("#divContent").html(html);
		}
	});
	return false;
	});
	});
-->
</script>

<table width="100%">
<tr height="20">

	<td colspan="2">Время сервера</td>
</tr>
<tr height="0" bgcolor="#dddddd">
	<td colspan="2"></td>
	<td colspan="2"></td>
	<td colspan="2"></td>
</tr>
<tr>

	<td><b style="float: left; padding-right: 7px;"><!--'.date("d.m.Y").'--></b> <div id="time"></div></td>
</tr>
</table>


</span>



</div>
<a class="set sr" href="/profile">
Настройки
</a>
<a class="ext sr" href="/exit.php">
Выход
</a>
<div class="clr">
</div>
</div>
<div class="clr">
</div>
</div>
</div>
<div class="navi">
<div class="wfix">
<ul>
<li class="i1 ">
<a href="/deposit">
Сделать вклад
</a>
</li>
<li class="i2 ">
<a href="/enter">
Пополнить баланс
</a>
</li>
<li class="i3 ">
<a href="/deposits">
Депозиты
</a>
</li>
<li class="i4 ">
<a href="/stat">
Операции
</a>
</li>
<li class="i5 ">
<a href="/withdrawal">
Вывод средств
</a>
</li>
<li class="i6 ">
<a href="/ref">
Реф.система
</a>
</li>
<li class="i7 ">
<a href="/profile">
Реквизиты
</a>
</li>
<li class="i8 ">
<a href="/contacts">
Связь
</a>
</li>
</ul>
<div class="clr">
</div>
</div>
</div>
<div class="cabinet-page">
<div class="wfix">
<!--left-->
<div class="left-cab">
<div class="balance ">
<div class="title">
<span>
Баланс
</span>
пользователя
</div>
<div style="margin: 0px 80px"><font color="#D72D2D"><b><?php print"$balance"; ?></font></b>$</div>
</div>

<div class="help">
<a href="/contacts">
</a>
<span>
Возникли трудности?
</span>
Обратитесь в нашу
<br>
круглосуточную техподдержку
</div>
</div>
<!--/left-->
<div id="info_box" class="flash_info">
<b>
Вход выполнен
</b>
</div>

		<?php
	defined('ACCESS') or die();
	if(!$page) {
		include "includes/index.php";
	} elseif(file_exists("../".$page."/index.php")) {
     
		include "../".$page."/".$page."_ru.php";
	} else {
		include "includes/errors/404.php";
	}
?>
<div class="clr">
</div>
</div>
</div>
<div class="footer">
<div class="wfix">
Zeppelin-cars.com © 2015
<div id="top">
</div>
</div>
</div>
</div>
<script language="JavaScript" type="text/javascript">
$(function() {
$.fn.scrollToTop = function() {
var scrollDiv = $(this);
$(this).click(function() {
$("html, body").animate({scrollTop: 0}, "slow")
})
}
});

$(function() {
$("#top").scrollToTop();
});
</script>
</body>
</html>