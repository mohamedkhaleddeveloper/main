<?php /* Smarty version 3.1.24, created on 2019-09-16 11:59:56
         compiled from "./templates/admin/ar/head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:184165d7f5d1c65a400_72944815%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c52d168a9f7de6f785633f16a17a139200bb0d0' => 
    array (
      0 => './templates/admin/ar/head.tpl',
      1 => 1497443074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184165d7f5d1c65a400_72944815',
  'variables' => 
  array (
    'titleco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d7f5d1c6a8609_63194775',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d7f5d1c6a8609_63194775')) {
function content_5d7f5d1c6a8609_63194775 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '184165d7f5d1c65a400_72944815';
?>
<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['titleco']->value;?>
 </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Core CSS RTL-->
    <link href="css/bootstrap-rtl.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/sb-admin-rtl.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head><?php }
}
?>