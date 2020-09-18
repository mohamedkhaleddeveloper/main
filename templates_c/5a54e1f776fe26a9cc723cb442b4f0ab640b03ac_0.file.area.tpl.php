<?php /* Smarty version 3.1.24, created on 2017-07-13 16:14:36
         compiled from "./templates/admin/ar/area.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109502509959679c6c235595_28992175%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a54e1f776fe26a9cc723cb442b4f0ab640b03ac' => 
    array (
      0 => './templates/admin/ar/area.tpl',
      1 => 1499588828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109502509959679c6c235595_28992175',
  'variables' => 
  array (
    'iduser' => 0,
    'group' => 0,
    'group1' => 0,
    'area' => 0,
    'k' => 0,
    'area1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59679c6c2b16d8_61701758',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59679c6c2b16d8_61701758')) {
function content_59679c6c2b16d8_61701758 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109502509959679c6c235595_28992175';
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
                            المناطق <small>تسجيل منطقه جديده</small>
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
						<label>اسم المنطقه بالعربي </label>
						<input class="form-control" name="nameaa" id="nameaa" >
					</div>	
                                         <div class="form-group">
						<label> اسم المنطقه بالانجليزي</label>
						<input class="form-control" name="nameae" id="nameae" >
					</div>
                                        <div class="form-group">
						<label>المجموعه</label>
						<select class="form-control" name="groupa" id="groupa">
								<option value="">-- اختر من هنا -- </option>
							<?php
$_from = $_smarty_tpl->tpl_vars['group']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['group1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['group1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['group1']->value) {
$_smarty_tpl->tpl_vars['group1']->_loop = true;
$foreach_group1_Sav = $_smarty_tpl->tpl_vars['group1'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['group1']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['group1']->value[0];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['group1'] = $foreach_group1_Sav;
}
?>
							
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-left" type="submit" name="save">اضف</button>
					</div>	
				</form>

			  </div>	
			  	<?php if ($_smarty_tpl->tpl_vars['area']->value == null) {?>
                                     <br/><br/><br/><br/>
                                     <h3 class="text-center">لم يتم اضافه اي مناطق بالبرنامج</h3>
                                     <br/><br/><br/>
                                 <?php } else { ?>    
			  <div class="row">
                    <div class="col-lg-12">
					<br/>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-location-arrow"></i> المناطق
                            </li>
                        </ol>
                      
                    </div>
			 </div>

			 <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>الرقم</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>المجموعه</strong></td>
                                        <td><strong>تعديل </strong></td>
                                        <td><strong>حاله التفعيل </strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
                                        <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['area1']->value['nameaa'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['area1']->value['groupa'];?>
</td>
                                                <td><a href="update.php?act=areaup&ida=<?php echo $_smarty_tpl->tpl_vars['area1']->value['ida'];?>
"><button class="btn btn-primary" type="button"><i class="fa fa-pencil-square-o"></i|></button></a></td>
                                                <?php if ($_smarty_tpl->tpl_vars['area1']->value['deleta'] == 0) {?>
                                                        <td><form action="addition.php?act=addarea" method="POST">
                                                            <input type="hidden" name="ida" value="<?php echo $_smarty_tpl->tpl_vars['area1']->value['ida'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-success" name="active" value="مفعله">
                                                        </form> </td>
                                                <?php } else { ?>
                                                        <td><form action="addition.php?act=addarea" method="POST">
                                                            <input type="hidden" name="ida" value="<?php echo $_smarty_tpl->tpl_vars['area1']->value['ida'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-danger" name="unactive" value="غير مفعله">
                                                        </form> </td>
                                                <?php }?>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
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
                        url: 'area-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم المنطقه");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال هذه المنطقه من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#nameaa").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameae").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  اسم المنطقه بالانجليزي	"); 
                                    }
                                     if(data.msg == 4){
                                        $("#nameaa").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameae").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف انجليزيه	"); 
                                    }
                                     if(data.msg == 5){
                                        $("#nameae").removeAttr( "style", "border-color: #a94442" );
                                        $("#groupa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل المجموعه"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه منطقه");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه منطقة  : </strong> ";
                                        var name = $("#nameaa").val();
                                        var str2 = "<strong>   بنجاح  </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addarea";}, 2000);
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