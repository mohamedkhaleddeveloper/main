<?php /* Smarty version 3.1.24, created on 2017-07-22 16:27:49
         compiled from "./templates/admin/ar/deviceup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:108532845959737d05654490_18279996%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a758b659a878a89516f9a399be348cf72c308e7e' => 
    array (
      0 => './templates/admin/ar/deviceup.tpl',
      1 => 1498143832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108532845959737d05654490_18279996',
  'variables' => 
  array (
    'device' => 0,
    'iduser' => 0,
    'device1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59737d056f4ea3_04606120',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59737d056f4ea3_04606120')) {
function content_59737d056f4ea3_04606120 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '108532845959737d05654490_18279996';
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
                            الأجهزة <small>تسجيل جهاز جديد</small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
                                      <?php
$_from = $_smarty_tpl->tpl_vars['device']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['device1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['device1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['device1']->value) {
$_smarty_tpl->tpl_vars['device1']->_loop = true;
$foreach_device1_Sav = $_smarty_tpl->tpl_vars['device1'];
?>
                                     <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
                                     <input class="form-control" name="idv" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['device1']->value['idv'];?>
" type="hidden" >
					<div class="form-group">
						<label>اسم الجهاز</label>
						<input class="form-control" name="nameva" id="nameva" value="<?php echo $_smarty_tpl->tpl_vars['device1']->value['nameva'];?>
">
					</div>	
                                         <div class="form-group">
						<label>اسم الجهاز باللغه الاتجليزي</label>
						<input class="form-control" name="nameve" id="nameve" value="<?php echo $_smarty_tpl->tpl_vars['device1']->value['nameve'];?>
">
					</div>	
                                          <?php
$_smarty_tpl->tpl_vars['device1'] = $foreach_device1_Sav;
}
?>
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-left" type="submit" name="save">احفظ</button>
					</div>	
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
                        url: 'deviceup-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameva").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم الجهاز");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameva").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال اسم الجهاز من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#nameva").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameve").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  اسم الجهاز بالانجليزي	"); 
                                    }
                                     if(data.msg == 4){
                                        $("#nameva").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameve").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف انجليزيه	"); 
                                    }
                                    if(data.msg == 5){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameva").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameve").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال اسم الجهاز من قبل");
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
										$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه جهاز");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه جهاز : </strong> ";
                                        var name = $("#nameva").val();
                                        var str2 = "<strong> بنجاح </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=adddevice";}, 2000);
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