<?php /* Smarty version 3.1.24, created on 2017-07-11 08:38:14
         compiled from "./templates/admin/ar/cancelorder.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:116036879959648e766f7bd5_08075273%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e16dc725513869fbc1d436d8a26b55403802e34' => 
    array (
      0 => './templates/admin/ar/cancelorder.tpl',
      1 => 1499591006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116036879959648e766f7bd5_08075273',
  'variables' => 
  array (
    'prs' => 0,
    'castumer' => 0,
    'castumer1' => 0,
    'areaCastumer' => 0,
    'deviceCastumer' => 0,
    'ido' => 0,
    'reson' => 0,
    'reson1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59648e7676e737_65304108',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59648e7676e737_65304108')) {
function content_59648e7676e737_65304108 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '116036879959648e766f7bd5_08075273';
echo $_smarty_tpl->getSubTemplate ("admin/ar/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if ($_smarty_tpl->tpl_vars['prs']->value == 3) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("tech/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("admin/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i>الغاء المعامله
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
						
						<div class="col-lg-12">
						<div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">نوع الجهاز</h3>
                            </div>
                            <div class="panel-body text-center">
							<?php echo $_smarty_tpl->tpl_vars['deviceCastumer']->value;?>

                            </div>
                        </div>  </div>
						<h1 class="page-header">		
								
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
						
							<input class="form-control" name="ido" id="name" value="<?php echo $_smarty_tpl->tpl_vars['ido']->value;?>
"  type="hidden">
                                                        
						
					<div class="form-group">
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">
                                                    <label>سبب الغاء المعامله</label>
                                                        <select class="form-control" name="reson" id="idtech" >
                                                                    <option value="">-- اختر من هنا -- </option>
                                                             <?php
$_from = $_smarty_tpl->tpl_vars['reson']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['reson1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['reson1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['reson1']->value) {
$_smarty_tpl->tpl_vars['reson1']->_loop = true;
$foreach_reson1_Sav = $_smarty_tpl->tpl_vars['reson1'];
?>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['reson1']->value['idn'];?>
"><?php echo $_smarty_tpl->tpl_vars['reson1']->value['namena'];?>
</option>
                                                            <?php
$_smarty_tpl->tpl_vars['reson1'] = $foreach_reson1_Sav;
}
?>
                                                    </select>
                                                </div>
                                                 <div class="col-lg-5">
                                                    <label>الملاحظات</label>
                                                   <textarea class="form-control" rows="1" name="note"></textarea>
                                                    </div>
                                                 <div class="col-lg-2">
                                                      <label> &nbsp;</label> 
                                                    <button class="form-control btn btn-danger btn-mini" type="submit" name="save" value="LOG IN">الغاء </button>
                                                    </select>
                                                </div>    
                                            </div>
                                        </div>

					
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
                        url: 'cancleorder-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#idtech").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل   سبب إالغاء التفعيل");
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-left");
                                        $( "#alert" ).html("فشل تفعيل  المعامله");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم إالغاء المعامله بنجاح </strong> ";
                                        var name = $("#factor").val();
                                        var str2 = "<strong> شكرا </strong>";
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