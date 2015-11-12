<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="vendor/twbs/bootstrap/favicon.ico">

    <title>Минификатор URL</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="vendor/twbs/bootstrap/docs/exemples/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="vendor/twbs/bootstrap/docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="vendor/twbs/bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Минификатор URL</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="http://<?=$_SERVER['SERVER_NAME'];?>">Стартовая страница</a></li>
				  <li><a href="https://github.com/RakhmailAlexander">Перейти на GitHub</a></li>
				  <li><a href="https://github.com/RakhmailAlexander/miniurl">Основные файлы на GitHub</a></li>
				  <li><a href="https://github.com/RakhmailAlexander/miniurl_classes">Классы для минификатора на GitHub</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover container">
            <h2 class="cover-heading">Форма ввода URL</h2>
				<p class="text-justify">
					Для работы формы необходимо ввести полное URL, которое необходимо минифицировать.
					В форме есть возможность задать свою мини ссылку. Она может содержать цифры и буквы
					латинского алфавита, и не должна превышать длинну в 10 символов. Если вы хотите создать
					ссылку с ограниченным сроком жизни, введите в 3 поле значение срока жизни в часах. Оно
					не должно превышать 999 часов. После нажатия кнопки "Уменьшить" ниже формы появятся
					две ссылки. Первая - это оригинальный URL, вторая - минимизированная ссылка, через
					которую можно заходить на оригинальный URL.
				</p>
				<form action="main.php">
					<input required name="url" type="text" placeholder="input long url" size="25">
					<input name="userUrl" type="text" pattern="([a-zA-Z0-9]{1,10})" placeholder="input your url" size="25">
					<input name="toTime" type="text" pattern="([0-9]{1,3})" placeholder="input link life in hours" size="15">
					<input type="submit" value="Уменьшить">
				</form>
          </div>

          <div class="mastfoot">
            <div class="inner container">
              <p>
				<?php
					if ($_GET['url']) {
						if ($errMsg) {
							echo $errMsg;
							exit;
						}
						?>
						<h3>
							<?=$message->msg();?>
						</h3>
						<?php
					}
				?>
			  </p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>