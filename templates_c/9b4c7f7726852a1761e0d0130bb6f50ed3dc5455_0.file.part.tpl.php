<?php /* Smarty version 3.1.24, created on 2017-07-12 08:10:36
         compiled from "./templates/admin/ar/part.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18632418685965d97c861277_23827167%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b4c7f7726852a1761e0d0130bb6f50ed3dc5455' => 
    array (
      0 => './templates/admin/ar/part.tpl',
      1 => 1485937002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18632418685965d97c861277_23827167',
  'variables' => 
  array (
    'castumer' => 0,
    'castumer1' => 0,
    'areaCastumer' => 0,
    'ido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5965d97c8e3242_53230473',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5965d97c8e3242_53230473')) {
function content_5965d97c8e3242_53230473 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18632418685965d97c861277_23827167';
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
                                <i class="fa fa-fw fa-file"></i> إضافه قطعه غيار
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
                            <div class="col-lg-12">
                                     <div class="col-lg-3">                
					<div class="form-group">
						<label> اسم الشركه</label>
						<input class="form-control" name="company" id="company" >
					</div>
                                    </div>
                                <div class="col-lg-3">                
					<div class="form-group">
						<label> اسم الشركه باللغه الانجليزيه</label>
						<input class="form-control" name="companye" id="companye" >
					</div>
                                    </div>
                                    <div class="col-lg-3">                
					<div class="form-group">
						<label>رقم الفاتوره</label>
						<input class="form-control" name="bill" id="bill" >
					</div>
                                    </div>
                                    <div class="col-lg-3">        
					<div class="form-group">
						<label>تاريخ الفاتوره</label>
						<input class="form-control" name="billdate" id="billdate"  >
					</div>
                                    </div>
                                    <div class="col-lg-3"> 
					<div class="form-group">
						<label>اسم القطعه باللغه العربيه</label>
						<input class="form-control" name="namepart" id="namepart" >
					</div>
                                    </div>
                                   <div class="col-lg-3"> 
					<div class="form-group">
						<label>اسم القطعه باللغه الانجليزيه</label>
						<input class="form-control" name="nameparte" id="nameparte" >
					</div>
                                    </div>
                                  <div class="col-lg-3"> 
					<div class="form-group">
						<label>رقم القطعه  </label>
						<input class="form-control" name="noparte" id="noparte" >
					</div>
                                    </div>
                                    <div class="col-lg-3"> 
					<div class="form-group">
						<label>سعر القطعه</label>
						<input class="form-control" name="price" id="price" >
					</div>
                                    </div>
                                      <div class="col-lg-3"> 
					<div class="form-group">
						<label>الخصم</label>
						<input class="form-control" name="discount" id="discount">
					</div>
                                    </div>  
                                    <div class="col-lg-9"> 
					<div class="form-group">
						<label>المجموع</label>
						<input class="form-control" name="total" id="total" readonly>
					</div>
                                    </div>  
                                  <div class="col-lg-12"> 
					<div class="form-group">
						<label>الملاحظات</label>
						<textarea class="form-control" rows="3" name="note"></textarea>
					</div>
                                    </div>  
                            </div>
					
					
					<div class="form-group">
						
					</div>
					<button class="btn btn-primary btn-lg pull-left" type="submit" name="save" value="LOG IN">إضافه قطعه الغيار </button>
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
	<?php echo '</script'; ?>
>
    
 
    <?php echo '<script'; ?>
 type="text/javascript">
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
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم الشركه");
                                    }
                                    if(data.msg == 2){
                                        $("#company").removeAttr( "style", "border-color: #a94442" );
                                        $("#companye").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html(" من فضلك ادخل اسم الشركه باللغه النجليزيه"); 
                                    }
                                     if(data.msg == 3){
                                        $("#companye").removeAttr( "style", "border-color: #a94442" );
                                        $("#bill").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل رقم الفانوره"); 
                                    }
                                    if(data.msg == 4){
                                        $("#bill").removeAttr( "style", "border-color: #a94442" );
                                        $("#billdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل تاريخ الفانوره"); 
                                    } 
                                    if(data.msg == 5){
                                        $("#billdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepart").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم القطعه "); 
                                    } 
                                    if(data.msg == 6){
                                        $("#namepart").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameparte").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم القطعه باللغه الانجليزيه "); 
                                    } 
                                    if(data.msg == 7){
                                        $("#nameparte").removeAttr( "style", "border-color: #a94442" );
                                        $("#price").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل سعر القطعه"); 
                                    } 
                                    if(data.msg == 8){
                                        $("#price").removeAttr( "style", "border-color: #a94442" );
                                        $("#discount").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الخصم "); 
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
                                        var str1 = "<strong> تم إضافه قطعه الغيار  بنجاح</strong> ";
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