<?php /* Smarty version 3.1.24, created on 2017-07-11 12:38:39
         compiled from "./templates/admin/ar/mark.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6761127325964c6cfa75bc5_01528139%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba74e9a05b0da13420a57cce54121edfe6a6fa97' => 
    array (
      0 => './templates/admin/ar/mark.tpl',
      1 => 1498146242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6761127325964c6cfa75bc5_01528139',
  'variables' => 
  array (
    'iduser' => 0,
    'mark' => 0,
    'k' => 0,
    'mark1' => 0,
    'device1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5964c6cfaf91d3_08716308',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5964c6cfaf91d3_08716308')) {
function content_5964c6cfaf91d3_08716308 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6761127325964c6cfa75bc5_01528139';
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
                            ماركات  <small> تسجيل </small>
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
						<label> اسم الماركة بالعربي </label>
						<input class="form-control" name="namemarka" id="namemarka" >
					</div>	
                                         <div class="form-group">
						<label> اسم الماركة بالاتجليزي </label>
						<input class="form-control" name="namemarke" id="namemarke" >
					</div>	
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-left" type="submit" name="save">أضف</button>
					</div>	
				</form>

			  </div>	
			  	<?php if ($_smarty_tpl->tpl_vars['mark']->value == null) {?>
                                     <br/><br/><br/><br/>
                                     <h3 class="text-center">It is not adding any Brand</h3>
                                     <br/><br/><br/>
                                 <?php } else { ?>    
			  <div class="row">
                    <div class="col-lg-12">
					<br/>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-desktop"></i> ماركة
                            </li>
                        </ol>
                      
                    </div>
			 </div>

                          <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong> م</strong></td>
                                        <td><strong> الاسم</strong></td>
                                        <td><strong> تعديل </strong></td>
                                        <td><strong>حاله التفعيل</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['mark']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mark1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mark1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['mark1']->value) {
$_smarty_tpl->tpl_vars['mark1']->_loop = true;
$foreach_mark1_Sav = $_smarty_tpl->tpl_vars['mark1'];
?>
                                        <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['mark1']->value['namemarka'];?>
</td>
                                                 <td><a href="update.php?act=markup&idmark=<?php echo $_smarty_tpl->tpl_vars['mark1']->value['idmark'];?>
"><button class="btn btn-primary" type="button"><i class="fa fa-pencil-square-o"></i|></button></a></td>
                                                <?php if ($_smarty_tpl->tpl_vars['device1']->value['deletmark'] == 0) {?>
                                                        <td><form action="addition.php?act=adddevice" method="POST">
                                                            <input type="hidden" name="idv" value="<?php echo $_smarty_tpl->tpl_vars['mark1']->value['idmark'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-success" name="active" value="مفعله">
                                                        </form> </td>
                                                <?php } else { ?>
                                                        <td><form action="addition.php?act=adddevice" method="POST">
                                                            <input type="hidden" name="idv" value="<?php echo $_smarty_tpl->tpl_vars['mark1']->value['idmark'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-danger" name="unactive" value="غير مفعله ">
                                                        </form> </td>
                                                <?php }?>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['mark1'] = $foreach_mark1_Sav;
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
                        url: 'mark-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namemarka").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("من فضلك ادخل الاسم");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namemarka").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("تم ادخل الاسم من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#namemarka").removeAttr( "style", "border-color: #a94442" );
                                        $("#namemarke").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("من فضلك ادخل الاسم بالانجليزي"); 
                                    }
                                     if(data.msg == 4){
                                        $("#namemarka").removeAttr( "style", "border-color: #a94442" );
                                        $("#namemarke").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("بالحروف الانجليزية فقط "); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فضل في اضافة الماركة");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافة ماركة  : </strong> ";
                                        var name = $("#namemarka").val();
                                        var str2 = "<strong> بنجاح  </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addmark";}, 2000);
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