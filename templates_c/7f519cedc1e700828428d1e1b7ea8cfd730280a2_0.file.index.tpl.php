<?php /* Smarty version 3.1.24, created on 2017-07-11 07:42:27
         compiled from "./templates/admin/ar/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:138725742859648163060ff3_59689605%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f519cedc1e700828428d1e1b7ea8cfd730280a2' => 
    array (
      0 => './templates/admin/ar/index.tpl',
      1 => 1485356818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138725742859648163060ff3_59689605',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_596481630b2500_64745112',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596481630b2500_64745112')) {
function content_596481630b2500_64745112 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '138725742859648163060ff3_59689605';
echo $_smarty_tpl->getSubTemplate ("admin/ar/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>