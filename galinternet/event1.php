<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!---css от bootstrap---->
    <link rel="stylesheet" href="source/styles/mycss.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
        body {
            font-family: 'Tangerine', serif;
            font-size: 48px;
        }
    </style>
    <title>galery</title>
</head>

<body>
    <style>
        input:checked~.gal_body {
            display: block;
        }
    </style>
    <header>
        <nav class="navbar bg-body-tertiary"> <!---навигационная панель---->
            <div class="container-fluid">
                <div class="logo"><a href="https://www.sphti.ru/?ysclid=m67w8fncjk733755876"><img
                            src="source/images/logo.webp" alt=""></a></div>
                <a class="navbar-brand"><span class="lg">мероприятие 1</span> </a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                </form>
            </div>
        </nav>
    </header>

    <section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-mg-12 leftbar"> <!---левая боковая панель---->
                    <a href="/">
                        <div class="event">
                            <p>главная</p>
                        </div>
                    </a>
                    <!-- <a href="#">
                        <div class="event">
                            <p>мероприятие 1</p>
                        </div>
                    </a> -->
                    <a href="event2.php" class="ev2">
                        <div class="event">
                            <p>мероприятие 2</p>
                        </div>
                    </a>
                    <!-- <input type="checkbox" id="check">
                    <label for="check">мероприятие 2</label>
                    <div class="gal_body"><img src="source/images/i.jpg" alt="">
                        <img src="source/images/i.jpg" alt=""></div> -->
                    <a href="event3.php">
                        <div class="event">
                            <p>мероприятие 3</p>
                        </div>
                    </a>
                    <a href="event4.php">
                        <div class="event">
                            <p>мероприятие 4</p>
                        </div>
                    </a>

                </div>

                <div class="col-lg-9 "> <!---фото---->
                    <div class="row " >
                        <div class="col-lg-4 col-md-12"> <!-- первая колонка--->
                            <?php
$handle = opendir(dirname(realpath(__FILE__)).'/images1/');
while($file = readdir($handle)){
  if($file !== '.' && $file !== '..'){
    echo '<a href="/images1/'.$file.'"><img style="width:100% " class="img-fluid" src="/images1/'.$file.'" border="0" /></a>';
  }
}
?>
                        </div>
                        <div class="col-lg-4 col-md-12"> <!-- вторая колонка--->
                            <?php
$handle = opendir(dirname(realpath(__FILE__)).'/images2/');
while($file = readdir($handle)){
  if($file !== '.' && $file !== '..'){
    echo '<a href="/images2/'.$file.'"><img style="width:100% " class="img-fluid" src="/images2/'.$file.'" border="0" /></a>';
  }
}
?>
                        </div>
                        <div class="col-lg-4 col-md-12"> <!-- третья колонка--->
                            <?php
$handle = opendir(dirname(realpath(__FILE__)).'/images3/');
while($file = readdir($handle)){
  if($file !== '.' && $file !== '..'){
    echo '<a href="/images3/'.$file.'"><img style="width:100% " class="img-fluid" src="/images3/'.$file.'" border="0" /></a>';
  }
}
?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>