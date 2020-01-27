<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{env('PUBLIC_PATH')}}/admin_resources/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{env('PUBLIC_PATH')}}/admin_resources/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="{{env('PUBLIC_PATH')}}/admin_resources/css/fullcalendar.css" />
<link rel="stylesheet" href="{{env('PUBLIC_PATH')}}/admin_resources/css/matrix-style.css" />
<link rel="stylesheet" href="{{env('PUBLIC_PATH')}}/admin_resources/css/matrix-media.css" />
<link href="{{env('PUBLIC_PATH')}}/admin_resources/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="{{env('PUBLIC_PATH')}}/admin_resources/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('admin.layouts.main_menu')
@include('admin.layouts.sidebar')

@yield('content')

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->
<script> var baseURL = '{{url('/')}}'</script>
<script> var token = '{{csrf_token()}}'</script>


<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/excanvas.min.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/jquery.min.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/jquery.ui.custom.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/bootstrap.min.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/jquery.flot.min.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/jquery.flot.resize.min.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/jquery.peity.min.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/fullcalendar.min.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/matrix.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/matrix.dashboard.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/jquery.gritter.min.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/matrix.interface.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/matrix.chat.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/jquery.validate.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/matrix.form_validation.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/jquery.wizard.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/jquery.uniform.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/select2.min.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/matrix.popover.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/jquery.dataTables.min.js"></script> 
<script src="{{env('PUBLIC_PATH')}}/admin_resources/js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
@yield('script')
</body>
</html>
