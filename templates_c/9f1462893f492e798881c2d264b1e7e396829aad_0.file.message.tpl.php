<?php /* Smarty version 3.1.24, created on 2017-07-11 21:14:09
         compiled from "./templates/message.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19799398359653fa14c62f2_06739782%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f1462893f492e798881c2d264b1e7e396829aad' => 
    array (
      0 => './templates/message.tpl',
      1 => 1497195396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19799398359653fa14c62f2_06739782',
  'variables' => 
  array (
    'message' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59653fa1535f95_79140088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59653fa1535f95_79140088')) {
function content_59653fa1535f95_79140088 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19799398359653fa14c62f2_06739782';
echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

    <div id="wrapper1">
         <br/><br/>
    </div>
        <div id="page-wrapper">
            <br/><br/><br/><br/><br/><br/><br/>
            <div class="alert alert-danger"><h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1></div>
            <?php echo '<script'; ?>
 type="text/javascript"> 
            setTimeout("location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
';",5000);      
            
            <?php echo '</script'; ?>
>
            

<br/><br/><br/><br/><br/><br/>
            
            
</div></div>
  
  
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