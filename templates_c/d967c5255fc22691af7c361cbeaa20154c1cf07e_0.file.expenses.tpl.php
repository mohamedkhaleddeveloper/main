<?php /* Smarty version 3.1.24, created on 2017-07-13 18:11:38
         compiled from "./templates/admin/ar/expenses.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13433988885967b7da52faf0_84192499%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd967c5255fc22691af7c361cbeaa20154c1cf07e' => 
    array (
      0 => './templates/admin/ar/expenses.tpl',
      1 => 1499969495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13433988885967b7da52faf0_84192499',
  'variables' => 
  array (
    'emplyee' => 0,
    'emplyee1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5967b7da576078_99747238',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5967b7da576078_99747238')) {
function content_5967b7da576078_99747238 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13433988885967b7da52faf0_84192499';
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
                                <i class="fa fa-fw fa-file"></i> مصاريف
                            </li>
                        </ol>
						
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
						
					<div class="form-group">
                                            <div class="col-lg-12">
                                                <div class="col-lg-2">
						<label>الأسم </label>
						<select class="form-control" name="emplyee" id="emplyee1">
								<option value="">-- اختر من هنا -- </option>
							<?php
$_from = $_smarty_tpl->tpl_vars['emplyee']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['emplyee1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['emplyee1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['emplyee1']->value) {
$_smarty_tpl->tpl_vars['emplyee1']->_loop = true;
$foreach_emplyee1_Sav = $_smarty_tpl->tpl_vars['emplyee1'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['emplyee1']->value['idm'];?>
"><?php echo $_smarty_tpl->tpl_vars['emplyee1']->value['namema'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['emplyee1'] = $foreach_emplyee1_Sav;
}
?>
						</select>
                                                </div>
				
                                                 <div class="col-lg-2">
						<label>رقم الفاتورة</label>
                                                  <input class="form-control" name="billex" id="billex" >
                                                 </div>
                                                 <div class="col-lg-2">
						<label>تاريخ  الفاتورة</label>
                                                  <input type="text" class="form-control"  id="orderdate" name="orderdate" >
                                                 </div>
                                                 <div class="col-lg-2">
						<label>المبلغ</label>
                                                  <input class="form-control" name="price" id="price" >
                                                 </div>
							<div class="col-lg-2">
						<label>الخصم</label>
                                                  <input class="form-control" name="discount" id="discount" >
                                                 </div>
						<div class="col-lg-2">
						<label>الاجمالي</label>
                                                  <input class="form-control" name="total" id="total" readonly >
                                                 </div>
                                                
						
                                                
                                          
                                                <div class="col-lg-12">
						<label>الملاحظات</label>
                                                <textarea class="form-control" rows="2" name="note"></textarea>
                                                </div>
						
							</div></div>

				
					 <br/><br/><br/><br/> <br/><br/><br/><br/>
					<button class="btn btn-primary btn-lg" type="submit" name="save" value="LOG IN">اضف عمليه جديده</button>
                                        <br/><br/>
				</form>			  
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
        $('#castumer').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'expenses-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#emplyee1").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك الاسم");
                                    }
                                     if(data.msg == 2){
                                        $("#emplyee1").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل التاريخ"); 
                                    } 
                                    
                                     if(data.msg == 3){
                                        $("#emplyee1").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#price").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل المبلغ"); 
                                    } 
                                    if(data.msg == 4){
                                        $("#emplyee1").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#price").removeAttr( "style", "border-color: #a94442" );
                                        $("#discount").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل رقم الخصم"); 
                                    } 
                                    
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
										$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-left");
                                        $( "#alert" ).html("فشل اضافه المصروف");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه المصروف بنجاح</strong> ";
                                        var name = $("#name").val();
                                        var str2 = "<strong> شكرا </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str2 + str1);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=expenses";}, 2000);
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