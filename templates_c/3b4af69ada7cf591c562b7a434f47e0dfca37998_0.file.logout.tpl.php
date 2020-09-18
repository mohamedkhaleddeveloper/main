<?php /* Smarty version 3.1.24, created on 2017-07-11 21:13:45
         compiled from "./templates/logout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:160376939759653f893c8c95_92728225%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b4af69ada7cf591c562b7a434f47e0dfca37998' => 
    array (
      0 => './templates/logout.tpl',
      1 => 1497208274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160376939759653f893c8c95_92728225',
  'variables' => 
  array (
    'en' => 0,
    'message' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59653f89425071_18283169',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59653f89425071_18283169')) {
function content_59653f89425071_18283169 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '160376939759653f893c8c95_92728225';
if ($_smarty_tpl->tpl_vars['en']->value == 'en') {?>
<?php echo $_smarty_tpl->getSubTemplate ("headen.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<div id="wrapper">
       <h2 class="text-left"><a href = "#">ALSUBTAIN Campany <i class="fa fa-cogs" aria-hidden="true"></i></a></h2>
</div>
        <div id="page-wrapper">
            <br/><br/><br/><br/><br/><br/><br/>
            <div class="alert alert-success"><h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1></div>
            <?php echo '<script'; ?>
 type="text/javascript"> 
            setTimeout("location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
';",3000);      
            
            <?php echo '</script'; ?>
>
            

<br/><br/><br/><br/><br/><br/>
            
            
</div></div>

    
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<div id="wrapper1">
      <h1><i class="fa fa-cogs" aria-hidden="true"></i>  مؤسسه السبطين التجاريه  </h1>
</div>
        <div id="page-wrapper">
            <br/><br/><br/><br/><br/><br/><br/>
            <div class="alert alert-success"><h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1></div>
            <?php echo '<script'; ?>
 type="text/javascript"> 
            setTimeout("location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
';",3000);      
            
            <?php echo '</script'; ?>
>
            

<br/><br/><br/><br/><br/><br/>
            
            
</div></div>

<?php }?>
  
  
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