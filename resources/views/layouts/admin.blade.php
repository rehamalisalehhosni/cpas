<!doctype html>
<html lang="en">
<head>
  <title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- CSS -->
  {{ Html::style('css/bootstrap.min.css') }}
  {{ Html::style('css/vendor/icon-sets.css') }}
  {{ Html::style('css/main.min.css') }}
  {{ Html::style('style/font-awesome/css/font-awesome.min.css') }}

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  {{ Html::style('css/demo.css') }}
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('img/favicon.ico')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{url('img/favicon.ico')}}">
</head>
<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- SIDEBAR -->
    <div class="sidebar">
      <div class="brand">
        <a href="index.html"><img src="{{url('img/f-logo.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
      </div>
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="{{ url('/home') }}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('users.index') }}" class=""><i class="lnr lnr-users"></i> <span>Users</span></a></li>
            <li><a href="{{ route('roles.index') }}" class=""><i class="lnr lnr-chart-bars"></i> <span>Roles</span></a></li>
            <li><a href="{{ route('news.index') }}" class=""><i class="lnr lnr-cog"></i> <span>News</span></a></li>
            <li><a href="{{ route('projectCategory.index') }}" class=""><i class="lnr lnr-cog"></i> <span>project Category</span></a></li>
            <li><a href="{{ route('projects.index') }}" class=""><i class="lnr lnr-cog"></i> <span>Projects</span></a></li>
            <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
            <li>
              <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                  <li><a href="page-profile.html" class="">Profile</a></li>
                  <li><a href="page-login.html" class="">Login</a></li>
                  <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                </ul>
              </div>
            </li>
            <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
            <li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
            <li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
          </ul>
        </nav>
      </div>
      <a class="footer" href="http://twitter.com/share?url=https://goo.gl/1dt1MR&amp;text=So cool! Free Bootstrap dashboard template by @thedevelovers. Download at&amp;hashtags=free,bootstrap,dashboard" title="Twitter share" target="_blank"><i class="fa fa-twitter"></i> <span>SHARE THIS FREEBIE</span></a>
    </div>
    <!-- END SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- NAVBAR -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
          </div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
              <span class="sr-only">Toggle Navigation</span>
              <i class="fa fa-bars icon-nav"></i>
            </button>
          </div>
          <div id="navbar-menu" class="navbar-collapse collapse">
            <form class="navbar-form navbar-left hidden-xs">
              <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                  <i class="lnr lnr-alarm"></i>
                  <span class="badge bg-danger">5</span>
                </a>
                <ul class="dropdown-menu notifications">
                  <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
                  <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
                  <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
                  <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                  <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
                  <li><a href="#" class="more">See all notifications</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Basic Use</a></li>
                  <li><a href="#">Working With Data</a></li>
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Troubleshooting</a></li>
                </ul>
              </li>
              <li class="dropdown">
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{url('/img/user.png')}}" class="img-circle" alt="Avatar"> <span>  {{ Auth::user()->name }} </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                  <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                  <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                  <li><a href="{{ url('/logout') }}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                </ul>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- END NAVBAR -->
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          @yield('content')
        </div>
        <!-- END MAIN CONTENT -->
        <footer>
          <div class="container-fluid">
            <p class="copyright">&copy; 2016. Designed &amp; Crafted by <a href="https://themeineed.com">The Develovers</a></p>
          </div>
        </footer>
      </div>
      <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    {{ Html::script('js/jquery/jquery-2.1.0.min.js') }}
    {{ Html::script('js/bootstrap/bootstrap.min.js') }}
    {{ Html::script('js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
    {{ Html::script('js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}
    {{ Html::script('js/plugins/chartist/chartist.min.js') }}
    {{ Html::script('js/klorofil.min.js') }}
    {{ Html::script('tinymce/tinymce.min.js') }}
<!--    {{ Html::script('tinymce/tinymce_config.js') }}
-->
<script>
tinymce.init({
  selector: "textarea.tinymce",
  height: 200,
  plugins: [
    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
    "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
  ],
  images_upload_url: '{{ route('uploadImage.store') }}',
  images_upload_credentials: true,
  images_reuse_filename: true,
  automatic_uploads: true,

  toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
  toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
  toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | visualchars visualblocks nonbreaking template pagebreak restoredraft",
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'],
  menubar: false,
  toolbar_items_size: 'small',
  relative_urls: false,

  style_formats: [{
    title: 'Bold text',
    inline: 'b'
  }, {
    title: 'Red text',
    inline: 'span',
    styles: {
      color: '#ff0000'
    }
  }, {
    title: 'Red header',
    block: 'h1',
    styles: {
      color: '#ff0000'
    }
  }, {
    title: 'Example 1',
    inline: 'span',
    classes: 'example1'
  }, {
    title: 'Example 2',
    inline: 'span',
    classes: 'example2'
  }, {
    title: 'Table styles'
  }, {
    title: 'Table row 1',
    selector: 'tr',
    classes: 'tablerow1'
  }],

  templates: [{
    title: 'Test template 1',
    content: 'Test 1'
  }, {
    title: 'Test template 2',
    content: 'Test 2'
  }],

  init_instance_callback: function () {
    window.setTimeout(function() {
      $("#div").show();
     }, 1000);
  }
});


</script>
<script>
$( document ).ready( function () {
	$('body').on('click','.imgs',function(e){
		if (confirm(" هل ترغب حذف هذه الصورة !!") == true) {
    var id=  $(this).attr('id');
      $.ajax({
         type:'POST',
         url:'{{ route('news.deleteNewsImages') }}',
         data:{'id':id},
         success:function(data){
           if(data){
             $('#'+id).remove();
           }
         }
      });

		}
  } );
	$('body').on('click','.imgsProjects',function(e){
		if (confirm(" هل ترغب حذف هذه الصورة !!") == true) {
    var id=  $(this).attr('id');
      $.ajax({
         type:'POST',
         url:'{{ route('projects.deleteProjectsImages') }}',
         data:{'id':id},
         success:function(data){
           if(data){
             $('#'+id).remove();
           }
         }
      });

		}
	});
	});

</script>

  </body>

  </html>
