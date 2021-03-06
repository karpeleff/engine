
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Главная</title>



    <!-- Bootstrap core CSS -->
    <link href="/inc/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Favicons -->

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">
<link rel="stylesheet" href="/inc/dist/flatpickr.css">
<link rel="stylesheet" href="/inc/dist/ie.css">
<link rel="stylesheet" href="/inc/dist/plugins/confirmDate/confirmDate.css">
<link rel="stylesheet" href="/inc/dist/plugins/monthSelect/style.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/classlist/1.2.20171210/classList.min.js"></script>
<script src="/inc/dist/flatpickr.js"></script>
<script src="/inc/dist/plugins/rangePlugin.js"></script>
<script src="/inc/dist/plugins/confirmDate/confirmDate.js"></script>
<script src="/inc/dist/plugins/minMaxTimePlugin.js"></script>
<script src="/inc/dist/plugins/monthSelect/index.js"></script>
<script src="/inc/dist/plugins/scrollPlugin.js"></script>
<script src="/inc/dist/plugins/weekSelect/weekSelect.js"></script>



<div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Engine</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Oprs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" >Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" >Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" >опрс</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Журнал регистрации расхода топлива ДГУ</h2>
        <p class="lead">Вводим время запуска , останова , тип ДГУ и тип запуска (откл.промсети или ТО)</p>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Информационная панель</span>
                <!-- <span class="badge badge-secondary badge-pill">3</span> -->
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>

                        <input type="text" class="form-control" id="start" placeholder="" name="start" value="" required>
                    </div>
                    <span class="text-muted">$12</span>
                </li>                 <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                </li>
            </ul>

            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 order-md-1">
            <hr class="mb-4">

            <form class="needs-validation" method="post" action="/store/add" novalidate>


                <hr class="mb-4">
                <div class="row">



        </div>
  <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Записать в журнал</button>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">

        <p class="mb-1">&copy; 2020 Karpelev_IT_Company</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
<script>
    var fp = flatpickr("#start", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minuteIncrement:1,
        defaultDate: new Date()
    })



</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="/inc/js/bootstrap.bundle.min.js" ></script>
<script src="form-validation.js"></script></body>
</html>
