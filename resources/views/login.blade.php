<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <title> Dr. iQ | Sign In </title>
  <!--Dr. iQ | Home -->
      <!-- Bootstrap core CSS -->
    <link rel="icon" type="image/png" href="https://dashboard.dr-iq.com/assets/img/top-header/favicon-32x32.png " sizes="32x32">
    <link href="https://dashboard.dr-iq.com/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://dashboard.dr-iq.com/assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://dashboard.dr-iq.com/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://dashboard.dr-iq.com/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://dashboard.dr-iq.com/assets/css/style.css?v=1.1" rel="stylesheet">
    <link href="https://dashboard.dr-iq.com/assets/css/dev.css" rel="stylesheet">
    <link href="https://dashboard.dr-iq.com/assets/css/jquery.datepicker2.css" rel="stylesheet">
    <script src="https://dashboard.dr-iq.com/assets/jquery/jquery.min.js">
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
          <link href="https://dashboard.dr-iq.com/assets/bootstrap-datepicker-1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />
    <script src="https://dashboard.dr-iq.com/assets/bootstrap-datepicker-1.6.4/js/bootstrap-datepicker.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">



    <style>
      .btn:hover {
        box-shadow: 0px 2px 2px 0px #4d4d4d !important;


      }
      .btn:focus-within {
        box-shadow: 0px 1px 1px 0px #4d4d4d !important;


      }

      .loadercard {

        background-color: transparent !important;
        border:none;
        border-radius: 0px;
      }
      input::placeholder{
        color: #9b9b9b !important;
      }
      select{
        color: #9b9b9b !important;
      }

      iframe#launcher {
        bottom: 30px !important;
      }

      .dataTables_processing.card.loadercard{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: #fff;
        margin: 0px;
      }

      #loading-progress{
        background: url('https://dashboard.dr-iq.comhttps://dashboard.dr-iq.com/assets/img/dr-iq.gif') center no-repeat #fff;
        width: 100%;
        height: 100%;
      }

    </style>
  </head>
<body>
<nav class="navbar navbar-expand-lg custom-nav static-top">
  
<div class="container px-0">

    <style>
        .notification-counter
        {
            background: #f55266;
            width: 10px;
            height: 10px;
            border-radius: 100px;
            position: absolute;
            border: 1px solid transparent;
            display: none;
        }
        .nav-profile-img {
            width: 31px;
            height: 31px;
        }

    </style>

            <a class="navbar-brand header-logo" href="/">
        <img src="https://dashboard.dr-iq.com/assets/img/top-header/header-logo.svg" alt="Dr.iQ" class="web-only">
        <img src="https://dashboard.dr-iq.com/assets/img/top-header/logo-mob.svg" alt="Dr.iQ" class="mobile-only" style="display: none;">
           </a>

    <div class="mobile-items-block">
            </div>
</div>

<script>

    // logout user if device id changed --------------------------------------------------
    
                                                                                                        
                                  


                
        
</script>

</nav>
<div class="dashboard-navigation-bar">
</div>
<div class="se-pre-con1">
  
    <style>
        .btn:hover {
             box-shadow: 0px 2px 2px 0px #4d4d4d !important;


         }
        .btn:focus-within {
            box-shadow: 0px 1px 1px 0px #4d4d4d !important;


        }

        #email-error{
            color:red !important;
        }
        #pwd-error{
            color:red !important;
        }
    </style>

    <!-- start login page -->
    <!-- Page Content -->
    <div class="container inner-pg">
        <div class="row">
            <div class="offset-xl-4 col-xl-4 offset-lg-3 col-lg-6 offset-md-2 col-md-8" >

                <div class="text-center login-text">
                    <img src="https://dashboard.dr-iq.com/assets/img/top-header/logo-mob.svg" alt="Dr.iQ">
                    <span>Sign In</span>
                </div>



                <div class="signIn-box">


                    
                                        
                    <form action="/secure/login_check" method="post" autocomplete="off" id="singin_form">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="col-lg-12">
                                    <label>Email Address</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Type your email address" name="_username">
                                        <span id="email-err" class="error" style="display: none;"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <label>Password</label>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="pwd" placeholder="Type your password" name="_password">
                                        <span id="pass-err" class="error" style="display: none;"></span>
                                    </div>
                                </div>
</div>
                                <div class="col-lg-12 text-center ">
                                    <button type="submit" id="signin" class="btn btn-blue my-4" style="width:87%; margin-left:10px !important" >Sign In</button>
                                    <a href="{{ route('get.token') }}"><img src ="http://qa-pathways.dr-iq.com/pathways/img/SignInWith_Original.png" /></a>
                                </div>

                                
                                                                    


                            </div>
                        </div>

                        <input type="hidden" class="form-control" id="deviceToken" placeholder="Type your password" name="_token">
                    </form>

                </div>   <!-- sign in box -->


                                                                                                                            
                

            </div> <!-- col -->
        </div> <!-- row -->
    </div>  <!-- container -->
    <!-- end login page -->
 

</div>
<div class="footer">
  <footer class="sticky-footer">
        <div class="container-fluid bg-white footer-btm">
            

        <nav class="navbar navbar-expand-lg ">
    <div class="container px-0">
        <div class="navbar-brand copyright-footer footer-list-item span" href="#">
        
        <span><i class="fa fa-copyright"></i> Dr. iQ 2020. </span><span>All rights reserved.</span>
        </div>
   
        <ul class="navbar-nav ml-auto footer-nav">
        
          <li class="nav-item footer-list-item">
            <a class="nav-link" href="https://dr-iq.com/" target="_blank">
            <span>Dr. iQ Website</span>
            </a>
          </li> 
          <li class="nav-item footer-list-item">
            <a class="nav-link" href="/Report-problem">
            <span>Report a Problem</span>
            </a>
          </li> 
          <li class="nav-item footer-list-item">
            <a class="nav-link" href="https://dr-iq.com/contact-us" target="_blank">
            <span>Contact Us</span>
            </a>
          </li>
   
        
        </ul>
    </div>
  </nav>

    </div>
</footer>
</div>
      <!-- Bootstrap core JavaScript -->
    <script src="https://dashboard.dr-iq.com/assets/bootstrap/js/bootstrap.bundle.min.js">
  </script>
    <script src="https://dashboard.dr-iq.com/assets/jquery/nice-jquery/js/jquery.nice-select.js">
  </script>
  <script src="https://dashboard.dr-iq.com/assets/datatables/jquery.dataTables.js">
  </script>
  <script src="https://dashboard.dr-iq.com/assets/datatables/dataTables.bootstrap4.js">
  </script>
  <script src="https://dashboard.dr-iq.com/assets/datatables/datatables-demo.js">
  </script>
  <script src="https://dashboard.dr-iq.com/assets/datatables/dt-customization.js">
  </script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js">
  </script>

  <!--[if IE 9]>
  <script src="https://dashboard.dr-iq.com/assets/jquery/bootstrap3.min.js"></script>
  <script src="https://dashboard.dr-iq.com/assets/jquery/ie9.min.js"></script>
  <script src="https://dashboard.dr-iq.com/assets/js/additional-methods.js"></script>
  <script src="https://dashboard.dr-iq.com/assets/js/jquery.validate.min.js"></script>
  <![endif]-->
  <script src="https://dashboard.dr-iq.com/assets/js/timeout.js"></script>
  <script src="https://dashboard.dr-iq.com/assets/js/filter-settings.js"></script>
  <script src="https://dashboard.dr-iq.com/assets/js/notification-url.js"></script>

  <script src="https://www.gstatic.com/firebasejs/6.1.1/firebase.js"></script>


  <script>
    var firebaseConfig = {
      messagingSenderId: "488046670226",
    };
    firebase.initializeApp(firebaseConfig);
    var messaging = firebase.messaging();
    messaging.usePublicVapidKey('BMYh05o-FRLnk7OzQ8pB5Tn26eLkTb56zKWLN9TibuixA7hbwFuxIn2ktLKbRPo-fdOM-xtZ42NSElJB2WQcX3s');

    // messaging.onMessage(function(payload) {
    //   console.log('Message received. ', payload);
    // });


    messaging.onMessage(function(payload) {

      console.error('Message received. ', payload);
      const notificationTitle = payload.data.title;

      var url = getNotificationUrl(payload.data.tag, payload.data.referenceid, payload.data.userid);
      const notificationOptions = {
        body: payload.data.body,
        icon:  'https://dashboard.dr-iq.com/assets/img/logo.png',
        requireInteraction: payload.data.requireInteraction,
        tag: url
      };

      if (!("Notification" in window)) {
        console.log("This browser does not support system notifications");
      }
      // Let's check whether notification permissions have already been granted
      else {
        if (Notification.permission === "granted") {
          // If it's okay let's create a notification
          try {
            var notification = new Notification(notificationTitle, notificationOptions);
            notification.onclick = function(event) {
              event.preventDefault(); //prevent the browser from focusing the Notification's tab
              console.error("URL", url);

              window.open( url, '_blank');
              notification.close();
            }
          } catch (err) {
            try { //Need this part as on Android we can only display notifications thru the serviceworker
              navigator.serviceWorker.ready.then(function(registration) {
                registration.showNotification(notificationTitle, notificationOptions);
              });
            } catch (err1) {
              console.log(err1.message);
            }
          }
        }
      }
    });

    $(document).ready(function () {



      Notification.requestPermission().then(function(permission) {
        if (permission === 'granted') {
          navigator.serviceWorker.register('/firebase-messaging-sw.js')
                  .then((registration) => {
            messaging.useServiceWorker(registration);
          //alert("Service Registered")
        });

          generateToken();
        } else {
          console.error('Unable to get permission to notify.');
        }
      });
    });

  </script>



  <script>
    $(document).on('mouseup', function (e){
              var bookingform = $("#list-role");
              if (!bookingform.is(e.target) && bookingform.has(e.target).length === 0 && !$(e.target).is('#btn-role'))
              {
                bookingform.slideUp(10);
                $('#btn-role').removeClass('intro');
              }
            }
    );
    $(document).on('mouseup', function (e){
              var bookingform = $("#list-prac");
              if (!bookingform.is(e.target) && bookingform.has(e.target).length === 0 && !$(e.target).is('#btn-prac'))
              {
                bookingform.slideUp(10);
                $('#btn-prac').removeClass('intro');
              }
            }
    );
    $(document).on('mouseup', function (e){
              var bookingform = $("#list-create");
              if (!bookingform.is(e.target) && bookingform.has(e.target).length === 0 && !$(e.target).is('#btn-create'))
              {
                bookingform.slideUp(10);
                $('#btn-create').removeClass('intro');
              }
            }
    );
    $(document).ready(function() {
              // $('select').niceSelect()
              $(".se-pre-con").fadeOut("slow");
              $("#btn-role").click(function(){
                        $('#btn-role').toggleClass('intro');
                        $("#list-role").slideToggle(10);
                      }
              );
              $("select").click(function(){$('select').toggleClass('focus-alert');
              });

              $('#btn-prac').click(function() {

                $('#btn-prac').toggleClass('intro');
                $('#list-prac').toggle();
                return false;
              });


              $('#btn-create').click(function() {

                $('#btn-create').toggleClass('intro');
                $('#list-create').toggle();
                return false;
              });



              /*        $(document).mouseup(function (e)
                                          {
                        var container = $("#list-prac,#list-role");
                        if (!container.is(e.target)
                            && container.has(e.target).length === 0)
                        {
                          container.hide();
                        }
                      }
                                         );*/
        

                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                                                                                              


                                                                      
              $('.page-length').on( 'change', function () {
                        $('#table1').DataTable().page.len( $(this).val()  ).draw();
                      }
              );
              $("#test").click(function(){
                        $("#filter-optn").toggle();
                      }
              );

              $("#btn-reasons").click(function(){
                $('#btn-reasons').toggleClass('intro');
                $('#list-reasons').toggle();
                return false;
              });
              var num = $("#list-reasons").find("li").length;
              if (num > 5) {
                $('#list-reasons ul').addClass("increase-height");

              }
              $(document).on('mouseup', function (e){
                var bookingform = $("#list-reasons");
                if (!bookingform.is(e.target) && bookingform.has(e.target).length === 0 && !$(e.target).is('#btn-reasons'))
                {
                  bookingform.slideUp(10);
                  $('#btn-reasons').removeClass('intro');
                }
              });
              var num = $("#list-prac").find("li").length;
              if (num > 5) {
                $('#list-prac ul').addClass("increase-height");

              }
              var num = $("#list-role").find("li").length;
              if (num > 5) {
                $('#list-role ul').addClass("increase-height");

              }
              var num = $("#list-create").find("li").length;
              if (num > 5) {
                $('#list-create ul').addClass("increase-height");

              }

              var num = $("#list-reasons").find("li").length;
              if (num > 5) {
                $('#list-reasons ul').addClass("increase-height");

              }

        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            // some code..
            $(".label-3kk12").css('display','none');
        }

    });
  </script>


  <script>

          $.ajax({
              type: "GET",
              url: "/secure/notifications/all",
              success: function (result) {
                  //alert("Works "+p +result);
                  $("#notify").html(result);
                  var x=$("#notification_ul").html();
                  //alert(x);
                  if(x.length>10)
                  {
                      $("#nocoounter").css('display','inline-block');
                      $('#clearall').css('display','inline-block');
                  }
                  else {
                      $('#clearall').css('display','none');
                      $("#notification_ul").html('<p align="center" style="color: #9b9b9b;">No notification found.</p>');
                  }



              }
          });

          $(function () {
              $("#blueseeAll").on('click', function () {
                  // var p = $("#pw").val();
                  //alert("yahoooo");

                  $.ajax({
                      type: "GET",
                      url: "/secure/notifications/all",
                      success: function (result) {
                          //alert("Works "+p +result);

                              $("#notify").html(result);
                          var x=$("#notification_ul").html();
                          //alert(x);
                          if(x.length>10){

                          }else {
                              $("#notification_ul").html('<p align="center" style="color: #9b9b9b;">No notification found.</p>');
                          }

                      }

        })
      })
    });


    $('body').on('click', '.notification-list-item li', function(e){



        //MAKE NOTIFICATION READ
                                                                                                      
                                                                               








    });
                
                                                





    // logout user if device id changed --------------------------------------------------
    
                                
            
                

        
    
    


  </script>

  <script>

    // logout user if device id changed --------------------------------------------------
    
                                
            
                

        
    
    
          $(document).ready(function(){
          $(document).timeout({
              'timeout_sec' : 1 * 60,
              'debug' : false,
              'logouturl': '',
              'redirecturl': ''
          });
      });
    resetFilterSetting();
    deleteToken();

    function deleteToken() {
      messaging.getToken().then(function(currentToken) {
        messaging.deleteToken(currentToken).then(function() {
          console.log('Token deleted.');
          generateToken();
        }).catch(function(err) {
          console.log('Unable to delete token. ', err);
        });
        // [END delete_token]
      }).catch(function(err) {
        console.log('Error retrieving Instance ID token. ', err);
        showToken('Error retrieving Instance ID token. ', err);
      });
    }
    
    function generateToken(){
      messaging.getToken().then(function(currentToken) {
        if (currentToken) {
          console.log(currentToken);
          $("#deviceToken").val(currentToken)
        } else {
          console.error('No Instance ID token available. Request permission to generate one.');
        }
      }).catch(function(err) {
        console.error('An error occurred while retrieving token. ', err);
      });
    }
    self.addEventListener('notificationclick', function(event) {
      event.notification.close();
      event.waitUntil(
              clients.openWindow(event.notification.data.url + "?notification_id=" + event.notification.data.id)
      );
    })

  </script>



    <script type="text/javascript">
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };


        $(document).ready(function(){
            $('#pwd').on("cut copy",function(e) {
                e.preventDefault();
            });
            $('#email').focus();


        });

        $('#singin_form').validate({ // initialize the plugin
            rules: {
                _username: {
                    required: true,
                    email: true
                },
                _password: {
                    required: true
                }
            },
            messages: {
                _username: 'Email field is required.',
                _password: 'Password field is required.',
            },


        });





        $("#signin").on('click',function () {
            if($('#email').val()=="" || $('#pwd').val()=="" )
            {
                if($('#email').val()=="" )
                {
                    $('#email').css('border-color', 'red');

                }else {

                    $('#email').css('border-color', '#9B9B9B');
                }

                if($('#pwd').val()=="" )
                {
                    $('#pwd').css('border-color', 'red');

                }else {

                    $('#pwd').css('border-color', '#9B9B9B');
                }

            }
        });

        $('#email').keypress(function( e ) {
            if(e.which === 32)
                return false;
        });

    $('#email').on('keyup keydown',function () {


        if (IsEmail($('#email').val())) {
            $('#email-err').css('display', 'none');
            $('#email-error').css('display', 'none');

            $('#email').css('color','#3c6cde !important');
        }

    });


        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(!regex.test(email)) {
                return false;
            }else{
                return true;
            }
        }



        setCookie("timeout",0, 365);

    </script>



</body>
</html>
