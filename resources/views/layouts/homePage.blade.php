<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  {{ Html::style('style/css/bootstrap.min.css') }}
  {{ Html::style('style/css/style.css') }}
  {{ Html::style('style/css/animations.css') }}
  {{ Html::style('style/font-awesome/css/font-awesome.min.css') }}
  {{ Html::style('style/css/swiper.min.css') }}
</head>
<body>
  <div class="container-fluid">
    <header>
      <div class="row  d-md-none d-lg-none d-sm-block">
        <div class="col-sm-3 right">
          <a class="search-toggle  "><i class="fa fa-search"></i></a>
          <form action="" method="get" id="searchform" class="searchform d-none">
            <fieldset>
              <span class="text"><input name="s" id="s" type="text" value="" placeholder="بحث…" autocomplete="off"></span>
              <span class="button-wrap"><button class="btn btn-special" title="بحث" type="submit"><i class="fa fa-search"></i></button></span>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="row topbar d-none d-md-flex d-lg-flex">
        <div class="col-md-4  col-sm-3 right">
          <div class="links">
            <a href="" target="_blank">الوظائف </a>
            <a href="#" target="_blank"> | خريطة الموقع   </a>
            <a href="" target="_blank"> |  English  </a>
          </div>
        </div>
        <div class="col-4"></div>
        <div class="col-md-4  col-sm-3 left">
          <form action="" method="get" class="searchform ">
            <fieldset>
              <span class="text"><input name="s" id="s" type="text" value="" placeholder="بحث…" autocomplete="off"></span>
              <span class="button-wrap"><button class="btn btn-special" title="بحث" type="submit"><i class="fa fa-search"></i></button></span>
            </fieldset>
          </form>
          <div class="share-links">
            <a target="_blank" rel="nofollow" class="share-facebook" href="" title="Facebook"></a>
            <a target="_blank" rel="nofollow" class="share-youtube" href="" title="Youtube"></a>
            <a target="_blank" rel="nofollow" class="share-linkedin" href="" title="LinkedIn"></a>
          </div>
        </div>
      </div>
      <div class="row padd">
        <div class="col-md-3 col-sm-12" style="text-align:center">
          <a href="http://www.cpas-egypt.com/" title="CPAS - CENTER OF PLANNING &amp; ARCHITECTURAL STUDIES" rel="home" >
            <img class="img-responsive standard-logo" src="//www.cpas-egypt.com/web/wp-content/uploads/2016/11/f-logo.png" alt="CPAS">
          </a>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="header-left justify-content-sm-center">
            <p style="text-align:center;color:#0a2544;font-weight:bold;font-size:17px;">مركز الدراسات التخطيطية والمعمارية</p>
            <p style="text-align:center;color:#0a2544;font-weight:bold;font-size:16px;">أ.د / عبد الباقي إبراهيم وشركاه</p>
            <p style="text-align:center;color:#0a2544;font-weight:bold;font-size:16px;">بيت الخبرة في الهندسة الإستشارية</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 justify-content-sm-center">
          <p style="text-align:center;color:#fe7200;font-weight:bold;font-size:19px;">قيم ..</p>
          <p style="text-align:center;color:#d8670a;font-weight:bold;font-size:19px;">تراث ..</p>
          <p style="text-align:center;color:#b1560b;font-weight:bold;font-size:19px;">معاصرة ..</p>
        </div>
      </div>
    </header>
  </div>
  <nav class="navbar navbar-toggleable-md  navbar-expand-sm navbar-light  sticky-top  bg-faded">
    <div class="fluid-container nav">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">عن المركز</a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <li  class="dropdown-item">
                <a  class="dropdown-toggle"  data-toggle="dropdown"  href="#">المؤسسون</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="#"> أ.د/ عبـد البـاقى محمد إبراهيـم</a></li>
                  <li class="dropdown-item" ><a href="#"> أ.د/ حازم محمد إبراهيم</a></li>
                </ul>
              </li>
              <li class="dropdown-item" ><a   href="#">رئيس المركز</a></li>
              <li class="dropdown-item" ><a  href="#">تعريف المركز</a></li>
              <li class="dropdown-item" ><a  href="#">شهادات الخبرة</a></li>
              <li class="dropdown-item" ><a  href="#">الهيكل التنظيمي</a></li>
              <li class="dropdown-item" ><a  href="#">قيادات المركز الفنية</a></li>
              <li class="dropdown-item" ><a  href="#">الإستشاريون المتعاونون</a></li>
              <li class="dropdown-item" ><a  href="#">جهات تتعامل مع المركز</a></li>
              <li class="dropdown-item" ><a  href="#">ماكتب عن المركز</a></li>
              <li class="dropdown-item" ><a  href="#">لوحة جدارية عن المركز</a></li>
              <li class="dropdown-item" ><a  href="#">أخبار المركز</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">نطاق الخدمات</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-item" > <a  href="#">التصميم المعماري و التخطيط العمرانى </a></li>
              <li class="dropdown-item" > <a  href="#"> الدراسات الاستثمارية</a></li>
              <li class="dropdown-item" > <a  href="#"> دراسات تقييم الأصول و الشركات </a></li>
              <li class="dropdown-item" > <a  href="#">التحكيم و فض المنازعات</a></li>
              <li class="dropdown-item" > <a  href="#">دراسات تقييم الأثر البيئي</a></li>
              <li class="dropdown-item" > <a  href="#">الأنظمة الحديثة لإنتظار السيارات </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">مشروعات المركز</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-item" >   <a  href="#">مشروعات التخطيط العمراني</a></li>
              <li class="dropdown-item" >   <a  href="#">المبانى العامة و الإدارية </a></li>
              <li class="dropdown-item" >   <a  href="#">البنوك و المركز التجارية</a></li>
              <li class="dropdown-item" >   <a  href="#">المبانى السكنية متعددة الأغراض</a></li>
              <li class="dropdown-item" >   <a  href="#">القرى السياحية و الفنادق </a></li>
              <li class="dropdown-item" >   <a  href="#">المشروعات التعليمية والثقافية</a></li>
              <li class="dropdown-item" >   <a  href="#">المشروعات الصحية و الطبية</a></li>
              <li class="dropdown-item" >   <a  href="#">المبانى الدينية </a></li>
              <li class="dropdown-item" >   <a  href="#">المتاحف و المعارض</a></li>
              <li class="dropdown-item" >   <a  href="#">المنشآت الرياضية والترفيهية</a></li>
              <li class="dropdown-item" >   <a  href="#">المبانى الشرطية و الأمنية </a></li>
              <li class="dropdown-item" >   <a  href="#">المشروعات الصناعية</a></li>
              <li class="dropdown-item" >   <a  href="#">مشروعات البنية الأساسية</a></li>
              <li class="dropdown-item" >   <a  href="#">مشروعات التصميم الداخلى</a></li>
              <li class="dropdown-item" >   <a  href="#">فنون تشكيلية</a></li>
              <li class="dropdown-item" >   <a  href="#">ألبوم صور المشروعات</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              الدورات التدريبية
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-item"><a  href="#">تعريف وحدة التدريب</a></li>
              <li class="dropdown-item"><a  href="#">دورات هندسية متخصصة</a></li>
              <li class="dropdown-item"><a  href="#">دورات الكمبيوتر</a></li>
              <li class="dropdown-item"><a  href="#">مواعيد الدورات </a></li>
              <li class="dropdown-item"><a  href="#">أخبــــار وحدة التدريــــب</a></li>
              <li class="dropdown-item"><a  href="#">إستمارة الدورات التدريبية</a></li>
              <li class="dropdown-item"><a  href="#">ممثلونا فى مجال التدريب فى الوطن العربى </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              الأنشطة الثقافية
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-item"><a href="#">مكتبة المركز</a></li>
              <li class="dropdown-item">
                <a  href="#" class="dropdown-toggle"  data-toggle="dropdown"> مجلة عالم البناء</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="#">فهرس الموضوعات التى نشرت فى المجلة</a></li>
                  <li class="dropdown-item" ><a href="#"> تحميل أعداد مجلة عالم البناء</a></li>
                </ul>
              </li>
              <li class="dropdown-item"><a  href="#">الندوات و الأمسيات الثقافية </a></li>
              <li class="dropdown-item"><a  href="#">كتب و إصدارات المركز</a></li>
              <li class="dropdown-item">
                <a  href="#" class="dropdown-toggle"  data-toggle="dropdown"> إصدارات الغير</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="#">منظمة العواصم والمدن الإسلامية</a></li>
                  <li class="dropdown-item"><a href="#">المهندس / محمود زين العابدين</a></li>
                  <li class="dropdown-item"><a href="#">المهندس / حسين جمعة </a></li>
                  <li class="dropdown-item"><a href="#">الدكتور / صالح الهذلول</a></li>
                  <li class="dropdown-item"><a href="#">الدكتور / هشام أبو سعدة</a></li>
                  <li class="dropdown-item"><a href="#">إصدارات أخرى </a></li>
                </ul>
              </li>
              <li class="dropdown-item"><a  href="#">نشر الإنتاج العلمى المعماري و المدنى</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              أخبار المركز
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-item"><a href="#">أخبار المركز </a></li>
              <li class="dropdown-item"><a href="#">أخبار وحدة التدريب </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              وظائف شاغرة
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-item"><a  href="#">وظائف شاغرة حاليا  </a></li>
              <li class="dropdown-item"><a  href="#">إستمارة توظيف </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              مواقع صديقة
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              اتصل بنا
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="http://www.cpas-egypt.com/web/wp-content/uploads/2017/07/5-2017.jpg" alt="First slide">
        <div class="carousel-caption" >
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>

      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="http://www.cpas-egypt.com/web/wp-content/uploads/2017/07/5-2017.jpg" alt="Second slide">
        <div class="carousel-caption " >
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>

      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="http://www.cpas-egypt.com/web/wp-content/uploads/2017/07/5-2017.jpg" alt="Third slide">
        <div class="carousel-caption " >
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container-fluid">
    <div class="row mt-5">
      <div class="col-md-3">
        <div class="col-md-12">
          <span class="thumb-info-ribbon thumb-info-ribbon-tertiary green"><span>Scientific Publications</span></span>
        </div>
        <div class="cart-custom card">
          <div class="card-block card-img">
            <span class="thumb-info-wrapper">
              <span data-image="images/3rd-intro.jpg" class="thumb-info-image" style="background-image: url(images/3rd-intro.jpg);"></span>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="col-md-12">
          <!--books alam bnaa  magazine http://www.cpas-egypt.com/AR/Baki_Books_ar.htm-->
          <span class="thumb-info-ribbon thumb-info-ribbon-tertiary grey"><span>CPAS Publications</span></span>
        </div>
        <div class="cart-custom  card">
          <div class="card-block card-img align-middle">
            <span class="thumb-info-wrapper">
              <span data-image="images/2nd-intro.jpg" class="thumb-info-image" style="background-image: url(images/2nd-intro.jpg);"></span>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="col-md-12">
          <span class="thumb-info-ribbon thumb-info-ribbon-tertiary red"><span>CPAS Training Courses</span></span>
        </div>
        <div class="cart-custom  card">
          <div class="card-block card-img">
            <span class="thumb-info-wrapper">
              <span data-image="images/1st-intro.jpg" class="thumb-info-image" style="background-image: url(images/1st-intro.jpg);"></span>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="col-md-12">
          <span class="thumb-info-ribbon thumb-info-ribbon-tertiary blue"><span>CPAS Profile</span></span>
        </div>
        <div class="cart-custom  card">
          <div class="card-block card-img">
            <span class="thumb-info-wrapper">
              <span data-image="images/rrtt.jpg" class="thumb-info-image" style="background-image: url(images/rrtt.jpg);"></span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5 founder justify-content-center">
      <!-- Swiper -->
      <div  class="container">
        <div class="row animatedParent">
          <div class="col-3 animated fadeInRight">
            <div class="swiper-container ">
              <div class="swiper-wrapper ">
                <div class="swiper-slide">
                  <div class="card card-marg">
                    <div class="card-block card-img ">
                      <img src='images/scan0029.jpg' alt="" />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card card-marg">
                    <div class="card-block card-img ">
                      <img src='images/baki22-250x300.jpg' alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-7 animated fadeInLeft text pt-5">
            <h2>الأستاذ الدكتور/ عبـد البـاقى محمد إبراهيـم</h2>
            <p> مؤسس مركز الدراسات التخطيطية و المعمارية</p>
            مؤسس مركـز الدراسـات التخطيطيـة والمعمـاريـة ورئيس مجلس ادارته
            -
            مؤسس مجلة "عالم البناء" المعمارية الشهرية ورئيس مجلس ادارتها حتى 1997
            -
            مؤسس جمعية إحياء التراث التخطيطى والمعمارى ورئيس مجلس ادارته
            -
            مؤسس الجـمعية المـركزية لإيواء المحتاجين بالقـاهرة ورئيس مجلس ادارتها
          </div>
        </div>
      </div>
    </div>
    <!-- Second-->
    <div class="row mt-5 founder justify-content-center">
      <!-- Swiper -->
      <div  class="container">
        <div class="row animatedParent">
          <div class="col-3 animated fadeInRight">
            <div class="swiper-container ">
              <div class="swiper-wrapper ">
                <div class="swiper-slide">
                  <div class="card card-marg">
                    <div class="card-block card-img ">
                      <img src='images/intro6-250x300.jpg' alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-7 animated fadeInLeft text pt-5">
            <h2>  الأستاذ ا لدكتور/ حازم محمد إبراهيم </h2>
            <p> مـؤسـس </p>
            مؤسس مركـز الدراسـات التخطيطيـة والمعمـاريـة ورئيس مجلس ادارته
            -
            مؤسس مجلة "عالم البناء" المعمارية الشهرية ورئيس مجلس ادارتها حتى 1997
            -
            مؤسس جمعية إحياء التراث التخطيطى والمعمارى ورئيس مجلس ادارته
            -
            مؤسس الجـمعية المـركزية لإيواء المحتاجين بالقـاهرة ورئيس مجلس ادارتها
          </div>
        </div>
      </div>
      <!-- Swiper JS -->

    </div>
  </div>
  <footer class="mt-5"></footer>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <!-- Initialize Swiper -->
  {{ Html::script('style/js/jquery-3.1.1.slim.min.js') }}
  {{ Html::script('style/js/tether.min.js') }}
  {{ Html::script('style/js/bootstrap.min.js') }}
  {{ Html::script('style/js/popper.min.js') }}
  {{ Html::script('style/js/swiper.min.js') }}
  {{ Html::script('style/js/css3-animate-it.js') }}
  <script>
  $( document ).ready( function () {
    $('body').on('mouseenter mouseleave','.dropdown',function(e){
    var _d=$(e.target).closest('.dropdown');_d.addClass('show');
    setTimeout(function(){
      _d[_d.is(':hover')?'addClass':'removeClass']('show');
    },100);
  });

  } );

  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    effect: 'fade',
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  </script>
</body>
</html>
