{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{if $prs eq 3}
    {include file="tech/ar/nav.tpl"}
{else}
    {include file="admin/ar/nav.tpl"}
{/if}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i>الغاء المعامله
                            </li>
                        </ol>
						{foreach from=$castumer  item=castumer1}
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.nameca}
                            </div>
                        </div>  </div>
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.phonec}
                            </div>
                        </div>  </div>
							{/foreach}
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumer}
                            </div>
                        </div></div>
						
						<div class="col-lg-12">
						<div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">نوع الجهاز</h3>
                            </div>
                            <div class="panel-body text-center">
							{$deviceCastumer}
                            </div>
                        </div>  </div>
						<h1 class="page-header">		
								
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
						
							<input class="form-control" name="ido" id="name" value="{$ido}"  type="hidden">
                                                        
						
					<div class="form-group">
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">
                                                    <label>سبب الغاء المعامله</label>
                                                        <select class="form-control" name="reson" id="idtech" >
                                                                    <option value="">-- اختر من هنا -- </option>
                                                             {foreach from=$reson  item=reson1}
                                                                 <option value="{$reson1.idn}">{$reson1.namena}</option>
                                                            {/foreach}
                                                    </select>
                                                </div>
                                                 <div class="col-lg-5">
                                                    <label>الملاحظات</label>
                                                   <textarea class="form-control" rows="1" name="note"></textarea>
                                                    </div>
                                                 <div class="col-lg-2">
                                                      <label> &nbsp;</label> 
                                                    <button class="form-control btn btn-danger btn-mini" type="submit" name="save" value="LOG IN">الغاء </button>
                                                    </select>
                                                </div>    
                                            </div>
                                        </div>

					
				</form>			  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
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
                        url: 'cancleorder-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#idtech").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل   سبب إالغاء التفعيل");
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-left");
                                        $( "#alert" ).html("فشل تفعيل  المعامله");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم إالغاء المعامله بنجاح </strong> ";
                                        var name = $("#factor").val();
                                        var str2 = "<strong> شكرا </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str2 + str1);
                                            setTimeout(function () {
                                            window.location.href = "index.php";}, 2000);
                                    }
                        }
                });
        });
        </script>
	
</body>

</html>
