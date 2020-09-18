
{if $en eq en}
    {include file="headen.tpl" title=EtagCP}
    <div id="wrapper"> 
        <h2 class="text-left"><a href = "#">ALSUBTAIN Campany <i class="fa fa-cogs" aria-hidden="true"></i></a></h2>
            <h3><a href = "login.php">عربي</a></h3>
    </div>
    <div id="page-wrapper">
        <div class="container-fluid ">
            <div id="sent-form-msg" align="center"></div>  
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="row">
                    <div  id="login1" class="panel panel-primary text-left">
                        <div  id="login1" class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                        </div>
                        <div class="panel-body"> 
                        <div id="alert" align="center"></div>  
                        <form id="login" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                        <div class="form-group ">
                        <label>Mobile Number </label>
                        <input class="form-control text-left" name="username" id="username"  type="text" placeholder="Mobile Number">
                        </div>	
                        <div class="form-group">
                        <label>password</label>
                        <input class="form-control text-left" name="password" id="password" type="password" placeholder="Password">
                        </div>	
                        <div class="form-group">
                        <button class="btn btn-primary btn-lg pull-right" type="submit" name="save">Sign In</button>
                        </div>	
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>


    <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Morris Charts JavaScript -->
        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>
        <script>
                   // $( "#phone" ).attr( "style", "border-color: #a94442" );
                   // $( "#name" ).attr( "style", "border-color: #a94442" );
                   // $( "#name" ).attr( "style", "border-color: #a94442" );
               $('#login').submit(function(event) {
                       event.preventDefault();
                       $.ajax({
                               type: 'POST',
                               url: 'login-ajax.php',
                               data: $(this).serialize(),
                               dataType: 'json',
                               success: function (data) {
                                       console.log(data);
                                           if(data.msg == 1){
                                               //document.getElementById("info1").innerHTML = "*";
                                               $("#username").attr( "style", "border-color: #a94442" );
                                               $("#alert").attr("class", "alert alert-danger text-left");
                                               $("#alert").html("Insert Your Phone Number please");
                                           }
                                            if(data.msg == 2){
                                               $("#username").removeAttr( "style", "border-color: #a94442" );
                                               $("#password").attr( "style", "border-color: #a94442" );
                                               $("#alert").attr("class", "alert alert-danger text-left");
                                               $("#alert").html("Insert Your Phone Password please"); 
                                           }
                                           if(data.msg == 3){
                                               $("#username").attr( "style", "border-color: #a94442" );
                                               $("#password").attr( "style", "border-color: #a94442" );
                                               $("#alert").attr("class", "alert alert-danger text-right");
                                               $("#alert").html("The login is invalid"); 
                                           }
                                           if(data.msg == 4){
                                               $("#username").attr( "style", "border-color: #a94442" );
                                               $("#password").attr( "style", "border-color: #a94442" );
                                               $("#alert").attr("class", "alert alert-danger text-right");
                                               $("#alert").html("The login is invalid"); 
                                           }
                                           if(data.msg == 50){
                                               $( "#alert" ).fadeOut();
                                               $('#castumer').fadeOut();
                                               $( "#alert" ).fadeIn();
                                               $( "#alert" ).attr("class", "alert alert-danger text-right");
                                               $( "#alert" ).html("error");
                                           }	
                                           if(data.msg == 0){
                                               $('#login').fadeOut();
                                               $('#login1').fadeOut();
                                               $( "#alert" ).fadeOut();
                                               var str1 = "<strong>  welcome Back  </strong> ";
                                               var name = data.user1;
                                               //var str2 = "<strong> </strong>";
                                               $( "#sent-form-msg" ).attr("class", "alert alert-success marginit");
                                               $( "#sent-form-msg" ).html(str1 + name);
                                               setTimeout(function () {
                                                   window.location.href = "index.php?lang=en";}, 2000);
                                           }
                               }
                       });
               });
        </script>

{else}
{include file="head.tpl" title=EtagCP}
  <div id="wrapper1">
      <h2><i class="fa fa-cogs" aria-hidden="true"></i>  مؤسسه السبطين التجاريه  </h2>
      <h3 class="text-left"><a href = "login.php?lang=en">English</a></h3>
</div>
        <div id="page-wrapper">

            <div class="container-fluid ">
                <div id="sent-form-msg" align="center"></div>  
                <div class="col-lg-4"></div>
               
            <div class="col-lg-4">
                <div class="row">
                                   <div  id="login1" class="panel panel-primary">
<div  id="login1" class="panel-heading">
<h3 class="panel-title">تسجيل دخول</h3>
</div>
<div class="panel-body"> 
    
                                           <div id="alert" align="center"></div>  
                                       <form id="login" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                              <div class="form-group">
                                                      <label>رقم الجوال</label>
                                                      <input class="form-control" name="username" id="username"  type="text" placeholder="رقم الجوال">
                                              </div>	
                                               <div class="form-group">
                                                      <label>كلمه المرور</label>
                                                      <input class="form-control" name="password" id="password" type="password" placeholder="كلمه المرور">
                                              </div>	
                                              <div class="form-group">
                                                      <button class="btn btn-primary btn-lg pull-left" type="submit" name="save">ادخل</button>
                                              </div>	
                                      </form>

            </div></div></div></div>
     <div class="col-lg-4"></div>

</div></div>
  
  
   <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
 <script>
            // $( "#phone" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
        $('#login').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'login-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#username").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم");
                                    }
                                     if(data.msg == 2){
                                        $("#username").removeAttr( "style", "border-color: #a94442" );
                                        $("#password").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل كلمه المرور"); 
                                    }
                                    if(data.msg == 3){
                                        $("#username").attr( "style", "border-color: #a94442" );
                                        $("#password").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("الاسم او كلمه المرور خاطئه"); 
                                    }
                                    if(data.msg == 4){
                                        $("#username").attr( "style", "border-color: #a94442" );
                                        $("#password").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("الاسم او كلمه المرور خاطئه تأكد من البيانات"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه مهنه");
                                    }	
                                    if(data.msg == 0){
                                        $('#login').fadeOut();
                                        $('#login1').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  مرحبا بك من جديد  </strong> ";
                                        var name = data.user;
                                        //var str2 = "<strong> </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success marginit");
                                        $( "#sent-form-msg" ).html(str1 + name);
                                        setTimeout(function () {
                                            window.location.href = "index.php";}, 2000);
                                    }
                        }
                });
        });
        </script>

	


  
  {/if}
  
      </body>
</html>