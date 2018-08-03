<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>Export - Adminer</title>
<link rel="stylesheet" type="text/css" href="?file=default.css&amp;version=4.2.4">
<script type="text/javascript" src="?file=functions.js&amp;version=4.2.4"></script>
<link rel="shortcut icon" type="image/x-icon" href="?file=favicon.ico&amp;version=4.2.4">
<link rel="apple-touch-icon" href="?file=favicon.ico&amp;version=4.2.4">

<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = 'You are offline.';
</script>

<div id="help" class="jush-sql jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
<p id="breadcrumb"><a href=".">MySQL</a> &raquo; <a href='?username=root' accesskey='1' title='Alt+Shift+1'>Server</a> &raquo; Export
<h2>Export</h2>
<div id='ajaxstatus' class='jsonly hidden'></div>

<form action="" method="post">
<table cellspacing="0">
<tr><th>Output<td><label><input type='radio' name='output' value='text' checked>open</label><label><input type='radio' name='output' value='file'>save</label><label><input type='radio' name='output' value='gz'>gzip</label>
<tr><th>Format<td><label><input type='radio' name='format' value='sql' checked>SQL</label><label><input type='radio' name='format' value='csv'>CSV,</label><label><input type='radio' name='format' value='csv;'>CSV;</label><label><input type='radio' name='format' value='tsv'>TSV</label>
<tr><th>Database<td><select name='db_style'><option><option>USE<option>DROP+CREATE<option selected>CREATE</select><label><input type='checkbox' name='routines' value='1' checked>Routines</label><label><input type='checkbox' name='events' value='1' checked>Events</label><tr><th>Tables<td><select name='table_style'><option><option selected>DROP+CREATE<option>CREATE</select><label><input type='checkbox' name='auto_increment' value='1'>Auto Increment</label><label><input type='checkbox' name='triggers' value='1' checked>Triggers</label><tr><th>Data<td><select name='data_style'><option><option>TRUNCATE+INSERT<option selected>INSERT<option>INSERT+UPDATE</select></table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="64254:212500">

<table cellspacing="0">
<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases' checked onclick='formCheck(this, /^databases\[/);'>Database</label></thead>
<tr><td><label class='block'><input type='checkbox' name='databases[]' value='btn_hack' checked onclick="formUncheck(&#039;check-databases&#039;);">btn_hack</label>
<tr><td><label class='block'><input type='checkbox' name='databases[]' value='laranes' checked onclick="formUncheck(&#039;check-databases&#039;);">laranes</label>
<tr><td><label class='block'><input type='checkbox' name='databases[]' value='mysql' checked onclick="formUncheck(&#039;check-databases&#039;);">mysql</label>
<tr><td><label class='block'><input type='checkbox' name='databases[]' value='rama_db' checked onclick="formUncheck(&#039;check-databases&#039;);">rama_db</label>
<tr><td><label class='block'><input type='checkbox' name='databases[]' value='rrdatabase' checked onclick="formUncheck(&#039;check-databases&#039;);">rrdatabase</label>
</table>
</form>
</div>

<form action='' method='post'>
<div id='lang'>Language: <select name='lang' onchange="this.form.submit();"><option value="en" selected>English<option value="ar">العربية<option value="bg">Български<option value="bn">বাংলা<option value="bs">Bosanski<option value="ca">Català<option value="cs">Čeština<option value="da">Dansk<option value="de">Deutsch<option value="el">Ελληνικά<option value="es">Español<option value="et">Eesti<option value="fa">فارسی<option value="fi">Suomi<option value="fr">Français<option value="gl">Galego<option value="hu">Magyar<option value="id">Bahasa Indonesia<option value="it">Italiano<option value="ja">日本語<option value="ko">한국어<option value="lt">Lietuvių<option value="nl">Nederlands<option value="no">Norsk<option value="pl">Polski<option value="pt">Português<option value="pt-br">Português (Brazil)<option value="ro">Limba Română<option value="ru">Русский язык<option value="sk">Slovenčina<option value="sl">Slovenski<option value="sr">Српски<option value="ta">த‌மிழ்<option value="th">ภาษาไทย<option value="tr">Türkçe<option value="uk">Українська<option value="vi">Tiếng Việt<option value="zh">简体中文<option value="zh-tw">繁體中文</select> <input type='submit' value='Use' class='hidden'>
<input type='hidden' name='token' value='140538:122896'>
</div>
</form>
<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="64254:212500">
</p>
</form>
<div id="menu">
<h1>
<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a> <span class="version">4.2.4</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">4.6.3</a>
</h1>
<script type="text/javascript" src="?file=jush.js&amp;version=4.2.4"></script>
<script type="text/javascript">
bodyLoad('5.6');
</script>
<form action="">
<p id="dbs">
<input type="hidden" name="username" value="root"><span title='database'>DB</span>: <select name='db' onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'><option value=""><option>information_schema<option>btn_hack<option>laranes<option>mysql<option>performance_schema<option>rama_db<option>rrdatabase</select><input type='submit' value='Use' class='hidden'>
<input type="hidden" name="dump" value=""></p></form>
<p class='links'><a href='?username=root&amp;sql='>SQL command</a>
<a href='?username=root&amp;import='>Import</a>
<a href='?username=root&amp;dump=' id='dump' class='active '>Export</a>
</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
