{include file="admin/en/head.tpl" title=EtagCP}
{include file="admin/en/header.tpl"}
{include file="admin/en/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i> Add a piece parts
                            </li>
                        </ol>
						{foreach from=$castumer  item=castumer1}
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Name</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.namece}
                            </div>
                        </div>  </div>
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Mobile</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.phonec}
                            </div>
                        </div>  </div>
							{/foreach}
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Area</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumere}
                            </div>
                        </div></div>
						<h1 class="page-header">		
								
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="invoices" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
				<input class="form-control" name="ido" value="{$ido}"  type="hidden">
                            <div class="col-lg-12">
                                     <div class="col-lg-3">                
					<div class="form-group">
						<label> Campany Arabic Name </label>
						<input class="form-control" name="company" id="company" >
					</div>
                                    </div>
                                <div class="col-lg-3">                
					<div class="form-group">
						<label> Campany English Name</label>
						<input class="form-control" name="companye" id="companye" >
					</div>
                                    </div>
                                    <div class="col-lg-3">                
					<div class="form-group">
						<label>Bill Number</label>
						<input class="form-control" name="bill" id="bill" >
					</div>
                                    </div>
                                    <div class="col-lg-3">        
					<div class="form-group">
						<label> Bill Date</label>
						<input class="form-control" name="billdate" id="billdate"  >
					</div>
                                    </div>
                                    <div class="col-lg-3"> 
					<div class="form-group">
						<label> Part Arabic Name</label>
						<input class="form-control" name="namepart" id="namepart" >
					</div>
                                    </div>
                                   <div class="col-lg-3"> 
					<div class="form-group">
						<label> Part English Name </label>
						<input class="form-control" name="nameparte" id="nameparte" >
					</div>
                                    </div>
                                   <div class="col-lg-3"> 
					<div class="form-group">
						<label> Part  Number </label>
						<input class="form-control" name="noparte" id="noparte" >
					</div>
                                    </div>
                                    <div class="col-lg-3"> 
					<div class="form-group">
						<label> Price </label>
						<input class="form-control" name="price" id="price" >
					</div>
                                    </div>
                                      <div class="col-lg-3"> 
					<div class="form-group">
						<label> Discount </label>
						<input class="form-control" name="discount" id="discount">
					</div>
                                    </div>  
                                    <div class="col-lg-9"> 
					<div class="form-group">
						<label>Total</label>
						<input class="form-control" name="total" id="total" readonly>
					</div>
                                    </div>  
                                  <div class="col-lg-12"> 
					<div class="form-group">
						<label>Not</label>
						<textarea class="form-control" rows="3" name="note"></textarea>
					</div>
                                    </div>  
                            </div>
					
					
					<div class="form-group">
						
					</div>
					<button class="btn btn-primary btn-lg pull-right" type="submit" name="save" value="LOG IN"> Addition   </button>
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
      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
	<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#billdate').datepicker({
				format: 'yyyy-mm-dd'
			});
			
        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	</script>
    
 
    <script type="text/javascript">
    $(document).ready(function(){
        $("#price").keyup(function(){
                var price   =  $("#price").val();
                $("#discount").keyup(function(){
                        var discount   =  $("#discount").val();
                                        var pricei = parseInt(price);
                                        var discounti = parseInt(discount);
                                        var sum  = pricei - discounti;
                                        $("#total").val(sum);
                                    })
                        });
                });	
</script>


    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

	<script>
 

            // $( "#phone" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
        $('#invoices').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'part-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#company").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Company Arabic Name");
                                    }
                                    if(data.msg == 2){
                                        $("#company").removeAttr( "style", "border-color: #a94442" );
                                        $("#companye").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html(" Please Insert Company English Nameه"); 
                                    }
                                     if(data.msg == 3){
                                        $("#companye").removeAttr( "style", "border-color: #a94442" );
                                        $("#bill").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Bill Number"); 
                                    }
                                    if(data.msg == 4){
                                        $("#bill").removeAttr( "style", "border-color: #a94442" );
                                        $("#billdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Arabice Name Apart"); 
                                    } 
                                    if(data.msg == 5){
                                        $("#billdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepart").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("Please Insert Bill Date"); 
                                    } 
                                    if(data.msg == 6){
                                        $("#namepart").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameparte").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("Please Insert English Name Apart"); 
                                    } 
                                    if(data.msg == 7){
                                        $("#nameparte").removeAttr( "style", "border-color: #a94442" );
                                        $("#price").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Price"); 
                                    } 
                                    if(data.msg == 8){
                                        $("#price").removeAttr( "style", "border-color: #a94442" );
                                        $("#discount").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Discount"); 
                                    } 
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#invoices').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger");
                                        $( "#alert" ).html("Failed ");
                                    }	
                                    if(data.msg == 0){
                                        $('#invoices').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong> Part been added successfully thank you</strong> ";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1);
                                            setTimeout(function () {
                                            window.location.href = "index.php?lang=en";}, 2000);
                                    }
                        }
                });
        });
        </script>
	
</body>

</html>
