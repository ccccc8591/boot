<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid mr--1">
                  <!--<h1 class="jumbotron jumbotron-fluid">徐春塏 <small>網站</small></h1>-->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                              <a class="navbar-brand" href="#">
                                <img src="/images/d.jpg" class="rounded-circle" alt="logo" style="width:30px;">
                              </a>
                              <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="xa.html">自介</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">經歷</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">作品</a>
                                    </li>
                             </ul>
                              <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                  <a class="nav-link" href="shop.php">購物車</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="regist.html">註冊</a>
                                </li>
                            <?php
                                if($_SESSION['a']==1){
                            ?>
                                 <li class="nav-item">
                                  <a class="nav-link" href="logout.php">登出</a>
                                </li>
                            <?php
                                }else{
                            ?>
                                  <li class="nav-item">
                                  <a class="nav-link" href="login.html">登入</a>
                                  </li>                         
                            <?php
                            }
                            ?>
                                <!--<li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Dropdown link
                                      </a>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a>
                                        <a class="dropdown-item" href="#">Link 2</a>
                                        <a class="dropdown-item" href="#">Link 3</a>
                                      </div>
                                </li>-->
                            </ul>
    </nav>
            <div class="row">
                          <div id="demo" class="col-9 carousel slide" data-ride="carousel">

                                      <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                      </ul>

                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img src="https://s14608.pcdn.co/wp-content/uploads/2018/04/%E4%BA%9E%E9%A6%AC%E9%81%9C%E6%94%AF%E6%8F%B4%E8%B7%A8%E5%A2%83%E8%B3%BC%E7%89%A9%E4%BA%86-1024x480.png" alt="Los Angeles" width="1000" height="500">
                                              <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>We had such a great time in LA!</p>
                                              </div>   
                                        </div>
                                        <div class="carousel-item">
                                          <img src="https://www.christchurchnz.com/media/8393/infinite_definite.jpg?anchor=center&mode=crop&width=800&heightratio=0.6030534351145038&rnd=131880469620000000" alt="Chicago" width="1000" height="500">
                                              <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>We had such a great time in LA!</p>
                                              </div>
                                        </div>
                                        <div class="carousel-item">
                                          <img src="https://afndaily.com/wp-content/uploads/2019/11/Screen-Shot-2019-11-09-at-9.39.12-pm.png" alt="New York" width="1000" height="500">
                                              <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>We had such a great time in LA!</p>
                                              </div>
                                        </div>
                                      </div>

                                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                      </a>
                                      <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                      </a>
                        </div>
                        <div class="col-3">
                            <div class="my-5 col-6">
                                <img src="https://web-eshop.cdn.hinet.net/Event/1111/images/kv-topic-head.png" class="" alt="logo" style="width:300px">
                            </div>
                            <div class="mt-5 col-6">
                                <img src="https://shoplineimg.com/571db441e37ec6e535000062/577613976170691127440100/800x.jpg?" class="" alt="logo" style="width:300px">
                            </div>

                        </div>
    </div>
            <div class="row my-5">
                        <div class="col-4" style="text-align:center">
                            <img src="images/a.jpg" class="rounded-circle" alt="風景" style="width: 100px; height: 80px;">
                        </div>
                        <div class="col-4" style="text-align:center">
                            <img src="images/b.jpg" class="rounded-circle" alt="風景" style="width: 100px; height: 80px;">
                        </div>
                        <div class="col-4" style="text-align:center">
                            <img src="images/b.jpg" class="rounded-circle" alt="風景" style="width: 100px; height: 80px;">
                        </div>
    </div>
            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#a">水果</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#b">家電</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#c">日用品</a>
                    </li>
                  </ul>
                <div class="tab-content">
                    <div id="a" class="tab-pane active"><br>
                        <div class="row">
                            <div class="card col-3" style="width:100px;">
                                <img class="card-img-top" src="http://cw1.tw/CW/images/article/C1450575209114.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <form method="get" action="aa.php">
                                        <p id="id">1</p>
                                         <h4 class="card-title" id="pname">蘋果</h4>
                                         <p class="card-text">醫生遠離你</p>
                                         <a href="aa.php" class="btn btn-dark">加入購物車</a>
                                    </form>
                                    
                                 </div>
                            </div>
                            <div class="card col-3" style="width:200px;">
                                <img class="card-img-top" src="https://doqvf81n9htmm.cloudfront.net/data/crop_article/90750/shutterstock_518328943%20(1).jpg_1140x855.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title">香蕉</h4>
                                     <p class="card-text">好吃</p>
                                     <a href="/lin.html" class="btn btn-dark">加入購物車</a>
                                 </div>
                            </div>
                            <div class="card col-3" style="width:200px;">
                                <img class="card-img-top" src="http://matchbin-assets.s3.amazonaws.com/public/sites/261/assets/13853641571502201311242320473_06086.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title">芭樂</h4>
                                     <p class="card-text">牛奶口味</p>
                                     <a href="/lin.html" class="btn btn-dark">加入購物車</a>
                                 </div>
                            </div>
                            <div class="card col-3" style="width:200px;">
                                <img class="card-img-top" src="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D480/sign=ab3e45a8bda1cd1105b673288910c8b0/d043ad4bd11373f0d1e0ce07a30f4bfbfaed044e.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title">草莓</h4>
                                     <p class="card-text">大溪來ㄉ</p>
                                     <a href="/lin.html" class="btn btn-dark">加入購物車</a>
                                 </div>
                            </div>
                        </div>
                        
                    </div>
                    <div id="b" class="tab-pane fade">
                            <div class="card" style="width:200px;">
                                <img class="card-img-top" src="/images/d.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title">徐春塏</h4>
                                    <p class="card-text">engineer</p>
                                    <a href="/lin.html" class="btn btn-dark">查看個人資料</a>
                                </div>
                            </div>
                    </div>
                    <div id="c" class="tab-pane fade">
                            <div class="card" style="width:200px;">
                                <img class="card-img-top" src="/images/d.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title">徐春塏</h4>
                                    <p class="card-text">engineer</p>
                                    <a href="/lin.html" class="btn btn-dark">查看個人資料</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>



        </div>
    </body>
</html>
