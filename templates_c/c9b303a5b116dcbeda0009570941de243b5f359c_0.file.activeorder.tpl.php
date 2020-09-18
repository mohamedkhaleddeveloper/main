<?php /* Smarty version 3.1.24, created on 2017-07-11 08:07:03
         compiled from "./templates/admin/ar/activeorder.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:65446866459648727a7feb4_11758951%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9b303a5b116dcbeda0009570941de243b5f359c' => 
    array (
      0 => './templates/admin/ar/activeorder.tpl',
      1 => 1498315126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65446866459648727a7feb4_11758951',
  'variables' => 
  array (
    'datenow' => 0,
    'castumer' => 0,
    'castumer1' => 0,
    'areaCastumer' => 0,
    'deviceCastumer' => 0,
    'ido' => 0,
    'iduser' => 0,
    'tech' => 0,
    'tech1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59648727affff0_53698697',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59648727affff0_53698697')) {
function content_59648727affff0_53698697 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '65446866459648727a7feb4_11758951';
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
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i> تفعيل المعامله /  بتاريخ : <?php echo $_smarty_tpl->tpl_vars['datenow']->value;?>

                                
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
                                                        <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
                                                        <input class="form-control" name="datey" id="datey" value="<?php echo $_smarty_tpl->tpl_vars['datenow']->value;?>
"  type="hidden">
						
					<div class="form-group">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>الفني</label>
                                                        <select class="form-control" name="idtech" id="idtech" >
                                                                    <option value="">-- اختر من هنا -- </option>
                                                             <?php
$_from = $_smarty_tpl->tpl_vars['tech']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tech1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tech1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tech1']->value) {
$_smarty_tpl->tpl_vars['tech1']->_loop = true;
$foreach_tech1_Sav = $_smarty_tpl->tpl_vars['tech1'];
?>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['tech1']->value['idm'];?>
"><?php echo $_smarty_tpl->tpl_vars['tech1']->value['namema'];?>
</option>
                                                            <?php
$_smarty_tpl->tpl_vars['tech1'] = $foreach_tech1_Sav;
}
?>
                                                    </select>
                                                </div>  
                                                    
                                                    
                                                 <div class="col-lg-4">
                                                      <label> &nbsp;</label> 
                                                    <button class="form-control btn btn-primary btn-mini" type="submit" name="save" value="LOG IN">تفعيل </button>
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
                        url: 'activeorder-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#idtech").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  اسم الفني");
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
                                        var datey = $("#datey").val();
                                        var str1 = "<strong>  تم تفعيل المعامله بنجاح </strong> ";
                                        var name = $("#factor").val();
                                        var str2 = "<strong> شكرا </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str2 + str1);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=orderdate&date="+datey;}, 2000);
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