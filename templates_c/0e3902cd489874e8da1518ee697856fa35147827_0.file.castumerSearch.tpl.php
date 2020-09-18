<?php /* Smarty version 3.1.24, created on 2017-07-14 15:12:52
         compiled from "./templates/admin/ar/castumerSearch.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16379938045968df748ac381_91382657%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3902cd489874e8da1518ee697856fa35147827' => 
    array (
      0 => './templates/admin/ar/castumerSearch.tpl',
      1 => 1500045166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16379938045968df748ac381_91382657',
  'variables' => 
  array (
    'castumer' => 0,
    'iduser' => 0,
    'name' => 0,
    'namece' => 0,
    'phone' => 0,
    'area' => 0,
    'area1' => 0,
    'k' => 0,
    'castumer1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5968df7491de89_04427667',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5968df7491de89_04427667')) {
function content_5968df7491de89_04427667 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16379938045968df748ac381_91382657';
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
                                <i class="fa fa-user"></i> العملاء
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                
              <div class="col-lg-12">
                  <?php if ($_smarty_tpl->tpl_vars['castumer']->value == Null) {?>
                      <h1 class="text-center"">عفوا هذا العميل غير مسجل لدينا  يمكنك تسجيل العميل الان </h1>
                      
                      <div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
					<div class="form-group">
                                            <label>اسم العميل</label>
                                             <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
						<input class="form-control" name="nameca" id="nameca" value="<?php if ($_smarty_tpl->tpl_vars['name']->value == null) {
} else {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" >
					</div>
                                        <div class="form-group">
						<label>اسم العميل باللغه الانجليزيه</label>
						<input class="form-control" name="namece" id="namece"  value="<?php if ($_smarty_tpl->tpl_vars['namece']->value == null) {
} else {
echo $_smarty_tpl->tpl_vars['namece']->value;
}?>">
					</div>
					<div class="form-group">
						<label>جوال</label>
                                                <input class="form-control"  maxlength="10"  name="phone" id="phone" value="<?php if ($_smarty_tpl->tpl_vars['phone']->value == null) {
} else {
echo $_smarty_tpl->tpl_vars['phone']->value;
}?>">
					</div>
					<div class="form-group">
						<label>العنوان</label>
						<select class="form-control" name="area" id="area">
								<option value="">-- اختر من هنا -- </option>
							<?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['area1']->value['ida'];?>
"><?php echo $_smarty_tpl->tpl_vars['area1']->value['nameaa'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
						</select>
					</div>
					<button class="btn btn-primary btn-lg" type="submit" name="save" value="LOG IN">اضف</button>
				</form>			  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
                  <?php } else { ?>
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                    <td colspan="4"><strong>المعاملات</strong></td>
                                    <td colspan="2"><strong>الحسابات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
$_from = $_smarty_tpl->tpl_vars['castumer']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['castumer1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['castumer1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['castumer1']->value) {
$_smarty_tpl->tpl_vars['castumer1']->_loop = true;
$foreach_castumer1_Sav = $_smarty_tpl->tpl_vars['castumer1'];
?>
										<tr>
                                                                                        <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['castumer1']->value['nameca'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['castumer1']->value['phonec'];?>
</td>
											<td>
                                                                                            <?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
                                                                                                    <?php if ($_smarty_tpl->tpl_vars['area1']->value['ida'] == $_smarty_tpl->tpl_vars['castumer1']->value['areac']) {
echo $_smarty_tpl->tpl_vars['area1']->value['nameaa'];
}?>
                                                                                <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                                                                            
                                                                                        
                                                                                        </td>
                                                                                       
											<td colspan=><a href="addition.php?act=addorder&id=<?php echo $_smarty_tpl->tpl_vars['castumer1']->value['idc'];?>
" target="_blank"><button class="btn btn-default" type="button"> جـــــديــــدة</button></a></td>
                                                                                        <td colspan=><a href="addition.php?act=ordercastumer&st=0&idc=<?php echo $_smarty_tpl->tpl_vars['castumer1']->value['idc'];?>
" target="_blank"><button class="btn btn-warning" type="button"> جارية</button></a></td>
                                                                                        <td colspan=><a href="addition.php?act=ordercastumer&st=1&idc=<?php echo $_smarty_tpl->tpl_vars['castumer1']->value['idc'];?>
" target="_blank"><button class="btn btn-default" type="button"> انتهت</button></a></td>
                                                                                        <td colspan=><a href="addition.php?act=ordercastumer&st=2&idc=<?php echo $_smarty_tpl->tpl_vars['castumer1']->value['idc'];?>
" target="_blank"><button class="btn btn-danger" type="button"> ملغية</button></a></td>
                                                                                        <td><a href="addition.php?act=reportsca&payment=0&id=<?php echo $_smarty_tpl->tpl_vars['castumer1']->value['idc'];?>
" target="_blank"><button class="btn btn-success" type="button"> الفواتير</button></a></td>
                                                                                        <td><a href="addition.php?act=recredit&id=<?php echo $_smarty_tpl->tpl_vars['castumer1']->value['idc'];?>
" target="_blank"><button class="btn btn-success" type="button">إضافه سند قبض</button></a></td>
                                                                                </tr>
									<?php
$_smarty_tpl->tpl_vars['castumer1'] = $foreach_castumer1_Sav;
}
?>
                                                                      
                                </tbody>
                            </table>
			  
						  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
                                                  <?php }?>
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
                        url: 'castumer-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameca").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم باللغه العربيه");
                                    }
                                     if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم باللغه الانجليزي");
                                    }
                                     if(data.msg == 3){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف باللغه الانجليزي");
                                    }
                                     if(data.msg == 4){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
                                        $("#phone").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل رقم الجوال"); 
                                    }
                                    if(data.msg == 5){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
                                        $("#phone").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل ارقام"); 
                                    } 
                                    if(data.msg == 6){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
                                        $("#phone").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال هذا الرقم مسبقا "); 
                                    } 
                                    if(data.msg == 7){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
					$("#phone").removeAttr( "style", "border-color: #a94442" );
                                        $("#area").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك اختر المنطقه"); 
                                    } 
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-left");
                                        $( "#alert" ).html("فشل اضافه العميل");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه العميل : </strong> ";
                                        var name = $("#nameca").val();
                                        var str2 = "<strong> شكرا </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
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