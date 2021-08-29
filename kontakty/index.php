<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<form id="callform" name="CALLBACKFORM" data-form="form" action="/ajax/callform.php" method="POST">
    <input type="text" name="name" data-form="required">
    <input type="text" name="email" data-form="required">
    <textarea name="comment"></textarea>
    <button type="submit" data-form="submit">Отправить</button>
</form>

Текст....<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>