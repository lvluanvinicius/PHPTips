<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="<?= url("inc/site/css/index.css") ?>">
  <title><?= $title ?></title>
</head>
<body>

  <header>
    <div id="header">
      <div class="container">

        <div class="soon">
          <div class="soon-img">
            <img src="<?= url("inc/site/img/soon/Logo-Ilustrador-secguryTech-news-white.png") ?>" title="Secury Tech">
          </div>
        </div>

        <nav class="navbar">
          <ul>

            <a href="<?= url() ?>">
              <li class="nav-item">
                Home
              </li>
            </a>

            <a href="<?= url() ?>">
              <li class="nav-item">
                Sobre
              </li>
            </a>

            <a href="<?= url() ?>">
              <li class="nav-item">
                Blog
              </li>
            </a>

            <a href="<?= url("members/login") ?>">
              <li class="btn-login">
                Entrar
              </li>
            </a>

          </ul>
        </nav>

      </div>
    </div>

    <div class="banner">
      <div class="section-row">

        <div class="colum-1">
          <div class="colum-content">
            <h1>As melhores notícias<br/>sobre técnologia e outros</h1>
            <p>Assine já e tenha em primeira mão as melhores notícias do país e do mundo em apenas uma revista.</p>
            <a href="<?= url("members/register") ?>" class="btn-sign">Assinar</a>
          </div>
        </div>

        <div class="colum-2">
          <div class="img-banner-secondary">
            <img src="<?= url("inc/site/img/banner/modelo-de-revista-imobiliaria_30996-510.jpg")?>" title="Magazine template">
          </div>
        </div>

      </div>
    </div>

  </header>
  <?= $v->section("content"); ?>

  <footer style="height: 100px">
    //
  </footer>

</body>
</html>
