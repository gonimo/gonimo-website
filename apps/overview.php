<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/header.php';
?>
<title><?php echo "gonimo-".$m[2]." ".$apps['overview'][0]; ?></title>
<div class="container s-apps lvl-0">
	<div class="container-fluid s-apps lvl-1">
	<div class="row">
	<div class="col-xs-12">
	<h1><?php echo $apps['overview'][0]; ?></h1>

  <h3><?php echo $apps['overview'][2]; ?></h3>
  <img class="img-responsive" src="/img/overview.png">
  <br>
  <br>
  <div class="row">

    <div class="ov-block">
      <div class="ov-text col-xs-12 col-md-8">
        <h2 class="ov-title"> <?php echo $apps['overview'][3]; ?></h2>
        <p class="ov-description"><?php echo $apps['overview'][4]; ?></p>
      </div>
      <div class="ov-image col-xs-12 col-md-4">
        <img class="img-responsive ov-img" src="/img/logo-footer.svg">
      </div>
    </div>

    <div class="ov-block">
      <div class="ov-text col-xs-12 col-md-8 col-md-push-4">
        <h2 class="ov-title"> <?php echo $apps['overview'][5]; ?></h2>
        <h3 class="ov-title"> <?php echo $apps['overview'][6]; ?></h3>
        <p class="ov-description"><?php echo $apps['overview'][7]; ?></p>
        <a class="btn btn-default ov-btn ov-btn1" href="https://app.gonimo.com" role="button" title="<?php echo $apps['overview'][8]; ?>" ><?php echo $apps['overview'][8]; ?></a>
        <a class="btn btn-default ov-btn ov-btn2" href="/apps/browser.php" role="button" title="<?php echo $apps['overview'][9]; ?>" ><?php echo $apps['overview'][9]; ?></a>
      </div>
      <div class="ov-image col-xs-12 col-md-4 col-md-pull-8">
        <img class="img-responsive ov-img" src="/img/logo-footer.svg">
      </div>
    </div>

     <div class="ov-block">
      <div class="ov-text col-xs-12 col-md-8">
        <h2 class="ov-title"> <?php echo $apps['overview'][10]; ?></h2>
        <h3 class="ov-title"> <?php echo $apps['overview'][11]; ?></h3>
        <p class="ov-description"><?php echo $apps['overview'][12]; ?></p>
      </div>
      <div class="ov-image col-xs-12 col-md-4">
        <img class="img-responsive ov-img" src="/img/logo-footer.svg">
      </div>
    </div>

     <div class="ov-block">
      <div class="ov-text col-xs-12 col-md-8 col-md-push-4">
        <h2 class="ov-title"> <?php echo $apps['overview'][15]; ?></h2>
        <h3 class="ov-title"> <?php echo $apps['overview'][16]; ?></h3>
        <p class="ov-description"><?php echo $apps['overview'][17]; ?></p>
        <a class="btn btn-default ov-btn ov-btn1" href="https://app.gonimo.com" role="button" title="<?php echo $apps['overview'][18]; ?>" ><?php echo $apps['overview'][18]; ?></a>
      </div>
      <div class="ov-image col-xs-12 col-md-4 col-md-pull-8">
        <img class="img-responsive ov-img" src="/img/logo-footer.svg">
      </div>
    </div>

     <div class="ov-block">
      <div class="ov-text col-xs-12 col-md-8">
        <h2 class="ov-title"> <?php echo $apps['overview'][19]; ?></h2>
        <h3 class="ov-title"> <?php echo $apps['overview'][20]; ?></h3>
        <p class="ov-description"><?php echo $apps['overview'][21]; ?></p>
        <a class="btn btn-default ov-btn ov-btn1" href="/kontakt.php" role="button" title="<?php echo $apps['overview'][22]; ?>" ><?php echo $apps['overview'][22]; ?></a>
      </div>
      <div class="ov-image col-xs-12 col-md-4">
        <img class="img-responsive ov-img" src="/img/logo-footer.svg">
      </div>
    </div>

    <div class="ov-block">
      <div class="ov-text col-xs-12">
        <h2 class="ov-title"> <?php echo $apps['overview'][23]; ?></h2>
        <h3 class="ov-title"> <?php echo $apps['overview'][24]; ?></h3>
        <table>
          <thead>
          <tr>
            <th></th>
            <th><?php echo $apps['overview'][5]; ?></th>
            <th><?php echo $apps['overview'][10]; ?></th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $apps['overview'][25]; ?></td>
              <td>2015</td>
              <td>2017</td>
            </tr>
            <tr>
              <td><?php echo $apps['overview'][26]; ?></td>
              <td><i class='fa fa-check' aria-hidden='true'></i></td>
              <td><i class='fa fa-check' aria-hidden='true'></i></td>
            </tr>
            <tr>
              <td><?php echo $apps['overview'][27]; ?></td>
              <td><i class='fa fa-times' aria-hidden='true'></i></td>
              <td><i class='fa fa-check' aria-hidden='true'></i></td>
            </tr>
            <tr>
              <td><?php echo $apps['overview'][28]; ?></td>
              <td><i class='fa fa-times' aria-hidden='true'></i></td>
              <td><i class='fa fa-times' aria-hidden='true'></i></td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>



  </div>
  </div>
	</div>
	</div>
</div>
<?php
include $_SERVER["DOCUMENT_ROOT"].'/footer.php';
?>
</body>
</html>
