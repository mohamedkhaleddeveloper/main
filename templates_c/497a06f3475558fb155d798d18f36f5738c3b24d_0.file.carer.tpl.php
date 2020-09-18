<?php /* Smarty version 3.1.24, created on 2017-07-13 16:20:45
         compiled from "./templates/admin/ar/carer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:164893354259679ddd80ba88_95870406%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '497a06f3475558fb155d798d18f36f5738c3b24d' => 
    array (
      0 => './templates/admin/ar/carer.tpl',
      1 => 1498166602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164893354259679ddd80ba88_95870406',
  'variables' => 
  array (
    'iduser' => 0,
    'carer' => 0,
    'k' => 0,
    'carer1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59679ddd8913b8_65523362',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59679ddd8913b8_65523362')) {
function content_59679ddd8913b8_65523362 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '164893354259679ddd80ba88_95870406';
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
                            المهن <small>أضافه مهنه جديد </small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
                                      <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
					<div class="form-group">
						<label>اسم المهنه</label>
						<input class="form-control" name="namera" id="namera" >
					</div>	
                                         <div class="form-group">
						<label>اسم المهنه باللغه الانجليزيه</label>
						<input class="form-control" name="namere" id="namere" >
					</div>	
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-left" type="submit" name="save">اضف</button>
					</div>	
				</form>

			  </div>	
			  	<?php if ($_smarty_tpl->tpl_vars['carer']->value == null) {?>
                                     <br/><br/><br/><br/>
                                     <h3 class="text-center">لم يتم اضافه اي مهن بالبرنامج</h3>
                                     <br/><br/><br/>
                                 <?php } else { ?>    
			  <div class="row">
                    <div class="col-lg-12">
					<br/>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-joomla"></i> المهن
                            </li>
                        </ol>
                      
                    </div>
			 </div>

			 <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>الرقم</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>تعديل </strong></td>
                                        <td><strong>حاله التفعيل </strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['carer']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['carer1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['carer1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['carer1']->value) {
$_smarty_tpl->tpl_vars['carer1']->_loop = true;
$foreach_carer1_Sav = $_smarty_tpl->tpl_vars['carer1'];
?>
                                            <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['carer1']->value['namera'];?>
</td>
                                                   <td><a href="update.php?act=carerup&idr=<?php echo $_smarty_tpl->tpl_vars['carer1']->value['idr'];?>
"><button class="btn btn-primary" type="button"><i class="fa fa-pencil-square-o"></i|></button></a></td>
                                                    <?php if ($_smarty_tpl->tpl_vars['carer1']->value['deletr'] == 0) {?>
                                                        <td><form action="addition.php?act=addcarer" method="POST">
                                                            <input type="hidden" name="idr" value="<?php echo $_smarty_tpl->tpl_vars['carer1']->value['idr'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-success" name="active" value="مفعله">
                                                        </form> </td>
                                                <?php } else { ?>
                                                        <td><form action="addition.php?act=addcarer" method="POST">
                                                            <input type="hidden" name="idr" value="<?php echo $_smarty_tpl->tpl_vars['carer1']->value['idr'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-danger" name="unactive" value="غير مفعله">
                                                        </form> </td>
                                                <?php }?>
                                            </tr>
                                    <?php
$_smarty_tpl->tpl_vars['carer1'] = $foreach_carer1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>

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
                        url: 'carer-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namera").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم المهنه");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameقa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال اسم المهنه من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#namera").removeAttr( "style", "border-color: #a94442" );
                                        $("#namere").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  اسم المهنه بالانجليزي	"); 
                                    }
                                     if(data.msg == 4){
                                        $("#namera").removeAttr( "style", "border-color: #a94442" );
                                        $("#namere").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف انجليزيه	"); 
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
                                        var str1 = "<strong>  تم اضافه مهنه : </strong> ";
                                        var name = $("#namera").val();
                                        var str2 = "<strong> بنجاح </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addcarer";}, 2000);
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