<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гарант</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/icon.png">
</head>
<body>
    <div id="wrapper">
        <header>
            <div class="center">
                <div class="header__box">
                    <div class="logo__block">
                        <a href="index.php">
                            <img src="images/logo.png" class="logo">
                        </a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="#" class="request__link">Оставить заявку</a></li>
                            <li><a href="ask.php">Задать вопрос</a></li>
                        </ul>
                    </nav>
                    <div class="search__block">
                        <form action="search.php" method="get">
                            <input type="text" name="searchText" class="search__input" placeholder="Поиск..." required value="<?php echo $search; ?>">
                            <button type="submit" class="search__button">
                                <img src="images/lupa.png">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>