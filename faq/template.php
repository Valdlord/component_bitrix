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
$this->setFrameMode(true);?>

<section>
	<div class="container">
		<h2 class="title-faq">Ответы на частые вопросы</h2>
		<div class="row">
			<div class="col">
				<div id="accordion">

					<?foreach($arResult["ITEMS"] as $arItem):?>

					<div class="card">
						<div class="card-header card-header-item" id="heading<?=$arItem['ID']?>">

							<div class="mb-0">
								<button class="btn btn-link collapsed btn-title" data-toggle="collapse" data-target="#collapse<?=$arItem['ID']?>" aria-expanded="false" aria-controls="collapse<?=$arItem['ID']?>">
									<?=$arItem["NAME"]?>
									<span class="faq-plus plusminus"></span>
								</button>
							</div>
						</div>
						<div id="collapse<?=$arItem['ID']?>" class="collapse" aria-labelledby="heading<?=$arItem['ID']?>" data-parent="#accordion">
							<div class="card-body card-body-item">
								<?echo $arItem["PREVIEW_TEXT"];?>
							</div>
						</div>
					</div>

					<?endforeach;?>

				</div>
			</div>
		</div>
	</div>
</section>

<!-- Рабочая версия скрипта в script.js -->
<script>
/*$(document).ready(function() {
            $("#accordion .card .btn-link").click(function()
            {
              if($(this).find("i.fa").hasClass("fa-minus")) {
                $(this).find("i.fa").removeClass("fa-minus");
                $(this).find("i.fa").addClass("fa-plus");
              }
              else if ($(this).find("i.fa").hasClass("fa-plus"))
              {
                $(this).find("i.fa").removeClass("fa-plus");
                $(this).find("i.fa").addClass("fa-minus");
              }

              $(this).parents(".card").siblings().find(".card-header .btn-link i.fa").removeClass("fa-minus");
              $(this).parents(".card").siblings().find(".card-header .btn-link i.fa").addClass("fa-plus");

            });

          });


$(document).ready(function() {
            $("#accordion .card .btn-link").click(function()
            {
              if($(this).find("span.plusminus").hasClass("faq-minus")) {
                $(this).find("span.plusminus").removeClass("faq-minus");
                $(this).find("span.plusminus").addClass("faq-plus");
              }
              else if ($(this).find("span.plusminus").hasClass("faq-plus"))
              {
                $(this).find("span.plusminus").removeClass("faq-plus");
                $(this).find("span.plusminus").addClass("faq-minus");
              }

              $(this).parents(".card").siblings().find(".card-header .btn-link span.plusminus").removeClass("faq-minus");
              $(this).parents(".card").siblings().find(".card-header .btn-link span.plusminus").addClass("faq-plus");

            });

          });
*/
</script>
