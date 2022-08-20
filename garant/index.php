<?php
    require("includes/connect.php");
    include("includes/header.php");
?>

        <div class="content">
            <div class="center">
                <h1 class="content__title">Ремонт компьютерной техники в г. Махачкала</h1>
                <div class="content__grid">
<?php
    $result = mysqli_query($link, "SELECT * FROM categories");
    $row = mysqli_fetch_array($result);
    do {
        echo '
            <div class="category__block">
                <a href="services.php?type='.$row["type"].'">
                    <div class="category__item">
                        <div class="category__image">
                            <img src="images/services/'.$row["image"].'">
                        </div>
                        <div class="category__title">
                            '.$row["type"].'
                        </div>
                    </div>
                </a>
            </div>
        ';
    } while ($row = mysqli_fetch_array($result));
?>
                    

                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>