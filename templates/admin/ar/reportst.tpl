{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

			
			
                <!-- Page Heading -->
                <div class="row">
				
				  <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i> تقرير مده محدده عن الصيانه
                            </li>
                        </ol>
			
				
                   
                        <br/><br/><br/><br/>
                  <div class="col-lg-12">
                     
                                       {if $message eq null}{else}<div id="alert" class="alert alert-danger">{$message}</div>{/if}	  		
				 <form class="form" action="addition.php?act=reportdate" method="POST">
					
                                            <div class="col-lg-3">
                                                <label>التاريخ من </label>
                                                <input type="text" class="form-control"  id="orderdate" name="invdateon" value="{if $datefrom eq Null}{else}{$datefrom}{/if}" placeholder="ادخل التاريخ ">
                                            </div>
                                            <div class="col-lg-3">
                                                <label>التاريخ إلى </label>
                                                <input type="text" class="form-control"  id="orderdate1" name="invdateto" value="{if $datefrom eq Null}{else}{$dateto}{/if}" placeholder="ادخل التاريخ ">
                                            </div>
                                                                <div class="col-lg-3">
						<label> نوع الفاتورة</label>
						<select class="form-control" name="paymentid" id="paymentid">
								<option value="">-- اختارطريقة الدفع --</option>
								<option value= "0">الكل</option>
                                                                 {foreach from=$payment  item=payment1}
                                                                     <option value="{$payment1.idp}">{$payment1.namepa}</option>
                                                    {/foreach}
                                                                
						</select>
                                                </div>
                                            <div class="col-lg-3">
                                                <label> </label>
                                                <div class="row"><button class="btn btn-lg btn-primary" type="submit">بحث</button></div>
                                            </div>
                              
                                
                           
					
				</form>			 			  <br/><br/><br/><br/><br/><br/><br/><br/>
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
      <script src="js/bootstrap-datepicker.js"></script>
	<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#orderdate').datepicker({
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
        
        	<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#orderdate1').datepicker({
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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	
</body>

</html>
