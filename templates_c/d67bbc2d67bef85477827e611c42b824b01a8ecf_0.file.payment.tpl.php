<?php /* Smarty version 3.1.24, created on 2017-07-13 16:24:05
         compiled from "./templates/admin/ar/payment.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:117207771559679ea5ae2ab5_79712301%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd67bbc2d67bef85477827e611c42b824b01a8ecf' => 
    array (
      0 => './templates/admin/ar/payment.tpl',
      1 => 1498171612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117207771559679ea5ae2ab5_79712301',
  'variables' => 
  array (
    'iduser' => 0,
    'payment' => 0,
    'k' => 0,
    'payment1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59679ea5b64d30_83067519',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59679ea5b64d30_83067519')) {
function content_59679ea5b64d30_83067519 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '117207771559679ea5ae2ab5_79712301';
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
                        <h1 class="page-header">
                            طريقه دفع <small>إضافه طرق الدفع جديد </small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
                                      <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
					<div class="form-group">
						<label>اسم طريقه الدفع</label>
						<input class="form-control" name="namepa" id="namepa" >
					</div>	
                                         <div class="form-group">
						<label>اسم طريقه الدفع باللغه الانجليزيه</label>
						<input class="form-control" name="namepe" id="namepe" >
					</div>	
                                        <div class="form-group">
						<label>ادخل الرقم علما بأن الرقم سيتم حسابه بنسبه  %</label>
						<input class="form-control" name="numberp" id="numberp" >
					</div>	
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-left" type="submit" name="save">اضف</button>
					</div>	
				</form>

			  </div>	
			  	<?php if ($_smarty_tpl->tpl_vars['payment']->value == null) {?>
                                     <br/><br/><br/><br/>
                                     <h3 class="text-center">لم يتم اضافه اي طريقه دفع  بالبرنامج</h3>
                                     <br/><br/><br/>
                                 <?php } else { ?>    
			  <div class="row">
                    <div class="col-lg-12">
					<br/>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-credit-card"></i> طرق الدفع
                            </li>
                        </ol>
                      
                    </div>
			 </div>

			 <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>الرقم</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>تعديل </strong></td>
                                        <td><strong>حاله التفعيل </strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['payment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['payment1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['payment1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['payment1']->value) {
$_smarty_tpl->tpl_vars['payment1']->_loop = true;
$foreach_payment1_Sav = $_smarty_tpl->tpl_vars['payment1'];
?>
                                        <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
</td>
                                                 <td><a href="update.php?act=paymentup&idp=<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"><button class="btn btn-primary" type="button"><i class="fa fa-pencil-square-o"></i|></button></a></td>
                                                    <?php if ($_smarty_tpl->tpl_vars['payment1']->value['deletp'] == 0) {?>
                                                        <td><form action="addition.php?act=addpayment" method="POST">
                                                            <input type="hidden" name="idp" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-success" name="active" value="مفعله">
                                                        </form> </td>
                                                <?php } else { ?>
                                                        <td><form action="addition.php?act=addpayment" method="POST">
                                                            <input type="hidden" name="idp" value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-danger" name="unactive" value="غير مفعله">
                                                        </form> </td>
                                                <?php }?>
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['payment1'] = $foreach_payment1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>

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
                        url: 'payment-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namepa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namepa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال الاسم  من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#namepa").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepe").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  الاسم  بالانجليزي	"); 
                                    }
                                     if(data.msg == 4){
                                        $("#namepa").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepe").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف انجليزيه	"); 
                                    }
                                    if(data.msg == 5){
                                        $("#namepa").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepe").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال الاسم الانجليزيه  من قبل	"); 
                                    }
                                      if(data.msg == 6){
                                        $("#namepe").removeAttr( "style", "border-color: #a94442" );
                                        $("#numberp").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل النسبه	"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه طريقه الدفع");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه طريقه الدفع : </strong> ";
                                        var name = $("#namepa").val();
                                        var str2 = "<strong> بنجاح </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addpayment";}, 2000);
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