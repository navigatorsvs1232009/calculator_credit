<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle(""); ?><div class="page-content">
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"section_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "add",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => "",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>

        <div class="container">
<section id="mortgage-calculator-section">
      <div class="container">
         <div class="row mortgage-calculator">
            <div class="col-md-6 col-xs-12">
               <div class="form-group">
                  <label for="object-price"> Сумма кредита, млн. руб.</label>
                  <div class="range-output">
                     <input class="money text-input" id="object-price-output">
                     <input type="hidden" id="object-price-hidden">
                  </div>
                  <input type="range" list="object-price-tickmarks" min="1" max="100" value="90"
                     class="form-control-range" id="object-price" step="any">
                  <datalist id="object-price-tickmarks">
                     <option value="0" label="1 млн.">



                     <option value="5">
                     <option value="10">
                     <option value="15">
                     <option value="20">
                     <option value="25">
                     <option value="30">
                     <option value="35">
                     <option value="40">
                     <option value="45">
                     <option value="50" label="50 млн.">
                     <option value="55">
                     <option value="60">
                     <option value="65">
                     <option value="70">
                     <option value="75">
                     <option value="80">
                     <option value="85">
                     <option value="90">
                     <option value="95">
                     <option value="100" label="100 млн.">
                  </datalist>
               </div>

               <div class="form-group vznos">
                  <label for="first-payment">Первоначальный взнос</label>
                  <div class="range-output">
                     <input class="money text-input" name="" id="first-payment-output">
                     <input type="hidden" id="first-payment-hidden">
                  </div>
                  <input type="range" list="first-payment-tickmarks" min="0" max="5000000" value="0"
                     class="form-control-range" id="first-payment">
                  <datalist id="first-payment-tickmarks">
                     <option value="300000" label="300 тыс.">
                     <option value="500000">
                     <option value="1000000">
                     <option value="1500000">
                     <option value="2000000">
                     <option value="2500000">
                     <option value="3000000">
                     <option value="4500000">
                     <option value="5000000" label="5 млн.">
                  </datalist>

               </div>

               <div class="form-group">
                  <label for="years">Срок кредита, лет</label>
                  <div class="range-output">
                     <input class="text-input" name="" id="years-output">
                  </div>
                  <input type="range" list="years-tickmarks" min="1" max="5" value="3" class="form-control-range"
                     id="years">
                  <datalist id="tickmarks years-tickmarks">
                     <option value="1" label="1 год">
                     <option value="2">
                     <option value="3">
                     <option value="4">
                     <option value="5" label="5 лет">
                  </datalist>

               </div>

               <div class="form-group">
                  <label for="percent"></label>
                  <p>Выберите опции</p>
                  <div id="percent">
                     <select id="bank-select" class="vznos">
                        <option value="14" selected>
                           Базовая ставка
                        </option>


                     </select>
                     <div class="bank-percent vznos">
                        <input class="text-input-percent" id="bank-percent-span" value="14">%
                     </div>
                     <div class="check">


                        <div>
                           <input class="predzalog" type="checkbox" id="predzalog" name="scales" value="0"
                              onclick="bed">
                           <label for="scales">Предоставлю залог</label>
                        </div>

                        <div>
                           <input type="checkbox" id="viruchka" name="horns" value="0">
                           <label for="horns">Переведу выручку в банк</label>
                        </div>

                        <div>
                           <input type="checkbox" id="dvumdoc" name="horns" value="0">
                           <label for="horns">По 2 документам</label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-offset-1 col-md-5 col-xs-12">
               <div class="mc-item mc-item-first">
                  <p>Ставка по кредиту</p>
                  <p class="mc-item-number"><span id="proctext">14</span> %</p>
                  <hr>
               </div>
               <div class="mc-item mc-item-first">
                  <p>Сумма кредита</p>
                  <p class="mc-item-number"><span id="credit-summ">90 000 000</span> ₽</p>
                  <hr>
               </div>
               <div class="mc-item">
                  <p>Ежемесячный платеж</p>
                  <p class="mc-item-number"><span id="month-pay">2 989 287</span> ₽</p>
                  <hr>
               </div>
               <div class="mc-item vznos">
                  <p>Ежемесячный платеж c нами</p>
                  <p class="mc-item-number"><span id="month-pay-with-us">17 910,78</span> ₽</p>
               </div>
               <div class="mc-item mc-item-safe vznos">
                  <p>Сэкономьте до</p>
                  <p class="mc-item-number"><span id="your-safe">1</span> млн. ₽ <a href="#" target="_blank"
                        class="question" title="Как можно сэкономить ?"><span><i class="fa fa-question-circle"
                              aria-hidden="true"></i></span></a></p>
               </div>
               <div class="mc-item-bottom">
					 <script id="bx24_form_button" data-skip-moving="true">
		                (function (w, d, u, b) {
		                    w['Bitrix24FormObject'] = b;
		                    w[b] = w[b] || function () {
		                        arguments[0].ref = u;
		                        (w[b].forms = w[b].forms || []).push(arguments[0])
		                    };
		                    if (w[b]['forms']) return;
		                    var s = d.createElement('script');
		                    s.async = 1;
		                    s.src = u + '?' + (1 * new Date());
		                    var h = d.getElementsByTagName('script')[0];
		                    h.parentNode.insertBefore(s, h);
		                })(window, document, 'https://bitrix.united.ru/bitrix/js/crm/form_loader.js', 'b24form');

		                b24form({"id": "113", "lang": "ru", "sec": "b613dz", "type": "button", "click": ""});
		            </script>
		        	<button class="btn font-14 button-padding b24-web-form-popup-btn-113">Оставить заявку на кредит</button>
                  <p>Расчет калькулятора является предварительным. Не является публичной офертой. Процентная ставка по
                     кредиту определяется исходя из анализа кредитной истории и финансового состояния заемщика.</p>
               </div>
            </div>
         </div>
      </div>
   </section>


            <div class="accordion-item w-75">
                <p><br></p><ul>
                </ul>

                <div class="accordion" id="accordion1">					<h2>Кредит Бизнес-Старт</h2>
					<p>
						 &nbsp;Для начинающих предпринимателей&nbsp;</p>
		 			<img width="760" alt="Бизнес-старт.png" src="/upload/medialibrary/0eb/bdww09ph911n2xu4dq7v43zb8eql2lil/Бизнес-старт.png" height="350" title="Бизнес-старт.png"><br>

					<div class="accordion" id="accordion1">
						<div class="card">
							<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
							О кредите</button></h3>
							<div id="collapse0" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">

									<br>
									<b>Сумма кредита</b> -&nbsp;от&nbsp;300
000 – 5&nbsp;000&nbsp;000 рублей (включительно)<br>
									<b>Срок кредитования</b> -&nbsp;от 1 до 36 месяцев (включительно)<br>
									<b>Вид кредитования </b>-&nbsp;разовый кредит<br>
									<b>Цель кредитования:<br>
									</b><br>
									<ul>
										<li>оплата товаров и услуг для ведения предпринимательской деятельности</li>
										<li>производственно-хозяйственные нужды, включая уплату налогов (на пополнение оборотного капитала)</li>
										<li>приобретение транспортных средств/самоходной техники</li>
										<li>
										приобретение оборудования</li>
									</ul>
									<b>Валюта кредита</b> -&nbsp;рубли РФ<b><br></b>
										<b>График погашения кредита -&nbsp;</b>ежемесячно равными долями<br>
										<b>Порядок уплаты процентов -&nbsp;</b>ежемесячно.<br>
										<b>Досрочное погашение -&nbsp;</b>полное досрочное погашение - без ограничений в любую дату.<br>
										<b>Неустойка за несвоевременное перечисления платежа в погашение кредита и /или в уплату процентов<br>
										</b>Двойная процентная ставка, установленная по кредиту, начисляемая на сумму просроченного платежа за каждый день просрочки.<br>
										<b>Поручительство:<br></b><ul><li>Поручительство
собственников бизнеса для юридических лиц.</li><li>

Поручительство региональной гарантийной организации
Красноярского края (АНО «Красноярский краевой центр развития бизнеса и
микрокредитная компания»).</li></ul>
										<b>Залог</b>&nbsp;<br>В залог могут
быть приняты:<p></p><ul><li><p>недвижимое
имущество (помещения, здания вместе с земельным участком, на котором они
расположены, жилая недвижимость (без прописанных несовершеннолетних лиц).</p></li><li><p>транспортные
средства (легковые и грузовые) не старше 15 лет на момент окончания кредита.</p></li><li>

самоходная техника не старше 15 лет на момент
окончания кредита.</li></ul>

							</div>
						</div>

						<div class="card">
							<h3 class="mb-0"><button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse01" aria-expanded="true" aria-controls="collapse01">Документы и требования к заемщику</button></h3>
							<div id="collapse01" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
								<div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
									<ol>
										<li>
										<p>
											 Заявка-анкета по форме Банка</p>
										 </li>
										<li>
										<p>
											 Согласие на проверку кредитной истории в БКИ
										</p>
		 								</li>
										<li>
										<p>
											 Выписка с расчетных счетов Заемщика в банках, за 6&nbsp; последних&nbsp; месяцев прошлого года&nbsp; и за текущий период ( с начала года до&nbsp; конца&nbsp; последнего завершенного месяца) с указанием даты операций, сумм, контрагентов и назначений платежей. Выписки должны быть представлены в электронном виде (в форматах Excel/OpenOffice/CSV и pdf), выгруженные из Банка-клиента.&nbsp;<br>
										</p>
		 								</li>
										<li>
										<p>
											 Копия налоговой декларации за последний отчетный налоговый период (УСН, по налогу на прибыль) с квитанцией или отметкой налогового органа о принятии.</p>
										</li><li><p>Справка из ИФНС о задолженности по налогам (возможно предоставление в
электронном виде с ЭЦП)<br></p></li>
									</ol>
									<b>Требования к Заемщику на момент подачи заявки на кредит.</b><br>
									<div>
										<p>
											Заемщик - юридическое лицо и индивидуальный предприниматель, при наличие статуса в Едином&nbsp; реестре субъектов&nbsp; МСП.
										</p>
										<p>
											Срок фактической деятельности заемщика (преемственность) - не менее 6 месяцев.</p>
										<p>
											Место ведения деятельности – Красноярский край.
										</p>
										<p>
											Отсутствие претензий к расчетному счету со стороны третьих лиц.
										</p>
										<p>
											Отсутствие действующих просроченных&nbsp; платежей перед банками.
										</p>
										<p>
											Заемщик не находится в процессе ликвидации.</p></div></div></div></div><div class="card"><div id="collapse02" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1"><div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false"><ol>
									</ol>
								</div>
							</div>
						</div>
					</div>



					<h2>Кредит Предпринимательский</h2>
					<p>
						 &nbsp;Кредит "Предпринимательский". Без залога, без необходимости собирать пакет документов. Нужна только заявка.
					</p>
		 			<img width="760" alt="Предпринимательский.png" src="/upload/medialibrary/c6b/x2qtd4249ss1e4uleytt7scscrhkiop1/Предпринимательский.png" height="350" title="Предпринимательский.png"><br>

					<div class="accordion" id="accordion1">
						<div class="card">
							<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
							О кредите</button></h3>
							<div id="collapse0" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
								<div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
									<br>
									<b>Сумма кредита</b> -&nbsp;от 50 000 рублей до 500&nbsp;000 рублей (включительно)<br>
									<b>Срок кредитования</b> -&nbsp;от 1 до 12 месяцев (включительно)<br>
									<b>Вид кредитования </b>-&nbsp;разовый кредит<br>
									<b>Цель кредитования:<br>
									</b><br>
									<ul>
										<li>оплата товаров и услуг для ведения предпринимательской деятельности</li>
										<li>производственно-хозяйственные нужды, включая уплату налогов (на пополнение оборотного капитала)</li>
										<li>приобретение транспортных средств/самоходной техники</li>
										<li>
										приобретение оборудования</li>
									</ul>
									<b>Валюта кредита</b> -&nbsp;рубли РФ<br>
									<b>Процентная ставка&nbsp;<br>
									</b><b><br>
									</b>
									<ul>
										<li>от 21.00% годовых для клиентов Банка*</li>
										<li>
										от 23.00% годовых для остальных клиентов</li>
									</ul>
									 *снизим ставку на 2.00%, при предоставлении залога<br>
										<b>График погашения кредита -&nbsp;</b>ежемесячно равными долями<br>
										<b>Порядок уплаты процентов -&nbsp;</b>ежемесячно.<br>
										<b>Досрочное погашение -&nbsp;</b>полное досрочное погашение - без ограничений в любую дату.<br>
										<b>Неустойка за несвоевременное перечисления платежа в погашение кредита и /или в уплату процентов<br>
										</b>Двойная процентная ставка, установленная по кредиту, начисляемая на сумму просроченного платежа за каждый день просрочки.<br>
										<b>Поручительство</b> -&nbsp;поручительство индивидуального предпринимателя / собственника(-ов) бизнеса<br>
										<b>Залог</b> - не требуется&nbsp;<br>
										<br>
									<p>
		 							<br>
									</p>
								</div>
							</div>
						</div>

						<div class="card">
							<h3 class="mb-0"><button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse01" aria-expanded="true" aria-controls="collapse01">Документы и требования к заемщику</button></h3>
							<div id="collapse01" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
								<div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
									<ol>
										<li>
										<p>
											 Заявка-анкета по форме Банка для кредита «Предпринимательский»
										</p>
										 </li>
										<li>
										<p>
											 Согласие на проверку кредитной истории в БКИ
										</p>
		 								</li>
										<li>
										<p>
											 Выписка с расчетных счетов Заемщика в банках, за 12&nbsp; последних&nbsp; месяцев прошлого года&nbsp; и за текущий период ( с начала года до&nbsp; конца&nbsp; последнего завершенного месяца) с указанием даты операций, сумм, контрагентов и назначений платежей. Выписки должны быть представлены в электронном виде (в форматах Excel/OpenOffice/CSV и pdf), выгруженные из Банка-клиента.&nbsp;<br>
										</p>
		 								</li>
										<li>
										<p>
											 Копия налоговой декларации за последний отчетный налоговый период (УСН, по налогу на прибыль) с квитанцией или отметкой налогового органа о принятии
										</p>
										</li>
									</ol>
									<b>Требования к Заемщику на момент подачи заявки на кредит.</b><br>
									<div>
										<p>
											Заемщик - юридическое лицо и индивидуальный предприниматель, при наличие статуса в Едином&nbsp; реестре субъектов&nbsp; МСП.
										</p>
										<p>
											Срок фактической деятельности заемщика (преемственность) - не менее 12 месяц.
										</p>
										<p>
											Место ведения деятельности – Красноярский край.
										</p>
										<p>
											Отсутствие претензий к расчетному счету со стороны третьих лиц.
										</p>
										<p>
											Отсутствие действующих просроченных&nbsp; платежей перед банками.
										</p>
										<p>
											Заемщик не находится в процессе ликвидации.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<h3 class="mb-0"><button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse02" aria-expanded="true" aria-controls="collapse02">Как подать заявку</button></h3>
							<div id="collapse02" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
								<div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
									<ol>
										<li>Скачайте&nbsp;<a href="https://www.united.ru/%D0%A4%D0%BE%D1%80%D0%BC%D0%B0%20%D0%B4%D0%BB%D1%8F%20%D0%98%D0%9F.xls">Форму заявки&nbsp; для ИП</a>&nbsp;или&nbsp;<a href="https://www.united.ru/%D0%A4%D0%BE%D1%80%D0%BC%D0%B0%20%D0%B4%D0%BB%D1%8F%20%D0%AE%D0%9B.xls">Форму заявки для ЮЛ</a>.</li>
										<li>Заполните форму заявки (форма заявки на 2 листах).</li>
										<li>Скачайте <a href="/Форма%20согласий%20на%20обработку%20ПДн.DOCX">Согласие на проверку кредитной истории в БКИ</a> и заполните его</li>
										<li><a href="https://b24-4gz7pv.bitrix24.site/crm_form68/"><span style="color: #0000ff;">Оставьте заявку онлайн</span></a><span style="color: #0000ff;">,</span>&nbsp;заполнив все поля и загрузив заполненную форму заявки, согласие на проверку кредитной истории в БКИ и выписки с расчетных счетов</li>
										<li>После получения заявки банковские специалисты свяжутся с вами.</li>
									</ol>
								</div>
							</div>
						</div>
					</div>




<br>
                    <h2>Кредит БИЗНЕС-ЭКСПРЕСС</h2>



                    	<img width="760" alt="Бизнес-экспресс.png" src="/upload/medialibrary/0c5/ddalc7o2h4qln8g00kk0vj1m7htlx8f8/Бизнес-экспресс.png" height="350" title="Бизнес-экспресс.png"><br>
                    	<div class="card">
                        <h3 class="mb-0">
                            <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Условия и требования
                            </button>
                        </h3>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
                            <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                                <p class="MsoNormal">
                                    Воспользуйтесь финансовыми услугами АО АИКБ «Енисейский объединенный банк» и
                                    получите
                                    возможность на привлекательных условиях:
                                </p>
                                <p class="MsoNormal">
 <span>- пополнить оборотные средства Вашей компании;&nbsp;&nbsp; <br>
	 - реализовать планы по развитию Вашего бизнеса;&nbsp;&nbsp; <br>
	 - погасить текущую задолженность перед другими банками.</span>
                                </p>
                                <p class="MsoNormal">
                                    <b>&nbsp;</b>
                                </p>
                                <table class="MsoNormalTable" cellspacing="0" cellpadding="0" width="676">
                                    <tbody>
                                    <tr>
                                        <td width="170">
                                            <p class="MsoNormal">
                                                <b>ПАРАМЕТР</b>
                                            </p>
                                        </td>
                                        <td width="507">
                                            <p class="MsoNormal" align="center">
                                                <b><i>Кредит «Бизнес-экспресс»</i></b>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Сумма кредита
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                от 500 000 рублей (включительно) до 15 000&nbsp;000 рублей
                                                (включительно)
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Срок, для кредитования
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                От 6 до 60 месяцев (включительно)
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Вид кредитования
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                -&nbsp;разовый кредит
                                            </p>
                                            <p class="MsoNormal">
                                                - возобновляемая кредитная линия
                                            </p>
                                            <p class="MsoNormal">
                                                - не возобновляемая кредитная линия
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Цель кредитования
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                -производственно-хозяйственные нужды, включая уплату налогов (на
                                                пополнение
                                                оборотного капитала)
                                            </p>
                                            <p class="MsoNormal">
                                                -приобретение транспортных средств/самоходной техники
                                            </p>
                                            <p class="MsoNormal">
                                                - приобретение оборудования
                                            </p>
                                            <p class="MsoNormal">
                                                -приобретение коммерческой недвижимости и др.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Валюта кредита
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                Рубли РФ
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Процентная ставка
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                От 17,0% годовых&nbsp;
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Комиссии по кредиту
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                Согласно решению Кредитного комитета, но минимум 2% от суммы выдаваемого
                                                кредита.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                График погашения кредита
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                Для разового кредита ежемесячно равными долями, для кредитной линии - по
                                                решению кредитного комитета/малого кредитного комитета.&nbsp;
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Порядок уплаты процентов
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                Ежемесячно
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Досрочное&nbsp; погашение
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                Полное досрочное погашение - без ограничений в любую дату
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Неустойка за несвоевременное перечисления платежа в погашение кредита и
                                                /или
                                                в уплату процентов
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                Двойная процентная ставка, установленная по кредиту, начисляемая на
                                                сумму
                                                просроченного платежа за каждый день просрочки
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Дата принятие решения:
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                Принятие решения до 24 часов с момента предоставления полного пакета
                                                документов
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" width="170" valign="top">
                                            <p class="MsoNormal">
                                                Обеспечение в виде поручительства
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                Поручительство собственников бизнеса для ЮЛ
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                <br>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Залог
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                Не требуется.
                                            </p>
                                            <p>
                                                По решению Кредитного комитета: в залог могут быть приняты:
                                            </p>
                                            <p>
                                                -Недвижимое имущество (помещения, здания вместе с земельным участком, на
                                                котором они расположены, жилая недвижимость (без прописанных
                                                несовершеннолетних лиц);
                                            </p>
                                            <p>
                                                •Транспортные средства ( легковые и грузовые) не старше 15лет, на момент
                                                окончания кредита;
                                            </p>
                                            <p>
                                                •Самоходная техника не старше 15лет, на момент окончания кредита;
                                            </p>
                                            <p>
                                                Для определения залоговой стоимости имущества применяются понижающие
                                                коэффициенты, размер которых установлен Положением о кредитовании и
                                                оценке
                                                кредитных рисков юридических лиц и индивидуальных предприниматели в АО
                                                АИКБ
                                                «Енисейский объединенный банк».
                                            </p>
                                            <p class="MsoNormal">
                                                -легковой автотранспорт подлежит регистрации в реестре Нотариата&nbsp;&nbsp;<br>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="170" valign="top">
                                            <p class="MsoNormal">
                                                Банковский счет
                                            </p>
                                        </td>
                                        <td width="507" valign="top">
                                            <p class="MsoNormal">
                                                Требуется наличие расчетного счета
                                            </p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="MsoNormal">
                                    &nbsp;
                                </p>
                                <p class="MsoNormal">
                                <span><a href="https://www.united.ru/docs/for_business/#collapse4303"><u>Необходимый перечень документов для одобрения кредита и требования к залоговому имуществу</u></a><u>&nbsp;&nbsp;</u></span></p>
                                <p class="MsoNormal">
                                    &nbsp;
                                </p>

                                <p class="MsoNormal">
                                    <b>Внимание!&nbsp;</b><span>Вы можете&nbsp;<a class="b24-web-form-popup-btn-40" style="cursor: pointer" ><b><span style="color: rgb(0, 0, 0);">заполнить форму онлайн - заявки на сайте</span></b></a></span>
                                </p>
                                <p class="MsoNormal">
                                    &nbsp;
                                </p>
                                <p class="MsoNormal">
                                    Более подробно об условиях программы Вы можете узнать в Дирекции корпоративного бизнеса&nbsp;</p><p class="MsoNormal">по<b>&nbsp;тел.&nbsp; +7 (391)&nbsp;</b><b>277-96-24&nbsp; &nbsp; &nbsp;&nbsp;</b></p>
                                <p class="MsoNormal">
                                    &nbsp;
                                </p>
                            </div>
                        </div>

                    </div>



                    <h2>Кредит БИЗНЕС-УНИВЕРСАЛ</h2><img width="760" alt="Универсал.png" src="/upload/medialibrary/554/53yr6i44slqxsc1nmbr3kgtkdp60ftq4/Универсал.png" height="350" title="Универсал.png"><br>
                        <div class="card"><h3 class="mb-0">
                            <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                Условия и требования
                            </button>
                        </h3>
                        <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
                            <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                                <p class="MsoNormal">
                                    Воспользуйтесь финансовыми услугами АО АИКБ «Енисейский объединенный банк» и
                                    получите
                                    возможность на привлекательных условиях:
                                </p>
                                <p class="MsoNormal">
 <span>- пополнить оборотные средства Вашей компании;&nbsp;&nbsp; <br>
	 - реализовать планы по развитию Вашего бизнеса;&nbsp;&nbsp; <br>
	 - погасить текущую задолженность перед другими банками.</span>
                                </p>
                                <p class="MsoNormal">
                                    <b>&nbsp;</b>
                                </p>
                                <table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="695">
                                    <tbody>
                                    <tr>
                                        <td width="223">
                                            <p class="MsoNormal">
                                                <a id="bxid_796760" name="OLE_LINK1"><b><span style="font-size: 10pt; font-family: &quot;Times New Roman&quot;, serif;">ПАРАМЕТР</span></b></a>
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal" align="center">
                                                <b><i>Кредит «Бизнес-универсал»</i></b>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Сумма кредита
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                свыше 1 000&nbsp;000 рублей&nbsp;
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Срок, для кредитования
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                От 6 до 36 месяцев (включительно) – для разового кредита и кредитных
                                                линий
                                            </p>
                                            <p class="MsoNormal">
                                                До 12 месяцев (включительно) - овердрафт
                                            </p>
                                            <p>
                                                До 5 лет (включительно) - для разового кредита и невозобновляемой
                                                кредитной
                                                линии на приобретение коммерческой недвижимости.<br>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Вид кредитования
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                -разовый кредит
                                            </p>
                                            <p class="MsoNormal">
                                                -возобновляемая кредитная линия
                                            </p>
                                            <p class="MsoNormal">
                                                -не возобновляемая кредитная линия
                                            </p>
                                            <p class="MsoNormal">
                                                -овердрафт
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Цель кредитования
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                -производственно-хозяйственные нужды, включая уплату налогов (на
                                                пополнение
                                                оборотного капитала)
                                            </p>
                                            <p class="MsoNormal">
                                                -приобретение транспортных средств/самоходной техники
                                            </p>
                                            <p class="MsoNormal">
                                                - приобретение оборудования
                                            </p>
                                            <p class="MsoNormal">
                                                -приобретение коммерческой недвижимости и др.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Валюта кредита
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                Рубли РФ
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Процентная ставка
                                            </p>
                                        </td>
                                        <td width="472">
                                            От 17,0 % годовых
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Комиссии по кредиту
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                Согласно решению Кредитного комитета
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                График погашения кредита
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                Срок транша по кредитным линиям, а так же по разовому кредиту&nbsp; -
                                                индивидуально, в зависимости от специфики деятельности заемщика по
                                                решению
                                                кредитного комитета.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Порядок уплаты процентов
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                Ежемесячно
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Досрочное&nbsp; погашение
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                Полное досрочное погашение - без ограничений в любую дату;
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Неустойка за несвоевременное перечисления платежа в погашение кредита и
                                                /или
                                                в уплату процентов
                                            </p>
                                        </td>
                                        <td width="472" valign="top">
                                            <p class="MsoNormal">
                                                Двойная процентная ставка, установленная по кредиту, начисляемая на
                                                сумму
                                                просроченного платежа за каждый день просрочки.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Дата принятие решения:
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                Принятие решения&nbsp; от 2 до 5 дней, с момента предоставления полного
                                                пакета документов
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" width="223" valign="top">
                                            <p class="MsoNormal">
                                                Обеспечение в виде поручительства
                                            </p>
                                        </td>
                                        <td width="472" valign="top">
                                            <p class="MsoNormal">
                                                По решению Кредитного комитета
                                            </p>
                                            <p class="MsoNormal">
                                                &nbsp;
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="472" valign="top">
                                            <p class="MsoNormal">
                                                <br>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Залог
                                            </p>
                                        </td>
                                        <td width="472" valign="top">
                                            <p class="MsoNormal">
                                                По решению Кредитного комитета.
                                            </p>
                                            <p class="MsoNormal">
                                                &nbsp;В залог могут быть приняты:
                                            </p>
                                            <p class="MsoNormal">
                                                -Недвижимое имущество (помещения, здания вместе с земельным участком, на
                                                котором они расположены, жилая недвижимость (без прописанных
                                                несовершеннолетних лиц);
                                            </p>
                                            <p class="MsoNormal">
                                                •&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                Транспортные средства (легковые и грузовые) не старше 15лет, на момент
                                                окончания кредита;
                                            </p>
                                            <p class="MsoNormal">
                                                •&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                Самоходная техника не старше 15 лет, на момент окончания кредита;
                                            </p>
                                            <p class="MsoNormal">
                                                Для определения залоговой стоимости имущества применяются понижающие
                                                коэффициенты, размер которых установлен Положением о кредитовании и
                                                оценке
                                                кредитных рисков юридических лиц и индивидуальных предприниматели в АО
                                                АИКБ
                                                «Енисейский объединенный банк».
                                            </p>
                                            <p>
                                                -легковой автотранспорт подлежит регистрации в реестре Нотариата&nbsp;&nbsp;<br>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="223" valign="top">
                                            <p class="MsoNormal">
                                                Банковский счет
                                            </p>
                                        </td>
                                        <td width="472">
                                            <p class="MsoNormal">
                                                Требуется наличие расчетного счета
                                            </p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="MsoNormal">
                                    &nbsp;
                                </p>
                                <p class="MsoNormal">
                                <a href="https://www.united.ru/docs/for_business/#collapse4302"><u>Необходимый перечень документов для одобрения кредита и требования к залоговому имуществу</u></a></p><p class="MsoNormal">
                                </p>

                                <p class="MsoNormal">
                                <span><b>Внимание!&nbsp;</b>Вы можете&nbsp;<a id="bxid_910591" class="b24-web-form-popup-btn-40" style="cursor: pointer" ><b>заполнить форму онлайн - заявки на сайте</b></a></span>
                                </p>
                                <p class="MsoNormal">
 <span> <br>
 </span>
                                </p>
                                <p>Более подробно об условиях программы Вы можете узнать в Дирекции корпоративного бизнеса&nbsp;</p><p>по&nbsp;тел.&nbsp;<b> +7 (391)&nbsp;277-96-24&nbsp; &nbsp;</b></p>

                            </div>
                        </div>
                    </div>

                    <h2>Кредит БИЗНЕС-РЕФИНАНСИРОВАНИЕ</h2><img width="760" alt="Предпринимательский.png" src="/upload/medialibrary/b34/9gntwydeahzqc63un1l51bjug1da0aik/Предпринимательский.png" height="350" title="Предпринимательский.png"><br>
                        <div class="card"><h3 class="mb-0">
                            <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                Условия и требования
                            </button>
                        </h3>
                        <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
                            <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">

                                <p class="MsoNormal">Воспользуйтесь финансовыми услугами АО АИКБ «Енисейский
                                    объединенный
                                    банк» и получите возможность на привлекательных условиях:
                                </p>

                                <p class="MsoNormal"><span>- пополнить оборотные средства Вашей компании;&nbsp;&nbsp;
    <br>
   - реализовать планы по развитию Вашего бизнеса;&nbsp;&nbsp;
    <br>
   - погасить текущую задолженность перед другими банками.
                            </span></p>
                                <p></p>
                                <p></p>

                                <p class="MsoNormal"><b>&nbsp;</b></p>

                                <table class="MsoNormalTable" cellspacing="0" cellpadding="0" width="686">
                                    <tbody>
                                    <tr>
                                        <td width="261">
                                            <p class="MsoNormal"><a id="bxid_912329" name="OLE_LINK1"><b><span style="font-size: 10pt; font-family: &quot;Times New Roman&quot;, serif;">ПАРАМЕТР</span></b></a>
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal" align="center"><b><i>Кредит «Бизнес –
                                                        рефинансирование»</i></b>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Сумма кредита
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">от 500 000 рублей, сумма кредита зависит от остатка
                                                рефинансируемых кредитов,
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Срок, для кредитования
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">До 36 месяцев.
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Вид кредитования
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">-разовый кредит
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Цель кредитования
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">-На рефинансирование кредита (погашение действующих
                                                кредитов в одном или нескольких сторонних банках).
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p>Валюта кредита
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Рубли РФ
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Процентная ставка
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Процентная ставка устанавливается до&nbsp; -7% от
                                                ставки
                                                рефинансируемого кредита, но не менее 17% годовых</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Комиссии по кредиту
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Согласно решению Кредитного комитета
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">График погашения кредита
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Индивидуально, в зависимости от специфики деятельности
                                                заемщика.
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Порядок уплаты процентов
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Ежемесячно
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Досрочное&nbsp; погашение
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Полное досрочное погашение - без ограничений в любую
                                                дату;
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Неустойка за несвоевременное перечисления платежа в
                                                погашение кредита и /или в уплату процентов
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Двойная процентная ставка, установленная по кредиту,
                                                начисляемая на сумму просроченного платежа за каждый день просрочки.
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Дата принятие решения:
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Принятие решения&nbsp; от 2 до 5 дней, с момента
                                                предоставления полного пакета документов
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="2" width="261" valign="top">
                                            <p class="MsoNormal">Обеспечение в виде поручительства
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">По решению Кредитного комитета
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Возможно предоставления поручительство АО «АРБМКК»&nbsp;
                                                для субъектов МСП
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Залог
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Возможна выдача&nbsp; 100%&nbsp; от суммы кредита до
                                                момента оформления в&nbsp; Залог имущества, принятого ранее по
                                                рефинансируемому кредиту, а именно:
                                            </p>

                                            <p class="MsoNormal">-недвижимое имущество должно быть передано Банку в
                                                течение
                                                30 календарных дней.
                                            </p>

                                            <p class="MsoNormal">-транспортные средства и самоходная техника в течение 5
                                                календарных дней.
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="261" valign="top">
                                            <p class="MsoNormal">Банковский счет
                                            </p>
                                        </td>
                                        <td width="425" valign="top">
                                            <p class="MsoNormal">Требуется наличие расчетного счета
                                            </p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <p class="MsoNormal">&nbsp;
                                </p>

                                <p class="MsoNormal"><span>
                                    <a href="https://www.united.ru/docs/for_business/#collapse4301">Необходимый перечень документов для одобрения кредита и требования к залоговому имуществу</a><br></span></p>

                                <p class="MsoNormal"><span>
                                    <br>
                                </span></p>
                                <p class="MsoNormal"><span><b>Внимание!&nbsp;</b>Вы
                                    можете&nbsp;<a id="bxid_57558" class="b24-web-form-popup-btn-40" style="cursor: pointer" ><b>заполнить
                                            форму онлайн - заявки на сайте</b></a></span></p>

                                <p class="MsoNormal"><span>
                                    <br>
                                </span></p>

                                <p>Более подробно об условиях программы Вы можете узнать в Дирекции корпоративного бизнеса&nbsp;</p><p>по&nbsp;тел.&nbsp; <b>+7 (391)&nbsp;277-96-24&nbsp; &nbsp;</b></p>
                                <br>

                            </div>
                        </div>
                    </div>




                    <h2>Кредит ТЕНДЕРНЫЙ&nbsp;</h2>
                    <img width="760" alt="тендерный.png" src="/upload/medialibrary/cfb/8ycn3tp7cv5hmmy8xj293tqo131nx084/тендерный.png" height="350" title="тендерный.png"><br>
                        <div class="card"><h3 class="mb-0">
                            <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                Условия и требования
                            </button>
                        </h3>
                        <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">

                            <p class="MsoNormal">
                                АО АИКБ «Енисейский объединенный банк» предлагает своим клиентам особый банковский
                                продукт, разработанный специально для организаций, желающих принять участие в
                                электронных аукционах на торговых площадках.
                            </p>
                            <p class="MsoNormal">
                                <b>&nbsp;</b>
                            </p>
                            <table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="662">
                                <tbody>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Цель кредитования</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            Обеспечение заявок на участие в электронных аукционах на торговых
                                            площадках
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Валюта</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            Рубли
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Режим кредитования</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            <b>Фиксированная кредитная линия</b>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Сумма лимита кредитной линии</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            От 500 000 руб. до 10 000 000 руб.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Сумма транша</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            Не менее 500 000 руб.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Срок кредитной линии</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            До 60 дней включительно
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Срок траншей</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            До 60 дней
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Период доступности</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            Устанавливает КК
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Размер процентной ставки</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            от 17,0 % годовых
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Размер комиссии</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal">
                                            За резервирование денежных средств в рамках открытой кредитной линии
                                            1,1%
                                            единовременно от суммы установленного лимита
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Отсрочка по уплате комиссии</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            Не предоставляется
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Порядок погашения основного долга</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            В конце срока кредитования
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Порядок уплаты процентов</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            Ежемесячно
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Отсрочка по уплате процентов</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            Не предоставляется
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Обязательные условия</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal">
                                            Требования к заемщику на момент подачи заявки на кредит (см.
                                            раздел&nbsp;<span lang="EN-US">II</span>)
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Обеспечение</b>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="MsoNormal" align="center">
                                            Поручительство&nbsp; основных учредителей , по решению КК
                                        </p>
                                        <p class="MsoNormal" align="center">
                                            &nbsp;
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="208">
                                        <p class="MsoNormal">
                                            <b>Период рассмотрения заявки и принятия решения</b>
                                        </p>
                                    </td>
                                    <td width="454">
                                        <p class="MsoNormal" align="center">
                                            С момента&nbsp; полного предоставления&nbsp; документов&nbsp;&nbsp; от
                                            2-до
                                            5 дней
                                        </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                            <p class="MsoNormal">
                                <a href="https://www.united.ru/docs/for_business/#collapse4305"><span style="color: #0000ff;">Документы, предоставляемые заемщиком на момент подачи заявки и требования к залоговому имуществу</span></a></p>
                            <p class="MsoNormal">
                                <br>
                            </p>
                            <p>Более подробно об условиях программы Вы можете узнать в Дирекции корпоративного бизнеса&nbsp;</p><p><b>по&nbsp;тел.&nbsp; +7 (391)&nbsp;277-96-24&nbsp; &nbsp;</b></p>
                            <br>
                        </div>
                    </div>






                </div>
            </div>


        </div>

    <style>
        .button-padding:hover {
            text-decoration: unset !important;
        }
    </style></div>

 <style>
      .vznos {
         display: none;
      }

      #mortgage-calculator-section {
         margin-top: 50px;
         margin-bottom: 100px;
      }

      .mortgage-calculator {
         padding: 70px;
         border-radius: 4px;
         box-shadow: 0px 2px 13px rgba(0, 0, 0, 0.08);
      }

      .mortgage-calculator #credit-purpose {
         width: 100%;
         background: #fff;
         border: 1px solid #ccc;
         height: 45px;
         margin-bottom: 10px;
      }

      .mortgage-calculator label {
         font-size: 16px;
         color: #333;
      }

      .mortgage-calculator .range-output span {
         color: #333;
      }

      .mortgage-calculator datalist {
         display: flex;
         justify-content: space-between;
         padding-top: 7px;
      }

      .mortgage-calculator datalist option {
         display: inline;
         color: #ccc;
         font-weight: 300;
         font-size: 12px;
      }

      .money,
      .text-input {
         width: 100%;
         border: none;
      }

      .text-input-percent {
         width: 60%;
         border: none;
      }

      .mortgage-calculator input[type="range"] {
         width: 100%;
         height: 3px;
         border-radius: 4px;
         background: #00b3ff;
         outline: none;
         opacity: 0.7;
         -webkit-transition: .2s;
         transition: opacity .2s;
         border-top-left-radius: 0;
         border-top-right-radius: 0;
      }

      .mortgage-calculator input[type="range"]::-webkit-slider-thumb {
         -webkit-appearance: none;
         appearance: none;
         width: 17px;
         height: 17px;
         border-radius: 50%;
         background: #fff;
         border: 2px solid #00b3ff;
         cursor: pointer;
      }

      .mortgage-calculator input[type="range"]::-moz-range-thumb {
         width: 25px;
         height: 25px;
         border-radius: 50%;
         background: #4CAF50;
         cursor: pointer;
      }

      .mortgage-calculator .range-output {
         border: 1px solid #ccc;
         padding: 10px;
         border-bottom: none;
         border-radius: 4px;
         border-bottom-left-radius: 0;
         border-bottom-right-radius: 0;
      }

      .mortgage-calculator #percent {
         display: block;
      }

      .mortgage-calculator #percent #bank-select {
         width: 80%;
         float: left;
         background: #fff;
         border: 1px solid #ccc;
         height: 42px;
      }

      .mortgage-calculator #percent .bank-percent {
         width: 15%;
         float: left;
         background: #fff;
         border: 1px solid #ccc;
         border-radius: 4px;
         padding: 9px;
         margin-left: 5%;
         text-align: center;
         color: #04B040;
         font-size: 16px;
      }

      .mortgage-calculator .mc-item-first {
         margin-top: 27px;
      }

      .mortgage-calculator .mc-item p {
         line-height: 1;
         color: #333;
      }

      .mortgage-calculator .mc-item p.mc-item-number {
         color: #04B040;
         font-size: 22px;
      }

      .mortgage-calculator .mc-item-bottom {
         margin-top: 40px;
      }

      .mortgage-calculator .mc-item-bottom p {
         font-size: 18px;
         color: #333;
  
      }

      .mortgage-calculator .mc-item-bottom button {
         background: #00b3ff;
         color: #fefefe;
         border-radius: 4px;
         padding: 13px 20px;
         border: none;
      }

      .start_calculator .calc_row {
         position: relative;
         border: 1px solid #e0e0e0;
         border-bottom: 0;
         padding: 24px 180px 30px 30px;
      }

      .start_calculator .calc_row_label {
         position: relative;
         font-size: 16px;
         line-height: 1.4;
         font-weight: 700;
         margin: 0 0 18px;
      }

      .start_calculator .calc_row_instruction {
         position: relative;
         font-size: 13px;
         line-height: 1.5;
         top: -15px;
         margin: 0 0 7px;
         color: #7e818c;
      }

      h3,
      h4,
      h5,
      h6,
      p,
      blockquote,
      pre,
      a,
      abbr,
      acronym,
      address,
      big,
      cite,
      code,
      del,
      dfn,
      em,
      img,
      ins,
      kbd,
      q,
      s,
      samp,
      small,
      strike,
      strong,
      sub,
      sup,
      tt,
      var,
      b,
      u,
      i,
      center,
      dl,
      dt,
      dd,
      ol,
      ul,
      li,
      fieldset,
      form,
      label,
      legend,
      table,
      caption,
      tbody,
      tfoot,
      thead,
      tr,
      th,
      td,
      article,
      aside,
      canvas,
      details,
      embed,
      figure,
      figcaption,
      footer,
      header,
      hgroup,
      menu,
      nav,
      output,
      ruby,
      section,
      summary,
      time,
      mark,
      audio,
      video {
         margin: 0;
         padding: 0;
         border: 0;
         font-size: 100%;
         font: inherit;
         vertical-align: baseline;
      }

      *,
      *:before,
      *:after {
         box-sizing: inherit;
      }

      таблица стилей агента пользователя div {
         display: block;
      }

      .calc_container {
         margin: 0 auto;
         position: relative;
  
         font-weight: 400;
         font-size: 15px;
         line-height: 1.0;
         color: #36394c;
      }

      body.phantom,
      body.phantom #wrapper input,
      body.phantom #wrapper select,
      body.phantom #wrapper textarea {
         font-family: var(--font-family);
         font-size: var(--font-size);
         font-weight: 300;
         line-height: 160%;
         color: var(--content-foreground);
      }

      body.phantom {
         -webkit-text-size-adjust: none;
         -ms-overflow-style: scrollbar;
         background: var(--content-background);
      }

      .start_calculator .calc_radio {
         display: inline-block;
         vertical-align: top;
         box-sizing: border-box;
         position: relative;
         width: 250px;
         margin: 0 0 15px;
         padding: 0 20px 0 30px;
      }

      body.phantom #wrapper input[type="checkbox"],
      body.phantom #wrapper input[type="radio"] {
         -moz-appearance: none;
         -webkit-appearance: none;
         -ms-appearance: none;
         appearance: none;
         display: block;
         float: left;
         margin-right: -2em;
         opacity: 0;
         width: 1em;
         z-index: -1;
      }

      body.phantom,
      body.phantom #wrapper input,
      body.phantom #wrapper select,
      body.phantom #wrapper textarea {
         font-family: var(--font-family);
         font-size: var(--font-size);
         font-weight: 300;
         line-height: 160%;
         color: var(--content-foreground);
      }

      .start_calculator .calc_radio .calc_radio_icon {
         position: absolute;
         left: 0;
         top: 0;
         width: 18px;
         height: 18px;
         background: #f7f7f7;
         border: 1px solid #e1e1e1;
         -moz-border-radius: 50%;
         -webkit-border-radius: 50%;
         border-radius: 50%;
         -webkit-transition: 0.2s;
         transition: 0.2s;
         -moz-transition: 0.2s;
         -o-transition: 0.2s;
      }

      #calc_container_29 .start_calculator .calc_radio .calc_radio_icon:before {
         background: #504fc4;
      }

      .start_calculator .calc_radio.checked .calc_radio_icon:before {
         opacity: 1;
      }

      .start_calculator .calc_radio .calc_radio_icon:before {
         content: "";
         position: absolute;
         left: 50%;
         top: 50%;
         width: 10px;
         height: 10px;
         margin: -5px 0 0 -5px;
         opacity: 0;
         -moz-border-radius: 50%;
         -webkit-border-radius: 50%;
         border-radius: 50%;
         -webkit-transition: 0.2s;
         transition: 0.2s;
         -moz-transition: 0.2s;
         -o-transition: 0.2s;
      }

      *,
      *:before,
      *:after {
         box-sizing: inherit;
      }
   </style>


   <script>

      var rounded = function (number) {
         return + number.toFixed(2);
      };

      var moneyFormat = function (n) {
         return parseFloat(n)
            .toFixed(2)
            .replace(/(\d)(?=(\d{3})+\.)/g, "$1 ")
            .replace(".", ",")

      };

      var moneyFormatcp = function (n) {
         return parseFloat(n)
            .toFixed(1)
            .replace(/(\d)(?=(\d{3})+\.)/g, "$1 ")
            .replace(".", ",")
            .slice(0, -2);
      };

      var creditSumm = document.getElementById("credit-summ");
      var credit;

      var monthPay = document.getElementById("month-pay");
      var monthly;

      var overPay;
      var overPayWithUs;
      var yourSafe = document.getElementById("your-safe");
      var monthPayWithUs = document.getElementById("month-pay-with-us");


      var procentiVtexte = document.getElementById("proctext");

      var monthSumm;
      var monthPercent;
      var ann;
      var monthPaySumm;


      var slider = document.getElementById("object-price");
      var hidden = document.getElementById("object-price-hidden");
      var output = document.getElementById("object-price-output");

      //* code for checkbox **//
      var peredamZalog = 0;
      predzalog.onclick = function () {

         const cb = document.querySelector('#predzalog');
         if (cb.checked) {
            peredamZalog = 0.5;

            procentiVtexte.innerHTML = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);

            // окно ежемесячный платеж
            monthSumm = years.value * 12;
            var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
            monthPercent =
               bed / 12 / 100;
            ann = (monthPercent * (1 + monthPercent) ** monthSumm) /
               ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann * 1000000;
            monthPay.innerHTML = moneyFormatcp(monthPaySumm);
            if (monthPaySumm <= 0) {
               monthPay.innerHTML = "0,00";
            }
            //окно ежемесячный платеж
         } else {
            peredamZalog = 0;

            procentiVtexte.innerHTML = (percentSelect.options[percentSelect.selectedIndex].value - peredamViruchka - peredamdvumdoc);
            // окно ежемесячный платеж
            monthSumm = years.value * 12;
            var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamViruchka - peredamdvumdoc);
            monthPercent =
               bed / 12 / 100;
            ann = (monthPercent * (1 + monthPercent) ** monthSumm) /
               ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann * 1000000;
            monthPay.innerHTML = moneyFormatcp(monthPaySumm);
            if (monthPaySumm <= 0) {
               monthPay.innerHTML = "0,00";
            }
            //окно ежемесячный платеж
         }

      };



      var peredamViruchka = 0;
      viruchka.onclick = function () {
         const vir = document.querySelector('#viruchka');
         if (vir.checked) {
            peredamViruchka = 0.5;
            procentiVtexte.innerHTML = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
            // окно ежемесячный платеж
            monthSumm = years.value * 12;
            var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
            monthPercent =
               bed / 12 / 100;
            ann = (monthPercent * (1 + monthPercent) ** monthSumm) /
               ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann * 1000000;
            monthPay.innerHTML = moneyFormatcp(monthPaySumm);
            if (monthPaySumm <= 0) {
               monthPay.innerHTML = "0,00";
            }
            //окно ежемесячный платеж
         } else {
            peredamViruchka = 0;
            procentiVtexte.innerHTML = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamdvumdoc);
            // окно ежемесячный платеж
            monthSumm = years.value * 12;
            var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamdvumdoc);
            monthPercent =
               bed / 12 / 100;
            ann = (monthPercent * (1 + monthPercent) ** monthSumm) /
               ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann * 1000000;
            monthPay.innerHTML = moneyFormatcp(monthPaySumm);
            if (monthPaySumm <= 0) {
               monthPay.innerHTML = "0,00";
            }
            //окно ежемесячный платеж
         }
         console.log(peredamViruchka); // false
      };

      var peredamdvumdoc = 0;

      dvumdoc.onclick = function () {
         const dv = document.querySelector('#dvumdoc');
         if (dv.checked) {
            peredamdvumdoc = -2;
            procentiVtexte.innerHTML = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
            // окно ежемесячный платеж
            monthSumm = years.value * 12;
            var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
            monthPercent =
               bed / 12 / 100;
            ann = (monthPercent * (1 + monthPercent) ** monthSumm) /
               ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann * 1000000;
            monthPay.innerHTML = moneyFormatcp(monthPaySumm);
            if (monthPaySumm <= 0) {
               monthPay.innerHTML = "0,00";
            }
            //окно ежемесячный платеж
         } else {
            peredamdvumdoc = 0;
            procentiVtexte.innerHTML = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka);
            // окно ежемесячный платеж
            monthSumm = years.value * 12;
            var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka);
            monthPercent =
               bed / 12 / 100;
            ann = (monthPercent * (1 + monthPercent) ** monthSumm) /
               ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann * 1000000;
            monthPay.innerHTML = moneyFormatcp(monthPaySumm);
            if (monthPaySumm <= 0) {
               monthPay.innerHTML = "0,00";
            }
            //окно ежемесячный платеж
         }
         console.log(peredamdvumdoc); // false
      };

      //* code for checkbox **//


      /*      var rounded = function (number) {
               return +number.toFixed(2);
            };*/






      output.value = moneyFormat(slider.value);

      slider.oninput = function () {
         hidden.value = this.value;
         output.value = moneyFormat(hidden.value);

         //Подсчет суммы кредита
         creditSumm.innerHTML = moneyFormatcp(this.value * 1000000);
         credit = this.value;
         if (credit <= 0) {
            creditSumm.innerHTML = "0,00";
         }


         if (hidden.value <= 10) {
            percentSelect.options[percentSelect.selectedIndex].value = 14
         } else if (hidden.value > 10 && hidden.value < 50) {
            percentSelect.options[percentSelect.selectedIndex].value = 13
         } else {
            percentSelect.options[percentSelect.selectedIndex].value = 12
         }


         //** добавил переменную bed
         monthSumm = years.value * 12;

         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         monthPercent =
            bed / 12 / 100;
         ann = (monthPercent * (1 + monthPercent) ** monthSumm) /
            ((1 + monthPercent) ** monthSumm - 1);
         monthPaySumm = credit * ann;
         procentiVtexte.innerHTML = bed;

         monthPaySumm = credit * ann * 1000000;
         monthPay.innerHTML = moneyFormatcp(monthPaySumm);
         if (monthPaySumm <= 0) {
            monthPay.innerHTML = "0,00";
         }
         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);


         overPay = rounded(monthly * monthSumm - credit);

         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         var monthPercentWithUs =
            (bed - 0.7) / 12 / 100;
         var annWithUs =
            (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
            ((1 + monthPercentWithUs) ** monthSumm - 1);
         var monthPaySummWithUs = credit * annWithUs;
         overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);


         monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
         yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
         if (monthPaySummWithUs <= 0) {
            monthPayWithUs.innerHTML = "0,00";
         }

         if (overPay - overPayWithUs <= 0) {
            yourSafe.innerHTML = "0,00";
         }
      };

      output.oninput = function () {
         hidden.value = this.value.replace(/ /g, "").replace(",00", "");
         slider.value = hidden.value;


         creditSumm.innerHTML = moneyFormat(hidden.value - firstPaymentSlider.value);
         credit = hidden.value - firstPaymentSlider.value;
         if (credit <= 0) {
            creditSumm.innerHTML = "0,00";
         }
         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         monthSumm = years.value * 12;
         monthPercent =
            bed / 12 / 100;
         ann =
            (monthPercent * (1 + monthPercent) ** monthSumm) /
            ((1 + monthPercent) ** monthSumm - 1);
         monthPaySumm = credit * ann * 1000000;

         monthPay.innerHTML = moneyFormatcp(monthPaySumm);
         monthly = rounded(monthPaySumm);
         if (monthPaySumm <= 0) {
            monthPay.innerHTML = "0,00";
         }

         overPay = rounded(monthly * monthSumm - credit);

         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         var monthPercentWithUs =
            bed / 12 / 100;
         var annWithUs =
            (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
            ((1 + monthPercentWithUs) ** monthSumm - 1);
         var monthPaySummWithUs = credit * annWithUs;
         overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);


         monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
         yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
         if (monthPaySummWithUs <= 0) {
            monthPayWithUs.innerHTML = "0,00";
         }

         if (overPay - overPayWithUs <= 0) {
            yourSafe.innerHTML = "0,00";
         }
      };


      var firstPaymentSlider = document.getElementById("first-payment");
      var firstPaymentOutput = document.getElementById("first-payment-output");
      var firstHidden = document.getElementById("first-payment-hidden");
      firstPaymentOutput.value = moneyFormat(firstPaymentSlider.value);

      firstPaymentSlider.oninput = function () {
         firstHidden.value = this.value;
         firstPaymentOutput.value = moneyFormat(firstHidden.value);


         creditSumm.innerHTML = moneyFormat(slider.value - this.value);
         credit = slider.value - this.value;
         if (credit <= 0) {
            creditSumm.innerHTML = "0,00";
         }

         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         monthSumm = years.value * 12;
         monthPercent =
            bed / 12 / 100;
         ann =
            (monthPercent * (1 + monthPercent) ** monthSumm) /
            ((1 + monthPercent) ** monthSumm - 1);
         monthPaySumm = credit * ann;

         monthPay.innerHTML = moneyFormat(monthPaySumm);
         monthly = rounded(monthPaySumm);
         if (monthPaySumm <= 0) {
            monthPay.innerHTML = "0,00";
         }


         overPay = rounded(monthly * monthSumm - credit);

         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         var monthPercentWithUs =
            (bed - 0.7) / 12 / 100;
         var annWithUs =
            (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
            ((1 + monthPercentWithUs) ** monthSumm - 1);
         var monthPaySummWithUs = credit * annWithUs;
         overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);


         monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
         yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
         if (monthPaySummWithUs <= 0) {
            monthPayWithUs.innerHTML = "0,00";
         }

         if (overPay - overPayWithUs <= 0) {
            yourSafe.innerHTML = "0,00";
         }
      };

      firstPaymentOutput.oninput = function () {
         firstHidden.value = this.value.replace(/ /g, "").replace(",00", "");
         firstPaymentSlider.value = firstHidden.value;


         creditSumm.innerHTML = moneyFormat(slider.value - firstHidden.value);
         credit = slider.value - firstHidden.value;
         if (credit <= 0) {
            creditSumm.innerHTML = "0,0";
         }

         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         monthSumm = years.value * 12;
         monthPercent =
            bed / 12 / 100;
         ann =
            (monthPercent * (1 + monthPercent) ** monthSumm) /
            ((1 + monthPercent) ** monthSumm - 1);
         monthPaySumm = credit * ann;

         monthPay.innerHTML = moneyFormat(monthPaySumm);
         monthly = rounded(monthPaySumm);
         if (monthPaySumm <= 0) {
            monthPay.innerHTML = "0,00";
         }


         overPay = rounded(monthly * monthSumm - credit);

         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         var monthPercentWithUs =
            (bed - 0.7) / 12 / 100;
         var annWithUs =
            (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
            ((1 + monthPercentWithUs) ** monthSumm - 1);
         var monthPaySummWithUs = credit * annWithUs;
         overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);


         monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
         yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
         if (monthPaySummWithUs <= 0) {
            monthPayWithUs.innerHTML = "0,00";
         }

         if (overPay - overPayWithUs <= 0) {
            yourSafe.innerHTML = "0,00";
         }
      };


      var years = document.getElementById("years");
      var yearsOutput = document.getElementById("years-output");
      yearsOutput.value = years.value;

      years.oninput = function () {
         yearsOutput.value = this.value;
         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         credit = slider.value;
         //Подсчет ежемесячного платежа
         monthSumm = years.value * 12;
         monthPercent =
            percentSelect.options[percentSelect.selectedIndex].value / 12 / 100;
         ann =
            (monthPercent * (1 + monthPercent) ** monthSumm) /
            ((1 + monthPercent) ** monthSumm - 1);
         monthPaySumm = credit * ann * 1000000;

         monthPay.innerHTML = moneyFormatcp(monthPaySumm);
         monthly = rounded(monthPaySumm);
         if (monthPaySumm <= 0) {
            monthPay.innerHTML = "0,00";
         }


         overPay = rounded(monthly * monthSumm - credit);

         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         var monthPercentWithUs =
            (bed - 0.7) / 12 / 100;
         var annWithUs =
            (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
            ((1 + monthPercentWithUs) * monthSumm - 1);
         var monthPaySummWithUs = credit * annWithUs;
         overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);


         monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
         yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
         if (monthPaySummWithUs <= 0) {
            monthPayWithUs.innerHTML = "0,00";
         }

         if (overPay - overPayWithUs <= 0) {
            yourSafe.innerHTML = "0,00";
         }
      };

      yearsOutput.oninput = function () {
         years.value = this.value;
         credit = slider.value - firstPaymentSlider.value;
         //Подсчет ежемесячного платежа
         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         monthSumm = years.value * 12;
         monthPercent =
            bed / 12 / 100;
         ann =
            (monthPercent * (1 + monthPercent) ** monthSumm) /
            ((1 + monthPercent) ** monthSumm - 1);
         monthPaySumm = credit * ann;

         monthPay.innerHTML = moneyFormat(monthPaySumm);
         monthly = rounded(monthPaySumm);
         if (monthPaySumm <= 0) {
            monthPay.innerHTML = "0,00";
         }


         overPay = rounded(monthly * monthSumm - credit);

         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         var monthPercentWithUs =
            (bed - 0.7) / 12 / 100;
         var annWithUs =
            (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
            ((1 + monthPercentWithUs) ** monthSumm - 1);
         var monthPaySummWithUs = credit * annWithUs;
         overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);


         monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
         yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
         if (monthPaySummWithUs <= 0) {
            monthPayWithUs.innerHTML = "0,00";
         }

         if (overPay - overPayWithUs <= 0) {
            yourSafe.innerHTML = "0,00";
         }
      };


      var percentSelect = document.getElementById("bank-select");
      var bankPercent = document.getElementById("bank-percent-span");

      percentSelect.onchange = function () {
         bankPercent.value = this.options[this.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc;

         credit = slider.value - firstPaymentSlider.value;
         //Подсчет ежемесячного платежа
         monthSumm = years.value * 12;
         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         monthPercent =
            bed / 12 / 100;
         ann =
            (monthPercent * (1 + monthPercent) ** monthSumm) /
            ((1 + monthPercent) ** monthSumm - 1);
         monthPaySumm = credit * ann;

         monthPay.innerHTML = moneyFormat(monthPaySumm);
         monthly = rounded(monthPaySumm);
         if (monthPaySumm <= 0) {
            monthPay.innerHTML = "0,00";
         }


         overPay = rounded(monthly * monthSumm - credit);

         var bed = (percentSelect.options[percentSelect.selectedIndex].value - peredamZalog - peredamViruchka - peredamdvumdoc);
         var monthPercentWithUs =
            (bed - 0.7) / 12 / 100;
         var annWithUs =
            (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
            ((1 + monthPercentWithUs) ** monthSumm - 1);
         var monthPaySummWithUs = credit * annWithUs;
         overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);

         //Подсчет сэкономленной суммы
         monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
         yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
         if (monthPaySummWithUs <= 0) {
            monthPayWithUs.innerHTML = "0,00";
         }

         if (overPay - overPayWithUs <= 0) {
            yourSafe.innerHTML = "0,00";
         }
      };

      bankPercent.oninput = function () {
         this.value = this.value.replace(",", ".");
         credit = slider.value - firstPaymentSlider.value;
         //Подсчет ежемесячного платежа
         monthSumm = years.value * 12;
         monthPercent = this.value / 12 / 100;
         ann =
            (monthPercent * (1 + monthPercent) ** monthSumm) /
            ((1 + monthPercent) ** monthSumm - 1);
         monthPaySumm = credit * ann;

         monthPay.innerHTML = moneyFormat(monthPaySumm);
         monthly = rounded(monthPaySumm);
         if (monthPaySumm <= 0) {
            monthPay.innerHTML = "0,00";
         }


         overPay = rounded(monthly * monthSumm - credit);


         var monthPercentWithUs = (this.value - 0.7) / 12 / 100;
         var annWithUs =
            (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
            ((1 + monthPercentWithUs) ** monthSumm - 1);
         var monthPaySummWithUs = credit * annWithUs;
         overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);


         monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
         yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
         if (monthPaySummWithUs <= 0) {
            monthPayWithUs.innerHTML = "0,00";
         }

         if (overPay - overPayWithUs <= 0) {
            yourSafe.innerHTML = "0,00";
         }
      };


   </script>

    <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>