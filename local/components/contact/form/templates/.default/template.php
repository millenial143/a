<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->addExternalJS("/local/components");
$this->addExternalCss("/local/components");
?>

<link rel="stylesheet" href="<?= $templateFolder  ?>/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<form id="callform" name="CALLBACKFORM" data-form="form" action="/ajax/callform.php" method="POST">
    <input type="text" name="name" data-form="required">
    <input type="text" name="email" data-form="required">
    <textarea name="comment"></textarea>
    <button type="submit" data-form="submit">Отправить</button>
</form>

<script src="<?= $templateFolder  ?>/js/script.js"></script>