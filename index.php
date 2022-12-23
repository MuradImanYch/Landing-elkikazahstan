<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Елки</title>
    <?php wp_head(); ?>
</head>
<body>
    <div id="popUpSale">
        <div class="wrap">
            <p class="dynamicText">Заказать со скидкой</p>
            <span class="close">x</span>
            <p>Оставьте Ваши данные и наш менеджер свяжется с Вами в течении 5 минут</p>
            <div class="form" action="">
                <input placeholder="Имя" type="text" />
                <input placeholder="Номер телефона" type="number" />
                <input placeholder="Город" type="text" />
                <input type="button" value="Заказать" />
            </div>
        </div>
    </div>
    <div id="popUpManeger">
        <div class="wrap">
            <p class="dynamicText">Заказать со скидкой</p>
            <span class="close">x</span>
            <p>Оставьте Ваши данные и наш менеджер свяжется с Вами в течении 5 минут</p>
            <div class="form" action="">
                <input placeholder="Имя" type="text" />
                <input placeholder="Номер телефона" type="number" />
                <input placeholder="Город" type="text" />
                <input type="button" value="Заказать" />
            </div>
        </div>
    </div>
    <header>
        <div class="ribbonWrap">
            <img class="ribbon" src="<?php load_images('img/ribbon.webp') ?>" alt="ribbon" />
            <span>Новогодняя распродажа</span>
        </div>
        <span>премиум елок</span>
        <span>с бесплатной доставкой <br /> на дом</span>
        <div class="saleBallWrap">
            <img class="saleBall" src="<?php load_images('img/ball.webp') ?>" alt="ball" />
            <span>55 % скидка</span>
        </div>
    </header>
    <main>
        <div id="bullets">
            <ul>
                <li><img src="<?php load_images('ico/ballList.png') ?>" alt="bullet" /><span>Бесплатная доставка</span> прям под дверь</li>
                <li><img src="<?php load_images('ico/ballList.png') ?>" alt="bullet" />Гирлянда и новогодняя игрушка <span class="second">в подарок</span></li>
                <li><img src="<?php load_images('ico/ballList.png') ?>" alt="bullet" /><span>Безопасна</span>для детей и животных</li>
                <li><img src="<?php load_images('ico/ballList.png') ?>" alt="bullet" /><span>Антиаллергическая</span>и<span class="second">пожароустойчива</span></li>
                <li><img src="<?php load_images('ico/ballList.png') ?>" alt="bullet" />Производство Кз. Все <span class="second">сертификаты качества</span></li>
                <li><img src="<?php load_images('ico/ballList.png') ?>" alt="bullet" />Гарантия <span class="second">10 лет</span></li>
            </ul>
        </div>
        <div class="oldNew">
            <img src="<?php load_images('img/oldnew.webp') ?>" alt="oldnew" />
            <div class="oldNewText">
                <div><span>Старая цена</span><span class="bold">42 000 тг</span></div>
                <div><span>Новая цена</span><span class="bold">19 000 тг</span></div>
            </div>
        </div>
        <div class="timer">
            <p>ДО КОНЦА АКЦИИ</p>
            <div class="counter">
                <div class="hours">
                    <div>
                        <span class="hour1"></span>
                        <span class="hour2"></span>
                    </div>
                    <span>часа</span>
                </div>
                <div class="minutes">
                    <div>
                        <span class="minute1"></span>
                        <span class="minute2"></span>
                    </div>
                    <span>минут</span>
                </div>
                <div class="seconds">
                    <div>
                        <span class="second1"></span>
                        <span class="second2"></span>
                    </div>
                    <span>секунд</span>
                </div>
            </div>
        </div>
        <div class="superSale">
            <p>супер распродажа</p>
            <button>Заказать со скидкой</button>
        </div>
        <div class="left">
            <span>Осталось 19 шт.</span>
        </div>
        <div id="whyIsOur">
            <p>Почему наша ёлка?</p>
            <div class="itemsWrap">
                <div class="items">
                    <img src="<?php load_images('ico/dollarBag.png') ?>" alt="dollarBag" />
                    <p>Мы не просто продаем ёлки - мы являемся производителем. Поэтому будьте уверены - <span>лучше цену</span> Вы не найдете!</p>
                </div>
                <div class="items">
                    <img src="<?php load_images('ico/bell.png') ?>" alt="bell" />
                    <p>Елка сделана из пленки ПВХ, обладает антиаллергическими свойствами пожароустойчива. <span>Подтверждена сертификатом качества.</span> </p>
                </div>
                <div class="items">
                    <img src="<?php load_images('ico/tree.png') ?>" alt="tree" />
                    <p><span>Основа веточек,</span> декорирована коричневыми элементами, благодаря чему она имеет максимальное сходство с настоящей.</p>
                </div>
                <div class="items">
                    <img src="<?php load_images('ico/round.png') ?>" alt="round" />
                    <p><span>Без запаха. </span>Произведена из экологически чистых материалов.</p>
                </div>
                <div class="items">
                    <img src="<?php load_images('ico/berry.png') ?>" alt="berry.png" />
                    <p><span>Гибкие ветки </span> выдерживают многократную деформацию.</p>
                </div>
                <div class="items">
                    <img src="<?php load_images('ico/sock.png') ?>" alt="sock.png" />
                    <p><span>Практичная. </span> Поставляется в удобной компактной упаковке. Ёлку удобно перевозить, хранить и легко собирать.</p>
                </div>
            </div>
        </div>
        <div id="catalog">
            <p>КАТАЛОГ</p>
            <div class="cartWrap">
                <div class="cart">
                    <img class="girlandaMishuraPresent" src="<?php load_images('img/girlandaMishuraPresent.png') ?>" alt="girlandaMishuraPresent" />
                    <img class="xitGirImg" src="<?php load_images('img/xitGir.png') ?>" alt="xitGir" />
                    <img class="xitGirMishImg" src="<?php load_images('img/xitGirMish.png') ?>" alt="xitGirMish" />
                    <img class="led" src="<?php load_images('img/led.png') ?>" alt="led" />
                    <p><span>Премиум</span> ёлка классическая</p>
                    <img src="<?php load_images('img/catalog1.png') ?>" alt="catalog1" />
                    <div class="btns">
                        <button>150 СМ</button>
                        <button>180 СМ</button>
                        <button>210 СМ</button>
                        <button>230 СМ</button>
                        <button>250 СМ</button>
                    </div>
                    <button>Заказать</button>
                    <div class="priceWrap">
                        <span class="newPrice">33 000 тг</span>
                        <span class="oldPrice">73 000 тг</span>
                    </div>
                </div>
                <div class="cart">
                    <img class="girlandaMishuraPresent" src="<?php load_images('img/girlandaMishuraPresent.png') ?>" alt="girlandaMishuraPresent" />
                    <img class="xitGirImg" src="<?php load_images('img/xitGir.png') ?>" alt="xitGir" />
                    <img class="xitGirMishImg" src="<?php load_images('img/xitGirMish.png') ?>" alt="xitGirMish" />
                    <img class="led" src="<?php load_images('img/led.png') ?>" alt="led" />
                    <p><span>Премиум</span> ёлка белая</p>
                    <img src="<?php load_images('img/catalog2.png') ?>" alt="catalog2">
                    <div class="btns">
                        <button>150 СМ</button>
                        <button>180 СМ</button>
                        <button>210 СМ</button>
                        <button>230 СМ</button>
                        <button>250 СМ</button>
                    </div>
                    <button>Заказать</button>
                    <div class="priceWrap">
                        <span class="newPrice">33 000 тг</span>
                        <span class="oldPrice">73 000 тг</span>
                    </div>
                </div>
                <div class="cart">
                    <img class="girlandaMishuraPresent" src="<?php load_images('img/girlandaMishuraPresent.png') ?>" alt="girlandaMishuraPresent" />
                    <img class="xitGirImg" src="<?php load_images('img/xitGir.png') ?>" alt="xitGir" />
                    <img class="xitGirMishImg" src="<?php load_images('img/xitGirMish.png') ?>" alt="xitGirMish" />
                    <img class="led" src="<?php load_images('img/led.png') ?>" alt="led" />
                    <p><span>Премиум ёлка</span> со встроенной гирляндой</p>
                    <img src="<?php load_images('img/catalog3.png') ?>" alt="catalog3">
                    <div class="btns">
                        <button>150 СМ</button>
                        <button>180 СМ</button>
                        <button>210 СМ</button>
                        <button>230 СМ</button>
                        <button>250 СМ</button>
                    </div>
                    <button>Заказать</button>
                    <div class="priceWrap">
                        <span class="newPrice">35 500 тг</span>
                        <span class="oldPrice">77 000 тг</span>
                    </div>
                </div>
                <div class="cart">
                    <img class="girlandaMishuraPresent" src="<?php load_images('img/girlandaMishuraPresent.png') ?>" alt="girlandaMishuraPresent" />
                    <img class="xitGirImg" src="<?php load_images('img/xitGir.png') ?>" alt="xitGir" />
                    <img class="xitGirMishImg" src="<?php load_images('img/xitGirMish.png') ?>" alt="xitGirMish" />
                    <img class="led" src="<?php load_images('img/led.png') ?>" alt="led" />
                    <p><span>Премиум ёлка</span> на деревянной основе</p>
                    <img src="<?php load_images('img/catalog4.png') ?>" alt="catalog4">
                    <div class="btns">
                        <button>150 СМ</button>
                        <button>180 СМ</button>
                        <button>210 СМ</button>
                        <button>230 СМ</button>
                        <button>250 СМ</button>
                    </div>
                    <button>Заказать</button>
                    <div class="priceWrap">
                        <span class="newPrice">38 000 тг</span>
                        <span class="oldPrice">77 000 тг</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="howToOrder">
            <p>Как заказать?</p>
            <div class="listWrap">
                <div><img src="<?php load_images('ico/hto1.png') ?>" alt="hto1" /><span>Оставьте заявку на сайте</span></div>
                <div><img src="<?php load_images('ico/hto2.png') ?>" alt="hto2" /><span>В течении 25 секунд с вами свяжется менеджер, ответит на все вопросы и оформит заказ</span></div>
                <div><img src="<?php load_images('ico/hto3.png') ?>" alt="hto3" /><span>Доставим ёлочку в течении 2х рабочих дней вам домой</span></div>
            </div>
        </div>
        <div id="payment">
            <p>Способы оплаты:</p>
            <p>Отправка товар происходит после внесения Вами страховочного платежа или полной оплаты!</p>
            <div>
                <div>
                    <img src="<?php load_images('ico/payment1.png') ?>" alt="payment1" />
                    <div>Полная предоплата + бесплатная доставка
                        (экономия 5000тг!)</div>
                </div>
                <div>
                    <img src="<?php load_images('ico/payment2.png') ?>" alt="payment2" />
                    <div>Частичная оплата 50% + оплата курьера</div>
                </div>
            </div>
        </div>
        <div id="guarantee">
            <p>Гарантия и возврат:</p>
            <div class="listWrap">
                <div><img src="<?php load_images('ico/check.png') ?>" alt="check"><p>Гарантия на каждую елочку -</p> <span>10 лет</span></div>
                <div><img src="<?php load_images('ico/check.png') ?>" alt="check"><p><span>Собственная логистическая компания,</span> которая всегда доставит елку точно в срок</p></div>
                <div><img src="<?php load_images('ico/check.png') ?>" alt="check"><p>Полный возврат средств или обмен товара возможен <span>в течение 14 дней</span> после получения покупки, если <span>сохранен его товарный вид,</span> потребительские свойства,
                    а также расчетный документ, выданный покупателю вместе с проданным товаром.</p></div>
            </div>
        </div>
        <div id="help">
            <p>нужна помощь
                с выбором елки?</p>
                <button>Связаться с менеджером</button>
        </div>
        <div id="reviews">
            <p>отзывы покупателей</p>
            <p>Уже 5 лет мы трудимся из года в год, чтобы
                сделать Ваш праздник незабываемым.
                Нам доверяют более 1000 клиентов!</p>

            <div class="slider">
                <div class="wrap">
                    <div class="item">
                        <img src="<?php load_images('img/review1.jpg') ?>" alt="review1" />
                        <div class="textWrap">
                            <div class="user">
                                <img src="<?php load_images('img/user1.jpg') ?>" alt="user1" />
                                <div class="info">
                                    <p>Айгюн</p>
                                    <p>33 года</p>
                                </div>
                            </div>
                            <div class="text">
                                <span>“Хотела оставить отзыв по поводу ёлочки, я заказывала елку 210см. Курьер приехал вовремя и занес все домой. Елочка очень легко собирается, невероятно красивая и пушистая. Большое спасибо за такое Новогоднее настроение. Всех с праздником!”</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php load_images('img/review2.jpg') ?>" alt="review1" />
                        <div class="textWrap">
                            <div class="user">
                                <img src="<?php load_images('img/user2.jpg') ?>" alt="user1" />
                                <div class="info">
                                    <p>Нурлан</p>
                                    <p>47 лет</p>
                                </div>
                            </div>
                            <div class="text">
                                <span>“Хороший магазин, покупал елку 1.8м: красивая (хороший цвет и высота) и качественная (ничего не осыпается и не отваливается, запаха нет). Рекомендую. Также отдельное спасибо курьеру, который помог всё это дело установить!”</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php load_images('img/review3.jpg') ?>" alt="review1" />
                        <div class="textWrap">
                            <div class="user">
                                <img src="<?php load_images('img/user3.jpg') ?>" alt="user1" />
                                <div class="info">
                                    <p>Медина</p>
                                    <p>27 лет</p>
                                </div>
                            </div>
                            <div class="text">
                                <span>“Спасибо за елочку!Покупала по предоплате, елочка еще лучше чем на фото, пушистая, без запаха. Дети в восторге. Спасибо!”</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php load_images('img/review4.jpg') ?>" alt="review1" />
                        <div class="textWrap">
                            <div class="user">
                                <img src="<?php load_images('img/user4.jpg') ?>" alt="user1" />
                                <div class="info">
                                    <p>Зере</p>
                                    <p>48 лет</p>
                                </div>
                            </div>
                            <div class="text">
                                <span>“Спасибо за елочку!) Очень довольна, на вид как живая,пушистые веточки легко принимают желаемую форму, 1 в 1 как на фото. Вежливый менеджер, оперативная доставка. Спасибо большое. Хороших продаж!!!”</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php load_images('img/review5.jpg') ?>" alt="review1" />
                        <div class="textWrap">
                            <div class="user">
                                <img src="<?php load_images('img/user5.jpg') ?>" alt="user1" />
                                <div class="info">
                                    <p>Раяна</p>
                                    <p>31 год</p>
                                </div>
                            </div>
                            <div class="text">
                                <span>“Хочу оставить свой отзыв, елка просто чудесная! Так понравилась, что через 3 дня купила еще одну друзьям в подарок)) Всех поздравляю с наступающим новым годом и желаю такую елку каждому дому!) потому что это удобно, красиво и экономно!!! Хватит до старости)))”</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php load_images('img/review6.jpg') ?>" alt="review1" />
                        <div class="textWrap">
                            <div class="user">
                                <img src="<?php load_images('img/user6.jpg') ?>" alt="user1" />
                                <div class="info">
                                    <p>Айлин</p>
                                    <p>29 лет</p>
                                </div>
                            </div>
                            <div class="text">
                                <span>“Сегодня нам привезли ёлочку. Она просто красавица:)Ребенок счастлив, мы только ее собрали) а завтра будем украшать!) Отдельное спасибо за быструю доставку, доставили на следующий же день, всех с праздником!!”</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php load_images('img/review7.jpg') ?>" alt="review1" />
                        <div class="textWrap">
                            <div class="user">
                                <img src="<?php load_images('img/user7.jpg') ?>" alt="user1" />
                                <div class="info">
                                    <p>Данара</p>
                                    <p>36 лет</p>
                                </div>
                            </div>
                            <div class="text">
                                <span>“Заказали елку, оказалась немного больше чем нам нужно. Без вопросов заменили на елочку поменьше без дополнительной платы. Не думал, что такие компании еще есть, большое спасибо Вам за это. Елочка отличная, очень пушистая и красивая, прям как настоящая”</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tumbs">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <footer>
            <div class="ribbonWrap">
                <img class="ribbon" src="<?php load_images('img/ribbon.webp') ?>" alt="ribbon" />
                <span>Новогодняя распродажа</span>
            </div>
            <span>премиум елок</span>
            <span>с бесплатной доставкой <br /> на дом</span>
            <div class="saleBallWrap">
                <img class="saleBall" src="<?php load_images('img/ball.webp') ?>" alt="ball" />
                <span>55 % скидка</span>
            </div>
            <div class="oldNew">
                <img src="<?php load_images('img/oldnew.webp') ?>" alt="oldnew" />
                <div class="oldNewText">
                    <div><span>Старая цена</span><span class="bold">42 000 тг</span></div>
                    <div><span>Новая цена</span><span class="bold">19 000 тг</span></div>
                </div>
            </div>
            <div class="timer">
                <p>ДО КОНЦА АКЦИИ</p>
                <div class="counter">
                    <div class="hours">
                        <div>
                            <span class="hour1"></span>
                            <span class="hour2"></span>
                        </div>
                        <span>часа</span>
                    </div>
                    <div class="minutes">
                        <div>
                            <span class="minute1"></span>
                            <span class="minute2"></span>
                        </div>
                        <span>минут</span>
                    </div>
                    <div class="seconds">
                        <div>
                            <span class="second1"></span>
                            <span class="second2"></span>
                        </div>
                        <span>секунд</span>
                    </div>
                </div>
            </div>
            <div class="superSale">
                <p>супер распродажа</p>
                <button>Заказать со скидкой</button>
            </div>
            <div class="left">
                <span>Осталось 19 шт.</span>
            </div>
        </footer>
    </main>

    <?php wp_footer(); ?>
</body>
</html>