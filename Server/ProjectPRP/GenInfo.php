<?php
session_start();
if(isset($_SESSION["loggedUser"])){
    $user=$_SESSION["loggedUser"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/geninfo.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Рейтинги ЗВО</title>
</head>

<body>
<header>
    <?php if(isset($_SESSION["loggedUser"])){
        require "header_un.php";
    }else{
        require "header.php";
    } ?>
</header>
<main role="main">
    <div class="container">
        <div class="card">
            <h4>Загальна інформація про ЗНО</h4>
            <p class="text-justify">
                Зовнішнє оцінювання проводиться з метою забезпечення прав осіб
                на рівний доступ до вищої освіти та оцінювання відповідності результатів навчання,
                здобутих на основі повної загальної середньої освіти, державним вимогам.
            </p>
            <p class="text-justify">
                <b>Участь у зовнішньому оцінюванні</b> може взяти особа, яка <b>має повну загальну середню
                    освіту</b> або <b>здобуде її в поточному навчальному році</b> та зареєструвалася відповідно
                до встановлених вимог.
            </p>
            <p class="text-justify">
                Зовнішнє оцінювання проводиться щороку з використанням технологій педагогічного тестування.
                Завдання сертифікаційних робіт укладаються Українським центром відповідно до програм зовнішнього
                оцінювання з певних навчальних предметів.
            </p>
            <p class="text-justify">
                Строки організації та проведення зовнішнього оцінювання, перелік навчальних предметів, з яких
                проводиться зовнішнє оцінювання, та мов національних меншин, якими здійснюється переклад
                текстів, визначаються наказами Міністерства освіти і науки України.
            </p>
            <p class="text-justify">
                Учасникам зовнішнього оцінювання створюються рівні умови шляхом стандартизації процедур
                проведення зовнішнього оцінювання.
            </p>
            <p class="text-justify">
                Для учасників з особливими освітніми потребами в пунктах зовнішнього оцінювання створюються
                особливі (спеціальні) умови для проходження оцінювання.
            </p>
            <p class="text-justify">
                Результатом зовнішнього оцінювання є кількісна оцінка рівня навчальних досягнень учасника
                зовнішнього оцінювання.
            </p>
            <p class="text-justify"><b>Результати зовнішнього оцінювання використовуються:</b></p>
            <ul>
                <li class="text-justify">
                    для визначення конкурсного бала під час відбору осіб, які вступають на навчання до закладів
                    вищої освіти для отримання ступеня молодшого бакалавра, бакалавра (магістра і спеціаліста
                    медичного, фармацевтичного або ветеринарного спрямувань) на основі повної загальної освіти;
                </li>
                <li class="text-justify">
                    як оцінки за державну підсумкову атестацію за освітній рівень повної загальної середньої освіти;
                </li>
                <li class="text-justify">
                    для визначення стану функціонування системи загальної середньої освіти та прогнозування її
                    подальшого розвитку.
                </li>
            </ul>
            <p class="text-justify"><b>Результати з певного навчального предмета</b> визначаються за:</p>
            <ul>
                <li class="text-justify">
                    <b>рейтинговою шкалою 100-200 балів</b> – для усіх учасників, які подолали поріг
                    «склав / не склав»;
                </li>
                <li class="text-justify">
                    <b>критеріальною шкалою 1-12 балів</b> – для учасників з числа випускників системи середньої
                    освіти поточного навчального року, які обрали цей навчальний предмет для проходження державної
                    підсумкової атестації у формі зовнішнього оцінювання.
                </li>
            </ul>
            <p class="text-justify">
                Визначення тестового бала здійснюється на основі схем нарахування балів за виконання завдань
                сертифікаційної роботи, розроблених Українським центром для відповідного предмета, та схем оцінювання
                завдань відкритою форми з розгорнутою відповіддю.
            </p>
            <p class="text-justify">
                Рішення про встановлення порога «склав / не склав» ухвалює експертна комісія з визначення рейтингової
                оцінки. З урахуванням установленого порога «склав / не склав» здійснюється генерування таблиці
                за шкалою 100-200 балів.
            </p>
            <p class="text-justify">
                Таблиці за шкалою 1-12 балів розробляються та ухвалюються експертною комісією з визначення оцінки
                рівня навчальних досягнень.
            </p>
            <p class="text-justify">
                <b>Офіційне оголошення результатів</b> зовнішнього оцінювання здійснюється шляхом їх розміщення
                на інформаційних сторінках учасників зовнішнього оцінювання:
            </p>
            <ul>
                <li class="text-justify">
                    з української мови і літератури, математики, історії України, англійської, іспанської, німецької,
                    французької мов – не пізніше ніж через 25 календарних днів після проведення зовнішнього оцінювання
                    із зазначених предметів;
                </li>
                <li class="text-justify">
                    з інших предметів – не пізніше ніж через 14 календарних днів.
                </li>
            </ul>
            <p class="text-justify">
                Результати зовнішнього оцінювання у вигляді рейтингових оцінок за шкалою 100-200 балів передаються
                Українським центром до відповідного реєстру в Єдиній державній електронній базі з питань освіти.
            </p>
        </div>
    </div>
</main>
<footer>
    <?php require "footer.php";?>
</footer>
<script src="js/do.js"></script>
</body>

</html>
