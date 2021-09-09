<?php
/*echo '123123123';*/


require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$response = false;
if (isset($_POST['email']) && isset($_POST['name']))
{

    echo $_POST['email'];
    CModule::IncludeModule('main');
    CModule::IncludeModule('iblock');

    $IBLOCK_ID = 16;

    $html  = '<p><b>Имя: </b> '.$_POST['name'].'</p>';
    $html .= '<p><b>Email: </b> '.$_POST['email'].'</p>';

    $element = new CIBlockElement;
    $field   = array(
        'IBLOCK_SECTION_ID' => false,
        'IBLOCK_ID'         => $IBLOCK_ID,
        'NAME'              => 'Заявка на обратный звонок ('.date('d-m-Y',time()).')',
        'ACTIVE'            => 'Y',
        "PREVIEW_TEXT"      => $html,
        "PREVIEW_TEXT_TYPE" => 'html',
    );


    if ($element->Add($field))
    {
        $arEventFields = array(
            "TEXT"     => $html,
            "EMAIL_TO" => "test@mail.ru"
        );

        if (CEvent::SendImmediate("FEEDBACK_FORM", "s1", $arEventFields, 'N', 7))
            $response = true;
    }
}

return $response;