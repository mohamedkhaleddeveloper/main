{include file="admin/en/head.tpl" title=EtagCP}
{include file="admin/en/header.tpl"}
{include file="admin/en/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ports <small>Edite </small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                        {foreach from=$airport  key=k item=airport1}
                                        <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                         <input class="form-control" name="idair" id="idu" value="{$airport1.idair}" type="hidden" >
					<div class="form-group">
						<label> Port Arabic Name</label>
						<input class="form-control" name="nameaira" id="nameaira" value="{$airport1.nameaira}">
					</div>	
                                         <div class="form-group">
						<label>Port English Name</label>
						<input class="form-control" name="nameaire" id="nameaire" value="{$airport1.nameaire}">
					</div>	
                                         {/foreach}
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-right" type="submit" name="save">addition</button>
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
                        url: 'airportup-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaira").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Arabice Name");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaira").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                         $("#alert").html("This name already exists");
                                    }
                                     if(data.msg == 3){
                                        $("#nameaira").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameaire").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert English Name");  
                                    }
                                     if(data.msg == 4){
                                        $("#nameaira").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameaire").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("English Word Only");
                                    }
                                    if(data.msg == 5){
                                        $("#nameaira").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameaire").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("This name already exists"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger ");
                                        $( "#alert" ).html("Failed");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  It has been Edite to the Area : </strong> ";
                                        var name = $("#nameaire").val();
                                        var str2 = "<strong> successfully Thank you  </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?lang=en&act=addairport";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
	
</body>

</html>
