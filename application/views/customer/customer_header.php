
<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->
<head>
    <meta charset="UTF-8">
    <title>Customer | KBJNL </title>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/newlogo.png" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/flags-icon/css/flag-icon.min.css">
    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/materialdesign-webfont/css/materialdesignicons.min.css"/>  
    <link rel="stylesheet"  href="<?php echo base_url()?>assets/vendors/chartjs/Chart.min.css">
    <!-- END: Page CSS-->
    <!-- START: Page CSS-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/datatable/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/datatable/buttons/css/buttons.bootstrap4.min.css"/>
    <!-- END: Page CSS-->
    <!-- START: Page CSS-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/morris/morris.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/weather-icons/css/pe-icon-set-weather.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/starrr/starrr.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- END: Page CSS-->
    <!-- START: Page CSS-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/sweetalert/sweetalert.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/fancybox/jquery.fancybox.min.css">  
    <!-- END: Page CSS-->
    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/toastr/toastr.min.css"/>
    <!-- END: Custom CSS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/vendors/toastr/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <style >
    .tx-danger{
     color:red !important;   
 }
 .
 .help-block{
  color:red;
}
.settings{
    display: none !important;
}
.site-footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 50px;
  background: #fafafa;
  border-top: solid 1px #eee;
}
.horizontal-menu.semi-dark {
    --sidebarbg: #66CD00 !important;
    --sidebaractivecolor: #66CD00 !important;
    --headerbackground: #66CD00;
}
#header-fix .ring {
    border:5px solid #66CD00 !important;
}
.newclass {
    color: #ffff;
    background-color: #fff;
    margin-top: 15px;
     margin-bottom : 15px;
    padding: 2px !important;
    border-radius: 8px;
}
.newclass a{
    color: #66CD00 !important;
}
#onlymobile{
    display: none;
 }
@media only screen and (max-width: 600px) {
 #notmobile
 {display:none;}
 #onlymobile{
    display: block;
 }
 #header-fix .collapse-menu-bar {
    width: 75px;
    border-right: 1px solid var(--bordercolor);
    padding: 16px 0px;
    line-height: 39px;
}
}
@media (max-width: 440px){
#header-fix .logo-bar {
    width: 75px !important;
}
}
</style>







</head>
<!-- END Head-->

<!-- START: Body-->
<body id="main-container" class="default semi-dark horizontal-menu">

    <!-- START: Pre Loader-->
    <div class="se-pre-con">
        <div class="loader"></div>
    </div>
    <!-- END: Pre Loader-->

    <!-- START: Header-->
<!--     <div id="header-fix" class="header fixed-top">
        <div class="site-width">
            <nav class="navbar navbar-expand-lg  p-0">
                <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
                    <a href="<?php echo base_url('customer-home')?>" class="horizontal-logo text-left">
                        <img height="45px" src="<?php echo base_url()?>assets/images/newlogo.png"> 
                  
                    </a>
                </div>
                

                <div class="navbar-right ml-auto h-100">
                    <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                      
                        <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('my-orders')?>" class="nav-link"></i>My Orders</a>
                                
                            </li>
                         <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('upload-images')?>" class="nav-link"></i>Upload</a>
                                
                            </li>
                             <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('future-demand')?>" class="nav-link"></i>Future Demand</a>
                                
                            </li>
                            <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('beneficiaries')?>" class="nav-link"></i>Beneficiaries</a>
                                
                            </li>
                            <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('benefit')?>" class="nav-link"></i>Benefit</a>
                                
                            </li>
                           
                              <li class="dropdown align-self-center d-inline-block">
                            <a style="font-size: 18px !important;" href="<?php echo base_url('cart')?>" class="nav-link"><i class="ion-ios-cart"></i>
                            </a>
                        </li>
                         <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('customer-logout')?>" class="nav-link"></i>Logout</a>
                                
                            </li>
                    

                    </ul>
                </div>
            </nav>
        </div>
    </div> -->
      <!-- START: Header-->
        <div id="header-fix" class="header fixed-top">
            <div class="site-width">
                <nav class="navbar navbar-expand-lg  p-0">
                    <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">  
                   <a href="<?php echo base_url('customer-home')?>" class="horizontal-logo text-left">
                        <img height="45px" src="<?php echo base_url()?>assets/images/newlogo.png"> 
                  
                    </a>                  
                    </div>
                    <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                        <div class="row">
                             
                        <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>  &nbsp; &nbsp;&nbsp;
                          <a href="<?php echo base_url('cart')?>"><i style="font-size:35px" class="ion-ios-cart"></i></a>
                          
                      </div>
                    </div>

                    <div class="navbar-right ml-auto h-100" id="notmobile">
                         <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                      
                        <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('my-orders')?>" class="nav-link"></i>My Orders</a>
                                
                            </li>
                         <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('upload-images')?>" class="nav-link"></i>Upload</a>
                                
                            </li>
                             <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('future-demand')?>" class="nav-link"></i>Future Demand</a>
                                
                            </li>
                            <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('beneficiaries')?>" class="nav-link"></i>Beneficiaries</a>
                                
                            </li>
                            <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('benefit')?>" class="nav-link"></i>Benefit</a>
                                
                            </li>
                           
                              <li class="dropdown align-self-center d-inline-block">
                            <a style="font-size: 18px !important;" href="<?php echo base_url('cart')?>" class="nav-link"><i class="ion-ios-cart"></i>
                            </a>
                        </li>
                         <li class="dropdown align-self-center d-inline-block"><a style="font-size: 17px !important;" href="<?php echo base_url('customer-logout')?>" class="nav-link"></i>Logout</a>
                                
                            </li>
                    

                    </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- END: Header-->
         <div class="sidebar"  id="onlymobile">
            <div class="site-width">
                <!-- START: Menu-->
                <ul id="side-menu" class="sidebar-menu">
                    <li class="dropdown active"  style="margin-top:-10px">            
                        <ul>
                            
                            <li class="newclass"><a href="<?php echo base_url('my-orders')?>" class="nav-link"></i>My Orders</a> </li>
                            <li class="newclass"><a href="<?php echo base_url('upload-images')?>" class="nav-link">Upload</a></li>
                            <li class="newclass"><a href="<?php echo base_url('future-demand')?>" class="nav-link"></i>Future Demand</a></li>
                            <li class="newclass"><a href="<?php echo base_url('beneficiaries')?>" class="nav-link"></i>Beneficiaries</a></li>
                            <li class="newclass"><a href="<?php echo base_url('benefit')?>" class="nav-link"></i>Benefit</a></li>
                             <li class="newclass"> <a  href="<?php echo base_url('customer-logout')?>" class="nav-link"></i>Logout</a>                  
                        
                    </li>
                        </ul>
                    </li>
               <!--  <ul>
                   
                    <li ><a href="<?php echo base_url('my-orders')?>" class="nav-link"></i>My Orders</a>                
                        
                    </li> <li class="active"><a href="index.html"><i class="icon-rocket"></i> Dashboard</a></li>
               
                     <li class="dropdown "> <a href="<?php echo base_url('upload-images')?>" class="nav-link">Upload</a>                  
                        
                    </li>
                     <li class="dropdown "><a href="<?php echo base_url('future-demand')?>" class="nav-link"></i>Future Demand</a>              
                        
                    </li>
                     <li class="dropdown "><a href="<?php echo base_url('beneficiaries')?>" class="nav-link"></i>Beneficiaries</a>                  
                        
                    </li>
                     <li class="dropdown "><a href="<?php echo base_url('benefit')?>" class="nav-link"></i>Benefit</a>                
                        
                    </li>
                     <li class="dropdown"> <a  href="<?php echo base_url('customer-logout')?>" class="nav-link"></i>Logout</a>                  
                        
                    </li> -->
                    
                

                   
                   
                </ul>
                <!-- END: Menu-->
                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- END: Main Menu-->
<!-- 
    
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({  
      pageLanguage: 'en', 
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
  }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
  $(document).ready(function(){
    $('#google_translate_element').bind('DOMNodeInserted', function(event) {
      $('.goog-te-menu-value span:first').html('Translate');
      $('.goog-te-menu-frame.skiptranslate').load(function(){
        setTimeout(function(){
          $('.goog-te-menu-frame.skiptranslate').contents().find('.goog-te-menu2-item-selected .text').html('Translate');    
        }, 100);
      });
    });
  });
</script> -->
