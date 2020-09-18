<?php /* Smarty version 3.1.24, created on 2019-09-16 11:59:56
         compiled from "./templates/admin/ar/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:225795d7f5d1c5b43b7_11774964%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ece800eed54795ee50aeaf84d9a11a74bf612d5b' => 
    array (
      0 => './templates/admin/ar/index.tpl',
      1 => 1485353218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225795d7f5d1c5b43b7_11774964',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d7f5d1c60c204_68062213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d7f5d1c60c204_68062213')) {
function content_5d7f5d1c60c204_68062213 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '225795d7f5d1c5b43b7_11774964';
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