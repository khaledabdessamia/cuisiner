<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | Tableau de bord</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.0.0-beta -->
    <link href="<?php echo site_url('bootstrap-4.0.0-beta/dist/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="<?php echo site_url('dist/css/AdminLTE.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo site_url('dist/css/skins/_all-skins.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo site_url('plugins/iCheck/flat/blue.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo site_url('plugins/morris/morris.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo site_url('plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo site_url('plugins/datepicker/datepicker3.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo site_url('plugins/daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo site_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php echo site_url('css/custom_admin.css'); ?>">
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <?php        include 'admin_bar_menu.php';      ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Cuisiner
            <small>Tableau de bord</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-12">
              <!-- interactive chart -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Visiteurs au temps reéle</h3>
                  <div class="box-tools pull-right">
                    <div class="d-inline pr-4">
                      <label for="Num_Visiteurs">Nombre de visiteurs : </label>
                      <input type="text" disabled="true" name="Num_Visiteurs" id="Num_Visiteurs">
                    </div>
                    <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                      <button type="button" class="btn btn-secondary btn-sm active" data-toggle="on">Activé</button>
                      <button type="button" class="btn btn-secondary btn-sm" data-toggle="off">Désactivé</button>
                    </div>
                  </div>
                </div>

                <div class="box-body">
                  <div id="interactive" style="height: 300px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>

          <div class="row">
            <div class="col-12">
              <!-- Bar chart -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Visites mensuelles</h3>
                </div>
                <div class="box-body">
                  <div id="bar-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->

              
            </div><!-- /.col -->

          </div>


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <?php        include 'admin_footer.php';      ?>
      

    </div><!-- ./wrapper -->

    <!-- jQuery 3.2.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- jQuery UI 1.11.2 -->
    <!-- <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    
    

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src="<?php echo site_url('bootstrap-4.0.0-beta/dist/js/bootstrap.js'); ?>"></script>

    <script src="<?php echo site_url('plugins/iCheck/icheck.min.js'); ?>" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?php echo site_url('plugins/slimScroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo site_url('plugins/fastclick/fastclick.min.js'); ?>'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo site_url('dist/js/app.min.js'); ?>" type="text/javascript"></script>
 
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <!-- <script src="<?php echo site_url('dist/js/pages/dashboard.js'); ?>" type="text/javascript"></script> -->

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo site_url('dist/js/demo.js'); ?>" type="text/javascript"></script>

    <!-- FLOT CHARTS -->
    <script src="<?php echo site_url('plugins/flot/jquery.flot.min.js'); ?>" type="text/javascript"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
     <script src="<?php echo site_url('plugins/flot/jquery.flot.resize.min.js'); ?>" type="text/javascript"></script> 
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="<?php echo site_url('plugins/flot/jquery.flot.categories.min.js'); ?>" type="text/javascript"></script>


    <script type="text/javascript">
      
      $(function()
      {
        change_layout("fixed");
        $(".navbar-custom-menu > .navbar-nav > li > a").addClass("px-2 py-3");
      });

    </script>

    <script type="text/javascript">
      $(function () {
      /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
           // data: [["January", 140],["Januar", 140],["Januay", 140],["Janury", 140],["Janary", 140],["Jauary", 140],["Jnuary", 140], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9]],

          data: <?php echo $bars_data; ?> ,
          color: "#3c8dbc"
        };
        $.plot("#bar-chart", [bar_data], {
          grid: {
            borderWidth: 1,
            borderColor: "#f3f3f3",
            tickColor: "#f3f3f3"
          },
          series: {
            bars: {
              show: true,
              barWidth: 0.5,
              align: "center"
            }
          },
          xaxis: {
            mode: "categories",
            tickLength: 0
          }
        });
        /* END BAR CHART */

           });
      $(function () {

        /*
         * Flot Interactive Chart
         * -----------------------
         */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [], totalPoints = 60;
        function getData() {
          //initialization
          if (data.length == 0)
          {
            for (var i = 0; i < totalPoints; ++i)
              data.push(0);
          }
          //supprimer le 1er point
          data = data.slice(1);
          // ajouter le dernier point
          while (data.length < totalPoints) {            
            var y ;
            $.ajax(
              {
                url: "<?php echo site_url('Gestion/Real_Time_Visitors'); ?>",
                async: false,
                success: function(result){ 

                    y= parseInt(result);
                    $('#Num_Visiteurs').val(y);
              }});
            
            if (y < 0) {
              y = 0;
            }
            
            data.push(y);
          }

          // Zip the generated y values with the x values
          var res = [];
          for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]]);
          }
          return res;
        }
        var res = getData();
        var maxY =1.1 * res.reduce(function(max, arr) { 
          return Math.max(max, arr[1]); 
          }, -Infinity);
        var interactive_plot = $.plot("#interactive", [res], {
          grid: {
            borderColor: "#f3f3f3",
            borderWidth: 1,
            tickColor: "#f3f3f3"
          },
          series: {
            shadowSize: 0, // Drawing is faster without shadows
            color: "#3c8dbc"
          },
          lines: {
            fill: true, //Converts the line chart to area chart
            color: "#3c8dbc"
          },
          yaxis: {
            min: 0,
            max: maxY,
            show: true
          },
          xaxis: {
            show: true
          }
        });

        var updateInterval = 1000; //Fetch data ever x milliseconds
        var realtime = "on"; //If == to on then fetch data every x seconds. else stop fetching
        function update() {

          interactive_plot.setData([getData()]);

          // Since the axes don't change, we don't need to call plot.setupGrid()
          interactive_plot.draw();
          if (realtime === "on")
            setTimeout(update, updateInterval);
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === "on") {
          update();
        }
        //REALTIME TOGGLE
        $("#realtime .btn").click(function () {
          if ($(this).data("toggle") === "on") {
            realtime = "on";
          }
          else {
            realtime = "off";
          }
          update();
        });
        /*
         * END INTERACTIVE CHART
         */
       });


    </script>





</body>
</html>