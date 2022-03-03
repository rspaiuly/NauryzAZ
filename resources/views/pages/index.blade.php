@extends('layouts.main')

@section('header')
    @extends('partials.header')
@endsection

@section('content')
    <section class="intro">
        <div class="container">
            <div class="intro_content">
                <div class="intro_title">
                    <h1>DADLI QEYD ET VƏ HƏDİYYƏLƏR QAZAN!</h1>
                </div>
                <div class="intro_btn">
                    <button class="btn btn--large">Зарегестрировать чек</button>
                </div>
                <div class="intro_image">
                    <img src="./image/main_img.png" alt="">
                </div>
            </div>
            <div class="headline">
                <h1>Как участвовать в акций</h1>
                <div class="">
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>

    <div id="rules">
        <section class="middle">
            <div class="container">
                <div class="step1">
                    <div class="step1_content">
                        <div class="step1_image">
                            <img src="./image/step/step01_img.png" alt="">
                        </div>
                        <div class="step1_text1">
                            <h1>
                                Купи
                            </h1>
                            <div class="arrow-next">
                                <img src="./image/icon/step03_img.png" alt="">
                            </div>
                        </div>
                        <div class="step1_text2">
                            <h1>
                                1 кг конфет в ARAZ
                            </h1>
                        </div>
                        <div class="arrow-down">
                            <img src="./image/icon/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="step1_content">
                        <div class="step1_image">
                            <img src="./image/step/step02_img.png" alt="">
                        </div>
                        <div class="step1_text1">
                            <h1>
                                Зарегистрируй чек
                            </h1>
                            <div class="arrow-next">
                                <img src="./image/icon/step03_img.png" alt="">
                            </div>
                        </div>
                        <div class="step1_text2">
                            <h1>
                                на сайте
                            </h1>
                        </div>
                        <div class="step1_btn">
                            <h1>Сохрани чек</h1>
                        </div>
                        <div class="arrow-down">
                            <img src="./image/icon/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="step1_content">
                        <div class="step1_image">
                            <img src="./image/step/step03_img.png" alt="">
                        </div>
                        <div class="step1_text1">
                            <h1>
                                Участвуй в розыгрыше
                            </h1>
                        </div>
                        <div class="step1_text2">
                            <h1>
                                призов
                            </h1>
                        </div>
                        <div class="rules">
                            <a href="#">Полные правила</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="middle_1">
            <div class="container">
                <div class="step2">
                    <h1 class="step2_title">Что можно выиграть:</h1>
                    <div class="step2_contents">
                        <div class="step2_content">
                            <img src="./image/step2/prize01_img.png" alt="">
                            <div class="step2_text">
                                <h1>4 поездки на Бали</h1>
                            </div>
                        </div>
                        <div class="step2_content">
                            <img src="./image/step2/prize02_img2.png" alt="">
                            <div class="step2_text">
                                <h1>сертификаты в IDEAL на 30 манат </h1>
                            </div>
                        </div>
                        <div class="step2_content">
                            <img src="./image/step2/prize03_img2.png" alt="">
                            <div class="step2_text">
                                <h1>сертификаты в Araz на 50 манат  </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="products">
        <section id="middle_2">
            <div class="container">
                <div class="m2-contents">
                    <div class="m2-title">
                        <h1>Какие конфеты участвуют в акции</h1>
                    </div>
                    <div class="m2-products">
                        <div class="m2-product">
                            <div class="m2-image">
                                <img src="./image/step3/Bounty.png" alt="">
                            </div>
                            <div class="m2-product-text">
                                <p>Развесные конфеты</p>
                            </div>
                            <div class="m2-product-name">
                                <h1>Bounty</h1>
                            </div>
                        </div>
                        <div class="m2-product">
                            <div class="m2-image">
                                <img src="./image/step3/Mars.png" alt="">
                            </div>
                            <div class="m2-product-text">
                                <p>Развесные конфеты</p>
                            </div>
                            <div class="m2-product-name">
                                <h1>mars</h1>
                            </div>
                        </div>
                        <div class="m2-product">
                            <div class="m2-image">
                                <img src="./image/step3/Snickers.png" alt="">
                            </div>
                            <div class="m2-product-text">
                                <p>Развесные конфеты</p>
                            </div>
                            <div class="m2-product-name">
                                <h1>Snickers</h1>
                            </div>
                        </div>
                        <div class="m2-product">
                            <div class="m2-image">
                                <img src="./image/step3/Twix.png" alt="">
                            </div>
                            <div class="m2-product-text">
                                <p>Развесные конфеты</p>
                            </div>
                            <div class="m2-product-name">
                                <h1>TWIX</h1>
                            </div>
                        </div>
                        <div class="m2-product">
                            <div class="m2-image">
                                <img src="./image/step3/MWY copy.png" alt="">
                            </div>
                            <div class="m2-product-text">
                                <p>Развесные конфеты</p>
                            </div>
                            <div class="m2-product-name">
                                <h1>milky way</h1>
                            </div>
                        </div>
                    </div>

                    <div class="m2-products-slide">
                        <div class="slide-show">
                            <div class="m2-product">
                                <div class="m2-image">
                                    <img src="./image/step3/Snickers.png" alt="">
                                    <a id="prev"><img src="./image/icon/prev.png" alt=""></a>
                                    <a id="next"><img src="./image/icon/next.png" alt=""></a>
                                </div>
                                <div class="m2-product-text">
                                    <p>Развесные конфеты</p>
                                </div>
                                <div class="m2-product-name">
                                    <h1>Snickers</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="m2-btn">
                        <button class="btn btn--large">Зарегистрировать чек</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="winners">
        <div class="container">
            <div class="w-content">
                <div class="w-title">
                    <h1>Победители</h1>
                </div>
                <div class="w-tabs">
                    <div class="tabs">
                        <div class="tab-left">
                            <p class="w-tab-text">розыгрыш ХХ.ХХ.2020</p>
                        </div>
                        <div class="tab-right">
                            <p class="w-tab-text">розыгрыш ХХ.ХХ.2020</p>
                        </div>
                        <div class="w-line"></div>
                        <div class="w-bali">
                            <div class="bali-image">
                                <img src="./image/ticket/tickets.png" alt="">
                            </div>
                            <div class="m-bali-image">
                                <img src="./image/ticket/m-tickets.png" alt="">
                            </div>
                            <div class="w-win">
                                <div class="w-winners">
                                    <h1>На Бали едут:</h1>
                                    <p>1. Анастасия Ц., г. Баку </p>
                                    <p>2. Екатерина Ц., г. Баку</p>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <th>мобильный</th>
                                <th>Город</th>
                                <th>Приз</th>
                            </tr>
                            <tr>
                                <td>+9 99X XXX XX 31</td>
                                <td>Баку</td>
                                <td>сертификат ARAZ</td>
                            </tr>
                            <tr>
                                <td>+9 99X XXX XX 31</td>
                                <td>Баку</td>
                                <td>сертификат ARAZ</td>
                            </tr>
                            <tr>
                                <td>+9 99X XXX XX 31</td>
                                <td>Баку</td>
                                <td>сертификат ARAZ</td>
                            </tr>
                            <tr>
                                <td>+9 99X XXX XX 31</td>
                                <td>Баку</td>
                                <td>сертификат ARAZ</td>
                            </tr>
                            <tr>
                                <td>+9 99X XXX XX 31</td>
                                <td>Баку</td>
                                <td>сертификат ARAZ</td>
                            </tr>
                            <tr>
                                <td>+9 99X XXX XX 31</td>
                                <td>Баку</td>
                                <td>сертификат ARAZ</td>
                            </tr>
                            <tr>
                                <td>+9 99X XXX XX 31</td>
                                <td>Баку</td>
                                <td>сертификат ARAZ</td>
                            </tr>
                            <tr>
                                <td>+9 99X XXX XX 31</td>
                                <td>Баку</td>
                                <td>сертификат ARAZ</td>
                            </tr>
                            <tr>
                                <td>+9 99X XXX XX 31</td>
                                <td>Баку</td>
                                <td>сертификат ARAZ</td>
                            </tr>
                            <tr>
                                <td>+9 99X XXX XX 31</td>
                                <td>Баку</td>
                                <td>сертификат ARAZ</td>
                            </tr>
                        </table>
                        <div class="w-paginator">
                            <div class="paginator">
                                <div class="paginator-element">
                                    <div class="last">
                                        <div class="begin"><a href="#"  class="link">&#10094;&#10094;</a></div>
                                        <div class="last-one"><a href="#" class="link">&#10094;</a></div>
                                    </div>
                                    <div class="paginator-number">
                                        <a href="" class="link">1</a>
                                        <a href="" class="link">2</a>
                                        <a href="" class="link">3</a>
                                        <div class="point link">...</div>
                                        <a href="" class="link">4</a>
                                    </div>
                                    <div class="next">
                                        <div class="next-one"><a href="#" class="link">&#10095;</a></div>
                                        <div class="end"><a href="#" class="link">&#10095;&#10095;</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq">
        <div class="container">
            <div class="f-content">
                <div class="f-question">
                    <h1>вопросы и ответы</h1>
                    <p>Перед тем как спросить, посмотри наиболее часто задаваемые вопросы</p>
                    <p>Если не нашел ответа - пиши нам, мы обязательно ответим.</p>
                    <p>Не забудь написать e-mail и мобильный, каторые указал при регистрации.</p>
                </div>
                <div class="f-ask">
                    <div class="f-title">
                        <h1 class="open" onclick="bar(1)"> Задать свой вопрос</h1>
                    </div>
                    <div class="f-input" click-id='1'>
                        <div class="f-i1">
                            <input class="i1" type="text" id="name" placeholder="Имя">
                            <input class="i1" type="text" id="email" placeholder="E-mail">
                            <input class="i1" type="text" id="phone" placeholder="Мобильный телефон">
                        </div>
                        <div class="f-i2">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Напиши свой вопрос..."></textarea>
                            <div class="f-btn">
                                <button class="btn">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-ask">
                    <div class="f-title">
                        <h1 class="open" onclick="bar(2)">Как принять участие в акции?</h1>
                    </div>
                    <div class="faq-text" click-id='1'>
                        <p>
                            К участию в Акции допускаются дееспособные граждане Республики Азербайджан и лица, имеющие
                            вид на жительство в Республике Азербайджан, постоянно проживающие на территории Республики
                            Азербайджан в период проведения Акции, достигшие к моменту проведения Акции 13 (тринадцати) лет
                        </p>
                    </div>
                </div>
                <div class="f-ask">
                    <div class="f-title">
                        <h1 class="open" onclick="bar(3)"> Какие продукты принимают участие в акции?</h1>
                    </div>

                    <div class="faq-text" click-id='1'>
                        <p>
                            К участию в Акции допускаются дееспособные граждане Республики Азербайджан и лица, имеющие
                            вид на жительство в Республике Азербайджан, постоянно проживающие на территории Республики
                            Азербайджан в период проведения Акции, достигшие к моменту проведения Акции 13 (тринадцати) лет
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('modals')
    @include('partials.modals')
@endsection

