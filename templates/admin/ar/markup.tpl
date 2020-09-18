{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ماركات  <small> تعديل </small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                     {foreach from=$mark key=k item=mark1}
                                     <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                     <input class="form-control" name="idmark" id="idu" value="{$mark1.idmark}" type="hidden" >
					<div class="form-group">
						<label> اسم الماركة بالعربي </label>
						<input class="form-control" name="namemarka" id="namemarka" value="{$mark1.namemarka}" >
					</div>	
                                         <div class="form-group">
						<label> اسم الماركة بالاتجليزي </label>
						<input class="form-control" name="namemarke" id="namemarke" value="{$mark1.namemarke}">
					</div>
                                         {/foreach}
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-left" type="submit" name="save">حفظ</button>
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
                        url: 'markup-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namemarka").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("من فضلك ادخل الاسم");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namemarka").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                         $("#alert").html("تم ادخال الاسم من قبل"); 
                                    }
                                     if(data.msg == 3){
                                        $("#namemarka").removeAttr( "style", "border-color: #a94442" );
                                        $("#namemarke").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("من فضلك ادخل الاسم بالانجليزي"); 
                                    }
                                     if(data.msg == 4){
                                        $("#namemarka").removeAttr( "style", "border-color: #a94442" );
                                        $("#namemarke").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("بالحروف الانجليزية فقط "); 
                                    }
                                    if(data.msg == 5){
                                        $("#namemarka").removeAttr( "style", "border-color: #a94442" );
                                        $("#namemarke").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("تم ادخال الاسم من قبل"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل في اضافة الماركة");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافة ماركة  : </strong> ";
                                        var name = $("#namemarka").val();
                                        var str2 = "<strong> بنجاح  </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addmark";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
	
</body>

</html>
