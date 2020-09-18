<?php /* Smarty version 3.1.24, created on 2019-09-16 12:01:21
         compiled from "./templates/admin/ar/employee.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:136355d7f5d718ff6b7_96467657%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf83a3fcf33e6a1db2db76fc440187cb6e095726' => 
    array (
      0 => './templates/admin/ar/employee.tpl',
      1 => 1498752072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136355d7f5d718ff6b7_96467657',
  'variables' => 
  array (
    'iduser' => 0,
    'carer' => 0,
    'carer1' => 0,
    'country' => 0,
    'country1' => 0,
    'airport' => 0,
    'airport1' => 0,
    'employee' => 0,
    'k' => 0,
    'employee1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d7f5d71a66d06_58098567',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d7f5d71a66d06_58098567')) {
function content_5d7f5d71a66d06_58098567 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '136355d7f5d718ff6b7_96467657';
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
                            الموظف <small>تسحيل موظف جديد</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> إضافه موظف
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
				
                                                  <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
                                                    <div class="col-lg-3">
                                                        <label>اسم الموظف</label>
                                                        <input class="form-control" name="fnamema" id="fnamema" >
                                                     </div>
                                                    <div class="col-lg-3">
                                                        <label >اسم الموظف باللغه الاتجليزيه</label>
                                                        <input class="form-control " name="fnameme" id="fnameme" >
                                                    </div>
                                                     <div class="col-lg-3">
                                                    <label>الاسم المستعار </label>
                                                        <input class="form-control" name="namema" id="namema" >
                                                     </div>
                                                    <div class="col-lg-3">
                                                        <label >اسم المستعار باللغة الانجليزية</label>
                                                        <input class="form-control " name="nameme" id="fnameme" >
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>جوال</label>
                                                        <input class="form-control"  maxlength="10"  name="mobilem" id="mobilem" >
                                                    </div>
                                               
                                                  
                                                    <div class="col-lg-3">
                                                        <label>المهنه</label>
                                                            <select class="form-control" name="carerm" id="carerm">
                                                            <option value="">-- اختر من هنا -- </option>
                                                            <?php
$_from = $_smarty_tpl->tpl_vars['carer']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['carer1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['carer1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['carer1']->value) {
$_smarty_tpl->tpl_vars['carer1']->_loop = true;
$foreach_carer1_Sav = $_smarty_tpl->tpl_vars['carer1'];
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['carer1']->value['idr'];?>
"><?php echo $_smarty_tpl->tpl_vars['carer1']->value['namera'];?>
</option>
                                                            <?php
$_smarty_tpl->tpl_vars['carer1'] = $foreach_carer1_Sav;
}
?>
						</select>

                                                   </div>
                                                  <div class="col-lg-3">
                                                        <label>الجنسيه</label>
                                                              <select class="form-control" name="countrym" id="countrym">
                                                                  <option value="">-- اختر من هنا -- </option>
                                                                      <?php
$_from = $_smarty_tpl->tpl_vars['country']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['country1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['country1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['country1']->value) {
$_smarty_tpl->tpl_vars['country1']->_loop = true;
$foreach_country1_Sav = $_smarty_tpl->tpl_vars['country1'];
?>
                                                                              <option value="<?php echo $_smarty_tpl->tpl_vars['country1']->value['idy'];?>
"><?php echo $_smarty_tpl->tpl_vars['country1']->value['nameya'];?>
</option>
                                                                      <?php
$_smarty_tpl->tpl_vars['country1'] = $foreach_country1_Sav;
}
?>
                                                              </select>
                                                    </div>
                                                   <div class="col-lg-3">
                                                        <label>رقم جواز السفر</label>
                                                        <input class="form-control"    name="nopassport" id="nopassport" >
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>كلمه السر</label>
                                                        <input class="form-control"  type="password" name="password" id="password" >
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>رقم الحدود</label>
                                                        <input class="form-control"   name="noborder" id="noborder" >
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>رقم الاقامه</label>
                                                        <input class="form-control"   name="noiqama" id="noiqama" > 

                                                   </div>
                                                   <div class="col-lg-3">
                                                            <label>مطار الدخول</label>
                                                            <select class="form-control" name="airportm" id="airportm">
                                                                <option value="">-- اختر من هنا -- </option>
                                                                    <?php
$_from = $_smarty_tpl->tpl_vars['airport']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['airport1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['airport1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['airport1']->value) {
$_smarty_tpl->tpl_vars['airport1']->_loop = true;
$foreach_airport1_Sav = $_smarty_tpl->tpl_vars['airport1'];
?>
                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['airport1']->value['idair'];?>
"><?php echo $_smarty_tpl->tpl_vars['airport1']->value['nameaira'];?>
</option>
                                                                    <?php
$_smarty_tpl->tpl_vars['airport1'] = $foreach_airport1_Sav;
}
?>
                                                            </select>
                                                       
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <label>عنوان الموظف ببلده</label>
                                                        <input class="form-control"    name="adressm" id="adressm" >
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>رقم تليفون الموظف ببلده</label>
                                                        <input class="form-control"    name="telem" id="telem" >

                                                   </div>
                                                   <div class="col-lg-3">
                                                            <label>الصلاحيات</label>
                                                            <select class="form-control" name="premssionm" id="premssionm">
                                                                            <option value="">-- اختر من هنا -- </option>
                                                                            <option value="0">بدون صلاحيات</option>
                                                                            <option value="1">مدير</option> 
                                                                            <option value="2">موظف</option>
                                                                            <option value="3">فني مباشر</option>
                                                                           
                                                            </select>
                                                    </div>
                                                   <div class="col-lg-3">
                                                            <label>حاله الموظف</label>
                                                            <select class="form-control" name="statusm" id="statusm">
                                                                            <option value="">-- اختر من هنا -- </option>
                                                                            <option value="0">مباشر للعمل</option>
                                                                            <option value="1">اجازه</option>
                                                            </select>
                                                    </div>
                                              
					
                                       
					
                                                    
                                                    <div class="col-lg-2">
                                                        <label>تاريخ دخول المملكه</label>
                                                  <input type="text" class="form-control"  id="entermsa" name="entermsa" >
                                                  </div>
                                                 <div class="col-lg-2">
                                                        <label>تاريخ مباشرة العمل</label>
                                                  <input type="text" class="form-control"  id="worktime" name="worktime" >
                                                  </div>
                                                 <div class="col-lg-2">
                                                        <label>تاريخ انتهاء الاقامه</label>
                                                  <input type="text" class="form-control"  id="exiqamam" name="exiqamam" >
                                                  </div>
                                                 <div class="col-lg-2">
                                                        <label>تاريخ انتهاء التأمين</label>
                                                  <input type="text" class="form-control"  id="exinsurancem" name="xinsurancem" >
                                                  </div>
                                                 <div class="col-lg-2">
                                                        <label>تاريخ انتهاء رخصه القياده</label>
                                                  <input type="text" class="form-control"  id="exlincm" name="exlincm" >
                                                  </div>
                                                <div class="col-lg-2">
                                                        <label>تاريخ انتهاء جواز السفر</label>
                                                 <input type="text" class="form-control"  id="expassportm" name="expassportm" >
                                                  </div>
                                           
                                           
                                                    <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/>
                                        <div class="form-group">   
                                             <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/>
					<button class="btn btn-primary btn-lg pull-left" type="submit" name="save" value="LOG IN">إضافه موظف </button>
                                        </div>
				</form>			 
			  </div>
                                                
				<?php if ($_smarty_tpl->tpl_vars['employee']->value == null) {?>
                                     <br/><br/><br/><br/>
                                     <h3 class="text-center">لم يتم اضافه اي موظفين  بالبرنامج</h3>
                                     <br/><br/><br/>
                                 <?php } else { ?> 
				
							  <div class="row">
                    <div class="col-lg-12">
					<br/>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-users"></i> الموظفين
                            </li>
                        </ol>
                      
                    </div>
			 </div>
				 
			 <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>الرقم</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>الاسم المستعار</strong></td>
                                        <td><strong>جوال</strong></td>
                                        <td><strong>تعديل </strong></td>
                                    <!--<td><strong>الحاله </strong></td>
                                        <td><strong>تغيير الحاله </strong></td>
                                        <td><strong>الفريق </strong></td>-->
                                    </tr>
                                </thead>
                                <tbody>
									<?php
$_from = $_smarty_tpl->tpl_vars['employee']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['employee1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['employee1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['employee1']->value) {
$_smarty_tpl->tpl_vars['employee1']->_loop = true;
$foreach_employee1_Sav = $_smarty_tpl->tpl_vars['employee1'];
?>
										<tr>
											<td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                                                        <td><?php echo $_smarty_tpl->tpl_vars['employee1']->value['fnamema'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['employee1']->value['namema'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['employee1']->value['mobilem'];?>
</td>
                                                                                       
                                                                                            <td><a href="update.php?act=employeup&idm=<?php echo $_smarty_tpl->tpl_vars['employee1']->value['idm'];?>
"><button class="btn btn-primary" type="button"><i class="fa fa-pencil-square-o"></i|></button></a></td>
											
                                                                                            <!-- <?php if ($_smarty_tpl->tpl_vars['employee1']->value['statusm'] == 0) {?>
                                                                                                 <td><button class="btn btn-success" type="button"><i class="fa fa-check"></i|> <span>مباشر للعمل</span></button></td>
                                                                                            <?php } elseif ($_smarty_tpl->tpl_vars['employee1']->value['statusm'] == 1) {?>
                                                                                            <td><button class="btn btn-warning" type="button"><i class="fa fa-clock-o"></i|> <span>اجازه</span></button></td>
                                                                                            <?php } else { ?>
                                                                                                <td><button class="btn btn-danger" type="button"><i class="fa fa-times"></i|> <span>تم انهاء عمله</span></button></td>
                                                                                             <?php }?>
                                                                                            <td><a href="addition.php?act=addorder&id=<?php echo $_smarty_tpl->tpl_vars['employee1']->value['idm'];?>
"><button class="btn btn-primary" type="button"><i class="fa fa-reply"></i|></button></a></td>
                                                                                            <?php if ($_smarty_tpl->tpl_vars['employee1']->value['carerm'] == 2) {?>
                                                                                                 <td><a href="addition.php?act=addorder&id=<?php echo $_smarty_tpl->tpl_vars['employee1']->value['idm'];?>
"><button class="btn btn-default" type="button"><i class="fa fa-location-arrow"></i> <span> </span></button></a></td>
                                                                                            <?php } else { ?>
                                                                                                <td></td>
                                                                                             <?php }?>-->
                                                                                </tr>
									<?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
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
   <?php echo '<script'; ?>
 src="js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#entermsa').datepicker({
				format: 'yyyy-mm-dd'
			});
                        
                        window.prettyPrint && prettyPrint();
			$('#worktime').datepicker({
				format: 'yyyy-mm-dd'
			});
                        
                        window.prettyPrint && prettyPrint();
			$('#exiqamam').datepicker({
				format: 'yyyy-mm-dd'
			});
                        
                        window.prettyPrint && prettyPrint();
			$('#exinsurancem').datepicker({
				format: 'yyyy-mm-dd'
			});
			
                                                
                        window.prettyPrint && prettyPrint();
			$('#exlincm').datepicker({
				format: 'yyyy-mm-dd'
			});
                        
                         window.prettyPrint && prettyPrint();
			$('#expassportm').datepicker({
				format: 'yyyy-mm-dd'
			});
			
        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	<?php echo '</script'; ?>
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
                        url: 'employee-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#fnamema").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم الموظف");
                                    }
                                     if(data.msg == 2){
                                        $("#fnamema").removeAttr( "style", "border-color: #a94442" );
                                        $("#fnameme").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الموظف بالانجليزي"); 
                                    }
                                     if(data.msg == 3){
                                        $("#fnamema").removeAttr( "style", "border-color: #a94442" );
                                        $("#fnameme").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تأكد من الحروف انجليزيه من فضلك"); 
                                    }
                                    if(data.msg == 4){
                                        $("#fnameme").removeAttr( "style", "border-color: #a94442" );
                                        $("#namema").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم المستعار ");
                                    }
                                     if(data.msg == 5){
                                        $("#namema").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameme").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم المستعار بالانجليزي ");
                                    }
                                     if(data.msg == 6){
                                        $("#namema").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameme").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                       $("#alert").html("تأكد من الحروف انجليزيه من فضلك"); 
                                   }
                                    if(data.msg == 7){
                                        $("#nameme").removeAttr( "style", "border-color: #a94442" );
                                        $("#carerm").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل مهنه الموظف "); 
                                    }
                                    if(data.msg == 8){
                                        $("#carerm").removeAttr( "style", "border-color: #a94442" );
                                        $("#premssionm").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل صلاحيات الموظف"); 
                                    }
                                    if(data.msg == 9){
                                        $("#premssionm").removeAttr( "style", "border-color: #a94442" );
                                        $("#noborder").attr( "style", "border-color: #a94442" );
                                        $("#nopassport").attr( "style", "border-color: #a94442" );
                                        $("#noiqama").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل رقم الاقامه او رقم  جواز السفر او رقم الحدود"); 
                                    }
                                   if(data.msg == 10){
                                        $("#premssionm").removeAttr( "style", "border-color: #a94442" );
                                        $("#nopassport").removeAttr( "style", "border-color: #a94442" );
                                        $("#noiqama").removeAttr( "style", "border-color: #a94442" );
                                        $("#noborder").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال رقم الحدود من قبل"); 
                                    }
                                    if(data.msg == 11){
                                        $("#premssionm").removeAttr( "style", "border-color: #a94442" );
                                        $("#noborder").removeAttr( "style", "border-color: #a94442" );
                                        $("#nopassport").removeAttr( "style", "border-color: #a94442" );
                                        $("#noiqama").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال رقم الإقامه من قبل"); 
                                    }
                                    if(data.msg == 12){
                                        $("#premssionm").removeAttr( "style", "border-color: #a94442" );
                                        $("#noborder").removeAttr( "style", "border-color: #a94442" );
                                        $("#noiqama").removeAttr( "style", "border-color: #a94442" );
                                        $("#nopassport").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال رقم الجواز من قبل"); 
                                    }
                                    if(data.msg == 13){
                                        $("#noborder").removeAttr( "style", "border-color: #a94442" );
                                        $("#nopassport").removeAttr( "style", "border-color: #a94442" );
                                        $("#noiqama").removeAttr( "style", "border-color: #a94442" );
                                        $("#statusm").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل حاله الموظف"); 
                                    }
                                    if(data.msg == 14){
                                        $("#statusm").removeAttr( "style", "border-color: #a94442" );
                                        $("#worktime").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل تاريخ مباشرة العمل"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه العامل");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه الموظف : </strong> ";
                                        var name = $("#namema").val();
                                        var str2 = "<strong> بنجاح </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "index.php";}, 2000);
                                    }
                        }
                });
        });
        <?php echo '</script'; ?>
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