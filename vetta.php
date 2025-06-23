<?php
    require_once 'Cardsbd.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Сибирский Арсенал</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/vetta.css">
    <link rel="stylesheet" href="css/CaruselIndex.css">
    <link rel="icon" href="pictures/other/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="pictures/other/icon.png" type="image/x-icon">
</head>
<body>
    <!-- Header -->
    <header class="container-fluid">
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm-8 pad">
            <div class="container-fluid nav_box">
                <div class="logoMenu">
                   <img class="logo" src="pictures/logo/logo.svg" alt="Логотип">
                    <div class="menu" id="menuToggle">  
                        <img src="pictures/icons/menu.svg" alt="">
                    </div> 
                </div>
                <nav class="navup" id="navup">  
                    <ul class="navupbox">
                        <li><a class="text_nav link1" href="https://arsenal-sib.ru/o_kompanii/">О компании</a></li>
                        <li><a class="text_nav link1" href="https://arsenal-sib.ru/vacancy/">Вакансии</a></li>
                        <li><a class="text_nav link1" href="https://arsenal-sib.ru/designers/?cat=1">Проектировщикам</a></li>
                        <li><a class="text_nav link1" href="https://arsenal-sib.ru/news/">Новости</a></li>
                    </ul>
                </nav>
                <nav class="navuptwo">  
                    <ul class="navupboxtwo">
                        <li><a class="text_nav link1" href="https://arsenal-sib.ru/o_kompanii/">О компании</a></li>
                        <li><a class="text_nav link1" href="https://arsenal-sib.ru/vacancy/">Вакансии</a></li>
                        <li><a class="text_nav link1" href="https://arsenal-sib.ru/designers/?cat=1">Проектировщикам</a></li>
                        <li><a class="text_nav link1" href="https://arsenal-sib.ru/news/">Новости</a></li>
                    </ul>
                </nav>
            </div>
            <div class="nav_box nav_content">
                <p class="textHed">Производство и продажа специализированного охранно-пожарного оборудования</p>
                <div class="network">
                    <img src="../pictures/icons/telegram.svg" alt="Telegram">
                    <a class="dop link1" href="https://t.me/arsenal_npo">arsenal_npo</a>
                </div>
            </div>
        </div>
        <div class="col-sm"></div>
    </div>
</header>

    <!-- Blue Navigation Bar -->
    <div class="blue">
        <nav>
            <ul>
                <li><a class="text_nav link1 link2" href="index.php">Главная</a></li>
                <li><a class="text_nav link1 link2" href="WhereBuy.php">Где купить</a></li>
                <li><a class="text_nav link1 link2" href="contacts.php">Контакты</a></li>
            </ul>
        </nav>
    </div>

    <div class="container-fluid padding">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm-8">

            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="index.php">
                    <img src="pictures/icons/home.png" alt="Главная" width="25" height="25">
                </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Пультовая система ВЕТТА-2020</li>
            </ol>
            </nav>

            <!-- content -->
            <h2 class="Title">Пультовая система, система передачи извещений «ВЕТТА-2020»</h2>

            <nav class="cont">
                <ul>
                <li class="active" data-target="naznachenie">Назначение</li>
                <li data-target="osobennosti">Особенности</li>
                <li data-target="sostav">Состав пультового прибора «ВЕТТА–КП»</li>
                </ul>
            </nav>
            

            <div class="content">
                <div id="naznachenie" class="content-item active">
                    <p class="Text">Пультовая система, система передачи извещений &laquo;ВЕТТА&mdash;2020&raquo; предназначена для организации охраны, пожарной охраны, оповещения о&nbsp;тревожных событиях на&nbsp;малых, средних, больших и&nbsp;распределенных по&nbsp;территории объектах. Система может объединять до&nbsp;40&nbsp;объектовых приборов. В&nbsp;качестве объектовых приборов используются приборы приемно&mdash;контрольные и&nbsp;управления охранно&mdash;пожарные адресные радиоканальные адресной радиоканальной системы &laquo;ВС-ВЕКТОР&mdash;АР&raquo; и&nbsp;приборы приемно&mdash;контрольные и&nbsp;управления охранно&mdash;пожарные адресные блочно-модульные адресной системы &laquo;ВС-ВЕКТОР&mdash;АП&raquo;.</p>
                    <p class="Text">Система &laquo;ВЕТТА&mdash;2020&raquo; обеспечивает контроль до&nbsp;200 адресных зон охраны. Центральным элементом системы &laquo;ВЕТТА&mdash;2020&raquo; является пультовой прибор &laquo;ВЕТТА&mdash;КП&raquo;, обеспечивающий прием, обработку, накопление и&nbsp;отображение извещений, поступающих от&nbsp;подключенных к&nbsp;системе объектовых приборов и&nbsp;элементов Системы Передачи Извещений (СПИ).</p>
                    <img class="width indent" src="pictures/vetta/purpose.png" alt="Назначение ветта">
                </div>
                <div id="osobennosti" class="content-item">
                    <ul class="list">
                        <li class="ingredients vet">Пультовой прибор является многокомпонентным устройством, обеспечивающим контроль от&nbsp;50 (в&nbsp;минимальной конфигурации) до&nbsp;200 адресных зон охраны. Пультовой прибор включает от&nbsp;одной до&nbsp;четырех контрольных панелей. Связь между пультовым прибором системы и&nbsp;объектовыми приборами осуществляется как с&nbsp;помощью проводного, так и&nbsp;беспроводного каналов связи, обеспечивая, в&nbsp;разных конфигурациях, взаимодействие на&nbsp;расстоянии до&nbsp;4...5&nbsp;километров.</li>
                        <li class="ingredients vet">Возможности пультового прибора могут расширяться дополнительными устройствами, это&nbsp;&mdash; блоки реле &laquo;ВЕТТА&mdash;БР&raquo;, блок коммуникационный &laquo;ВЕТТА&mdash;МК&raquo;, а&nbsp;также устройство регистрации событий &laquo;ВС&mdash;УРС ВЕКТОР&raquo;. Связь между пультовым прибором и&nbsp;этими блоками и&nbsp;устройствами осуществляется через приборную проводную магистраль, по&nbsp;протоколу RS&mdash;485.</li>
                        <li class="ingredients vet">Система &laquo;ВЕТТА&mdash;2020&raquo; включает систему передачи извещений (СПИ) на&nbsp;основе универсальных приемно&mdash;передающих устройств (УППУ)&nbsp;&mdash; модемов проводного канала &laquo;ВЕТТА&mdash;МП&raquo; и&nbsp;радиоканальных модемов &laquo;ВЕТТА&mdash;МР&raquo;.</li>
                        <li class="ingredients vet">Система &laquo;ВЕТТА&mdash;2020&raquo; обеспечивает отображение на&nbsp;контрольных панелях информации о&nbsp;состоянии зон объектовых приборов. Каждой зоне охраны прибора, выбранной для отображения на&nbsp;контрольных панелях, ставится в&nbsp;соответствие канал индикации (КИ) пультового прибора. В&nbsp;зависимости от&nbsp;задач, решаемых при охране конкретных объектов, можно отображать как состояние всех зон объектовых приборов, так и&nbsp;выборочно, отдельно назначенных зон.</li>
                        <li class="ingredients vet">Для объектовых приборов назначенными каналами индикации отображаются состояния пожарных, охранных, охранно&mdash;пожарных зон охраны, зоны оповещения, общетехнической зоны прибора, показывающей неисправность прибора, а&nbsp;также одной специальной зоны прибора, показывающей обобщенное состояние охраны всех зон прибора. Каналы индикации закрепляются за&nbsp;зонами охраны объектовых приборов на&nbsp;этапе конфигурирования системы, причем соответствие&nbsp;КИ зонам объектовых приборов задается произвольно и&nbsp;определяется пользователем. Таким образом реализована возможность с&nbsp;помощью каналов индикации показывать состояние охраны прибора с&nbsp;разной степенью детализации.</li>
                    </ul>
                    <img class="width indent" src="pictures/vetta/features.png" alt="Особенности ветта">
                    <ul class="list">
                        <li class="ingredients vet">С&nbsp;помощью пультового прибора осуществляется также управление (постановка на&nbsp;охрану, снятие с&nbsp;охраны) закрепленными зонами объектовых приборов по&nbsp;отдельности, или группами. Использование зоны, показывающей обобщенное состояние охраны прибора, позволяет управлять сразу всеми зонами объектового прибора. Управление осуществляется с&nbsp;помощью ключей Touch Memory (ТМ), или кодонаборной клавиатуры серии &laquo;ПОРТАЛ&raquo;, подключаемой к&nbsp;входам&nbsp;ТМ контрольной панели &laquo;ВЕТТА&mdash;ОКП&raquo;. Помимо этого, управлять зонами объектового прибора можно и&nbsp;непосредственно на&nbsp;объектовом приборе. При этом произведенные изменения будут отражаться на&nbsp;индикаторах&nbsp;КИ этих зон на&nbsp;контрольных панелях пультового прибора, и&nbsp;фиксироваться в&nbsp;журнале событий основной контрольной панели &laquo;ВЕТТА&mdash;ОКП&raquo;.</li>
                        <li class="ingredients vet">Реле, входящие в&nbsp;состав блоков реле &laquo;ВЕТТА&mdash;БР&raquo;, образуют общее пространство каналов коммутации&nbsp;КК, общим числом не&nbsp;более двадцати. Каждый из&nbsp;каналов коммутации может быть логически подключен к&nbsp;группе зон приборов и&nbsp;реагирует на&nbsp;назначенное для него событие, например, &laquo;ТРЕВОГА&raquo;, &laquo;ПОЖАР&raquo;, &laquo;НЕИСПРАВНОСТЬ&raquo; и&nbsp;т.д.</li>
                    </ul>
                </div>
                <div id="sostav" class="content-item">
                    <p class="Text">Пультовой прибор системы &laquo;ВЕТТА&mdash;2020&raquo; может включать несколько компонентов. В&nbsp;минимальной конфигурации он&nbsp;содержит одну контрольную панель &laquo;ВЕТТА&mdash;ОКП&raquo; (основная контрольная панель), обеспечивающую контроль до&nbsp;50&nbsp;адресных зон охраны. Пультовой прибор может наращиваться панелями &laquo;ВЕТТА&mdash;ДКП&raquo; (дополнительная контрольная панель), каждая из&nbsp;которых, в&nbsp;свою очередь, контролирует до&nbsp;50&nbsp;адресных зон. Общее количество панелей &laquo;ВЕТТА&mdash;ДКП&raquo;&nbsp;&mdash; не&nbsp;более 3. Основная и&nbsp;дополнительные контрольные панели имеют свои закрепленные за&nbsp;ними диапазоны номеров каналов индикации. Диапазон номеров КИ&nbsp;&laquo;ВЕТТА&mdash;ОКП&raquo;&nbsp;&mdash; от&nbsp;1&nbsp;до&nbsp;50, соответственно, для &laquo;ВЕТТА&mdash;ДКП1&raquo;&nbsp;&mdash; 51...100, &laquo;ВЕТТА&mdash;ДКП2&raquo;&nbsp;&mdash; 101...150 и&nbsp;&laquo;ВЕТТА&mdash;ДКП3&raquo;&nbsp;&mdash; 151...200.</p>
                    <p class="Text">В&nbsp;зависимости от&nbsp;вариантов применения функции пультового прибора могут расширяться с&nbsp;помощью дополнительных функциональных устройств.</p>
                    <ul class="list">
                        <li class="ingredients vet">Блоки реле &laquo;ВЕТТА&mdash;БР&raquo; (до&nbsp;пяти блоков), каждый из&nbsp;которых содержит 4&nbsp;реле. Блок реле (БР) &laquo;ВЕТТА&mdash;БР&raquo;, согласно командам ОКП &laquo;ВЕТТА&mdash;КП&raquo;, формирует сигналы для пультов централизованного наблюдения, управляет технологическим оборудованием и&nbsp;инженерными системами объекта, а&nbsp;также запускает внешние системы оповещения о&nbsp;пожаре. Группа зон, подключаемая к&nbsp;каналу коммутации (реле), может быть сформирована произвольным образом и&nbsp;состоять из&nbsp;зон разных объектовых приборов.</li>
                        <li class="ingredients vet">Блок коммуникационный (БК) &laquo;ВЕТТА&mdash;МК&raquo; обеспечивает взаимодействие по&nbsp;сети Интернет с&nbsp;интегрированными системами безопасности &laquo;Лавина&raquo; и&nbsp;&laquo;Горизонт&raquo;, а&nbsp;также передает извещения в&nbsp;формате SurGard на&nbsp;другие мониторинговые пульты и&nbsp;может передавать по&nbsp;сети GSM СМС сообщения на&nbsp;телефоны пользователей.</li>
                        <li class="ingredients vet">Устройство регистрации событий (УРС) ВС&nbsp;&mdash; УРС ВЕКТОР используется совместно с&nbsp;основной контрольной панелью пультового прибора для отображения журнала событий пультового прибора.</li>
                    <p class="Text">Связь между компонентами пультового прибора и&nbsp;дополнительными устройствами производится через приборную проводную магистраль, по&nbsp;протоколу RS&mdash;485. Управление взаимодействием компонентов прибора осуществляет основная контрольная панель &laquo;ВЕТТА&mdash;ОКП&raquo;. Питание всех элементов пультового прибора осуществляется независимо, от&nbsp;внешних резервированных источников питания (РИП) номинальным напряжением 12&nbsp;В по&nbsp;двум входам (клеммы 12V1 и&nbsp;12V2). У&nbsp;блоков и&nbsp;устройств (ОКП, ДПК, БР, МК, УРС) имеется вход (клемма ВТС) внешнего сигнала &laquo;Неисправность питания&raquo; РИП.</p>
                    <img class="width indent" src="pictures/vetta/structure.png" alt="Структура ветта">
                </div>
            </div>
            <!-- Первая прокрутка -->
            <h3 class="TitleCardsBox">Контрольные панели</h3>
            <div class="container BoxPC">
                <div class="carousel-container">
                    <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel2" data-bs-slide="prev">
                        <img src="pictures/icons/arrowLeft.svg" alt="Предыдущий">
                    </button>
                    <div id="cardCarousel2" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <!-- Группа из 3 карточек -->
                                    <div class="col-md-4 center">
                                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=31">
                                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                                            <img src="pictures/instrumentation/p1.png" class="ImgCard" alt="ВЕТТА-ОКП">
                                            <div class="BlockText">
                                                <h4 class="TitleInstrumentation">ВЕТТА-ОКП</h4>
                                                <p class="description">Основная контрольная панель</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 center">
                                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=32">
                                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                                            <img src="pictures/instrumentation/p5.png" class="ImgCard" alt="ВЕТТА-ДКП 1">
                                            <div class="BlockText">
                                                <h4 class="TitleInstrumentation">ВЕТТА-ДКП 1</h4>
                                                <p class="description">Дополнительная контрольная панель</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 center">
                                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=33">
                                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                                            <img src="pictures/instrumentation/p5.png" class="ImgCard" alt="ВЕТТА-ДКП 2">
                                            <div class="BlockText">
                                                <h4 class="TitleInstrumentation">ВЕТТА-ДКП 2</h4>
                                                <p class="description">Дополнительная контрольная панель</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <!-- Еще одна группа из 3 карточек -->
                                    <div class="col-md-4 center">
                                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=34">
                                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                                            <img src="pictures/instrumentation/p5.png" class="ImgCard" alt="ВЕТТА-ДКП 3">
                                            <div class="BlockText">
                                                <h4 class="TitleInstrumentation">ВЕТТА-ДКП 3</h4>
                                                <p class="description">Дополнительная контрольная панель</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel2" data-bs-slide="next">
                        <img src="pictures/icons/arrowRight.svg" alt="Следующий">
                    </button>
                </div>
            </div>

            <div class="CardsBoxMob">
                <div id="cardCarouselb" class="card-scroll-container">
                    <div class="card-wrapper">
                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=31">
                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                            <img src="pictures/instrumentation/p1.png" class="ImgCard" alt="ВЕТТА-ОКП">
                            <div class="BlockText">
                                <h4 class="TitleInstrumentation">ВЕТТА-ОКП</h4>
                                <p class="description">Основная контрольная панель</p>
                            </div>
                        </div>
                    </div> 
                    <div class="card-wrapper">    
                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=32">
                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                            <img src="pictures/instrumentation/p5.png" class="ImgCard" alt="ВЕТТА-ДКП 1">
                            <div class="BlockText">
                                <h4 class="TitleInstrumentation">ВЕТТА-ДКП 1</h4>
                                <p class="description">Дополнительная контрольная панель</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=33">
                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                            <img src="pictures/instrumentation/p5.png" class="ImgCard" alt="ВЕТТА-ДКП 2">
                            <div class="BlockText">
                                <h4 class="TitleInstrumentation">ВЕТТА-ДКП 2</h4>
                                <p class="description">Дополнительная контрольная панель</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=34">
                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                            <img src="pictures/instrumentation/p5.png" class="ImgCard" alt="ВЕТТА-ДКП 3">
                            <div class="BlockText">
                                <h5 class="TitleInstrumentation">ВЕТТА-ДКП 3</h5>
                                <p class="description">Дополнительная контрольная панель</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- вторая -->
             <div class="CardsBox">
                <h3 class="TitleCardsBox">Контрольные панели</h3>
                <div class="container">
                    <div id="cardCarouselb" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4 center">
                                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=35">
                                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                                            <img src="pictures/instrumentation/p6.png" class="ImgCard" alt="ВС-ПК ВЕКТОР-120">
                                            <div class="BlockText">
                                                <h4 class="TitleInstrumentation">ВС-ПК ВЕКТОР-120</h4>
                                                <p class="description">Прибор приемно-контрольный и управления охранно-пожарный адресный радиоканальный</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 center">
                                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=36">
                                            <img class="stop" src="pictures/other/stop.svg" alt="снято">
                                            <img src="pictures/instrumentation/p7.jpg" class="ImgCard" alt="ВС-ПК ВЕКТОР-116">
                                            <div class="BlockText">
                                                <h4 class="TitleInstrumentation">ВС-ПК ВЕКТОР-116</h4>
                                                <p class="description">Прибор приемно-контрольный и управления охранно-пожарный адресный радиоканальный</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="CardsBoxMob">
                <h3 class="TitleCardsBox">Радиоканальные приборы</h3>
                <div id="cardCarouselc" class="card-scroll-container">
                    <div class="card-wrapper">
                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=35">
                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                            <img src="pictures/instrumentation/p5.png" class="ImgCard" alt="ВС-ПК ВЕКТОР-120">
                            <div class="BlockText">
                                <h4 class="TitleInstrumentation">ВС-ПК ВЕКТОР-120</h4>
                                <p class="description">Прибор приемно-контрольный и управления охранно-пожарный адресный радиоканальный</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=36">
                            <img class="stop" src="pictures/other/stop.svg" alt="снято">
                            <img src="pictures/instrumentation/p5.png" class="ImgCard" alt="ВС-ПК ВЕКТОР-116">
                            <div class="BlockText">
                                <h5 class="TitleInstrumentation">ВС-ПК ВЕКТОР-116</h5>
                                <p class="description">Прибор приемно-контрольный и управления охранно-пожарный адресный радиоканальный</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- третья -->
            <h3 class="TitleCardsBox">Модемы и блоки реле</h3>
            <div class="container BoxPC">
                <div class="carousel-container">
                    <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel3" data-bs-slide="prev">
                        <img src="pictures/icons/arrowLeft.svg" alt="Предыдущий">
                    </button>
                    <div id="cardCarousel3" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <!-- Группа из 3 карточек -->
                                    <div class="col-md-4 center">
                                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=37">
                                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                                            <img src="pictures/instrumentation/p2.png" class="ImgCard" alt="ВЕТТА-МП">
                                            <div class="BlockText">
                                                <h4 class="TitleInstrumentation">ВЕТТА-МП</h4>
                                                <p class="description">Универсальное приемопередающее устройство с модемом проводного канала.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 center">
                                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=38">
                                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                                            <img src="pictures/instrumentation/p3.png" class="ImgCard" alt="ВЕТТА-МР">
                                            <div class="BlockText">
                                                <h4 class="TitleInstrumentation">ВЕТТА-МР</h4>
                                                <p class="description">Универсальное приемопередающее устройство с модемом радиоканала.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 center">
                                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=39">
                                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                                            <img src="pictures/instrumentation/p4.png" class="ImgCard" alt="ВЕТТА-ДКП 3">
                                            <div class="BlockText">
                                                <h4 class="TitleInstrumentation">ВЕТТА-ДКП 3</h4>
                                                <p class="description">Дополнительная контрольная панель</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <!-- Еще одна группа из 3 карточек -->
                                    <div class="col-md-4 center">
                                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=5">
                                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                                            <img src="pictures/instrumentation/p2.png" class="ImgCard" alt="ВЕТТА-БР">
                                            <div class="BlockText">
                                                <h4 class="TitleInstrumentation">ВЕТТА-БР</h4>
                                                <p class="description">Блок реле.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel3" data-bs-slide="next">
                        <img src="pictures/icons/arrowRight.svg" alt="Следующий">
                    </button>
                </div>
            </div>

            <div class="CardsBoxMob">
                <div id="cardCarouselс" class="card-scroll-container">
                    <div class="card-wrapper">
                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=37">
                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                            <img src="pictures/instrumentation/p2.png" class="ImgCard" alt="ВЕТТА-МП">
                            <div class="BlockText">
                                <h4 class="TitleInstrumentation">ВЕТТА-МП</h4>
                                <p class="description">Универсальное приемопередающее устройство с модемом проводного канала.</p>
                            </div>
                        </div>
                    </div> 
                    <div class="card-wrapper">    
                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=38">
                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                            <img src="pictures/instrumentation/p4.png" class="ImgCard" alt="ВЕТТА-МР">
                            <div class="BlockText">
                                <h4 class="TitleInstrumentation">ВЕТТА-МР</h4>
                                <p class="description">Универсальное приемопередающее устройство с модемом радиоканала.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=39">
                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                            <img src="pictures/instrumentation/p3.png" class="ImgCard" alt="ВЕТТА-МК">
                            <div class="BlockText">
                                <h4 class="TitleInstrumentation">ВЕТТА-МК</h4>
                                <p class="description">ДБлок коммуникационный.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="Card clickable-card" data-href="shablonProductVetta.php?id=5">
                            <img class="now" src="pictures/other/icon_novinka.png" alt="новинка">
                            <img src="pictures/instrumentation/p2.png" class="ImgCard" alt="ВЕТТА-БР">
                            <div class="BlockText">
                                <h5 class="TitleInstrumentation">ВЕТТА-БР</h5>
                                <p class="description">Блок реле</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="col-sm">
                <div class="support">
                    <div class="textSupport">
                        <p class="textSupportBold">Техподдержка</p>
                        <p class="textSupportBold">Режим работы: <br>ежедневно с 05:00 до 18:00 МСК</p>
                        <p class="textSupportBold">8-800-250-53-33</p>
                        <p class="textSupportMin">звонок бесплатный для всех регионов России</p>
                        <p class="textSupportBold">+7-913-002-63-36</p>
                        <p class="textSupportMin">для Республики Казахстан</p>
                    </div>
                    <img class="ImgSup" src="pictures/other/support.png" alt="Техподдержка">
                </div>
                <div class="networkBox">
                    <div class="network">
                        <img src="pictures/icons/WhatsApp.svg" alt="WhatsApp" width="30px">
                        <a class="link1 dop rightColumNetwork" href="https://wa.me/89132081290">8-913-208-12-90</a>
                    </div>
                    <div class="network">
                        <img src="pictures/icons/telegram.svg" alt="Telegram" width="30px">
                        <a class="link1 dop rightColumNetwork" href="https://t.me/arsenal_npo">SibArsenal_bot</a>
                    </div>
                    <div class="network">
                        <img src="pictures/icons/gmail.svg" alt="Gmail">
                        <a class="link1 dop rightColumNetwork" href="mailto:helpdesk@arsenalnpo.ru">helpdesk@arsenalnpo.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Footer -->
    <Footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm-8">
                    <div class="contentFooter">
                        <div class="TextFooter">
                            <p class="textfootermax">ООО НПО Сибирский Арсенал 1992-2025</p>
                            <p class="textfootermin">Разработка и производство систем безопасности</p>
                            <a class="text_nav link1 link2" href="tel:8-800-250-53-33"><p class="textfootermin">8-800-250-53-33</p></a>
                            <a class="text_nav link1 link2" href="mailto:info@arsenalnpo.ru"><p class="textfootermin">info@arsenalnpo.ru</p></a>
                            <p class="textfootermax">Информация, предоставленная на сайте, не является публичной офертой</p>
                            <p class="textfootermin">Мы в социальных сетях:</p>
                            <div class="footerNetwork">
                                <a class="text_nav link1 link2" href="https://t.me/arsenal_npo"><img src="pictures/icons/telegramFooter.svg" alt="VK"></a>
                                <a class="text_nav link1 link2" href="https://vk.com/club74611379"><img src="pictures/icons/vkFooter.svg" alt="Telegram"></a>
                            </div>
                        </div>
                        <div class="navFooter">
                            <a class="text_nav link1 link2" href="https://arsenal-sib.ru/sistema_vektor_ap/"><p class="textnavFooter">Адресная система ВС-ВЕКТОР-АП</p></a>
                            <a class="text_nav link1 link2" href="https://arsenal-sib.ru/system_vetta2020/"><p class="textnavFooter">Пультовая система ВЕТТА-2020</p></a>
                            <a class="text_nav link1 link2" href="https://arsenal-sib.ru/radiokanalnaja_sistema_vektor-ar/"><p class="textnavFooter">Адресная радиоканальная система «ВС-ВЕКТОР-АР»</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm"></div>
            </div>
        </div>
    </Footer>


    <!-- Scripts -->
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html> 