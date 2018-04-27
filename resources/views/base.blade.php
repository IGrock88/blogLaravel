<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <script src="../../../js/lib/vue.min.js"></script>
    <script src="../../../js/lib/axios.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/BlogArticle/ArticleHandler.js"></script>
    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../../css/app.css" rel="stylesheet">
</head>

<body>


<header>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
               <strong>Igor Korobeynikov Personal Blog</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

@yield('content')

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Personal blog {{ $year }}</p>
    </div>
</footer>
</body>
</html>
