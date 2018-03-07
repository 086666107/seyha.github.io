<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="{{asset('back-end/images/icon-phum.png')}}"> 
    <link rel="stylesheet"    href="{{asset('back-end/js/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet"    href="{{asset('back-end/css/style-admin.css')}}">

    <script type="text/javascript" src="{{asset('back-end/js/dashboard/jquery.min.js')}}"></script>
<!--
    <script type="text/javascript">
    window.onload = function() {
       $('body.sidebar-mini').addClass('sidebar-collapse');
    };</script>
-->
    <?php /* data picker */ ?>
    <link rel="stylesheet" href="{{asset('back-end/js/datepicker/datepicker.css')}}">
    <script type="text/javascript" src="{{asset('back-end/js/datepicker/bootstrap-datepicker.js')}}"></script>

    <?php /* select chosen */ ?>
    <link rel="stylesheet" href="{{asset('back-end/js/chosen/chosen.min.css')}}">
    <script src="{{asset('back-end/js/chosen/chosen.jquery.min.js')}}"</script>
    
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    
    <script type="text/javascript" src="{{asset('back-end/js/validator/va-ch.js')}}"></script>
    <?Php /* Datatables */?>
    <script src="{{asset('back-end/js/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('back-end/js/datatable/dataTables.bootstrap.min.js')}}"></script>
    <?php /* for Datatable Responsive */ ?>
    <link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>


    
  </head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    <header class="main-header">

         <a href="" class="logo">
            <span class="logo-mini">
              <img src="http://placehold.it/66x50?text=Logo">
           </span>
          
            
            <span class="logo-lg"><img src="{{asset('back-end/images/avatar5.png')}}" class="img-circle" width="45px" height="25px"> /></span>
               <!-- $header[0]->logo -->
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas"role="button">
                <span class="sr-only">Toggle navigation</span>
                <img src="{{asset('back-end/images/hamburger.png')}}"/>
            </a>
          

            <div class="navbar-custom-menu hidden-xs">
                <ul class="nav navbar-nav">
                  
        
                   
                    <li class="dropdown user user-menu">
                        <a href="{{ asset('/logout') }}" class="dropdown-toggle1" data-toggle="dropdown" >
                           <img src="{{asset('back-end/images/avatar5.png')}}" class="img-circle" width="25px" height="25px">
                           Nai seyha
                        </a>
                        <ul class="dropdown-menu">
                           <div class="arrow-border"></div>
                            <li class="user-header">
                                <img src="{{asset('back-end/images/avatar5.png')}}" class="img-circle" alt="User Image">
                                <p>  Naiseyha </p>
                            </li>
                            <div class="col-sm-12 groups-management">
                              <li class="edite-profile">
                  <a href=""><span class="fa fa-edit"></span>edit profile</a>
                </li>
                              <li class="sign-out">
                  <a href=""><span class="fa fa-sign-out"></span>Logout</a>
                </li>
                            </div>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </header><!-- header -->
  
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('back-end/images/avatar5.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Project Name </p>
                    <a>Company Name </a>
                </div>
            </div>
          
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-list-alt"></i>
                        <span>Users Setting </span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="treeview-menu" id="treeopen">
                        <li><a  href="#"><i class="fa fa-circle-o"></i>List all role </a></li>
                         <li><a  href="#"><i class="fa fa-circle-o"></i>List all Users </a></li>
                    </ul>
                </li>
            </ul>
        
         
          <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>General </span>
            <i class="fa fa-angle-right pull-right"></i>
          </a>
          <ul class="treeview-menu" id="treeopen">
            <li><a  href="#"><i class="fa fa-circle-o"></i>Header </a></li>
                      
                        <li><a  href="#"><i class="fa fa-circle-o"></i>Slider </a></li>
                        <li><a  href="#"><i class="fa fa-circle-o"></i>Menu </a></li>
          </ul>
        </li>
      </ul>


            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-list-alt"></i>
                        <span>Post </span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="treeview-menu" id="treeopen">
                        <li><a  href="#"><i class="fa fa-circle-o"></i>Add New </a></li>
                        
                    </ul>
                </li>
            </ul>
        
          
         
             


        </section>
    </aside><!-- main-sidebar -->
</div><!-- wrapper -->



@yield('content')




<div class="wrapper">
  <div class="footer main-footer">
    <div class="col-sm-12">
      <span class="pull-left">
      Develop by: abc.com
      </span>
      <span class="pull-right hidden-xs version-system">Version 0.1</span>
    </div>
  </div>
</div>



<?Php /* theme */?>
<script src="{{asset('back-end/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('back-end/js/dashboard/app.min.js')}}"></script>
<?Php /* validation for ajax */?>
<script src="{{asset('back-end/js/validator/jquery.validate.min.js')}}"></script>


<?php /* for change images */ ?>
<link href="{{asset('back-end/js/jasny-bootstrap/jasny-bootstrap.min.css')}}" rel="stylesheet">
<script src="{{asset('back-end/js/jasny-bootstrap/jasny-bootstrap.min.js')}}"></script>

<?php /* For Check Password Strong Or Good.... */ ?>
<script src="{{asset('back-end/js/validator/passwordscheck.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function() {
    window.setTimeout(function() {  
      $(".alert").fadeOut({opacity: 0}, 500).hide('slow');
    }, 3000);

    $("div.alert").on("click", "button.close", function() {
      $(this).parent().fadeOut({opacity: 0}, 500).hide('slow');
    });

        //Date picker
        $(".datepicker").datepicker({ format: 'yyyy-mm-dd',autoclose: true });
        function today(){
            var d = new Date();
            var curr_date = d.getDate();
            var curr_month = d.getMonth() + 1;
            var curr_year = d.getFullYear();
            document.write(curr_date + "-" + curr_month + "-" + curr_year);
        }

        // JQuery for active menu
        $(function(){
            var asset = window.location.href;
            $(".treeview a").each(function() {

                if(asset == (this.href)) {
                    $(this).closest(".treeview").addClass("treeview active");
                    $(this).closest(".treeview-menu li a").addClass("active-page");
                }
            });
        });

    });

    $(function() {
        $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
    });
  

</script>

</body>
</html>
