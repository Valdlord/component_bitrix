<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . SITE_TEMPLATE_ID . "/header.php");
CJSCore::Init(array("fx"));

\Bitrix\Main\UI\Extension::load("ui.bootstrap4");

if (isset($_GET["theme"]) && in_array($_GET["theme"], array("blue", "green", "yellow", "red"))) {
  COption::SetOptionString("main", "wizard_eshop_bootstrap_theme_id", $_GET["theme"], false, SITE_ID);
}
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "green", SITE_ID);

$curPage = $APPLICATION->GetCurPage(true);

?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
  <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR ?>favicon.ico" />
  <? $APPLICATION->ShowHead(); ?>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/bitrix/templates/eshop_bootstrap_v4/owlcarusel/css/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/bitrix/templates/eshop_bootstrap_v4/owlcarusel/css/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?
  use Bitrix\Main\Page\Asset;

  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/scripts/open_search.js");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/style.css");
  ?>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="/bitrix/templates/eshop_bootstrap_v4/owlcarusel/js/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bx-background-image bx-theme-<?= $theme ?>" <? $APPLICATION->ShowProperty("backgroundImage"); ?>>
  <div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
  </div>
  <header>
    <div class="header-top">
      <div class="container p-0">
        <div class="row">
          <div class="col">

            <? $APPLICATION->IncludeComponent(
              "bitrix:menu",
              "top_header_menu",
              array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top_header",
                "USE_EXT" => "Y",
                "COMPONENT_TEMPLATE" => "top_header_menu"
              ),
              false
            ); ?>

          </div>
          <div class="col text-end">
            <div class="header-top-tel">
              <a class="tel-link" href="tel:<? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => SITE_DIR . "include/telephone.php"
                ),
                false
              ); ?>">
                <? $APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/telephone.php"
                  ),
                  false
                ); ?></a>

              <a class="tel-link" href="tel:<? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => SITE_DIR . "include/telephone2.php"
                ),
                false
              ); ?>"><? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => SITE_DIR . "include/telephone2.php"
                ),
                false
              ); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header top -->
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid p-0">
            <a class="navbar-brand" href="/">
              <img src="<?php echo SITE_TEMPLATE_PATH ?>/images/VegasGlass_brand_1_logo.svg" alt="VegasGlass" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="РџРµСЂРµРєР»СЋС‡Р°С‚РµР»СЊ РЅР°РІРёРіР°С†РёРё">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
              <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_header_multilevel", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom_header",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "bottom_header_multilevel"
	),
	false
); ?>
            </div>
            <? $APPLICATION->IncludeComponent(
              "bitrix:sale.basket.basket.line",
              "bootstrap_v4",
              array(
                "PATH_TO_BASKET" => SITE_DIR . "personal/cart/",
                "PATH_TO_PERSONAL" => SITE_DIR . "personal/",
                "SHOW_PERSONAL_LINK" => "N",
                "SHOW_NUM_PRODUCTS" => "Y",
                "SHOW_TOTAL_PRICE" => "Y",
                "SHOW_PRODUCTS" => "N",
                "POSITION_FIXED" => "N",
                "SHOW_AUTHOR" => "Y",
                "PATH_TO_REGISTER" => SITE_DIR . "login/",
                "PATH_TO_PROFILE" => SITE_DIR . "personal/"
              ),
              false,
              array()
            ); ?>

          </div>
        </nav>
        <div class="row mb-4 search_wrapper">
          <div class="col">
            <? $APPLICATION->IncludeComponent(
              "bitrix:search.title",
              "bootstrap_v4",
              array(
                "NUM_CATEGORIES" => "1",
                "TOP_COUNT" => "5",
                "CHECK_DATES" => "N",
                "SHOW_OTHERS" => "N",
                "PAGE" => SITE_DIR . "catalog/",
                "CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
                "CATEGORY_0" => array(
                  0 => "iblock_catalog",
                ),
                "CATEGORY_0_iblock_catalog" => array(
                  0 => "all",
                ),
                "CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
                "SHOW_INPUT" => "Y",
                "INPUT_ID" => "title-search-input",
                "CONTAINER_ID" => "search",
                "PRICE_CODE" => array(
                  0 => "BASE",
                ),
                "SHOW_PREVIEW" => "Y",
                "PREVIEW_WIDTH" => "75",
                "PREVIEW_HEIGHT" => "75",
                "CONVERT_CURRENCY" => "Y"
              ),
              false
            ); ?>
          </div>
        </div>

      </div>
    </div>
    <!-- header-bottom -->
 
  </header>