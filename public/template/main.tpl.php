<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/images/favicon.ico">

        <title>Marussia CMF</title>

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/css/main.css" rel="stylesheet" type="text/css" media="screen" />

        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/popper.min.js"></script>

    </head>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow">
            <a class="navbar-brand" href="/">
                <img src="/images/logo.png" width="35" class="d-inline-block align-top" alt="">
                Marussia CMF
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarsDefault">
                <a class="btn btn-primary" href="#" role="button">Демо</a>
            </div>
        </nav>
        <div id="home">
            <div class="hello-world">
                <img src="/images/logo-dark.png" width="100" class="d-inline-block align-top" alt="">
                <div class="description">
                    <h1><?php echo $this->content['title']; ?></h1>
                    <p class="lead"><?php echo $this->content['text'];; ?></p>
                </div>
            </div>
        </div>
    </body>
</html>
