<?php
    require("includes/connect.php");
    $type = $_GET["type"];
    include("includes/header.php");

echo '        
        <div class="content">
            <div class="center">
                <h1 class="content__title">'.$type.'</h1>
                <div class="services__block">
    ';
    $result = mysqli_query($link, "SELECT * FROM services WHERE type='$type'");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        do {
            echo '
                <div class="services">
                    <div class="services__box">
                        <div class="services__description">
                            <div class="services__image">
                                <img src="images/services/'.$row["image"].'">
                            </div>
                            <div class="services__info">
                                <div class="services__title">'.$row["title"].'</div>
                                <div class="services__price">'.$row["price"].' руб</div>
                            </div>
                        </div>
                        <div class="more__block">
                            <a href="service-card.php?title='.$row["title"].'" class="more__button">Подробнее</a>
                        </div>
                    </div>
                </div>
            ';
        } while ($row = mysqli_fetch_array($result));
    }
?>

                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>