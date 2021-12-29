<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!doctype html>
<html>
<head>
<script src='https://pos.gosuslugi.ru/bin/script.min.js'></script> 
<style>
#js-show-iframe-wrapper{position:relative;display:flex;align-items:center;justify-content:center;width:100%;min-width:293px;max-width:100%;background:linear-gradient(138.4deg,#38bafe 26.49%,#2d73bc 79.45%);color:#fff;cursor:pointer}#js-show-iframe-wrapper .pos-banner-fluid *{box-sizing:border-box}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2{display:block;width:240px;min-height:56px;font-size:18px;line-height:24px;cursor:pointer;background:#0d4cd3;color:#fff;border:none;border-radius:8px;outline:0}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover{background:#1d5deb}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus{background:#2a63ad}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active{background:#2a63ad}@-webkit-keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@font-face{font-family:LatoWebLight;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:LatoWeb;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:LatoWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebLight;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebRegular;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:ScadaWebRegular;src:url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:ScadaWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:Geometria;src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.eot);src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.eot?#iefix) format("embedded-opentype"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.ttf) format("truetype");font-weight:400;font-style:normal}@font-face{font-family:Geometria-ExtraBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.eot);src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.eot?#iefix) format("embedded-opentype"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.ttf) format("truetype");font-weight:800;font-style:normal}
</style>

<style>
#js-show-iframe-wrapper{background:var(--pos-banner-fluid-26__background)}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2{width:100%;min-height:52px;background:#fff;color:#0b1f33;font-size:16px;font-family:LatoWeb,sans-serif;font-weight:400;padding:0;line-height:1.2}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active,#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus,#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover{background:#e4ecfd}#js-show-iframe-wrapper .bf-26{position:relative;display:grid;grid-template-columns:var(--pos-banner-fluid-26__grid-template-columns);grid-template-rows:var(--pos-banner-fluid-26__grid-template-rows);width:100%;max-width:var(--pos-banner-fluid-26__max-width);box-sizing:border-box;grid-auto-flow:row dense}#js-show-iframe-wrapper .bf-26__decor{background:var(--pos-banner-fluid-26__bg-url) var(--pos-banner-fluid-26__bg-url-position) no-repeat;background-size:cover;background-color:#fff;position:relative}#js-show-iframe-wrapper .bf-26__content{display:flex;flex-direction:column;padding:var(--pos-banner-fluid-26__content-padding);grid-row:var(--pos-banner-fluid-26__content-grid-row);justify-content:center}#js-show-iframe-wrapper .bf-26__text{margin:var(--pos-banner-fluid-26__text-margin);font-size:var(--pos-banner-fluid-26__text-font-size);line-height:1.4;font-family:LatoWeb,sans-serif;font-weight:700;text-align:right;color:#0b1f33}#js-show-iframe-wrapper .bf-26__bottom-wrap{display:flex;flex-direction:row;align-items:center}#js-show-iframe-wrapper .bf-26__logo-wrap{position:absolute;top:var(--pos-banner-fluid-26__logo-wrap-top);right:var(--pos-banner-fluid-26__logo-wrap-right);padding:var(--pos-banner-fluid-26__logo-wrap-padding);border-radius:0 0 8px 0}#js-show-iframe-wrapper .bf-26__logo{width:var(--pos-banner-fluid-26__logo-width);margin-left:1px}#js-show-iframe-wrapper .bf-26__slogan{font-family:LatoWeb,sans-serif;font-weight:700;font-size:var(--pos-banner-fluid-26__slogan-font-size);line-height:1.2;color:#005ca9}#js-show-iframe-wrapper .bf-26__btn-wrap{width:100%;max-width:var(--pos-banner-fluid-26__button-wrap-max-width)}
</style >
<div id='js-show-iframe-wrapper'>
  <div class='pos-banner-fluid bf-26'>

    <div class='bf-26__decor'>
      <div class='bf-26__logo-wrap'>
        <img
          class='bf-26__logo'
          src='https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg'
          alt='Госуслуги'
        />
        <div class='bf-26__slogan'>Решаем вместе</div >
      </div >
    </div >
    <div class='bf-26__content'>
      <div class='bf-26__text'>
        Есть предложения по организации учебного процесса или знаете, как сделать учреждение лучше?
      </div >

      <div class='bf-26__bottom-wrap'>
        <div class='bf-26__btn-wrap'>
          <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
          <button
            class='pos-banner-btn_2'
            type='button'
          >Написать сообщение
          </button >
        </div >
      </div>
    </div >

  </div >
</div >
<script>

(function(){
  "use strict";function ownKeys(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);if(t)r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable});n.push.apply(n,r)}return n}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};if(t%2)ownKeys(Object(n),true).forEach(function(t){_defineProperty(e,t,n[t])});else if(Object.getOwnPropertyDescriptors)Object.defineProperties(e,Object.getOwnPropertyDescriptors(n));else ownKeys(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}function _defineProperty(e,t,n){if(t in e)Object.defineProperty(e,t,{value:n,enumerable:true,configurable:true,writable:true});else e[t]=n;return e}var POS_PREFIX_26="--pos-banner-fluid-26__",posOptionsInitialBanner26={background:"#b5d43c","grid-template-columns":"100%","grid-template-rows":"292px auto","max-width":"100%","text-font-size":"20px","text-margin":"0 0 24px 0","button-wrap-max-width":"100%","bg-url":"url('https://pos.gosuslugi.ru/bin/banner-fluid/25/banner-fluid-bg-25-2.svg')","bg-url-position":"center bottom","content-padding":"24px","content-grid-row":"0","logo-wrap-padding":"16px 12px 12px","logo-width":"65px","logo-wrap-top":"0","logo-wrap-right":"0","slogan-font-size":"12px"},setStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_26;Object.keys(e).forEach(function(r){t.style.setProperty(n+r,e[r])})},removeStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_26;Object.keys(e).forEach(function(e){t.style.removeProperty(n+e)})};function changePosBannerOnResize(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner26),n=document.getElementById("js-show-iframe-wrapper"),r=n?n.offsetWidth:document.body.offsetWidth;if(r>308)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/25/banner-fluid-bg-25-1.svg')",t["bg-url-position"]="center calc(100% + 22px)";if(r>340)t["button-wrap-max-width"]="206px";if(r>568)t["grid-template-columns"]="1fr 292px",t["grid-template-rows"]="100%",t["content-grid-row"]="1",t["content-padding"]="32px 24px",t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/25/banner-fluid-bg-25-2.svg')",t["bg-url-position"]="center bottom";if(r>610)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/25/banner-fluid-bg-25-1.svg')",t["bg-url-position"]="calc(50% + 29px) calc(100% + 25px)";if(r>782)t["grid-template-columns"]="1fr 400px";if(r>820)t["grid-template-columns"]="1fr 420px",t["bg-url-position"]="center -12px";if(r>1098)t["grid-template-columns"]="1fr 557px",t["text-font-size"]="28px",t["content-padding"]="32px 32px 32px 50px",t["logo-width"]="78px",t["slogan-font-size"]="15px",t["logo-wrap-padding"]="20px 16px 16px";if(r>1300)t["content-padding"]="32px 40px 32px 140px",t["bg-url-position"]="center calc(100% + 33px)";if(r>1422)t["max-width"]="1422px",t["grid-template-columns"]="1fr 720px",t["text-font-size"]="32px",t.background="linear-gradient(90deg, #b5d43c 50%, #ffffff 50%)";setStyles(t,e)}changePosBannerOnResize(),window.addEventListener("resize",changePosBannerOnResize),window.onunload=function(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner26);window.removeEventListener("resize",changePosBannerOnResize),removeStyles(t,e)};
})()
</script>
 <script>Widget("https://pos.gosuslugi.ru/form", 300377)</script>

    <?
    $APPLICATION->ShowHead();

    use Bitrix\Main\Page\Asset;

    // CSS
    Asset::getInstance()->addCss( '/bitrix/css/main/font-awesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/bootstrap.min.css');
//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/source/jquery.fancybox.css');
    // JS
    CJSCore::Init(array("jquery"));
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-1.9.1.min.js');
//    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js');
//    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/source/jquery.fancybox.pack.js');
//    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
//    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.bundle.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.sudoSlider.min.js');

    //    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-1.9.1.min.js');

    //STRING
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico' />");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
//    Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap&subset=latin-ext\" rel=\"stylesheet\'>");
//    Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap&subset=latin-ext\" rel=\"stylesheet\'>");
    ?>

    <title><? $APPLICATION->ShowTitle() ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>


</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="wrapper">
    <div class="top">
        <div class="header_container">
            <div class="top-header">
                <div class="container1300">
                    <div class="top-header__add1">
                        <div class="top-header__add1_address">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/header-address.php"
                                )
                            );?>
                        </div>
                        <div class="top-header__add1_map">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/mapsite.svg" alt="">
                            <p><a style="text-decoration: none; color: #1e1a16; padding: 0 10px" href="/zapis/karta.php">карта сайтa</a></p>
                        </div>
                        <div id="bad-see" class="top-header__add1_glasses" >
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/glasses.svg" alt="">
                            <div id="badVersion">версия для слабовидящих</div>
                        </div>
                        <div><img class="showModalBlock" id="lcabblock" data-block="auth" src="<?=SITE_TEMPLATE_PATH?>/images/lcab10.png"  alt=""></div>
                    </div>
                </div>
                <div class="container1300">
                    <div class="top-header__add2">
                        <div class="top-header__add2_box">
                        <div class="logo__header">
                            <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt=""></a>
                        </div>
                        <div class="top-header__add2_firm">
                            <div class="top-header__add2_org">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/includes/header-org.php"
                                    )
                                );?>
                            </div>
                            <div class="top-header__add2_name">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/includes/header-name.php"
                                    )
                                );?>
                            </div>
                        </div>
                        </div>
                        <div class="top-header__add2_search">
                            <?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"search", 
	array(
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "Y",
		"COMPONENT_TEMPLATE" => "search"
	),
	false
);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu_container">
            <div class="container1300">
                <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                    <div class="container1300">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!--                            <a href="/"><img class="logo" src="--><?//=SITE_TEMPLATE_PATH?><!--/images/logo.png" alt=""></a>-->
                        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
<!--                            <ul id="menu-glavnoe-gorizontalnoe-menyu" class="navbar-nav nav-fill w-100">-->
                                <!--     <a class="navbar-brand" href="#">Navbar</a> -->
                                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topmenu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "section",
		"COMPONENT_TEMPLATE" => "topmenu",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
);?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="breadcrumb_container flex-centre">
            <div class="container1300 container-fluid">
                <div class="row breadcrumb-padding">
                    <div class="col-lg-12">
                        <div class="nav-line">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:breadcrumb",
                                "breadcrumblvs",
                                array(
                                    "START_FROM" => "0",
                                    "PATH" => "",
                                    "SITE_ID" => "s1",
                                    "COMPONENT_TEMPLATE" => "breadcrumblvs"
                                ),
                                false
                            );?>
                            <h2><?$APPLICATION->ShowTitle(false);?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider_container hide index">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "slider_main",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "2",
                        "IBLOCK_TYPE" => "content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "20",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("ATT_TEG", ""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                );?>
            </div>
        <div class="index_container hide index">
            <div class="container1300">
                <div class="front1">
                    <div class="front1__img">
<!--                        <div class="front1__img_up">-->
<!--                           <img src="--><?//=SITE_TEMPLATE_PATH?><!--/images/_59.jpg" alt="">-->
<!--                        </div>-->
                        <div class="front1__img_main">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/includes/front1-img.php"
                            )
                        );?>
                        </div>
<!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/images/_58.jpg" alt="">-->
                    </div>
                    <div class="front1__text">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/includes/front1.php"
                            )
                        );?>
                    </div>
                </div>
            </div>
            <div class="front2_container">
                <div class="front2_container_triangle">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/_57.png" alt="">
                </div>
                <div class="container1300">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reesons", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/obrazovanie/#ELEMENT_ID#.html",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "reesons"
	),
	false
);?>
                </div>
            </div>
            <div class="container1300">
                <div class="front3">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "main-page-tour",
                        Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array("", ""),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "4",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array("ATT_TEG", ""),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    );?>
                </div>
            </div>
            <div class="front4_container">
                <div class="front4">
                    <div class="front4_map_rel">
                        <div class="front4_map_abs">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8fa8243345d1689f9a2fecb3d435c8526e96e933dcdf4d378e600ca8261c2d90&amp;source=constructor" width="100%" height="650" frameborder="0"></iframe>                        </div>
                    </div>
                    <div class="front4_contact_rel">
                            <div class="front4_contact_abs1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/_80.jpg" alt="">
                            </div>

                            <div class="front4_contact_abs2">
                                <div class="front4_contact__text">
                                    <div class="front4_contact__text_head">
                                        <span><img src="<?=SITE_TEMPLATE_PATH?>/images/_29.jpg" alt=""></span>
                                        <h2>КОНТАКТЫ</h2>
                                    </div>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/includes/front4-contact.php"
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        </div>
        <div class="contact_container hide">
            <div class="container1300">
                <div class="contact">
                    <div class="contact__col">
                        <div class="contact__col_all contact__col_addr">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/cont-addr.php"
                                )
                            );?>
                        </div>
                        <div class="contact__col_all contact__col_addr">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/cont-addr2.php"
                                )
                            );?>
                        </div>
                        <div class="contact__col_all contact__col_tel">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/cont-tel.php"
                                )
                            );?>
                        </div>
                        <div class="contact__col_all contact__col_email">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/cont-email.php"
                                )
                            );?>
                        </div>
                        <div class="contact__col_all contact__col_regrab">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/cont-reg.php"
                                )
                            );?>
                        </div>
                        <div class="contact__col_all contact__col_main">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/cont-main.php"
                                )
                            );?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact-map" style="width: 100%; height: 400px"></div>
        </div>
    <div class="content_container">
        <div class="container1300">
             <div class="content">
