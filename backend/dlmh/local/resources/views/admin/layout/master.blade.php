<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('public/admin')}}/">
  <meta name="description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Vali Admin">
  <meta property="og:title" content="Dashboard - Team14.com">
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
  <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
  <meta property="og:description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <title>@yield('title') - Team14.com</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  @include('admin.layout.header')
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" width="48px;" height="48px;"
        src="{{asset('local/storage/app/images/users/avatar/'.Auth::user()->avatar)}}" alt="User Image">
      <div>
        <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
        <p class="app-sidebar__user-designation">@if (Auth::user()->level == 0)
            Admin
        @else
            Member
        @endif </p>
      </div>
    </div>
    <ul class="app-menu">
      <li><a class="app-menu__item" href="{{asset('admin/home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span
            class="app-menu__label">Dashboard</span></a>
      </li>
      <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i
        class="app-menu__icon fa fa-phone"></i><span class="app-menu__label"> Quản lý thể loại</span><i
        class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{asset('admin/category')}}"><i class="icon fa fa-list"></i> Danh sách thể loại</a></li>
          <li><a class="treeview-item" href="{{asset('admin/category/add')}}"><i class="icon fa fa-plus"></i> Thêm thể loại</a></li>
      </ul>
      </li>
      <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i
            class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label"> Quản lý tours</span><i
            class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{asset('admin/tour')}}"><i class="icon fa fa-list"></i> Danh sách tours</a></li>
          <li><a class="treeview-item" href="{{asset('admin/tour/add')}}"><i class="icon fa fa-plus"></i> Thêm tour</a></li>
        </ul>
      </li>
      
      <li><a class="app-menu__item" href="{{asset('admin/ticket')}}"><i class="app-menu__icon fa fa-ticket"></i><span
            class="app-menu__label">Quản lý vé</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i
            class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label"> Quản lý bài đăng</span><i
            class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="list_posts.html"><i class="icon fa fa-list"></i> Danh sách bài đăng</a></li>
          <li><a class="treeview-item" href="add_post.html"><i class="icon fa fa-plus"></i> Thêm bài đăng</a></li>
        </ul>
      </li>
      <li><a class="app-menu__item" href="{{asset('admin/comment')}}"><i class="app-menu__icon fa fa-comment"></i><span
            class="app-menu__label">Bình luận</span></a></li>
    </ul>
  </aside>
  {{-- main --}}
@yield('main')
<!-- Essential javascripts for application to work-->
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="js/plugins/chart.js"></script>
<!-- Google analytics script-->
<script type="text/javascript">
  if (document.location.hostname == 'pratikborsadiya.in') {
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
  }
</script>
@yield('scriptjs')
</body>

</html>