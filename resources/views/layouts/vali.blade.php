<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Vali Admin">
  <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
  <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
  <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <title>Pooja's Project</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('docs/css/main.css') }}">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  @include('partials.header')
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  @include('partials.sidebar')
  <main class="app-content">
    <div class="app-title">
      <div> 
        <h1><i class="fa fa-dashboard"></i>LARAVEL</h1>
        <p>Laravel Projects</p>
      </div>
      <!-- <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul> -->
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3">
      <!--   <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <h4>Users</h4>
          <p><b>5</b></p>
        </div>
      </div> -->
    </div>
    <div class="col-md-6 col-lg-3">
    <!--     <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
      <div class="info">
        <h4>Likes</h4>
        <p><b>25</b></p>
      </div>
    </div> -->
  </div>
  <div class="col-md-6 col-lg-3">
      <!--   <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
        <div class="info">
          <h4>Uploades</h4>
          <p><b>10</b></p>
        </div>
      </div> -->
    </div>
    <div class="col-md-6 col-lg-3">
       <!--  <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
         <div class="info">
           <h4>Stars</h4>
           <p><b>500</b></p>
         </div>
       </div> -->
     </div>
   </div>
   <div class="row">
    <!--   <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Monthly Sales</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
        </div>
      </div>
    </div> -->
    <!--   <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Support Requests</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
        </div>
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="col-md-6">
     <!--    <div class="tile">
       <h3 class="tile-title">Features</h3>
       <ul>
         <li>Built with Bootstrap 4, SASS and PUG.js</li>
         <li>Fully responsive and modular code</li>
         <li>Seven pages including login, user profile and print friendly invoice page</li>
         <li>Smart integration of forgot password on login page</li>
         <li>Chart.js integration to display responsive charts</li>
         <li>Widgets to effectively display statistics</li>
         <li>Data tables with sort, search and paginate functionality</li>
         <li>Custom form elements like toggle buttons, auto-complete, tags and date-picker</li>
         <li>A inbuilt toast library for providing meaningful response messages to user's actions</li>
       </ul>
       <p>Vali is a free and responsive admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.</p>
       <p>Vali is is light-weight, expendable and good looking theme. The theme has all the features required in a dashboard theme but this features are built like plug and play module. Take a look at the <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> about customizing the theme colors and functionality.</p>
       <p class="mt-4 mb-4"><a class="btn btn-primary mr-2 mb-2" href="http://pratikborsadiya.in/blog/vali-admin" target="_blank"><i class="fa fa-file"></i>Docs</a><a class="btn btn-info mr-2 mb-2" href="https://github.com/pratikborsadiya/vali-admin" target="_blank"><i class="fa fa-github"></i>GitHub</a><a class="btn btn-success mr-2 mb-2" href="https://github.com/pratikborsadiya/vali-admin/archive/master.zip" target="_blank"><i class="fa fa-download"></i>Download</a></p>
     </div> -->
   </div>
 <!--      <div class="col-md-6">
   <div class="tile">
     <h3 class="tile-title">Compatibility with frameworks</h3>
     <p>This theme is not built for a specific framework or technology like Angular or React etc. But due to it's modular nature it's very easy to incorporate it into any front-end or back-end framework like Angular, React or Laravel.</p>
     <p>Go to <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> for more details about integrating this theme with various frameworks.</p>
     <p>The source code is available on GitHub. If anything is missing or weird please report it as an issue on <a href="https://github.com/pratikborsadiya/vali-admin" target="_blank">GitHub</a>. If you want to contribute to this theme pull requests are always welcome.</p>
   </div> -->
 </div>
</div>
</main>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="js/plugins/chart.js"></script>
<script type="text/javascript">
  var data = {
   labels: ["January", "February", "March", "April", "May"],
   datasets: [
   {
     label: "My First dataset",
     fillColor: "rgba(220,220,220,0.2)",
     strokeColor: "rgba(220,220,220,1)",
     pointColor: "rgba(220,220,220,1)",
     pointStrokeColor: "#fff",
     pointHighlightFill: "#fff",
     pointHighlightStroke: "rgba(220,220,220,1)",
     data: [65, 59, 80, 81, 56]
   },
   {
     label: "My Second dataset",
     fillColor: "rgba(151,187,205,0.2)",
     strokeColor: "rgba(151,187,205,1)",
     pointColor: "rgba(151,187,205,1)",
     pointStrokeColor: "#fff",
     pointHighlightFill: "#fff",
     pointHighlightStroke: "rgba(151,187,205,1)",
     data: [28, 48, 40, 19, 86]
   }
   ]
 };
 var pdata = [
 {
  value: 300,
  color: "#46BFBD",
  highlight: "#5AD3D1",
  label: "Complete"
},
{
  value: 50,
  color:"#F7464A",
  highlight: "#FF5A5E",
  label: "In-Progress"
}
]

var ctxl = $("#lineChartDemo").get(0).getContext("2d");
var lineChart = new Chart(ctxl).Line(data);

var ctxp = $("#pieChartDemo").get(0).getContext("2d");
var pieChart = new Chart(ctxp).Pie(pdata);
</script>
<!-- Google analytics script-->
<script type="text/javascript">
  if(document.location.hostname == 'pooja@laxyo.in') {
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
   ga('create', 'UA-72504830-1', 'auto');
   ga('send', 'pageview');
 }
</script>
</body>
</html>