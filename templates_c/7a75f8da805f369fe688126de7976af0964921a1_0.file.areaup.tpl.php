<?php /* Smarty version 3.1.24, created on 2017-07-15 13:11:47
         compiled from "./templates/admin/en/areaup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:232848669596a1493170537_45133034%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a75f8da805f369fe688126de7976af0964921a1' => 
    array (
      0 => './templates/admin/en/areaup.tpl',
      1 => 1499584596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232848669596a1493170537_45133034',
  'variables' => 
  array (
    'area' => 0,
    'iduser' => 0,
    'area1' => 0,
    'group' => 0,
    'group1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_596a14931cc120_82342400',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596a14931cc120_82342400')) {
function content_596a14931cc120_82342400 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '232848669596a1493170537_45133034';
echo $_smarty_tpl->getSubTemplate ("admin/en/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Areas <small>Edite  </small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

            <div class="col-lg-12">

                    <div id="alert"></div>
                    <div id="sent-form-msg" align="center"></div>
                        <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
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
                                 <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
                                <input class="form-control" name="idarea" id="idarea" value="<?php echo $_smarty_tpl->tpl_vars['area1']->value['ida'];?>
" type="hidden" >
                                <div class="form-group">
                                        <label> Arabic Name</label>
                                        <input class="form-control" name="nameaa" id="nameaa" value="<?php echo $_smarty_tpl->tpl_vars['area1']->value['nameaa'];?>
">
                                </div>	
                                 <div class="form-group">
                                       <label>English Name</label>
                                        <input class="form-control" name="nameae" id="nameae" value="<?php echo $_smarty_tpl->tpl_vars['area1']->value['nameae'];?>
">
                                </div>	
                                
                                 <div class="form-group">
						<label>Groups</label>
						<select class="form-control" name="group" id="group">
								<option value="">-- Choose From Here-- </option>
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
								<option value="<?php echo $_smarty_tpl->tpl_vars['group1']->value[0];
if ($_smarty_tpl->tpl_vars['area1']->value['groupa'] == $_smarty_tpl->tpl_vars['group1']->value[0]) {?>" selected <?php } else { ?>" <?php }?>"><?php echo $_smarty_tpl->tpl_vars['group1']->value[0];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['group1'] = $foreach_group1_Sav;
}
?>
							
						</select>
					</div>
                               <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                <div class="form-group">
                                        <button class="btn btn-primary btn-lg pull-right" type="submit" name="save">Save</button>
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
                        url: 'areaup-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Arabice Name");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("This name already exists");
                                    }
                                     if(data.msg == 3){
                                        $("#nameaa").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameae").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("Please Insert English Name"); 
                                    }
                                     if(data.msg == 4){
                                        $("#nameaa").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameae").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("English Word Only"); 
                                    }
                                     if(data.msg == 5){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaa").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameae").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("This name already exists");
                                    }
                                    if(data.msg == 6){
                                        $("#nameae").removeAttr( "style", "border-color: #a94442" );
                                        $("#groupa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("Please Insert Group"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("Faild");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong> It has been Edite to the Area : </strong> ";
                                        var name = $("#nameae").val();
                                        var str2 = "<strong>  successfully Thank you  </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?lang=en&act=addarea";}, 2000);
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