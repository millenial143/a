<?if (!isset($_GET["referer1"]) || $_GET["referer1"] == "") $_GET["referer1"] = "yandext"?><? $strReferer1 = htmlspecialchars($_GET["referer1"]); ?><?if (!isset($_GET["referer2"]) || $_GET["referer2"] == "") $_GET["referer2"] = "";?><? $strReferer2 = htmlspecialchars($_GET["referer2"]); ?><? header("Content-Type: text/xml; charset=windows-1251");?><? echo "<"."?xml version=\"1.0\" encoding=\"windows-1251\"?".">"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2021-08-23 15:39">
<shop>
<name>��� ��������</name>
<company>��� ��������</company>
<url>http://a.dev.up-advert.ru</url>
<platform>1C-Bitrix</platform>
<currencies>
<currency id="RUB" rate="1" />
<currency id="USD" rate="68.79" />
<currency id="EUR" rate="78.32" />
<currency id="UAH" rate="2.511" />
<currency id="BYN" rate="32.2" />
</currencies>
<categories>
<category id="17">�����</category>
<category id="18" parentId="17">������� �����</category>
<category id="19" parentId="17">������� �����</category>
<category id="20" parentId="17">���������</category>
<category id="21" parentId="17">����������</category>
<category id="22">������� �������</category>
<category id="23" parentId="22">�������� ��������������</category>
<category id="24" parentId="22">������������, ����������� ������</category>
<category id="25" parentId="22">�����������, ��������, ������������</category>
<category id="26" parentId="22">����������</category>
<category id="27">��������</category>
<category id="28" parentId="27">������������ �������</category>
<category id="29" parentId="28">����������� ������</category>
<category id="30" parentId="27">�������</category>
<category id="31" parentId="27">��������</category>
<category id="32">������ �����������</category>
<category id="33" parentId="32">����������</category>
<category id="34" parentId="32">�������������</category>
<category id="35">����</category>
<category id="36">��������</category>
<category id="37">���������</category>
<category id="38">������</category>
<category id="39">������</category>
<category id="40">�������� ���������</category>
</categories>
<offers>
</offers>
</shop>
</yml_catalog>
