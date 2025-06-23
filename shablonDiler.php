<?php
require_once 'Cardsbd.php';

    $product_id = intval($_GET['id']);

    $sql = "SELECT * FROM product_dilers WHERE product_id = $product_id ORDER BY `order` ASC";
    $result = mysqli_query($link, $sql);

    $dilers = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $dilers[] = $row;
        }
    }

    $city = isset($dilers[0]['city']) ? $dilers[0]['city'] : 'Неизвестно';

    $order = isset($_GET['order']) ? intval($_GET['order']) : 1; 

    $sql = "SELECT name FROM product_dilers WHERE product_id = $product_id AND `order` = $order LIMIT 1";
    $result = mysqli_query($link, $sql);

    $diler_name = 'Неизвестный дилер';
    if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $diler_name = $row['name'];
}

    
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= htmlspecialchars($city) ?></title>
    <link rel="icon" href="pictures/other/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="pictures/other/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/WhereBuy.css">
    <link rel="stylesheet" href="/css/dilers.css?v=3">
    <link rel="stylesheet" href="/css/contact.css">
</head>
<body>
    <!-- Header -->
    <header class="container-fluid">
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm-8 pad">
            <div class="container-fluid nav_box">
                <div class="logoMenu">
                   <img class="logo" src="/pictures/logo/logo.svg" alt="Логотип">
                    <div class="menu" id="menuToggle">  
                        <img src="/pictures/icons/menu.svg" alt="">
                    </div> 
                </div>
                <nav class="navup" id="navup">  
                    <ul class="navupbox">
                        <li><a class="text_nav link1 paddings" href="https://arsenal-sib.ru/o_kompanii/">О компании</a></li>
                        <li><a class="text_nav link1 paddings" href="https://arsenal-sib.ru/vacancy/">Вакансии</a></li>
                        <li><a class="text_nav link1 paddings" href="https://arsenal-sib.ru/designers/?cat=1">Проектировщикам</a></li>
                        <li><a class="text_nav link1 paddings" href="https://arsenal-sib.ru/news/">Новости</a></li>
                    </ul>
                </nav>
                <nav class="navuptwo">  
                    <ul class="navupboxtwo">
                        <li><a class="text_nav link1 paddings" href="https://arsenal-sib.ru/o_kompanii/">О компании</a></li>
                        <li><a class="text_nav link1 paddings" href="https://arsenal-sib.ru/vacancy/">Вакансии</a></li>
                        <li><a class="text_nav link1 paddings" href="https://arsenal-sib.ru/designers/?cat=1">Проектировщикам</a></li>
                        <li><a class="text_nav link1 paddings" href="https://arsenal-sib.ru/news/">Новости</a></li>
                    </ul>
                </nav>
            </div>
            <div class="nav_box nav_content">
                <p class="textHed">Производство и продажа специализированного охранно-пожарного оборудования</p>
                <div class="network">
                    <img src="/pictures/icons/telegram.svg" alt="Telegram">
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
                <li><a class="text_nav link1 link2" href="/index.php">Главная</a></li>
                <li><a class="text_nav link1 link2" href="/WhereBuy.php">Где купить</a></li>
                <li><a class="text_nav link1 link2" href="/contacts.php">Контакты</a></li>
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
                    <a href="/index.php">
                        <img src="/pictures/icons/home.png" alt="Главная" width="25" height="25">
                    </a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a class="text_nav link1 color" href="/WhereBuy.php">Где купить</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($city) ?></li>
                </ol>
                </nav>

                <!-- Content  -->

                <div class="container">
                <?php foreach ($dilers as $index => $diler): ?>
                    <div class="BoxDilers">
                        <div class="letterBox">
                            <div class="letter"><?= $index + 1 ?></div>
                        </div>
                        <div class="Card_contact">
                            <p class="TitleCard Diler"><?php echo htmlspecialchars($diler['name']); ?></p>
                            <div class="branchCard_Text"><?= htmlspecialchars($diler['city']) ?> — <?= nl2br(htmlspecialchars($diler['address'])) ?></div>

                            <?php if (!empty($diler['emails'])): ?>
                                <?php foreach (explode(',', $diler['emails']) as $email): ?>
                                    <?php $emailTrim = trim($email); ?>
                                    <div class="branchCard_Text">
                                        <span class="BoldbranchCard_Text">Email:</span> 
                                        <a href="mailto:<?= htmlspecialchars($emailTrim) ?>"><?= htmlspecialchars($emailTrim) ?></a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <?php if (!empty($diler['website'])): ?>
                                <?php 
                                    $website = trim($diler['website']);
                                    // Добавляем http:// если протокол не указан (для корректной работы ссылки)
                                    if (!preg_match('#^https?://#', $website)) {
                                        $website = 'http://' . $website;
                                    }
                                ?>
                                <div class="branchCard_Text">
                                    <span class="BoldbranchCard_Text">Сайт:</span> 
                                    <a class="web" href="<?= htmlspecialchars($website) ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($diler['website']) ?></a>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($diler['phones'])): ?>
                                <div class="social">
                                    <img src="/pictures/icons/mob.svg" alt="">
                                    <?php foreach (explode(',', $diler['phones']) as $phone): ?>
                                        <?php $phoneTrim = trim($phone); ?>
                                        <div class="branchCard_Text_Num">
                                            <a href="tel:<?= preg_replace('/\D+/', '', $phoneTrim) ?>"><?= htmlspecialchars($phoneTrim) ?></a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
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
                    <img class="ImgSup" src="/pictures/other/support.png" alt="Техподдержка">
                </div>
                <div class="networkBox">
                    <div class="network">
                        <img src="/pictures/icons/WhatsApp.svg" alt="WhatsApp" width="30px">
                        <a class="link1 dop rightColumNetwork" href="https://wa.me/89132081290">8-913-208-12-90</a>
                    </div>
                    <div class="network">
                        <img src="/pictures/icons/telegram.svg" alt="Telegram" width="30px">
                        <a class="link1 dop rightColumNetwork" href="https://t.me/arsenal_npo">SibArsenal_bot</a>
                    </div>
                    <div class="network">
                        <img src="/pictures/icons/gmail.svg" alt="Gmail">
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
    <script src="../../bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html> 