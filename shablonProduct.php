<?php 
require_once 'Cardsbd.php';

if (!isset($_GET['id'])) {
    die("ID товара не указан");
}
$product_id = (int)$_GET['id'];

function fetch_section($link, $table, $product_id) {
    $stmt = mysqli_prepare($link, "SELECT * FROM $table WHERE product_id = ?");
    mysqli_stmt_bind_param($stmt, "i", $product_id);
    mysqli_stmt_execute($stmt);
    return mysqli_stmt_get_result($stmt);
}

$product_result = fetch_section($link, 'products', $product_id);
$product = mysqli_fetch_assoc($product_result);
if (!$product) {
    die("Товар не найден.");
}

$section_result = fetch_section($link, 'product_sections', $product_id);
$sections = [];
while ($row = mysqli_fetch_assoc($section_result)) {
    $type = mb_strtolower(trim($row['section_type']));
    $sections[$type][] = [
        'title' => $row['title'] ?? '',
        'content' => $row['content'] ?? ''
    ];
}

$techItems = [];
$texhar_items = fetch_section($link, 'product_texhar_items', $product_id);
while ($row = mysqli_fetch_assoc($texhar_items)) {
    $techItems[] = [
        'name' => $row['name'] ?? '',
        'value' => $row['value'] ?? ''
    ];
}

function fetch_items($link, $table, $product_id) {
    $result = [];
    $res = fetch_section($link, $table, $product_id);
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}

function section_has_content($sectionArray) {
    if (empty($sectionArray)) return false;
    foreach ($sectionArray as $item) {
        if (!empty(trim(strip_tags($item['content'] ?? '')))) {
            return true;
        }
    }
    return false;
}

$dokItems = fetch_items($link, 'product_dok_items', $product_id);
$poItems = fetch_items($link, 'product_po_items', $product_id);
$sxemaItems = fetch_items($link, 'product_sxema_items', $product_id);
$videoItems = fetch_items($link, 'product_video_items', $product_id);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($product['name'] ?? '') ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/dilers.css">
    <link rel="icon" href="pictures/other/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="pictures/other/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

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
                    <a href="../index.php">
                        <img src="../pictures/icons/home.png" alt="Главная" width="25" height="25">
                    </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($product['name'] ?? '') ?></li>
                </ol>
                </nav>
                <div class="Card_Product">
                    <p class="TitleBox"><?= htmlspecialchars($product['name'] ?? '') ?></p>
                    <nav class="Product">
                        <ul>
                            <?php if (section_has_content($sections['назначение'] ?? [])): ?>
                                <li class="active" data-target="nazn">Назначение</li>
                            <?php endif; ?>

                            <?php if (section_has_content($sections['особенности'] ?? [])): ?>
                                <li data-target="osob">Особенности</li>
                            <?php endif; ?>

                            <?php if (!empty($techItems)): ?>
                                <li data-target="texhar">Технические характеристики</li>
                            <?php endif; ?>

                            <?php if (!empty($dokItems)): ?>
                                <li data-target="dok">Документация</li>
                            <?php endif; ?>

                            <?php if (!empty($poItems)): ?>
                                <li data-target="po">ПО</li>
                            <?php endif; ?>

                            <?php if (!empty($sxemaItems)): ?>
                                <li data-target="sxema">Схемы</li>
                            <?php endif; ?>

                            <?php if (!empty($videoItems)): ?>
                                <li data-target="video">Видео</li>
                            <?php endif; ?>
                        </ul>
                    </nav>

                    <div class="content">
                        <?php if (section_has_content($sections['назначение'] ?? [])): ?> 
                        <div class="content-item active" id="nazn">
                            <div class="product-content">
                                <div class="TextProduct">
                                    <?php foreach ($sections['назначение'] ?? [] as $s): ?> 
                                        <p class="TitleBoxText"><?= $s['content'] ?? '' ?></p>
                                    <?php endforeach; ?>
                                </div>

                                <div class="IMGtext">
                                    <img src="<?= htmlspecialchars($product['image'] ?? '') ?>" alt="" width="350px" class="IMGPdc">
                                    <div class="price">
                                        <div>Цена с НДС:</div>
                                        <div class="priceText"><?= number_format((float) $product['price'], 0, '', ' ') ?> р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if (section_has_content($sections['особенности'] ?? [])): ?>
                        <div class="content-item" id="osob">
                            <div class="product-content">
                                <div class="TextProduct">
                                    <?php foreach ($sections['особенности'] ?? [] as $s): ?>
                                        <?= str_replace('<li', '<li class="ingredients"', $s['content'] ?? '') ?>
                                    <?php endforeach; ?>
                                </div>  
                                <div class="IMGtext">
                                    <img src="<?= htmlspecialchars($product['image'] ?? '') ?>" alt="" width="350px" class="IMGPdc">
                                    <div class="price">
                                        <div>Цена с НДС:</div>
                                        <div class="priceText"><?= number_format((float) $product['price'], 0, '', ' ') ?> р.</div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($techItems)): ?>
                        <div id="texhar" class="content-item">
                            <div class="product-content">
                                <div class="TextProduct">
                                    <?php if (!empty($techItems)): ?>
                                        <div class="table">
                                            <?php foreach ($techItems as $index => $item): ?>
                                                <div class="rowTable <?= $index === 0 ? 'BorderOff' : '' ?>">
                                                    <div class="textTable"><?= nl2br(htmlspecialchars($item['name'])) ?></div>
                                                    <div class="NumTablr"><?= nl2br(htmlspecialchars($item['value'])) ?></div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="IMGtext">
                                    <img src="<?= htmlspecialchars($product['image'] ?? '') ?>" alt="" width="350px" class="IMGPdc">
                                    <div class="price">
                                        <div>Цена с НДС:</div>
                                        <div class="priceText"><?= number_format((float) $product['price'], 0, '', ' ') ?> р.</div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($dokItems)): ?>
                        <div class="content-item" id="dok">
                            <div class="product-content">
                                <div class="TextProduct">
                                    <div class="table">
                                        <?php foreach ($dokItems as $item): ?>
                                            <div class="rowTableFiles">
                                                <img src="<?= htmlspecialchars($item['icon_url'] ?? '/images/pdf_icon.svg') ?>" alt="icon" width="30" style="margin-right: 15px;">
                                                <a class="linkRow" href="<?= htmlspecialchars($item['file_url'] ?? '#') ?>" target="_blank">
                                                    <?= htmlspecialchars($item['file_name'] ?? $item['name'] ?? 'Документ') ?>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="IMGtext">
                                    <img src="<?= htmlspecialchars($product['image'] ?? '') ?>" alt="" width="350px" class="IMGPdc">
                                    <div class="price">
                                        <div>Цена с НДС:</div>
                                        <div class="priceText"><?= number_format((float) ($product['price'] ?? 0), 0, '', ' ') ?> р.</div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($poItems)): ?>
                        <div class="content-item" id="po">
                            <div class="product-content">
                                <div class="TextProduct">
                                    <div class="table">
                                        <?php foreach ($poItems  as $item): ?>
                                            <div class="rowTableFiles BorderOff">
                                                <img src="<?= htmlspecialchars($item['icon_url'] ?? '/images/pdf_icon.svg') ?>" alt="icon" width="30" style="margin-right: 15px;">
                                                <a class="linkRow" href="<?= htmlspecialchars($item['file_url'] ?? '#') ?>" target="_blank" download>
                                                    <?= htmlspecialchars($item['file_name'] ?? $item['name'] ?? 'Файл ПО') ?>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="IMGtext">
                                    <img src="<?= htmlspecialchars($product['image'] ?? '') ?>" alt="" width="350px" class="IMGPdc">
                                    <div class="price">
                                        <div>Цена с НДС:</div>
                                        <div class="priceText"><?= number_format((float) ($product['price'] ?? 0), 0, '', ' ') ?> р.</div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($sxemaItems)): ?>
                        <div class="content-item" id="sxema">
                            <div class="product-content">
                                <div class="TextProduct">
                                    <div class="SxemBox">
                                        <?php foreach ($sxemaItems as $index => $item): ?>
                                            <?php
                                                $imageUrl = htmlspecialchars($item['image_url'] ?? '');
                                                $description = htmlspecialchars($item['name'] ?? 'Схема');
                                            ?>
                                            <div class="print-container mb-4 text-center">
                                                <img
                                                    src="<?= $imageUrl ?>"
                                                    alt="<?= $description ?>"
                                                    class="img-fluid IMGschems"
                                                    style="cursor: zoom-in; max-width: 100%; height: auto;"
                                                    data-img="<?= $imageUrl ?>"
                                                    data-title="<?= $description ?>"
                                                    onclick="openFullscreenView(this)"
                                                >
                                                <div class="textImg"><?= $description ?></div>
                                                <button class="print" onclick="printSxema(this)" data-img="<?= $imageUrl ?>" data-title="<?= $description ?>">Распечатать</button>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="IMGtext">
                                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="" width="350px" class="IMGPdc">
                                    <div class="price">
                                        <div>Цена с НДС:</div>
                                        <div class="priceText"><?= number_format((float) ($product['price'] ?? 0), 0, '', ' ') ?> р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($videoItems)): ?>
                        <div class="content-item" id="video">
                            <div class="product-content">
                                <div class="TextProduct">
                                    <?php foreach ($videoItems as $item): ?>
                                        <video width="540" height="360" controls poster="<?= htmlspecialchars($item['poster_url'] ?? '') ?>">
                                            <source src="<?= htmlspecialchars($item['video_url'] ?? '') ?>" type="video/mp4">
                                            Ваш браузер не поддерживает тег video.
                                        </video>
                                    <?php endforeach; ?>
                                </div>

                                <div class="IMGtext">
                                    <img src="<?= htmlspecialchars($product['image'] ?? '') ?>" alt="" width="350px" class="IMGPdc">
                                    <div class="price">
                                        <div>Цена с НДС:</div>
                                        <div class="priceText"><?= number_format((float) ($product['price'] ?? 0), 0, '', ' ') ?> р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
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
                    <img class="ImgSup" src="../pictures/other/support.png" alt="Техподдержка">
                </div>
                <div class="networkBox">
                    <div class="network">
                        <img src="../pictures/icons/WhatsApp.svg" alt="WhatsApp" width="30px">
                        <a class="link1 dop rightColumNetwork" href="https://wa.me/89132081290">8-913-208-12-90</a>
                    </div>
                    <div class="network">
                        <img src="../pictures/icons/telegram.svg" alt="Telegram" width="30px">
                        <a class="link1 dop rightColumNetwork" href="https://t.me/arsenal_npo">SibArsenal_bot</a>
                    </div>
                    <div class="network">
                        <img src="../pictures/icons/gmail.svg" alt="Gmail">
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
    <script src="../bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.js"></script>
    <script src="/js/Product.js"></script>
    <script src="/js/main.js"></script>
    
</body>
</html>
