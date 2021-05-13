<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>World Bank</title>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div class="page">
        <header class="header">
            <div class="header__top">
                <div class="header__logo">
                    <img src="images/logo.png" alt="">
                </div>
                <!--поискал шрифты, почему то выглядят не так как на шаблоне-->
                <div class="header__phone">
                    8-800-100-5005<br>
                    +7 (3452) 522-000
                </div>
            </div>
            <nav class="header__nav">
                <a href="#">Кредитные карты</a>
                <a href="#" class="bg-orange">Вклады</a>
                <a href="#">Дебетовая карта</a>
                <a href="#">Страхование</a>
                <a href="#">Друзья</a>
                <a href="#">Интернет-банк</a>
            </nav>
        </header>
        <main class="content">
            <div class="content__navigation">
                <a href="#">Главная</a> - <a href="#">Вклады</a> - Калькулятор
            </div>
            <form class="calc" id="calc">
                <div class="calc-name">
                    Калькулятор
                </div>
                <div class="calc-content">
                    <div class="calc-form">
                            <label class="mr-30" for="calc_date">Дата оформления вклада</label>
                            <input class="input-size" type="text" id="calc_date" name="calc_date" required>
                        </p>
                        <p>
                            <label class="mr-30" for="calc_amount">Сумма вклада</label>
                            <input class="input-size" type="number" id="calc_amount" name="calc_amount" placeholder="1000" min="1000" max="3000000" required>
                        </p>
                        <p>
                            <label class="mr-30" for="calc_term">Срок вклада</label>
                            <select class="input-size" id="calc_term" name="calc_term">
                                <option value="1">1 год</option>
                                <option value="2">2 года</option>
                                <option value="3">3 года</option>
                                <option value="4">4 года</option>
                                <option value="5">5 лет</option>
                            </select>
                        </p>
                        <p>
                            <label class="mr-30">Пополнение вклада</label>
                            <label class="mr-9"><input name="calc_r" type="radio" value="0" checked> Нет</label>
                            <label><input name="calc_r" type="radio" value="1"> Да</label>
                        </p>
                        <p>
                            <label class="mr-30" for="calc_r-amount">Сумма пополнения вклада</label>
                            <input class="input-size" type="number" id="calc_r-amount" name="calc_r-amount" placeholder="1000" min="1000" max="3000000">
                        </p>
                    </div>
                    <div>
                        <div class="ml-19 mt-83" >
                            <div id="slider_amount"></div>
                            <span class="slider-desc">1 тыс. руб.</span><span class="slider-desc fr">3 000 000</span>
                        </div>
                        <div class="ml-19 mt">
                            <div id="slider_r-amount"></div>
                            <span class="slider-desc">1 тыс. руб.</span> <span class="slider-desc fr">3 000 000</span>
                        </div>
                    </div>
                </div>
                <div class="calc-footer">
                    <input type="submit" class="calc-submit" id="calc-submit" value="Рассчитать">
                    <label class="text-bold ml-19">Результат: </label><label id="calc_sum">0</label> руб
                </div>
            </form>
        </main>
        <footer class="footer">
            <nav class="footer__nav">
                <a href="#">Кредитные карты</a>
                <a href="#">Вклады</a>
                <a href="#">Дебетовая карта</a>
                <a href="#">Страхование</a>
                <a href="#">Друзья</a>
                <a href="#">Интернет-банк</a>
            </nav>
        </footer>
    </div>
</body>
</html>
