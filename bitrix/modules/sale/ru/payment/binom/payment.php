<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
$ORDER_ID = intval($GLOBALS["SALE_INPUT_PARAMS"]["ORDER"]["ID"]);
?>
<FORM ACTION="https://binom.dzetta.ru" METHOD="GET" target=_blank>
	<p>�� ������ �������� ����� ��������� ������� <strong>"�����"</strong></p>
	<p><a href="http://ehouseholding.ru/docs/binom_direct.htm">������� ������ �� ������� ����� � ������� direct</a></p>
	<p>C��� � <?= htmlspecialcharsEx($ORDER_ID." �� ".CSalePaySystemAction::GetParamValue("DATE_INSERT")) ?></p>
	<p>����� � ������ �� �����: <b><?echo SaleFormatCurrency(CSalePaySystemAction::GetParamValue("SHOULD_PAY"), CSalePaySystemAction::GetParamValue("CURRENCY")) ?></b></p>
	<INPUT class="btn btn-primary" TYPE="button" VALUE="��������" onclick="javascript:window.open('https://binom.dzetta.ru/?action=directOrder&amp;sellerId=<?=CSalePaySystemAction::GetParamValue("SELLER_ID")?>&amp;code=<?=$ORDER_ID?>&amp;date=<?=CSalePaySystemAction::GetParamValue("DATE_INSERT")?>&amp;validUpto=<?=CSalePaySystemAction::GetParamValue("ORDER_LIFE_TIME")?>&amp;sum=<?=CSalePaySystemAction::GetParamValue("SHOULD_PAY")*100?>&amp;shopClientName=<?=CSalePaySystemAction::GetParamValue("SHOP_CLIENT_NAME")?>&amp;email=<?=CSalePaySystemAction::GetParamValue("EMAIL")?>&amp;comment=&amp;n1=<?=$ORDER_ID?>&amp;s1=<?=CSalePaySystemAction::GetParamValue("SHOULD_PAY")*100?>','','status=yes,toolbar=yes,menubar=yes,location=yes,scrollbars=yes,resizable=yes');return false;">
</form>