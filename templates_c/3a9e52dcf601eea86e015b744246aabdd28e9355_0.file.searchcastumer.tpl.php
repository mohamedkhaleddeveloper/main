<?php /* Smarty version 3.1.24, created on 2017-07-11 12:46:29
         compiled from "./templates/admin/en/searchcastumer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10328733035964c8a5033dc0_20890413%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9e52dcf601eea86e015b744246aabdd28e9355' => 
    array (
      0 => './templates/admin/en/searchcastumer.tpl',
      1 => 1497306446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10328733035964c8a5033dc0_20890413',
  'variables' => 
  array (
    'message' => 0,
    'searchway' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5964c8a512dd07_56573471',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5964c8a512dd07_56573471')) {
function content_5964c8a512dd07_56573471 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10328733035964c8a5033dc0_20890413';
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
                            Clients <small> Find client </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-users"></i> Clients
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
                                        <?php if ($_smarty_tpl->tpl_vars['message']->value == null) {
} else { ?><div id="alert" class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div><?php }?>
			  		
				 <form class="form" action="addition.php?lang=en&act=getcastumer" method="POST">
					<div class="col-lg-3">
						
						<select class="form-control" name="searchway" id="searchway">
								<option value="">-- Choose -- </option>
                                                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['searchway']->value == 1) {?>selected<?php } else {
}?>>Castumer Name</option>
                                                                <option value="2"<?php if ($_smarty_tpl->tpl_vars['searchway']->value == 2) {?>selected<?php } else {
}?>> Mobile Number</option>
                                                </select>
                                            </div>
                                                <div class="form-group input-group col-lg-9">
                                <input type="text" class="form-control"  maxlength="10"  name="phone" placeholder="Mobile Number "  />
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>
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


</body>

</html>
<?php }
}
?>