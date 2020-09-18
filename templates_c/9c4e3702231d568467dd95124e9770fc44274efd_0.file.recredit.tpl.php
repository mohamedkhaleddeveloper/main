<?php /* Smarty version 3.1.24, created on 2017-07-12 13:11:06
         compiled from "./templates/admin/ar/recredit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4769775159661fea1c2cb8_60824062%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c4e3702231d568467dd95124e9770fc44274efd' => 
    array (
      0 => './templates/admin/ar/recredit.tpl',
      1 => 1497968416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4769775159661fea1c2cb8_60824062',
  'variables' => 
  array (
    'castumer' => 0,
    'castumer1' => 0,
    'castomerId' => 0,
    'payment' => 0,
    'payment1' => 0,
    'credit' => 0,
    'k' => 0,
    'credit1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59661fea2e7942_82033741',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59661fea2e7942_82033741')) {
function content_59661fea2e7942_82033741 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4769775159661fea1c2cb8_60824062';
echo $_smarty_tpl->getSubTemplate ("admin/ar/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i> سند قبض
                            </li>
                        </ol>
						<?php
$_from = $_smarty_tpl->tpl_vars['castumer']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['castumer1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['castumer1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['castumer1']->value) {
$_smarty_tpl->tpl_vars['castumer1']->_loop = true;
$foreach_castumer1_Sav = $_smarty_tpl->tpl_vars['castumer1'];
?>
						 <div class="col-lg-6">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['nameca'];?>

                            </div>
                        </div>  </div>
						<div class="col-lg-6">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['phonec'];?>

                            </div>
                        </div>  </div>
							<?php
$_smarty_tpl->tpl_vars['castumer1'] = $foreach_castumer1_Sav;
}
?>
						
						<h1 class="page-header">		
								
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="credit" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
                                              
				  <input class="form-control" name="castomerId" value="<?php echo $_smarty_tpl->tpl_vars['castomerId']->value;?>
"  type="hidden">
                                               	 <div class="col-lg-6">
						<label>تاريخ  السند</label>
                                                  <input type="text" class="form-control"  id="orderdate" name="orderdate" >
                                                 </div>
                                               
                                                 <div class="col-lg-6">
						<label>  المبلغ</label>
                                                  <input type="text" class="form-control"  id="price" name="price" >
                                                  <label> </label>
                                                 </div>
                                     
                                                 <div class="form-group">
						<label>طريقه الدفع</label>
                                                <div class="col-lg-12">
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['payment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['payment1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['payment1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['payment1']->value) {
$_smarty_tpl->tpl_vars['payment1']->_loop = true;
$foreach_payment1_Sav = $_smarty_tpl->tpl_vars['payment1'];
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['payment1']->value['idp'] == 5) {
}?>
                                                        <?php if ($_smarty_tpl->tpl_vars['payment1']->value['namepe'] == 'visa') {?>
                                                    <div class="col-lg-1 text-center">
                                                       <label><i class='fa fa-cc-visa fa-1x blue'></i></label>  <label ><?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
</label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['numberp'];?>
/<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
" type="radio">
                                                    </div>
                                                        <?php }?>
                                                         <?php if ($_smarty_tpl->tpl_vars['payment1']->value['namepe'] == 'master card') {?>
                                                     <div class="col-lg-1 text-center">
                                                       <label><i class='fa fa-cc-mastercard fa-1x'></i></label> <label >ماستر</label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['numberp'];?>
/<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"  type="radio">
                                                    </div>
                                                         <?php }?>
                                                         <?php if ($_smarty_tpl->tpl_vars['payment1']->value['namepe'] == 'cash') {?>
                                                     <div class="col-lg-1 text-center">
                                                       <label ><?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
</label>
                                                       <label><i class='fa fa-money fa-1x'></i></label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['numberp'];?>
/<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"  type="radio">
                                                    </div>
                                                      
                                                         <?php }?>
                                                         
                                                          <?php if ($_smarty_tpl->tpl_vars['payment1']->value['namepe'] == 'mada') {?>
                                                     <div class="col-lg-1 text-center">
                                                       <label><i class='fa fa-credit-card fa-1x mada'></i></label> <label ><?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
</label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['numberp'];?>
/<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"  type="radio">
                                                    </div>
                                                    <?php }?>      
                                                    <?php
$_smarty_tpl->tpl_vars['payment1'] = $foreach_payment1_Sav;
}
?>
                                                    
                                                     <div class="col-lg-1 text-center">
                                                       <label><i class='fa fa-university fa-1x'></i></label> <label >بنك</label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment"  value="0/541"  type="radio">
                                                    </div>
                                                    <div class="col-lg-12 text-right">
                                                       
                                                    <label>الإجمالي</label>
						<input class="form-control" name="total1" id="total1" readonly>
                                                 <br/>
                                                </div>
					</div>   
					
                                                </div>
						
					
                                                 <div class="col-lg-12 text-right" id ="transarea2" style="display: none;">
                                                    
                                                     <div class="col-lg-4">
                                                        <label> تاريخ الشيك</label>
                                                         <input type="text" class="form-control"  id="bankdate" name="bankdate" >
                                                     </div>
                                                     <div class="col-lg-4">
                                                        <label> رقم الشيك</label>
                                                         <input type="text" class="form-control"  id="checkno" name="checkno" >
                                                     </div>
                                                     <div class="col-lg-4">
                                                        <label>  اسم البنك</label>
                                                         <input type="text" class="form-control"  id="bankename" name="bankname" >
                                                     </div>
                                                 </div>
                                              
                                         <div class="col-lg-12 text-right">
                                                     
						<label>الملاحظات</label>
						<textarea class="form-control" rows="3" name="note"></textarea>
                                                 <br/>
					</div>
                                                
                                                 <div class="col-lg-1 row pull-left marginit">
                                                     <label> </label>
						<button class="btn btn-primary btn-lg " type="submit" name="save" value="LOG IN">اضف سند جديد</button>
                                                 <label> </label>
                                                </div>
							

                                         
					
				</form>			  
			
				
  <hr/>

            </div>    </div>
            <!-- /.container-fluid -->
           
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['credit']->value;
$_tmp1=ob_get_clean();
if ($_tmp1 == " ") {?>
                <div class="alert alert-danger text-center"><h2>لا يوجد سندات قبض</h2></div> 
            <?php } else { ?>
             <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                          <td><strong> م </strong></td>
                                        <td><strong>رقم السند </strong></td>
                                          <td><strong>  طباعة بالشعار</strong></td>
                                           <td><strong> طباعة بدون الشعار</strong></td>
										
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['credit']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['credit1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['credit1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['credit1']->value) {
$_smarty_tpl->tpl_vars['credit1']->_loop = true;
$foreach_credit1_Sav = $_smarty_tpl->tpl_vars['credit1'];
?>
                                        <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['credit1']->value['idcr'];?>
</td>
                                                <td><a href="addition.php?act=reportcridt&idcr=<?php echo $_smarty_tpl->tpl_vars['credit1']->value['idcr'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['castomerId']->value;?>
"><button class="btn btn-primary" type="button"><i class="fa fa-print"></i|></button></a></td>
                                                <td><a href="addition.php?act=reportcridt&idcr=<?php echo $_smarty_tpl->tpl_vars['credit1']->value['idcr'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['castomerId']->value;?>
&print=1"><button class="btn btn-primary" type="button"><i class="fa fa-print"></i|></button></a></td>

                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['credit1'] = $foreach_credit1_Sav;
}
?>
                                </tbody>
                            </table>
                                    <?php }?>
            
            

          
    
                                                
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
 

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
      
      
    <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $("#price").keyup(function(){
                var price   =  $("#price").val();
                                   
                                $( "input" ).on( "click", function() {
                                    var pricei = parseInt(price);
                                    var value =  $( "input:checked" ).val();
                                    var value1 = value.split("/");
                                    var valueP = value1[0];
                                    var valueid = value1[1];
                                    if(valueid === "541"){
                                        $("#transarea2").show("slow");
                                         $("#total").val(pricei);
                                    }else{
                                        $("#transarea2").hide("hide");
                                    }
                                    if(valueP === 0){
                                        $("#total").val(pricei);
                                    }
                                    var percent = (pricei * valueP) /100;
                                    var sum1 =  pricei - percent;
                                    $("#total1").val(sum1);
                                   
                                }); 	
        });
    });
<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
            
            
            $( "#service" ).change(function() {
                    if($( this ).val() == 3){
                        $( "#transarea2" ).show("slow");
                    }else{
                        $( "#transarea2" ).hide("slow");
                    }
            });
            
             $( "#service" ).change(function() {
                    if($( this ).val() == 4){
                        $( "#md" ).show("slow");
                    }else{
                        $( "#md" ).hide("slow");
                    }
            });
            
            
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
                
                if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#bankdate').datepicker({
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
	<?php echo '</script'; ?>
>
    
    

    <!-- Morris Charts JavaScript -->
    <?php echo '<script'; ?>
 src="js/plugins/morris/raphael.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/plugins/morris/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/plugins/morris/morris-data.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
 

            // $( "#phone" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
        $('#credit').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'credit-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل التاريخ");
                                    }
                                    if(data.msg == 2){
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#price").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل المبلغ "); 
                                    }
                                     if(data.msg == 3){
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#price").removeAttr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html(" من فضلك ادخل المبلغ ارقام فقط"); 
                                    }                                   
                                    if(data.msg == 4){
                                        $("#price").removeAttr( "style", "border-color: #a94442" );
                                        $("#payment").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل طريقه الدفع "); 
                                    } 
                                    if(data.msg == 5){
                                        $("#price").removeAttr( "style", "border-color: #a94442" );
                                        $("#payment").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من وجود الطريقه"); 
                                    } 
                                    if(data.msg == 6){
                                        $("#payment").removeAttr( "style", "border-color: #a94442" );
                                        $("#bankdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل تاريخ الشيك "); 
                                    } 
                                    if(data.msg == 7){
                                        $("#payment").removeAttr( "style", "border-color: #a94442" );
                                        $("#checkno").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من وجود الطريقه  "); 
                                    } 
                                    if(data.msg == 8){
                                        $("#payment").removeAttr( "style", "border-color: #a94442" );
                                        $("#bankname").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم البنك "); 
                                    } 
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#credit').fadeOut();
										$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-left");
                                        $( "#alert" ).html("فشل اضافه المعامله");
                                    }	
                                    if(data.msg == 0){
                                        $('#credit').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong> تم إضافه السند بنجاح</strong> ";
                                        var name = $("#name").val();
                                        var str2 = "<strong> شكرا لك </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str2 + str1);
                                            setTimeout(function () {
                                            window.location.href = "index.php";}, 2000);
                                    }
                        }
                });
        });
        <?php echo '</script'; ?>
>
	
	
</body>

</html>
<?php }
}
?>