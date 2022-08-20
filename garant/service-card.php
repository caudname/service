<?php
    require("includes/connect.php");
    $title = $_GET["title"];
    include("includes/header.php");

echo '      
        <div class="content">
            <div class="center">
                <h1 class="content__title">'.$title.'</h1>
    ';
    $result = mysqli_query($link, "SELECT * FROM services WHERE title = '$title'");
    $row = mysqli_fetch_array($result);
            echo '
                <div class="service__card">
                    <div class="service__box">
                        <div class="service__image">
                            <img src="images/services/'.$row["image"].'">
                            <div class="service__price">
                                '.$row["price"].' руб
                            </div>
                        </div>
                        <div class="service__info">
                            '.$row["info"].'
                        </div>
                    </div>
                </div>
        ';
?>
                <div class="service__procedure">
                    <h1 class="procedure__title">Порядок предоставления услуги</h1>
                    <ol class="procedure__list">
                        <li><span>Обратитесь в любой удобный сервисный центр, возьмите с собой устройство. Предварительная запись не требуется.Найти сервисные центры</span></li>
                        <li><span>Специалисты сервисного центра примут устройство, при необходимости проведут бесплатную диагностику. Стоимость диагностики в случае выполнения ремонта с клиента не взимается.</span></li>
                        <li><span>После диагностики с вами будет заключен договор, где будет указана точная стоимость работ, включая запасные части.</span></li>
                        <li><span>Поиск запчастей и сам ремонт обычно занимает до 15 дней. Процесс вы сможете отслеживать в личном кабинете, также вам будут отправляться SMS сообщения, информирующие об изменениях статуса.</span></li>
                    </ol>
                </div>

            </div>
        </div>

<?php
    include("includes/footer.php");
?>