<?php
session_start();
$user=$_SESSION["loggedUser"];
$counter = 5;
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="jquery.lazy.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/univer.css">

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);

        var myMap;

        function initMap() {
            var element = document.getElementById('map');
            var options = {
                zoom: 17,
                center: {lat:55.7558, lng:37.6173}
            };
            myMap = new ymaps.Map(element,options);



        }

    </script>
</head>
<header>
    <?php require "db.php";?>
    <?php require "header.php";?>
</header>
<body>

<?php
$univer = get_universities_by_id($_GET['id']);
 ?>


    <div class="container emp-profile">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <div class="teg">
                                <h5><em><?php echo $univer["Name_Universities"] ?></em></h5>
                            </div>
                        </div>
                        <div class="form-group col-md">
                            <div id="favorite">
                                <style>
                                    #favorite{
                                        width: 100%;
                                        text-align: right;
                                        align-content: center;
                                    }
                                    .fa {

                                        font-size: 100px;
                                        cursor: pointer;
                                        user-select: none;
                                    }

                                    .fa:hover {
                                        color: #5cb85c;
                                    }
                                </style>

                                <i onclick="myFunction(this,<?php echo $univer["favorite"]; ?>)"
                                   class="fa <?php

                                   if ($univer["favorite"] == "1") {

                                       echo "fa-thumbs-up";
                                   } else {
                                       echo "fa-thumbs-down";
                                   }

                                   ?>
                                           fa-3x "
                                   value="<?php echo $univer["favorite"]; ?>" id="like_button" name="like_button"></i>



                                <input value="<?php echo $univer['id'] ?>" id="getId" name="getId" hidden></input>
                                <input  value="<?php echo $univer["favorite"]; ?>" id="like_btn" name="like_btn" hidden></input>
                                <script>

                                    function myFunction(x, y) {

                                        if (y == 1) {
                                            x.classList.toggle("fa-thumbs-down");
                                            x.classList.toggle("fa-thumbs-up");

                                        } else {
                                            x.classList.toggle("fa-thumbs-down");
                                            x.classList.toggle("fa-thumbs-up");
                                        }

                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <div>
                                <img class="image"
                                     src="https://youruniversityguide.files.wordpress.com/2012/06/c-170.jpg"
                                     alt="Generic placeholder thumbnail">
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="info" name="info">


                            <label for="inputPassword4">
                                <h5>Область, населений пункт:
                                    <small><em><?php echo $univer["Region_U"], ", ", $univer["City_U"] ?></em>
                                    </small>
                                </h5>
                            </label><br>
                            <label for="inputPassword4">
                                <h5>Адреса:
                                    <small><em><?php echo $univer["Address_U"] ?></small>
                                    </em></h5>
                            </label><br>
                            <label for="inputPassword4">
                                <h5>Телефони:
                                    <small><em><?php echo $univer["Phone_U"] ?></small>
                                    </em></h5>
                            </label><br>
                            <label for="inputPassword4">
                                <h5>Веб-сайт:
                                    <small>
                                        <em><a href="<?php echo $univer["Web_U"] ?>"><?php echo $univer["Web_U"] ?></a>
                                    </small>
                                    </em></h5>
                            </label><br>
                            <label for="inputPassword4"><h5>Опис ВНЗ: </h5></label><br>
                            <label for="inputPassword4">
                                <h7>
                                    <ul>
                                        <li>Тип ВНЗ:
                                </h7>
                                <em><?php echo $univer["Type_U"] ?></em></label><br>
                            <label for="inputPassword4">
                                <h7>
                                    <li>Форма власності:
                                </h7>
                                <em>
                                    <h7><?php echo $univer["Control_Form_U"] ?></em></label><br>
                            <label for="inputPassword4">
                                <h7>
                                    <li>Керівник:
                                </h7>
                                <em><?php echo $univer["Director_U"] ?></em></ul></label><br>


                        </div>
                    </div>
                        <div class="form-group col-md-4">


                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

<?php

?>
<script src="js/favorite.js"></script>
</body>
<div class="container emp-profile">

    <div class="card mb-4 shadow-sm">
        <div id="mapsname"><h1 >MAPS</h1></div>
        <style>
            #mapsname{
                color: #fff;
                background-color: #5cb85c;
                border-color: #4cae4c;
                text-align: center;
               width: 100.25%;
                height: 5%;
                margin-left: -2px;
                border-radius: 2px 2px 0 0;


            }
            #map{
                width: 100%;
                height: 300px;
            }
        </style>
        <div id="map"></div>


    </div>
</div>
<footer>
    <?php require "footer.php";?>
</footer>
</html>
