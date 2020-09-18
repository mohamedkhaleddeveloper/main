<?php /* Smarty version 3.1.24, created on 2017-07-11 17:27:23
         compiled from "./templates/admin/ar/finishorder.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:122770209059650a7b654b93_59291631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2873088d320ba57c340b50be14284bd74eb194e' => 
    array (
      0 => './templates/admin/ar/finishorder.tpl',
      1 => 1497461634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122770209059650a7b654b93_59291631',
  'variables' => 
  array (
    'castumer' => 0,
    'castumer1' => 0,
    'areaCastumer' => 0,
    'ido' => 0,
    'pro' => 0,
    'payment' => 0,
    'payment1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59650a7b714ad4_40394668',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59650a7b714ad4_40394668')) {
function content_59650a7b714ad4_40394668 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '122770209059650a7b654b93_59291631';
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
                                <i class="fa fa-fw fa-file"></i> معامله جديده
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
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['nameca'];?>

                            </div>
                        </div>  </div>
						<div class="col-lg-4">
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
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['areaCastumer']->value;?>

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
				 <form id="invoices" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
				<input class="form-control" name="ido" value="<?php echo $_smarty_tpl->tpl_vars['ido']->value;?>
"  type="hidden">
                                <input class="form-control" name="pro" value="<?php echo $_smarty_tpl->tpl_vars['pro']->value;?>
"  type="hidden">
                            <div class="col-lg-12">
                                    <div class="col-lg-3">                
					<div class="form-group">
						<label>رقم الفاتوره</label>
						<input class="form-control" name="bill" id="bill" >
					</div>
                                    </div>
                                <div class="col-lg-2">
						<label>التاريخ</label>
                                                  <input type="text" class="form-control"  id="orderdate" name="orderdate" >
                                </div>
                                    <div class="col-lg-2">        
					<div class="form-group">
						<label>المبلغ</label>
						<input class="form-control" name="price" id="price" >
					</div>
                                    </div>
                                    <div class="col-lg-2"> 
					<div class="form-group">
						<label>الخصم</label>
						<input class="form-control" name="discount" id="discount" >
					</div>
                                    </div>
                                    <div class="col-lg-3"> 
					<div class="form-group">
						<label>المجموع</label>
						<input class="form-control" name="total" id="total" readonly>
					</div>
                                    </div>  
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
                                                        <?php if ($_smarty_tpl->tpl_vars['payment1']->value['namepe'] == 'visa') {?>
                                                    <div class="col-lg-1 text-center">
                                                       <label ><?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
</label>
                                                       <label><i class='fa fa-cc-visa fa-3x blue'></i></label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['numberp'];?>
/<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
" type="radio">
                                                    </div>
                                                        <?php }?>
                                                         <?php if ($_smarty_tpl->tpl_vars['payment1']->value['namepe'] == 'master card') {?>
                                                     <div class="col-lg-1 text-center">
                                                       <label ><?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
</label>
                                                       <label><i class='fa fa-cc-mastercard fa-3x'></i></label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['numberp'];?>
/<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"  type="radio">
                                                    </div>
                                                         <?php }?>
                                                         <?php if ($_smarty_tpl->tpl_vars['payment1']->value['namepe'] == 'cash') {?>
                                                     <div class="col-lg-1 text-center">
                                                       <label ><?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
</label>
                                                       <label><i class='fa fa-money fa-3x'></i></label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['numberp'];?>
/<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"  type="radio">
                                                    </div>
                                                      
                                                         <?php }?>
                                                         
                                                          <?php if ($_smarty_tpl->tpl_vars['payment1']->value['namepe'] == 'mada') {?>
                                                     <div class="col-lg-1 text-center">
                                                        <label ><?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
</label>
                                                       <label><i class='fa fa-credit-card fa-3x mada'></i></label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['numberp'];?>
/<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"  type="radio">
                                                    </div>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['payment1']->value['namepe'] == 'credit') {?>
                                                         <div class="col-lg-1 text-center">
                                                        <label ><?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
</label>
                                                       <label><i class='fa fa-money fa-3x madared'></i></label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['numberp'];?>
/<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"  type="radio">
                                                    </div>
                                                         <?php }?>
                                                           
                                                    <?php
$_smarty_tpl->tpl_vars['payment1'] = $foreach_payment1_Sav;
}
?>
                                                </div>
					</div>
                                        <div class="form-group">
						<label>اجمالي</label>
						<input class="form-control" name="total1" id="total1" readonly>
					</div>   
					<div class="form-group">
						<label>الملاحظات</label>
						<textarea class="form-control" rows="3" name="note"></textarea>
					</div>
					<button class="btn btn-success btn-lg" type="submit" name="save" value="LOG IN">انهاء المعامله</button>
				</form>			  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
			  </div>					

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
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
>
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
	<?php echo '</script'; ?>
>
    
    

    
    <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $("#price").keyup(function(){
                var price   =  $("#price").val();
                $("#discount").keyup(function(){
                        var discount   =  $("#discount").val();
                                    $("#discount").change(function(){
                                        var pricei = parseInt(price);
                                        var discounti = parseInt(discount);
                                        var sum  = pricei - discounti;
                                        $("#total").val(sum);
                                    });
                                $( "input" ).on( "click", function() {
                                    var pricei = parseInt(price);
                                    var discounti = parseInt(discount);
                                    var sum  = pricei - discounti;
                                    var value =  $( "input:checked" ).val();
                                    var value1 = value.split("/");
                                    var valueP = value1[0];
                                    if(valueP === 0){
                                        $("#total").val(sum);
                                    }
                                    var percent = (sum * valueP) /100;
                                    var sum1 =  sum - percent;
                                    $("#total1").val(sum1);
                                }); 
                });	
        });
    });
<?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
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
        $('#invoices').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'invoices-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#bill").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل رقم الفانوره");
                                    }
                                    if(data.msg == 2){
                                        $("#discount").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل تاريخ الفاتورة "); 
                                    }
                                     if(data.msg == 3){
                                        $("#bill").removeAttr( "style", "border-color: #a94442" );
                                        $("#price").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل المبلغ ويجب ان يكون ارقام فقط "); 
                                    }
                                    if(data.msg == 4){
                                        $("#price").removeAttr( "style", "border-color: #a94442" );
                                        $("#discount").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الخصم ويجب ان يكون ارقام فقط"); 
                                    } 
                                     
                                    if(data.msg == 5){
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#payment").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل طريقه الدفع "); 
                                    } 
                                    if(data.msg == 6){
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#payment").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل طريقه الدفع "); 
                                    } 
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#invoices').fadeOut();
										$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-left");
                                        $( "#alert" ).html("فشل اضافه المعامله");
                                    }	
                                    if(data.msg == 0){
                                        $('#invoices').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong> تم انهاء المعامله بنجاح</strong> ";
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