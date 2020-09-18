{include file="admin/en/head.tpl" title=EtagCP}
{include file="admin/en/header.tpl"}
{include file="admin/en/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Services <small> Edite </small
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                     {foreach from=$service  key=k item=service1}
                                      <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                      <input class="form-control" name="idserv" id="idu" value="{$service1.idserv}" type="hidden" >
					<div class="form-group">
						<label> Service Arabic name </label>
						<input class="form-control" name="nservicea" id="nservicea" value="{$service1.nservicea}">
					</div>	
                                         <div class="form-group">
						<label> Service English Name </label>
						<input class="form-control" name="nservicee" id="nservicee" value="{$service1.nservicee}">
					</div>	
                                     <div class="form-group">
                                     <label> Coast </label>
						<input class="form-control" name="coastserv" id="coastserv" value="{$service1.coast}">
					</div>	 
                                     {/foreach}
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-right" type="submit" name="save">Save</button>
					</div>	
				</form>

			  </div>	
		
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
        $('#castumer').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'serviceup-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nservicea").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("Please Insert Arabice Name");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nservicea").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-left");
                                        $("#alert").html("This name already exists");
                                    }
                                     if(data.msg == 3){
                                        $("#nservicea").removeAttr( "style", "border-color: #a94442" );
                                        $("#nservicee").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-left");
                                        $("#alert").html("Please Insert English Name"); 
                                    }
                                       if(data.msg == 4){
                                        $("#nservicea").removeAttr( "style", "border-color: #a94442" );
                                        $("#nservicee").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-left");
                                        $("#alert").html("English Word Only"); 
                                    }
                                     if(data.msg == 5){
                                        $("#nservicea").removeAttr( "style", "border-color: #a94442" );
                                        $("#nservicee").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-left");
                                        $("#alert").html("This name already exists");
                                    }
                                     if(data.msg == 6){
                                        $("#nservicea").removeAttr( "style", "border-color: #a94442" );
                                        $("#nservicee").removeAttr( "style", "border-color: #a94442" );
                                        $("#coastserv").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-left");
                                        $("#alert").html("Please Insert Coast");
                                    }
                                     if(data.msg == 7){
                                        $("#nservicea").removeAttr( "style", "border-color: #a94442" );
                                        $("#nservicee").removeAttr( "style", "border-color: #a94442" );
                                        $("#coastserv").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-left");
                                        $("#alert").html("Please Insert number only");
                                    }
                                          if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger");
                                        $( "#alert" ).html("Failed");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  It has been Edite to the Service : </strong> ";
                                        var name = $("#nservicee").val();
                                        var str2 = "<strong>  successfully Thank you  </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?lang=en&act=addservice";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
	
</body>

</html>
