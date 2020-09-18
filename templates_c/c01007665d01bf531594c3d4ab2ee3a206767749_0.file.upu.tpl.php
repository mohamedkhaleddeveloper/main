<?php /* Smarty version 3.1.24, created on 2019-09-16 12:00:01
         compiled from "./templates/admin/ar/upu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:294685d7f5d21d10337_97913568%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01007665d01bf531594c3d4ab2ee3a206767749' => 
    array (
      0 => './templates/admin/ar/upu.tpl',
      1 => 1498300952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294685d7f5d21d10337_97913568',
  'variables' => 
  array (
    'idm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d7f5d21df6ae2_52713479',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d7f5d21df6ae2_52713479')) {
function content_5d7f5d21df6ae2_52713479 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '294685d7f5d21d10337_97913568';
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
                            تحديث كلمة المرور
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
                                     <input class="form-control" name="idm" id="idm" type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
">
					<div class="form-group">
						<label>  كلمة المرور القديمه </label>
                                                <input class="form-control" name="ops" id="ops" type="password" >
					</div>	
                                         <div class="form-group">
						<label>    كلمة المرور الجديدة</label>
						<input class="form-control" name="nps" id="nps" type="password">
					</div>	
                                     <div class="form-group">
						<label>    كلمة المرور الجديده مرة اخرى</label>
						<input class="form-control" name="npsr" id="npsr" type="password">
					</div>	
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-left" type="submit" name="save">تحديث</button>
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
                        url: 'upu-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#ops").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل كلمة المرور القديمه");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#ops").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من كلمة المرور");
                                    }
                                     if(data.msg == 3){
                                        $("#ops").removeAttr( "style", "border-color: #a94442" );
                                        $("#nps").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل كلمة المرور الجديدة	"); 
                                    }
                                     if(data.msg == 4){
                                        $("#nps").removeAttr( "style", "border-color: #a94442" );
                                        $("#npsr").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل كلمة المرور الجديدة مرة اخرى"); 
                                    }
                                    if(data.msg == 5){
                                        $("#ops").removeAttr( "style", "border-color: #a94442" );
                                        $("#nps").attr( "style", "border-color: #a94442" );
                                        $("#npsr").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("كلمة المرور غير متطابقة"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه مهنه");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم تعديل كلمة المرور بنجاح: </strong> ";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1);
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