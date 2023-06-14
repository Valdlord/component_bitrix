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
<div class="owl-carousel owl-theme">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="item">
			<!--img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">-->
			<div class="section-top" style="background:url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>');">
				<div class="container">
					<div class="slide-desc-wrap">
						<div class="desc-wrap__description"><?=$arItem["NAME"]?></div>
						<div class="desc-wrap__title"><?=$arItem["PREVIEW_TEXT"]?></div>
						<a href="#" class="section-top-btn">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	<?endforeach;?>
</div>


<script>
$('.owl-carousel').owlCarousel({
	items: 1,
    loop: true,
    autoplay: false,
    autoplayTimeout: 2000,
    smartSpeed: 1000
    
})

</script>