<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        #main .pin{
            width: 225px;
            height: auto;
            padding: 15px 0px 0px 15px;
            float: left;
        }
        #main .pin .box{
            width: 205px;
            height: auto;
            background: #fff;
            box-shadow: 0px 0px 6px #ccc;
            border-radius: 5px;
        }
        #main .pin .box img{
            width: 205px;
        }
        .boxstyle{
                border-radius: 4px;
    -webkit-transition: .3s ease-in-out;
    -o-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    background: #fff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.3);
    box-sizing: border-box;
        }
    </style>
        <link href="css/style.css" rel="stylesheet" />

    <script type="text/javascript" src="js/waterfall.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
    <nav id="navcontent">
      <h1 id="navleft">
        <a id="logo-link" href="/">
          <svg class="behance-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 20 520 28.2" width="180" height="58"> <path class="fil0" d="M68 17c2,3 4,5 6,7l-5 4c-2,-4 -4,-6 -5,-8l4 -3zm34 10c-1,2 -1,4 -1,5 -3,0 -4,0 -6,0 -3,0 -4,-2 -4,-4l0 -5 -7 0c0,4 -2,8 -6,11l21 0 0 5c-2,3 -4,7 -7,9 3,2 6,3 10,3 -1,2 -2,4 -3,6 -4,-1 -8,-3 -12,-5 -3,3 -7,4 -12,5 -1,-1 -2,-3 -3,-5 4,-1 7,-2 10,-3 -2,-3 -4,-5 -6,-8l4 -2 -5 0 0 -5 3 0c-1,-1 -2,-3 -4,-4 3,-3 4,-5 4,-9l0 -3 18 0 0 7c0,1 1,2 1,2 1,0 3,0 5,0zm-15 18c2,-1 4,-4 6,-6l-12 0c2,2 4,5 6,6zm-12 -3c0,2 0,4 1,6 -4,3 -7,6 -8,8l-3 -4c0,-1 0,-2 1,-4l0 -12 -4 0 0 -5 9 0 0 15c1,-1 2,-3 4,-4z"/>
  <path id="1" class="fil0" d="M113 17c2,3 4,5 5,8l-5 3c-1,-3 -3,-5 -5,-8l5 -3zm6 12l11 0 0 -12 6 0 0 12 10 0 0 6 -10 0 0 22 -6 0 0 -22 -11 0 0 -6zm2 14c1,3 1,5 1,6 -5,4 -8,6 -10,8l-3 -4c1,-1 1,-2 1,-4l0 -13 -4 0 0 -5 10 0 0 16c1,-1 3,-2 5,-4z"/>
  <path id="2" class="fil0" d="M161 25l4 8c1,-3 2,-5 3,-8l3 1 2 -1 3 8c1,-3 2,-5 3,-8l5 2c-2,4 -3,8 -5,12l4 9 -4 2 -3 -6c-1,3 -3,6 -4,8 -1,0 -1,-1 -2,-1l-2 1 -3 -8c-2,3 -3,6 -5,9 -1,-1 -2,-2 -3,-3l0 7 -5 0 0 -38 37 0 0 31c0,2 0,4 -1,5 -1,1 -2,2 -4,2 -1,0 -4,0 -8,0 0,-2 0,-4 -1,-6 2,1 4,1 6,1 2,0 3,-1 3,-3l0 -25 -27 0 0 3 4 -2zm-4 3l0 19c2,-3 4,-6 5,-9 -1,-3 -3,-7 -5,-10zm14 4c-1,2 -2,4 -3,7l2 6c2,-2 3,-4 4,-7l-3 -6z"/>
  <polygon id="3" class="fil0" points="212,17 218,17 218,57 212,57 "/>
  <path id="4" class="fil0" d="M261 62l-7 0 0 -13 0 0c-2,2 -4,3 -7,3 -3,0 -5,-1 -7,-3 -2,-2 -3,-4 -3,-8 0,-4 1,-7 3,-9 2,-2 5,-3 8,-3 2,0 5,1 6,3l0 0 0 -3 7 0 0 33zm-7 -23c0,-1 0,-3 -1,-4 -1,-1 -2,-1 -4,-1 -1,0 -3,0 -3,2 -1,1 -2,3 -2,5 0,2 1,4 1,5 1,1 3,1 4,1 2,0 3,0 4,-1 1,-2 1,-3 1,-5l0 -2z"/>
  <path id="5" class="fil0" d="M291 62l-7 0 0 -13 0 0c-1,2 -4,3 -7,3 -3,0 -5,-1 -7,-3 -1,-2 -2,-4 -2,-8 0,-4 1,-7 3,-9 1,-2 4,-3 7,-3 3,0 5,1 6,3l0 0 0 -3 7 0 0 33zm-7 -23c0,-1 0,-3 -1,-4 -1,-1 -2,-1 -3,-1 -2,0 -3,0 -4,2 -1,1 -2,3 -2,5 0,2 1,4 2,5 1,1 2,1 3,1 2,0 3,0 4,-1 1,-2 1,-3 1,-5l0 -2z"/>
  <path id="6" class="fil0" d="M299 46c2,1 4,2 6,2 3,0 5,-1 5,-2 0,-1 -2,-2 -4,-3 -3,-1 -5,-2 -6,-3 -1,-1 -1,-2 -1,-4 0,-2 1,-4 2,-5 2,-2 5,-2 8,-2 2,0 4,0 6,1l0 5c-2,-1 -4,-2 -6,-2 -1,0 -2,0 -3,1 0,0 -1,1 -1,1 0,1 1,2 3,3 2,0 4,1 5,2 1,0 2,1 2,2 1,1 1,2 1,3 0,2 -1,4 -3,5 -2,2 -4,2 -7,2 -3,0 -5,0 -7,-1l0 -5z"/>
  <path id="7" class="fil0" d="M344 52l-7 0 0 -13c0,-4 -1,-5 -4,-5 -1,0 -2,0 -3,1 0,1 -1,2 -1,4l0 13 -6 0 0 -34 6 0 0 15 0 0c2,-3 4,-4 7,-4 5,0 8,3 8,9l0 14z"/>
  <path id="8" class="fil0" d="M372 42l-15 0c0,4 3,6 7,6 2,0 4,-1 6,-2l0 5c-2,1 -5,1 -8,1 -4,0 -6,-1 -8,-3 -2,-2 -3,-5 -3,-8 0,-4 1,-7 3,-9 2,-2 5,-3 8,-3 3,0 6,1 7,3 2,2 3,4 3,8l0 2zm-6 -4c0,-3 -1,-5 -4,-5 -1,0 -2,1 -3,2 -1,1 -2,2 -2,3l9 0z"/>
  <path id="9" class="fil0" d="M378 22c0,-1 1,-2 1,-3 1,0 2,0 3,0 1,0 2,0 3,1 1,0 1,1 1,2 0,1 0,2 -1,2 -1,1 -2,1 -3,1 -1,0 -2,0 -3,-1 0,0 -1,-1 -1,-2zm7 29c0,4 0,7 -2,9 -2,1 -4,2 -7,2 -1,0 -2,0 -3,0l0 -5c1,0 2,0 2,0 3,0 4,-1 4,-5l0 -23 6 0 0 22z"/>
  <path id="10" class="fil0" d="M393 22c0,-1 1,-2 1,-3 1,0 2,0 3,0 1,0 2,0 3,1 1,0 1,1 1,2 0,1 0,2 -1,2 -1,1 -2,1 -3,1 -1,0 -2,0 -3,-1 0,0 -1,-1 -1,-2zm1 30l0 -23 6 0 0 23 -6 0z"/>
  <path id="11" class="fil0" d="M408 49c0,-1 0,-2 1,-3 1,0 2,-1 3,-1 1,0 2,1 3,1 0,1 1,2 1,3 0,1 -1,2 -1,2 -1,1 -2,1 -3,1 -1,0 -2,0 -3,-1 -1,0 -1,-1 -1,-2z"/>
  <path id="12" class="fil0" d="M440 51c-1,1 -4,1 -7,1 -3,0 -6,-1 -8,-3 -2,-2 -3,-5 -3,-8 0,-4 1,-7 3,-9 3,-2 6,-3 10,-3 2,0 4,0 5,1l0 5c-1,-1 -3,-1 -5,-1 -2,0 -3,0 -5,2 -1,1 -1,3 -1,5 0,2 0,3 1,5 2,1 3,1 5,1 2,0 4,0 5,-1l0 5z"/>
  <path id="13" class="fil0" d="M446 41c0,-4 1,-7 3,-9 3,-2 6,-3 9,-3 4,0 7,1 9,3 2,2 3,5 3,8 0,4 -1,7 -3,9 -2,2 -5,3 -9,3 -4,0 -7,-1 -9,-3 -2,-2 -3,-5 -3,-8zm7 0c0,4 2,6 5,6 4,0 6,-2 6,-7 0,-4 -2,-6 -6,-6 -2,0 -3,0 -4,2 -1,1 -1,2 -1,5z"/>
  <path id="14" class="fil0" d="M513 52l-7 0 0 -13c0,-4 -1,-5 -4,-5 -1,0 -2,0 -2,1 -1,1 -2,3 -2,4l0 13 -6 0 0 -13c0,-4 -1,-5 -4,-5 -1,0 -2,0 -3,1 -1,1 -1,3 -1,4l0 13 -7 0 0 -23 7 0 0 4 0 0c1,-2 2,-3 3,-3 2,-1 3,-1 4,-1 4,0 6,1 7,4 2,-3 4,-4 7,-4 5,0 8,3 8,9l0 14z"/>
  <path class="fil1" d="M51 0l-6 4 -5 13 -5 0 -1 -4 1 0c2,0 3,-2 3,-4l0 -3 2 0 0 -6 -5 0 0 6 2 0 0 3c0,1 -1,2 -2,2l-2 0 -3 -5 3 -1 -9 -4 -2 7c0,-4 -4,-8 -9,-8 -4,0 -8,4 -8,8 0,3 2,6 4,7l0 2 -2 0 -1 0c0,3 0,5 0,8l-6 11 7 1 0 12 9 0 0 8 22 0 0 -12c7,-5 11,-12 11,-20l0 -4c0,-1 0,-2 -1,-4l0 0 -2 0 5 -10 0 -7zm-36 24c-1,0 -2,-1 -2,-3l-2 0c0,3 2,5 4,5 3,0 5,-2 5,-5l-2 0c0,2 -1,3 -3,3zm34 -19l-1 -1 1 0 0 1zm-5 12l-2 0 4 -11 2 1 -4 10zm-31 -8c0,0 0,0 0,-1 0,0 0,-1 0,-1 1,0 1,1 1,1 0,1 0,1 -1,1zm-6 -1c0,-3 3,-6 6,-6 4,0 7,3 7,6 0,3 -1,5 -3,6l-1 0 0 3 -2 0 0 -6c1,0 2,-1 2,-3 0,-1 -1,-2 -3,-2 -1,0 -2,1 -2,2 0,2 0,3 2,3l0 6 -2 0 0 -3 -1 0c-2,-1 -3,-3 -3,-6zm17 1l1 2c-2,0 -3,2 -3,4l0 2 -4 0 0 -2c2,-1 3,-3 4,-5l2 -1zm4 8l-4 0 0 -2c0,-1 0,-2 2,-2l0 0 0 0 2 4zm-3 -14l4 2 -1 0 3 6 -4 0 -2 -5 -1 1 1 -4zm8 14l-3 0 -2 -4 4 0 1 4zm4 -13l0 -2 1 0 0 2 -1 0z"/>
          </svg>
        </a>
      </h1>
      <div id="navright">演变某个栏目的提示信息</div>
      <div id="nav-primary-wrap">
        <ul id="navmiddle" class="nav-list">
          <li class="nav-item">
            <a class="nav-item-link " href="index.php">首页</a></li>
          <li class="nav-item">
            <a class="nav-item-link active" href="logo.php">LOGO案例</a></li>
          <li class="nav-item">
            <a class="nav-item-link" href="vi.php">VI案例</a></li>
          <li class="nav-item">
            <a class="nav-item-link" href="web.php">网站案例</a></li>
          <li class="nav-item">
            <a class="nav-item-link" href="video.php">视频案例</a></li>
        </ul>
      </div>
    </nav>
<div id="main" >

    <div class="pin">
        <div class="box">
            <div class="grid-item clearfix">
                          <div class="cover-img">
                            <a href="logo_page.php?id=22" class="cover-img-link">
                              <img src="images/202x158.jpg" width="202px" height="158px" alt="QUO" title="QUO" class="cover-img-el"></a>
                          </div>
                          <div class="cover-info-stats">
                            <div class="cover-info">
                              <div class="cover-name">
                                <a href="logo_page.php?id=22" class="projectName cover-name-link">这是上传略缩图的测试图片-edit</a></div>
                              <div class="cover-by-wrap">
                                <div class="cover-by-link text-ellipsis ">
                                  <span class="cover-by">
                                  <i class="fa fa-list-ul cover-stat-i"></i>
                                  </span>
                                  <a class="single-owner-link" href="/logo.php">
                                    <span class="js-mini-profile multiple-owner-display-name" data-id="70511">标志设计丨LOGO DESIGN</span></a>
                                </div>
                              </div>
                            </div>
                            <div class="cover-stat-fields-wrap">
                              <div class="cover-stat-wrap">
                                
                                <i class="fa fa-calendar cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-views beicons-pre beicons-pre-eye hide-phone">2017/04/24</span>
                                <i class="fa fa-eye cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-appreciations js-cover-stat-appreciations  beicons-pre beicons-pre-thumb " data-timestamp="1488597982">107</span>
                                <!-- .featured -->

                                <a href="logo_page.php?id=22">
                                <div class="featured tooltip--container">
                                <i class="fa fa-paper-plane cover-stat-i" style="padding-top: 7px;"></i>
                                </div></a>

                                </div>
                              <!-- .cover-stat-wrap -->
                              <div class="cover-fields">
                                <i class="fa fa-bookmark cover-stat-i"></i>
                                <a href="logo.php?cat=13" title="Digital Art" class="field-link">IT高科技公司及网站标志</a>

                                </div>
                              <!-- .cover-fields --></div>
                            <!-- .cover-info --></div>
                          <!-- #cover-stat-fields-wrap --></div>
        </div>
    </div>
    <div class="pin">
        <div class="box">
            <div class="grid-item clearfix">
                          <div class="cover-img">
                            <a href="logo_page.php?id=22" class="cover-img-link">
                              <img src="images/202x158.jpg" width="202px" height="158px" alt="QUO" title="QUO" class="cover-img-el"></a>
                          </div>
                          <div class="cover-info-stats">
                            <div class="cover-info">
                              <div class="cover-name">
                                <a href="logo_page.php?id=22" class="projectName cover-name-link">这是上传略缩图的测试图片-edit</a></div>
                              <div class="cover-by-wrap">
                                <div class="cover-by-link text-ellipsis ">
                                  <span class="cover-by">
                                  <i class="fa fa-list-ul cover-stat-i"></i>
                                  </span>
                                  <a class="single-owner-link" href="/logo.php">
                                    <span class="js-mini-profile multiple-owner-display-name" data-id="70511">标志设计丨LOGO DESIGN</span></a>
                                </div>
                              </div>
                            </div>
                            <div class="cover-stat-fields-wrap">
                              <div class="cover-stat-wrap">
                                
                                <i class="fa fa-calendar cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-views beicons-pre beicons-pre-eye hide-phone">2017/04/24</span>
                                <i class="fa fa-eye cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-appreciations js-cover-stat-appreciations  beicons-pre beicons-pre-thumb " data-timestamp="1488597982">107</span>
                                <!-- .featured -->

                                <a href="logo_page.php?id=22">
                                <div class="featured tooltip--container">
                                <i class="fa fa-paper-plane cover-stat-i" style="padding-top: 7px;"></i>
                                </div></a>

                                </div>
                              <!-- .cover-stat-wrap -->
                              <div class="cover-fields">
                                <i class="fa fa-bookmark cover-stat-i"></i>
                                <a href="logo.php?cat=13" title="Digital Art" class="field-link">IT高科技公司及网站标志</a>

                                </div>
                              <!-- .cover-fields --></div>
                            <!-- .cover-info --></div>
                          <!-- #cover-stat-fields-wrap --></div>
        </div>
    </div>
    <div class="pin">
        <div class="box">
            <div class="grid-item clearfix">
                          <div class="cover-img">
                            <a href="logo_page.php?id=22" class="cover-img-link">
                              <img src="images/202x158.jpg" width="202px" height="158px" alt="QUO" title="QUO" class="cover-img-el"></a>
                          </div>
                          <div class="cover-info-stats">
                            <div class="cover-info">
                              <div class="cover-name">
                                <a href="logo_page.php?id=22" class="projectName cover-name-link">这是上传略缩图的测试图片-edit</a></div>
                              <div class="cover-by-wrap">
                                <div class="cover-by-link text-ellipsis ">
                                  <span class="cover-by">
                                  <i class="fa fa-list-ul cover-stat-i"></i>
                                  </span>
                                  <a class="single-owner-link" href="/logo.php">
                                    <span class="js-mini-profile multiple-owner-display-name" data-id="70511">标志设计丨LOGO DESIGN</span></a>
                                </div>
                              </div>
                            </div>
                            <div class="cover-stat-fields-wrap">
                              <div class="cover-stat-wrap">
                                
                                <i class="fa fa-calendar cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-views beicons-pre beicons-pre-eye hide-phone">2017/04/24</span>
                                <i class="fa fa-eye cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-appreciations js-cover-stat-appreciations  beicons-pre beicons-pre-thumb " data-timestamp="1488597982">107</span>
                                <!-- .featured -->

                                <a href="logo_page.php?id=22">
                                <div class="featured tooltip--container">
                                <i class="fa fa-paper-plane cover-stat-i" style="padding-top: 7px;"></i>
                                </div></a>

                                </div>
                              <!-- .cover-stat-wrap -->
                              <div class="cover-fields">
                                <i class="fa fa-bookmark cover-stat-i"></i>
                                <a href="logo.php?cat=13" title="Digital Art" class="field-link">IT高科技公司及网站标志</a>

                                </div>
                              <!-- .cover-fields --></div>
                            <!-- .cover-info --></div>
                          <!-- #cover-stat-fields-wrap --></div>
        </div>
    </div>
    <div class="pin">
        <div class="box">
            <div class="grid-item clearfix">
                          <div class="cover-img">
                            <a href="logo_page.php?id=22" class="cover-img-link">
                              <img src="images/202x158.jpg" width="202px" height="158px" alt="QUO" title="QUO" class="cover-img-el"></a>
                          </div>
                          <div class="cover-info-stats">
                            <div class="cover-info">
                              <div class="cover-name">
                                <a href="logo_page.php?id=22" class="projectName cover-name-link">这是上传略缩图的测试图片-edit</a></div>
                              <div class="cover-by-wrap">
                                <div class="cover-by-link text-ellipsis ">
                                  <span class="cover-by">
                                  <i class="fa fa-list-ul cover-stat-i"></i>
                                  </span>
                                  <a class="single-owner-link" href="/logo.php">
                                    <span class="js-mini-profile multiple-owner-display-name" data-id="70511">标志设计丨LOGO DESIGN</span></a>
                                </div>
                              </div>
                            </div>
                            <div class="cover-stat-fields-wrap">
                              <div class="cover-stat-wrap">
                                
                                <i class="fa fa-calendar cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-views beicons-pre beicons-pre-eye hide-phone">2017/04/24</span>
                                <i class="fa fa-eye cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-appreciations js-cover-stat-appreciations  beicons-pre beicons-pre-thumb " data-timestamp="1488597982">107</span>
                                <!-- .featured -->

                                <a href="logo_page.php?id=22">
                                <div class="featured tooltip--container">
                                <i class="fa fa-paper-plane cover-stat-i" style="padding-top: 7px;"></i>
                                </div></a>

                                </div>
                              <!-- .cover-stat-wrap -->
                              <div class="cover-fields">
                                <i class="fa fa-bookmark cover-stat-i"></i>
                                <a href="logo.php?cat=13" title="Digital Art" class="field-link">IT高科技公司及网站标志</a>

                                </div>
                              <!-- .cover-fields --></div>
                            <!-- .cover-info --></div>
                          <!-- #cover-stat-fields-wrap --></div>
        </div>
    </div>
    <div class="pin">
        <div class="box">
            <div class="grid-item clearfix">
                          <div class="cover-img">
                            <a href="logo_page.php?id=22" class="cover-img-link">
                              <img src="images/202x158.jpg" width="202px" height="158px" alt="QUO" title="QUO" class="cover-img-el"></a>
                          </div>
                          <div class="cover-info-stats">
                            <div class="cover-info">
                              <div class="cover-name">
                                <a href="logo_page.php?id=22" class="projectName cover-name-link">这是上传略缩图的测试图片-edit</a></div>
                              <div class="cover-by-wrap">
                                <div class="cover-by-link text-ellipsis ">
                                  <span class="cover-by">
                                  <i class="fa fa-list-ul cover-stat-i"></i>
                                  </span>
                                  <a class="single-owner-link" href="/logo.php">
                                    <span class="js-mini-profile multiple-owner-display-name" data-id="70511">标志设计丨LOGO DESIGN</span></a>
                                </div>
                              </div>
                            </div>
                            <div class="cover-stat-fields-wrap">
                              <div class="cover-stat-wrap">
                                
                                <i class="fa fa-calendar cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-views beicons-pre beicons-pre-eye hide-phone">2017/04/24</span>
                                <i class="fa fa-eye cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-appreciations js-cover-stat-appreciations  beicons-pre beicons-pre-thumb " data-timestamp="1488597982">107</span>
                                <!-- .featured -->

                                <a href="logo_page.php?id=22">
                                <div class="featured tooltip--container">
                                <i class="fa fa-paper-plane cover-stat-i" style="padding-top: 7px;"></i>
                                </div></a>

                                </div>
                              <!-- .cover-stat-wrap -->
                              <div class="cover-fields">
                                <i class="fa fa-bookmark cover-stat-i"></i>
                                <a href="logo.php?cat=13" title="Digital Art" class="field-link">IT高科技公司及网站标志</a>

                                </div>
                              <!-- .cover-fields --></div>
                            <!-- .cover-info --></div>
                          <!-- #cover-stat-fields-wrap --></div>
        </div>
    </div>
    <div class="pin">
        <div class="box">
            <div class="grid-item clearfix">
                          <div class="cover-img">
                            <a href="logo_page.php?id=22" class="cover-img-link">
                              <img src="images/202x158.jpg" width="202px" height="158px" alt="QUO" title="QUO" class="cover-img-el"></a>
                          </div>
                          <div class="cover-info-stats">
                            <div class="cover-info">
                              <div class="cover-name">
                                <a href="logo_page.php?id=22" class="projectName cover-name-link">这是上传略缩图的测试图片-edit</a></div>
                              <div class="cover-by-wrap">
                                <div class="cover-by-link text-ellipsis ">
                                  <span class="cover-by">
                                  <i class="fa fa-list-ul cover-stat-i"></i>
                                  </span>
                                  <a class="single-owner-link" href="/logo.php">
                                    <span class="js-mini-profile multiple-owner-display-name" data-id="70511">标志设计丨LOGO DESIGN</span></a>
                                </div>
                              </div>
                            </div>
                            <div class="cover-stat-fields-wrap">
                              <div class="cover-stat-wrap">
                                
                                <i class="fa fa-calendar cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-views beicons-pre beicons-pre-eye hide-phone">2017/04/24</span>
                                <i class="fa fa-eye cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-appreciations js-cover-stat-appreciations  beicons-pre beicons-pre-thumb " data-timestamp="1488597982">107</span>
                                <!-- .featured -->

                                <a href="logo_page.php?id=22">
                                <div class="featured tooltip--container">
                                <i class="fa fa-paper-plane cover-stat-i" style="padding-top: 7px;"></i>
                                </div></a>

                                </div>
                              <!-- .cover-stat-wrap -->
                              <div class="cover-fields">
                                <i class="fa fa-bookmark cover-stat-i"></i>
                                <a href="logo.php?cat=13" title="Digital Art" class="field-link">IT高科技公司及网站标志</a>

                                </div>
                              <!-- .cover-fields --></div>
                            <!-- .cover-info --></div>
                          <!-- #cover-stat-fields-wrap --></div>
        </div>
    </div>
    <div class="pin">
        <div class="box">
            <div class="grid-item clearfix">
                          <div class="cover-img">
                            <a href="logo_page.php?id=22" class="cover-img-link">
                              <img src="images/202x158.jpg" width="202px" height="158px" alt="QUO" title="QUO" class="cover-img-el"></a>
                          </div>
                          <div class="cover-info-stats">
                            <div class="cover-info">
                              <div class="cover-name">
                                <a href="logo_page.php?id=22" class="projectName cover-name-link">这是上传略缩图的测试图片-edit</a></div>
                              <div class="cover-by-wrap">
                                <div class="cover-by-link text-ellipsis ">
                                  <span class="cover-by">
                                  <i class="fa fa-list-ul cover-stat-i"></i>
                                  </span>
                                  <a class="single-owner-link" href="/logo.php">
                                    <span class="js-mini-profile multiple-owner-display-name" data-id="70511">标志设计丨LOGO DESIGN</span></a>
                                </div>
                              </div>
                            </div>
                            <div class="cover-stat-fields-wrap">
                              <div class="cover-stat-wrap">
                                
                                <i class="fa fa-calendar cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-views beicons-pre beicons-pre-eye hide-phone">2017/04/24</span>
                                <i class="fa fa-eye cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-appreciations js-cover-stat-appreciations  beicons-pre beicons-pre-thumb " data-timestamp="1488597982">107</span>
                                <!-- .featured -->

                                <a href="logo_page.php?id=22">
                                <div class="featured tooltip--container">
                                <i class="fa fa-paper-plane cover-stat-i" style="padding-top: 7px;"></i>
                                </div></a>

                                </div>
                              <!-- .cover-stat-wrap -->
                              <div class="cover-fields">
                                <i class="fa fa-bookmark cover-stat-i"></i>
                                <a href="logo.php?cat=13" title="Digital Art" class="field-link">IT高科技公司及网站标志</a>

                                </div>
                              <!-- .cover-fields --></div>
                            <!-- .cover-info --></div>
                          <!-- #cover-stat-fields-wrap --></div>
        </div>
    </div>
    <div class="pin">
        <div class="box">
            <div class="grid-item clearfix">
                          <div class="cover-img">
                            <a href="logo_page.php?id=22" class="cover-img-link">
                              <img src="images/202x158.jpg" width="202px" height="158px" alt="QUO" title="QUO" class="cover-img-el"></a>
                          </div>
                          <div class="cover-info-stats">
                            <div class="cover-info">
                              <div class="cover-name">
                                <a href="logo_page.php?id=22" class="projectName cover-name-link">这是上传略缩图的测试图片-edit</a></div>
                              <div class="cover-by-wrap">
                                <div class="cover-by-link text-ellipsis ">
                                  <span class="cover-by">
                                  <i class="fa fa-list-ul cover-stat-i"></i>
                                  </span>
                                  <a class="single-owner-link" href="/logo.php">
                                    <span class="js-mini-profile multiple-owner-display-name" data-id="70511">标志设计丨LOGO DESIGN</span></a>
                                </div>
                              </div>
                            </div>
                            <div class="cover-stat-fields-wrap">
                              <div class="cover-stat-wrap">
                                
                                <i class="fa fa-calendar cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-views beicons-pre beicons-pre-eye hide-phone">2017/04/24</span>
                                <i class="fa fa-eye cover-stat-i"></i>
                                  <span class="cover-stat cover-stat-appreciations js-cover-stat-appreciations  beicons-pre beicons-pre-thumb " data-timestamp="1488597982">107</span>
                                <!-- .featured -->

                                <a href="logo_page.php?id=22">
                                <div class="featured tooltip--container">
                                <i class="fa fa-paper-plane cover-stat-i" style="padding-top: 7px;"></i>
                                </div></a>

                                </div>
                              <!-- .cover-stat-wrap -->
                              <div class="cover-fields">
                                <i class="fa fa-bookmark cover-stat-i"></i>
                                <a href="logo.php?cat=13" title="Digital Art" class="field-link">IT高科技公司及网站标志</a>

                                </div>
                              <!-- .cover-fields --></div>
                            <!-- .cover-info --></div>
                          <!-- #cover-stat-fields-wrap --></div>
        </div>
    </div>
    



</div>
</body>
</html>