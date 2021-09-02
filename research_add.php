<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="research_add.css">
</head>

<body>

<?php
$number = $_POST['year'];
if (!empty($number)) {
$year = "after:" . "<" . $number . ">";
}else {
$year = '';
}

$secondNumber = $_POST['backyear'];
if (!empty($secondNumber)) {
$backyear = "before:" . "<" . $secondNumber . ">";
}else {
$backyear = '';
}

?>
    
<form name="j_global" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　j-global　<?php echo $year; ?><?php echo $backyear; ?>">  <!--j-globalで検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.j_global.submit();</SCRIPT>
</form>

<form name="astamuse" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　astamuse　<?php echo $year; ?><?php echo $backyear; ?>">  <!--astamuseで検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.astamuse.submit();</SCRIPT>
</form>

<form name="ip_force" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　ip force　<?php echo $year; ?><?php echo $backyear; ?>">  <!--ip_forceで検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.ip_force.submit();</SCRIPT>
</form>

<form name="address" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　<?php echo $_POST['address'] ?>　<?php echo $year; ?><?php echo $backyear; ?>"> <!--$_POST['address']で検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.address.submit();</SCRIPT>
</form>

<form name="PDF" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　PDF　<?php echo $year; ?><?php echo $backyear; ?><?php echo $backyear; ?>">  <!--PDFで検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.PDF.submit();</SCRIPT>
</form>

<form name="teacher" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　教師　<?php echo $year; ?><?php echo $backyear; ?><?php echo $backyear; ?>">  <!--教師で検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.teacher.submit();</SCRIPT>
</form>

<form name="pharmacist" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　薬剤師　<?php echo $year; ?><?php echo $backyear; ?>">  <!--薬剤師で検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.pharmacist.submit();</SCRIPT>
</form>

<form name="JSDF" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　自衛隊　<?php echo $year; ?><?php echo $backyear; ?>">  <!--自衛隊で検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.JSDF.submit();</SCRIPT>
</form>

<form name="paper" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　論文　<?php echo $year; ?><?php echo $backyear; ?>">  <!--論文で検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.paper.submit();</SCRIPT>
</form>

<form name="patent" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　特許　<?php echo $year; ?><?php echo $backyear; ?>">  <!--特許で検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.patent.submit();</SCRIPT>
</form>

<form name="plant" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　工場　<?php echo $year; ?><?php echo $backyear; ?>">  <!--工場で検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.plant.submit();</SCRIPT>
</form>

<form name="government_worker" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　公務員　<?php echo $year; ?><?php echo $backyear; ?>">  <!--公務員で検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.government_worker.submit();</SCRIPT>
</form>

<form name="move" method="get" action="https://www.google.co.jp/search" target="_blank">
    <input type="text" name="q" size="31" maxlength="255" value="<?php echo $_POST['name']?>　異動　<?php echo $year; ?><?php echo $backyear; ?>">  <!--異動で検索したい-->
    <input type="submit" name="btng" value="検索">
    <input type="hidden" name="hl" value="ja">
    <SCRIPT language="JavaScript">document.move.submit();</SCRIPT>
</form>

<br>
<form>
<input type="button" onclick="history.back()" value="戻る">
</form>

</body>
</html>
