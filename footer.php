<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
				</div>

<!-- РњРѕР№ С„СѓС‚РµСЂ -->
<footer class="bx-footer">
<div class="bx-footer-section pt-5 bg-dark1">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-lg-3 order-lg-2 order-1 mb-4 mb-lg-0">
						
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer_catalog_menu", 
	array(
		"ROOT_MENU_TYPE" => "footer_catalog",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"CACHE_SELECTED_ITEMS" => "N",
		"MAX_LEVEL" => "3",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "footer_catalog_menu",
		"CHILD_MENU_TYPE" => "left",
		"MENU_THEME" => "site"
	),
	false
);?>
					</div>
				

					<div class="col-sm-6 col-lg-3 order-lg-3 order-2 mb-4 mb-lg-0">
	<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer_catalog_menu", 
	array(
		"ROOT_MENU_TYPE" => "footer_komplektuyushchie",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"CACHE_SELECTED_ITEMS" => "N",
		"MAX_LEVEL" => "3",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "footer_catalog_menu",
		"CHILD_MENU_TYPE" => "left",
		"MENU_THEME" => "site"
	),
	false
);?>
					</div>
					<div class="col-sm-6 col-lg-3 order-lg-4 order-3">
						<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer_catalog_menu", 
	array(
		"ROOT_MENU_TYPE" => "footer_about",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"CACHE_SELECTED_ITEMS" => "N",
		"MAX_LEVEL" => "1",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "footer_catalog_menu",
		"CHILD_MENU_TYPE" => "footer_about",
		"MENU_THEME" => "site"
	),
	false
);?>
					</div>
					<div class="col-sm-6 col-lg-3 order-lg-1 order-4">
						<div class="mb-3">
							<a class="bx-footer-logo" href="<?=SITE_DIR?>">
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR."/bitrix/templates/eshop_bootstrap_v4/images/logo-footer.svg"
									),
								false
								);?>
							</a>
						</div>
						<div class="mb-3 d-flex align-items-center">
							<!--<i class="fa fa-phone pr-3 text-white" style="font-size: 25px;"></i>-->
							<span class="text-white">
								<a class="tel-link-footer" href="tel:<? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										array(
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_DIR."include/telephone.php"
										),
										false
									);?>">
									<? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										array(
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_DIR."include/telephone.php"
										),
										false
									);?></a>
							</span>
						</div>

						<div class="mb-3 d-flex align-items-center">
							<!--<i class="fa fa-phone pr-3 text-white" style="font-size: 25px;"></i>-->
							<span class="text-white">
								 <a class="tel-link-footer" href="tel:<? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										array(
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_DIR."include/telephone2.php"
										),
										false
									);?>"><? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										array(
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_DIR."include/telephone2.php"
										),
										false
									);?></a>
									</span>
									</div>

						<div class="mb-3 text-white">
							<span class="text-white">
								 <a class="tel-link-footer" href="mailto:sale@vegas-glass.ru">sale@vegas-glass.ru</a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="bx-footer-section py-2 bg-secondary">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 bx-up">
							<a href="javascript:void(0)" data-role="eshopUpButton" class="text-white"><i class="fa fa-caret-up"></i> <?=GetMessage("FOOTER_UP_BUTTON")?></a>
						</div>
						<div class="col-sm-6 text-white text-right">
							<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."include/copyright.php"
							), false);?>
						</div>
					</div>
				</div>
			</div>
</footer>
<script>
	BX.ready(function(){
		var upButton = document.querySelector('[data-role="eshopUpButton"]');
		BX.bind(upButton, "click", function(){
			var windowScroll = BX.GetWindowScrollPos();
			(new BX.easing({
				duration : 500,
				start : { scroll : windowScroll.scrollTop },
				finish : { scroll : 0 },
				transition : BX.easing.makeEaseOut(BX.easing.transitions.quart),
				step : function(state){
					window.scrollTo(0, state.scroll);
				},
				complete: function() {
				}
			})).animate();
		})
	});
</script>
</body>
</html>