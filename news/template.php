<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


	<section class="section_news">
        <div class="container">
			<div class="row">
				<h2 class="text-center">Новости компании</h2>
			</div>

			<div class="row">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<div class="col news_list">
					<div class="news_item">
						<div class="news_item-image">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
						</div>
						<div class="news_item-text">
							<div class="news_item-title">
								<?=$arItem["NAME"]?>
							</div>
							<div class="news_item-date">
								<?=$arItem["DISPLAY_ACTIVE_FROM"]?>
							</div>
							<div class="news_item-desc">
								<?=$arItem["PREVIEW_TEXT"];?>
							</div>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news_item-button">Подробнее</a>
						</div>
					</div>
				</div>
			<?endforeach;?>
			</div>
        </div>
    </section>