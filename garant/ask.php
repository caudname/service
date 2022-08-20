<?php
    require("includes/connect.php");
    $askName = $_POST["askName"];
    $askPhone = $_POST["askPhone"];
    $askMail = $_POST["askMail"];
    $askText = $_POST["askText"];
    if (isset($_POST["ask"])) {
        $result = mysqli_query($link, "INSERT INTO questions (question_name, question_phone, question_mail, question_text) VALUES ('$askName','$askPhone','$askMail','$askText')");
        if ($result == true) {
            header("Location: ask.php");
        }
    }
    include("includes/header.php");
?>
        
        <div class="content">
            <div class="center">
                <h1 class="content__title">Задать вопрос</h1>
                <div class="ask__block">
                    <form method="post">
                        <div class="ask__name">
                            <input type="text" name="askName" placeholder="Имя" required>
                        </div>
                        <div class="ask__phone">
                            <input type="text" name="askPhone" placeholder="Телефон" required>
                        </div>
                        <div class="ask__mail">
                            <input type="text" name="askMail" placeholder="Почта" required>
                        </div>
                        <div class="ask__text">
                            <textarea name="askText" placeholder="Текст сообщения" required></textarea>
                        </div>
                        <div class="ask__button">
                            <button type="submit" name="ask">Отправить</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

<?php
    include("includes/footer.php");
?>