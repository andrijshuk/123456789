<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">���� �������� � ���������� ��� ��������� �������������!</p>';
}

#################################################
# Kubelance.ru
# ������ �����������  Zorro
# ���������: https://vk.com/kub_elance
# Skype: zorro.red (����� ������� ���� ������)
# ICQ: 602930609
# E-mail: lavric.10@mail.ru
#################################################

?>

<!DOCTYPE html>
<HTML>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
 <title><?php print $title; ?></title>
<meta name="keywords" content="<?php print $keywords; ?>" />
<meta name="description" content="<?php print $description; ?>" />
<link href="/files/styles.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="/files/scripts.js"></script>
<link rel="shortcut icon" href="favicon.ico">
<meta name="viewport" content="initial-scale=0.9, width=1145, maximum-scale=1">
<!--js -->
<script type="text/javascript" src="/js/jquery-1.11.2.min.js">
</script>
<script type="text/javascript" src="/js/jquery-ui-1.10.3.custom.min.js">
</script>
<script type="text/javascript" src="js/jquery.flexslider.js">
</script>
<link media="screen" href="/css/style.css" type="text/css" rel="stylesheet">
<style type="text/css">
.pageNoIndex_hilite {color:#000000 !important; background-color:#DAA520 !important; } .pageNoIndex_hilite * {color:#000000 !important; background-color:#DAA520 !important; } .pageNoIndex_hilite a {color:#000000 !important; background-color:#DAA520 !important; } .pageNoIndex_hilite img {background-color:#DAA520 !important; opacity: 0.7 !important; display: inline-block !important; } .pageNoFollow_hilite { color:#000000; text-decoration: line-through !important; } .pageNoFollow_hilite * { color:#000000; text-decoration: line-through !important; } .pageNoFollow_hilite img { opacity: 1.0 !important; display: inline-block !important; border: 1px dashed #000000 !important; text-decoration: line-through !important; } .rdstb_pageLink_hilite { border: 1px dashed #FE0808 !important; } .rdstb_pageLink_hilite * { border: 1px dashed #FE0808 !important; } .rdstb_pageLink_hilite img { opacity: 1.0 !important; display: inline-block !important; border: 1px dashed #FE0808 !important; } .rdstb_pageDeadLink_hilite { background-color:#FFFF00 !important; } .rdstb_pageDeadLink_hilite * { background-color:#FFFF00 !important; } .rdstb_pageDeadLink_hilite img { opacity: 0.7 !important; display: inline-block !important; background-color:#FFFF00 !important; }
</style>

</head>
<body contenteditable="false" style="overflow: auto;">
<div style="opacity: 0; display: none;" class="load" id="loader-wrapper">
<div id="loader">
<span>
<i>
<b>
</b>
</i>
</span>
</div>

</div>
<div id="site">
<div class="header">
<div class="wfix wf">
<div class="logobg">
<a href="/" class="logo">
ZC
</a>
</div>
<div class="menutop">
<div class="mm">
<ul>
<li>
<a class="" href="/">
�������
</a>
</li>
<li>
<a class="" href="/about">
� ��������
</a>
</li>
<li>
<a class="" href="/news">
�������
</a>
</li>
<li>
<a class="" href="/faq">
FAQ
</a>
</li>
<li>
<a class="" href="/contacts">
��������
</a>
</li>
</ul>
<div class="clr">
</div>
</div>

<div class="clr">
</div>
</div>
<div class="userpanel">
<div class="cct">
<div class="c">
<span>
8-800-100-81-73
</span>
info@zeppelin-cars.com
</div>
<div class="m">
<span>
123317, ������
</span>
����������� ���., ��� 10
</div>
<div class="clr">
</div>
</div>
<div class="clr">
</div>
</div>


<?php

if(!$login) {
?>

	<div class="loginbg">
<ul>
<li class="active">
<div>
<a class="lg" href="/login">
<span>
<span class="p">
�����������
</span>
� �������
</span>
</a>
</div>
</li>
<li>
<div>
<a class="reg" href="/registration">
<span>
<span class="p">
�����������
</span>
� �������
</span>
</a>
</div>
</li>
</ul>
</div>
<?php
} else {

?>

<div class="loginbg">
<ul>
<li class="active">
<div>
<a class="lg" href="/enter">
<span>
<span class="p">
������
</span>
������������
</span>
</a>
</div>
</li>
<li class="">
<div>
<a class="exit" href="/exit.php">
<span>
<span class="p">
�����
</span>
�� �������
</span>
</a>
</div>
</li>
</ul>
</div>


<?php

}

?>

















<div class="clr">
</div>
</div>
<!--slider-->
<div class="slidertw">
<div class="flexslider">
<div style="overflow: hidden; position: relative;" class="flex-viewport">
<ul style="width: 1400%; transition-duration: 0.6s; transform: translate3d(-2686px, 0px, 0px);" class="slides">
<li style="width: 1343px; float: left; display: block;" aria-hidden="true" class="clone">
<img draggable="false" src="/images/2.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
��� ������� � ���������� ������ � ZEPPELIN CARS
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
���� �� ���������� � ����������������� ������������: ������� ��������, ��������� �������, ������������ ��������� ����������, ����������, �� ��������� ������������ ���������������� - ���� ���������� ��� � ���� �������.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
</a>
</div>
</div>
</div>
</div>
</li>
<li style="width: 1343px; float: left; display: block;" class="">
<img draggable="false" src="/images/1.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
������ � ����� � VIP ���������
</div>
<div style="margin-left: 0px;" class="lineblack">
������� ���������� ������� �������� ������������ ������ � ����� ��������� ����������. ��� �������� ����� �������, �� �� ������ ��������. ������ ������� ������ ���� ������ ������ � ������ ��������� � �������� ��� ������������, �������� ��� ������� ����� ���������� � ���������. �� ������ ����������� ���� �������� � ����� ������, ��� � ���� ����! �� ������������� �� ���������� �������� ����������!
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
</a>
</div>
</div>
</div>
</div>
</li>
<li class="flex-active-slide" style="width: 1343px; float: left; display: block;">
<img draggable="false" src="/images/4.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
���������� � �������
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
ZEPPELIN CARS � ������� ��������������. ������������� ������ �� ������ ���� ������� ������ �� ������ ������. ���� �������� �����������, �������������� ������ � �������, ���������� ������� �������� � ��������.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
</a>
</div>
</div>
</div>
</div>
</li>
<li style="width: 1343px; float: left; display: block;">
<img draggable="false" src="/images/5.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
Rolls-Royce � �������������� �������
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
�� ���������� � ������ ������� ������� � �����? ������������ � ����� ������. ��������� ��� ������, � Rolls-Royce � ��������� � ��� ������� ������, ��� ����� � �����������.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
</a>
</div>
</div>
</div>
</div>
</li>
<li style="width: 1343px; float: left; display: block;">
<img draggable="false" src="/images/6.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
���� ������ ��������?
</div>
<div style="margin-left: 0px;" class="lineblack">
� � ����� ���������� � ��! ����������� ������������ ���������� � ������ ZEPPELIN CARS ���������� 7% � �����. ��� ���������� ������� ������������ �� ����� ����-�������� ��������. ���������� �������� ������ ����� � ������� �������� �������� ���������� �� ����������� ����.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/registration">
����� ����������
</a>
</div>
</div>
</div>
</div>
</li>
<li style="width: 1343px; float: left; display: block;">
<img draggable="false" src="/images//2.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
��� ������� � ���������� ������ � ZEPPELIN CARS
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
���� �� ���������� � ����������������� ������������: ������� ��������, ��������� �������, ������������ ��������� ����������, ����������, �� ��������� ������������ ���������������� - ���� ���������� ��� � ���� �������.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
</a>
</div>
</div>
</div>
</div>
</li>
<li style="width: 1343px; float: left; display: block;" aria-hidden="true" class="clone">
<img draggable="false" src="/images/1.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
������ � ����� � VIP ���������
</div>
<div style="margin-left: 0px;" class="lineblack">
������� ���������� ������� �������� ������������ ������ � ����� ��������� ����������. ��� �������� ����� �������, �� �� ������ ��������. ������ ������� ������ ���� ������ ������ � ������ ��������� � �������� ��� ������������, �������� ��� ������� ����� ���������� � ���������. �� ������ ����������� ���� �������� � ����� ������, ��� � ���� ����! �� ������������� �� ���������� �������� ����������!
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
</a>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>

<ul class="flex-direction-nav">
<li class="flex-nav-prev">
<a class="flex-prev" href="#">
Previous
</a>
</li>
<li class="flex-nav-next">
<a class="flex-next" href="#">
Next
</a>
</li>
</ul>
</div>
</div>
<!--/slider-->
</div>
<div class="prem">
<div class="wfix">
<ul>
<li class="i1 act">
<div class="nm">
VIP ������������
</div>
<div class="txt">
��� ��� ����������� ������ � ��������������� ����� � ������ � ������� ������ ������� ����
</div>
</li>
<li class="i2 act">
<div class="nm">
������ ����� ����������
</div>
<div class="txt">
���� ������� SSL-������������ ����������� �������� (Extended Validation) - ������������ ���������� ������ ������������
</div>
</li>
<li class="i3 act">
<div class="nm">
����������� ���������
</div>
<div class="txt">
��� ��� �������� �������������� ����������� ���������, �������������� ������������� ������
</div>
</li>
</ul>
<div class="clr">
</div>
</div>
</div>
<!--cnt-->
<div class="cnt-page">
<div class="wfix wz">
<div class="main-page">
<!--about -->
<div class="stat-about">
<div class="about">
<div class="titles">
<span class="first">
<span>
�
</span>
��������
</span>
</div>
<div class="text">
ZEPPELIN CARS � ���� �� ������� � ������� ������ ������� ����������� � �����. ����������� ��������� � ���������� �������� ������ ��� �������� ���������. ���������� �������������� ��������� ��� �������� � ��������� �������� ����������� ��������� ������.
</div>
</div>

	<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users"));
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0"));

$money	= 0.00;
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= 0.00;
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users")) + cfgSET('fakeusers');
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0")) + cfgSET('fakeactiveusers');

$money	= cfgSET('fakewithdraws');
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= cfgSET('fakedeposits');
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
	$nu	= mysql_fetch_array(mysql_query("SELECT login FROM users ORDER BY id DESC LIMIT 1"));
?>
<?php
	$nd	= mysql_fetch_array(mysql_query("SELECT * FROM deposits ORDER BY id DESC LIMIT 1"));
?>
<?php
	$no	= mysql_fetch_array(mysql_query("SELECT * FROM output ORDER BY id DESC LIMIT 1"));
?>
<div class="stats">
<div class="titles">
<span class="first">
<span>
����������
</span>
��������
</span>
</div>
<ul>
<li class="s1">
����� ����������:
<span>
<?php print $cusers; ?>
</span>
</li>
<li class="s2">
����� ���������:
<span>
<?php print $money; ?> USD
</span>
</li>
</ul>
</div>
<div class="clr">
</div>
</div>
<!--/about-->
<div class="plans plango">
<ul>
<li class="p1">
<div class="title">
<span>
���������
</span>
�� 100$ �� 500$
</div>
<div class="harx">
<div class="bold">
7% � �����
</div>
<div>
30 ����, ������� ������ ����
</div>
<div class="full">
<a href="/plans">
������ ��������� � ������ �����
</a>
</div>
</div>
</li>
<li class="p2 ">
<div class="title">
<span>
�������
</span>
�� 500$ �� 5000$
</div>
<div class="harx">
<div class="bold">
8% � �����
</div>
<div>
90 ����, ������� ������ ����
</div>
<div class="full">
<a href="/plans">
������ ��������� � ������ �����
</a>
</div>
</div>
</li>
<li class="p3">
<div class="title">
<span>
��������
</span>
�� 1000$
</div>
<div class="harx">
<div class="bold">
10% � �����
</div>
<div>
180 ����, ������� ������ ����
</div>
<div class="full">
<a href="/plans">
������ ��������� � ������ �����
</a>
</div>
</div>
</li>
<li class="p4">
<div class="title">
<span>
������������
</span>
�� 500$
</div>
<div class="harx">
<div class="bold">
13% � �����
</div>
<div>
360 ����, ������� ������ ����
</div>
<div class="full">
<a href="/plans">
������ ��������� � ������ �����
</a>
</div>
</div>
</li>
</ul>
<div class="clr">
</div>
</div>
</div>
</div>
<!--calc-->
<div class="calculator">
<div class="wfix wx">
<div class="title">
����������� �������
</div>
<div class="text">
���������������� �������������, �� �������� ������ ��������� � ���������� �������������� ��������. ��� ����� �� ����� ��������� ���� �������� ��� ������� ���.
<br>
������ ���������� �������� ������ ������� ������� �������� ��� ��� ������� ����� ������.
</div>
<div class="left">
<!--sum-->
<div class="sum">
<div class="tt">
����� ��������:
</div>
<div class="slbg">
<div aria-disabled="false" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
<div style="width: 18.3673%;" class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min">
</div>
<a style="left: 18.3673%;" class="ui-slider-handle ui-state-default ui-corner-all" href="#">
</a>
</div>
</div>
</div>
<!--/sum-->
<!--day-->
<div class="day">
<div class="tt">
���� ��������:
</div>
<div class="slbg">
<div aria-disabled="false" class="days ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
<div style="width: 33.3333%;" class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min">
</div>
<a style="left: 33.3333%;" class="ui-slider-handle ui-state-default ui-corner-all" href="#">
</a>
</div>
</div>
</div>
<!--/day-->
</div>
<div class="right">
<table>
<tbody>
<tr>
<td class="r1">
����� ������:
</td>
<td class="result">
<span id="sum1">
1000
</span>
USD
</td>
</tr>
<tr>
<td class="r2">
�������� ����:
</td>
<td class="result">
<span id="plan">
�������
</span>
</td>
</tr>
<tr>
<td class="r3">
������� � �����:
</td>
<td class="result">
<span id="percent">
8
</span>
%
</td>
</tr>
<tr>
<td class="r4">
������:
</td>
<td class="result">
<span id="profit">
240
</span>
USD
</td>
</tr>
<tr>
<td class="r5">
����� �������:
</td>
<td class="result">
<span id="total">
1240
</span>
USD
</td>
</tr>
</tbody>
</table>
</div>
<div class="clr">
</div>
</div>
</div>
<!--/calc-->

<!--/cnt-->
<!--footer-->
<div class="footer">
<div class="payment">
<div>
</div>
</div>
<div class="ff">
<div class="wfix">
<div class="menumm">
<ul>
<li>
<a href="/about">
� ��������
</a>
</li>
<li>
<a href="/rules">
������� ������
</a>
</li>
<li>
<a href="/reglament">
��������� ��������
</a>
</li>
<li>
<a href="/privacypolicy">
�������� ������������������
</a>
</li>
</ul>
<ul>
<li>
<a href="/news">
�������
</a>
</li>
<li>
<a href="/faq">
������ - �����
</a>
</li>
<li>
<a href="/partners">
���������
</a>
</li>
<li>
<a href="/order">
����� ����������
</a>
</li>
<li>
<a href="/answers">
������
</a>
</li>
</ul>
<div class="clr">
</div>
</div>
<div class="kontakt">
<div class="phone">
������� � ������: 8-800-100-81-73
</div>
<div class="phone">
������� � ���: +971800035703995
</div>
<div class="email">
Email:
<a href="mailto:info@zeppelin-cars.com">
info@zeppelin-cars.com
</a>
</div>
<div class="skype">
Skype:
<a href="skype:zeppelin.cars?add">
zeppelin.cars
</a>
</div>
</div>
<div class="clr">
</div>
</div>
</div>
<div class="copyright">
<div class="wfix">
<div class="cc">
zeppelin-cars.com � COPYRIGHT 2015
</div>
<div class="social">
<a class="fb" target="_blank" href="https://www.facebook.com/pages/Zeppelin-Cars/765692160195395">
</a>
<a class="vk" target="_blank" href="https://vk.com/zeppelincars">
</a>
<div class="clr">
</div>
</div>
<div class="clr">
</div>
</div>
</div>
</div>
<!--/footer-->
</div>
<script type="text/javascript" src="/js/calc.js">
</script>
<script type="text/javascript" src="/js/animate.js">
</script>
</div>
</body>
</html>