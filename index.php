<?php
include_once "base.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chia Yu Chen's Resume</title>
  <link rel="icon" href="img/rb3.png">
  <link rel="stylesheet" href="plugin/bootstrap.min.css">
  <link rel="stylesheet" href="plugin/style.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <script src="https://kit.fontawesome.com/fa483230ea.js" crossorigin="anonymous"></script>
  <script src="plugin/jquery-3.5.1.min.js"></script>
  <script src="plugin/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="plugin/custom.js"></script>
</head>

<body>
  <!-- 選單區 -->
  <header class="fixed-top bg-dark " id="Menu">
    <nav class="navbar navbar-expand-lg navbar-dark container">
      <a class="navbar-brand" href="./">My Resume</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#minMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="minMenu">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link px-4" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- 輪播廣告區 -->
  <section id="slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1"></li>
      <li data-target="#slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item vh-100 active">
        <img src="https://picsum.photos/1920/1080/?random=1" class="w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center">
          <h1>First slide label</h1>
          <p class="d-none d-md-block">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
        <img src="https://picsum.photos/1920/1080/?random=2" class="w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center">
          <h1>Second slide label</h1>
          <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
        <img src="https://picsum.photos/1920/1080/?random=3" class="w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center">
          <h1>Third slide label</h1>
          <p class="d-none d-md-block">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#slider" data-slide="prev">
      <i class="fas fa-angle-double-left fa-2x"></i>
    </a>
    <a class="carousel-control-next" href="#slider" data-slide="next">
      <i class="fas fa-angle-double-right fa-2x"></i>
    </a>
  </section>
  <!-- About -->
  <section id="about" class="container py-5 mt-3 section-bg text-white ">
    <header class="text-center container">
      <h2 class="text-info pb-3">About</h2>
    </header>
    <article class="tab-content py-5">
      <div class="row tab-pane fade show active">
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <img src="media/rabbit.jpg">
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
		<?php
        $rows=$tb1->all("where sh = 1");

        foreach($rows as $row){
        ?>
          <p class="col-12 text-muted text-center mb-5"><?=$row["text"]?></p>
		<?php
        }
        ?>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <h4 class="text-primary text-center">求職條件</h4>
          <div class="text-center">

          
		<?php
        $rows=$tb6->all("where sh = 1");

        foreach($rows as $row){
        ?>
          <p class="col-12 text-muted text-center mb-5">
            <?=$row["text"]?>
          </p>
		<?php
        }
        ?>
          </div>
        </div>
      </div>
    </article>
  </section>
  <!-- experience -->
	<section id="experience" class="container experience py-5 mt-3 section-bg text-white section-bg">
    <header class="text-center container section-title">
      <h2 class="text-info pb-3">Experience</h2>
    </header>
		<?php
          $rows=$tb2->all("where sh = 1");

          foreach($rows as $row){
        ?>
        <div class="row">
          <div class="col-lg-6">
            <h3 class="experience-title"><?=$row["text"]?></h3>
            <div class="experience-item pb-0">
              <h4><?=$row["text2"]?></h4>
              <p><em> <?=$row["text3"]?></em></p>
              <p><?=$row["text4"]?></p>
              <p></p>
            </div>
          </div>
        </div>
		<?php
		  }
        ?>

      </div>
    </section>

  <!-- skills -->
  <section id="skills" class="container py-5">
    <header class="text-center">
      <h2 class="text-info pb-3">Skills</h2>
    </header>
    <article class="py-5 row">
      <!-- tab content -->
      <div class="col-12 col-lg-6 tab-content mb-3">
        <img src="https://picsum.photos/600/400/?random=1" id="skillsimg1"
          class="w-100 img-thumbnail tab-pane fade show active">
        <img src="https://picsum.photos/600/400/?random=2" id="skillsimg2" class="w-100 img-thumbnail tab-pane fade">
        <img src="https://picsum.photos/600/400/?random=3" id="skillsimg3" class="w-100 img-thumbnail tab-pane fade">
      </div>
      <!-- Accordion -->
      <div class="col-12 col-lg-6 accordion list-group px-3" id="skillsmenu">
		<?php
		$skill_count=0;
        $rows=$tb3->all("where sh = 1");

        foreach($rows as $row){
			$skill_count++;
        ?>
        <div class="card" data-toggle="list" data-target="#skillsimg<?=$skill_count?>">
          <a href="#skillsmsg<?=$skill_count?>" class="card-header h5 text-decoration-none alert-info" data-toggle="collapse"><?=$row["text"]?></a>
          <div id="skillsmsg<?=$skill_count?>" data-parent="#skillsmenu" class="collapse">
            <div class="card-body"><?=$row["text"]?></div>
          </div>
        </div>
		<?php
		}
        ?>
      </div>
    </article>
  </section>
  <!-- Portfolio -->
  <section id="portfolio" class="container py-5">
    <header class="text-center">
      <h2 class="text-info pb-3">Portfolio</h2>
    </header>
    <article class="tab-content py-5">
      <div class="row tab-pane fade show active" id="roomA">
		<?php
        $rows=$tb4->all("where sh = 1");

        foreach($rows as $row){
        ?>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
		    <a href="<?=$row["text3"]?>">
            <img src="./img/<?=$row['img'];?>" class="card-img-top">
			</a>
            <div class="card-body">
              <h5><?=$row["text"]?></h5>
              <p class="card-text"><?=$row["text2"]?></p>
            </div>
          </div>
        </div>
		<?php
		}
        ?>
      </div>
    </article>
  </section>
  <!-- Contact -->
  <section id="contact" class="bg-dark text-white py-5">
    <header class="container text-center">
      <h2 class="text-info pb-3">Contact</h2>
    </header>
    <article class="container px-0">
		<?php
        $rows=$tb5->all("where sh = 1");

        foreach($rows as $row){
        ?>
      <p class="text-center"><?=$row["text"]?></p>
		<?php
		}
        ?>
    </article>

  </section>
  <!-- <section id="contact" class="bg-dark text-white py-5">
    <header class="container text-center">
      <h2 class="text-info pb-3">Contact</h2>
    </header>
    <article class="container py-5">
      <form class="row">
        <div class="form-group col-12 col-md-6">
          <label for="cid_name">訪客姓名</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="cid_name" placeholder="Full Name" name="formName" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <div class="form-check-inline custom-control custom-radio">
                  <input class="custom-control-input" type="radio" name="formSex" id="cid_man" value="boy">
                  <label class="custom-control-label" for="cid_man">先生</label>
                </div>
                <div class="form-check-inline custom-control custom-radio">
                  <input class="custom-control-input" type="radio" name="formSex" id="cid_woman" value="girl">
                  <label class="custom-control-label" for="cid_woman">女士</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group col-12 col-md-6">
          <label for="cid_tel">連絡電話</label>
          <div class="input-group mb-3">
            <input type="tel" class="form-control" id="cid_tel" placeholder="Phone Number" name="formTel" required>
          </div>
        </div>
        <div class="form-group col-12 col-md-6">
          <label for="cid_mail">電子信箱</label>
          <div class="input-group mb-3">
            <input type="email" class="form-control" id="cid_mail" placeholder="Email Address" name="formMail" required>
          </div>
        </div>
        <div class="form-group col-12 col-md-6">
          <label for="cid_que">問題類型</label>
          <select class="custom-select mb-3" id="cid_que" name="formQue">
            <option value="type1">type1</option>
            <option value="type2">type2</option>
            <option value="其他">其他</option>
          </select>
        </div>
        <div class="form-group col-12">
          <label for="cid_msg">問題類型</label>
          <textarea class="form-control" id="cid_msg" rows="3" name="message"
            placeholder="Write Your Message"></textarea>
        </div>
        <div class="form-group col-12 text-center">
          <small class="text-muted">請如實填寫便於信件回覆，我們保證不隨意公開您的留言資訊</small>
          <hr class="border-secondary">
          <button type="submit" class="btn btn-primary">確認送出</button>
        </div>
      </form>
    </article>
  </section> -->
  <!-- 頁尾區 -->
  <footer class="bg-dark text-muted text-center py-2" id="footer">
  <small>&copy; copyright <span class="text-warning">By Chia Yu Chen</span>. All rights reserved</small>
  <a href="index_back.php?do=login" target="_self" class="text-dark">
    <span class="material-icons">login</span>
  </a>
    <a href="#slider" class="btn btn-info position-fixed" id="top">
      <i class="fas fa-angle-double-up fa-2x"></i>
    </a>
  </footer>
</body>

</html>