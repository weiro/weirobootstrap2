<!DOCTYPE html>
<html>
  <head>
    <title>My First App -- Home</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="home">
  <section class="container">
    <div class="content row">
    <?php include '_/components/php/header.php'; ?>
    <?php include '_/components/php/snippet-carousel.php'; ?>
      <section class="main col col-lg-8">
      <?php include '_/components/php/article-intro.php'; ?>
      <?php include '_/components/php/article-abouttheartists.php'; ?>
      <?php include '_/components/php/article-aboutthevenue.php'; ?>
      </section> <!-- main -->
      <section class="sidebar col col-lg-4">

      </section> <!-- sidebar -->
    </div> <!-- content -->
    <?php include '_/components/php/footer.php'; ?>
  </section> <!-- container -->
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>