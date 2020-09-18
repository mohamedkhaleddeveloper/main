{include file="admin/ar/head.tpl"}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">
                
              
                
                <!------------------------------------------------- Order Date ------------------------------------------------------>
             {if $action eq 'orderdate'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$dayar1} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : {$orderDate}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات اليوميه
                            </li>
                          
                             <li class="active">
                                <i class="fa fa-fw fa-newspaper-o"></i> عدد العمليات  :  {$orderNowCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     {if $orderNowCountA eq '0'} 
                                            <h1 class="text-center">لا يوجد عمليات هذا الصباح</h1> 
                                      {/if}
                                         
                                                                                      
                                                 
                                   
                                {if $orderNowAm eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="11"><strong>صباحا</strong></td></tr>
                                    <tr class="active text-center"><td colspan="11"><strong>جديد</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>تفعيل </strong></td>
                                        <td><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$orderNowAm  key=k item=orderNowAm1}
                                        <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$orderNowAm1.ido}  </td>
                                                <td> {$orderNowAm1.timeo} 
                                                        {if $orderNowAm1.timing eq am} صباحا{else}مساءا {/if}
                                                </td>
                                                <td>{$orderNowAm1.nameva}</td>
                                                 <td>
                                                   
                                                   {$orderNowAm1.nservicea}
                                                {if $orderNowAm1.idserv eq 3} الى 
                                                    {foreach from=$area  key=k item=area1}
                                                            {if $area1.ida eq $orderNowAm1.areatransid}
                                                                {$area1.nameaa}
                                                                {/if}
                                                         {/foreach}
                                                    {/if}
                                                    {if $orderNowAm1.idserv eq 4} رقم الموديل: {$orderNowAm1.mdn} {/if}
                                                    
                                                </td>
                                                <td>{$orderNowAm1.nameca}</td>
                                                <td>{$orderNowAm1.phonec}</td>
                                                <td>{$orderNowAm1.nameaa}</td>
                                                <td><a href="addition.php?act=activeorder&id={$orderNowAm1.ido}&castumer={$orderNowAm1.idc}&date={$orderDate}"><button class="btn btn-sm btn-primary" type="button">تفعيل </button></a></td> 
                                                <td><a href="addition.php?act=cancleorder&id={$orderNowAm1.ido}&castumer={$orderNowAm1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                        </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                          
                            {if $orderNowdDlAm eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>صباحا</strong></td></tr>
                                    <tr class="active text-center"><td colspan="13"><strong> توصيل وتركيب</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>النوع</strong></td>
                                        <td><strong>الخدمة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الفني</strong></td>
                                        <td><strong>تعديل </strong></td>
                                        <td><strong>تأكيد </strong></td>
                                        <td><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    {foreach from=$orderNowdDlAm  key=k item=orderNowDl1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td>{$orderNowDl1.ido}</td>
                                                 <td> {$orderNowDl1.timodp} 
                                                        {if $orderNowDl1.timingdp eq am} صباحا{else}مساءا {/if}
                                                </td>
                                                <td>{$orderNowDl1.nameva}</td>
                                                <td>{$orderNowDl1.nservicea}</td>
                                                <td>{if $orderNowDl1.poseplt eq "fill"}كامل{/if}
                                                    {if $orderNowDl1.poseplt eq "indoor"}وحده داخلية{/if}
                                                    {if $orderNowDl1.poseplt eq "outdoor"}وحده خارجيه{/if}
                                                    {if $orderNowDl1.poseplt eq "part"}قطعه{/if}
                                                
                                                </td>
                                                <td>{$orderNowDl1.nameca}</td>
                                                <td>{$orderNowDl1.phonec}</td>
                                                <td>{$orderNowDl1.nameaa}</td>
                                                <td>{foreach from=$factor  key=k item=factor1}
                                                         {if $orderNowDl1.employeeiddp eq $factor1.idm}
                                                             {$factor1.namema} 
                                                         {/if}
                                                         
                                                {/foreach}
                                                   </td>
                                                {if $orderNowDl1.process eq 9}
                                                     <td colspan="3"><button class="btn btn-sm btn-success" type="button">تم تأكيد الطلب بنجاح</td>
                                                {else}
                                                <td><a href="addition.php?act=delivery&id={$orderNowDl1.ido}&castumer={$orderNowDl1.idc}"><button class="btn btn-sm btn-primary" type="button"><i class="fa fa-fw fa-pencil"></i></button></a></td>
                                                 <td> <form action="" method="POST">
                                                        <input type="hidden" name="idorder" value="{$orderNowDl1.ido}" />
                                                        <input type='hidden' name='orderdate' value='{$orderdate22}' />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="تأكيد">
                                                            </form> </td>
                                                             <td><a href="addition.php?act=cancleorder&id={$orderNowDl1.ido}&castumer={$orderNowDl1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                                            {/if}
                                               
                                        </tr>
                                {/foreach}
                                </tbody>
                            </table>
                                 <hr/><hr/><hr/>
			  {/if}
                               
                                
                                 {if $orderNowCountP eq '0'} 
                                            <h1 class="text-center">لا يوجد عمليات هذاالمساء</h1> 
                                       {/if}
                                         
                           
                                {if $orderNowPm eq null}
                                        
                                {else}
                                                       <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="11"><strong>مساءا</strong></td></tr>
                                    <tr class="active text-center"><td colspan="11"><strong>جديد</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>تفعيل </strong></td>
                                        <td><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$orderNowPm  key=k item=orderNowPm1}
                                        <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$orderNowPm1.ido}  </td>
                                                <td> {$orderNowPm1.timeo} 
                                                        {if $orderNowPm1.timing eq am} صباحا{else}مساءا {/if}

                                                </td>
                                                <td>{$orderNowPm1.nameva}</td>
                                                <td>
                                                   
                                                   {$orderNowPm1.nservicea}
                                                {if $orderNowPm1.idserv eq 3} الى 
                                                    {foreach from=$area  key=k item=area1}
                                                            {if $area1.ida eq $orderNowPm1.areatransid}
                                                                {$area1.nameaa}
                                                                {/if}
                                                         {/foreach}
                                                    {/if}
                                                    {if $orderNowPm1.idserv eq 4} رقم الموديل: {$orderNowPm1.mdn} {/if}
                                                    
                                                </td>
                                                <td>{$orderNowPm1.nameca}</td>
                                                <td>{$orderNowPm1.phonec}</td>
                                                <td>{$orderNowPm1.nameaa}</td>
                                                <td><a href="addition.php?act=activeorder&id={$orderNowPm1.ido}&castumer={$orderNowPm1.idc}&date={$orderDate}"><button class="btn btn-sm btn-primary" type="button">تفعيل </button></a></td>
                                                       
                                                <td><a href="addition.php?act=cancleorder&id={$orderNowPm1.ido}&castumer={$orderNowPm1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                        </tr>
                                {/foreach}
                                </tbody>
                            </table>
                                        
			  </div>
				
                        {/if}
                        
                        
                        
                             {if $orderNowdDlPm eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>مساءا</strong></td></tr>
                                    <tr class="active text-center"><td colspan="13"><strong> توصيل وتركيب</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>النوع</strong></td>
                                        <td><strong>الخدمة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الفني</strong></td>
                                        <td><strong>تعديل </strong></td>
                                        <td><strong>تأكيد </strong></td>
                                        <td><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    {foreach from=$orderNowdDlPm  key=k item=orderNowdDlPm1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td>{$orderNowdDlPm1.ido}</td>
                                                 <td> {$orderNowdDlPm1.timeo} 
                                                        {if $orderNowdDlPm1.timing eq am} صباحا{else}مساءا {/if}
                                                </td>
                                                <td>{$orderNowdDlPm1.nameva}</td>
                                                <td>{$orderNowdDlPm1.nservicea}</td>
                                                <td>{if $orderNowdDlPm1.poseplt eq "fill"}كامل{/if}
                                                    {if $orderNowdDlPm1.poseplt eq "indoor"}وحده داخلية{/if}
                                                    {if $orderNowdDlPm1.poseplt eq "outdoor"}وحده خارجيه{/if}
                                                    {if $orderNowdDlPm1.poseplt eq "part"}قطعه{/if}
                                                
                                                </td>
                                                <td>{$orderNowdDlPm1.nameca}</td>
                                                <td>{$orderNowdDlPm1.phonec}</td>
                                                <td>{$orderNowdDlPm1.nameaa}</td>
                                                <td>{foreach from=$factor  key=k item=factor1}
                                                         {if $orderNowdDlPm1.employeeiddp eq $factor1.idm}
                                                             {$factor1.namema} 
                                                         {/if}
                                                         
                                                {/foreach}
                                                   </td>
                                                {if $orderNowdDlPm1.process eq 9}
                                                     <td colspan="3"><button class="btn btn-sm btn-success" type="button">تم تأكيد الطلب بنجاح</td>
                                                {else}
                                                <td><a href="addition.php?act=delivery&id={$orderNowdDlPm1.ido}&castumer={$orderNowdDlPm1.idc}"><button class="btn btn-sm btn-primary" type="button"><i class="fa fa-fw fa-pencil"></i></button></a></td>
                                                 <td> <form action="" method="POST">
                                                        <input type="hidden" name="idorder" value="{$orderNowdDlPm1.ido}" />
                                                        <input type='hidden' name='orderdate' value='{$orderdate22}' />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="تأكيد">
                                                            </form> </td>
                                                             <td><a href="addition.php?act=cancleorder&id={$orderNowdDlPm1.ido}&castumer={$orderNowdDlPm1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                                            {/if}
                                               
                                        </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                                {/if}
		<!------------------------------------------------- /Order Date ------------------------------------------------------>
			
		<!------------------------------------------------- Order Active ------------------------------------------------------>
             {if $action eq 'orderactive'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات المفعله
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$dayar1} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : {$orderactive}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات المفعله :  {$orderNowCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">
                                     {if $orderNowCount eq '0'} 
                                            <h1 class="text-center">لا يوجد عمليات مفعله  </h1> 
                                     {else}
                                         
                                              {if $orderNowCountAc lt '1'}
                                                       <h1 class="text-center">  لم يتم اجراء اي من العمليات</h1> 
                                              {elseif $orderNowCountAc gt '2'}
                                                          <h1 class="text-center">تم إجراء عدد   {$orderNowCountAc}  عمليات   </h1> 
                                              {else}
                                                    <h1 class="text-center">تم إجراء عدد   {$orderNowCountAc}  عمليه   </h1> 
                                                 {/if}
                                                                                                 
                                                 
                                     {/if}
                                {if $orderNow eq null}
                                      
                                {else}
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>اسم الفني</strong></td>
                                         <td><strong> المفعله صباحا	</strong></td>
                                          <td><strong> توصيل وتركيب صباحا	</strong></td>
                                           <td><strong>المفعله مساءا	</strong></td>
                                            <td><strong>توصيل وتركي مساءا	</strong></td>
                                          <td><strong>عرض العمليات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    {foreach from=$resultEmployeeActive  key=k item=resultEmployeeActive1}
                                        <tr>   
                                                <td> {$k+1}  </td>
                                                <td> {$resultEmployeeActive1.1}  </td>
                                                {if $resultEmployeeActive1.3 eq 0 and $resultEmployeeActive1.4 eq 0 and $resultEmployeeActive1.5 eq 0 and $resultEmployeeActive1.6 eq 0}
                                                     <td colspan="5"> لا يوجد عمليات مفعله </td>
                                                {else} 
                                                    {if $resultEmployeeActive1.3 eq 0}   
                                                        <td> لا يوجد عمليات مفعله </td>
                                                    {else}
                                                        <td>{$resultEmployeeActive1.3}</td>
                                                    {/if}
                                                     
                                                    {if $resultEmployeeActive1.5 eq 0}   
                                                        <td> لا يوجد عمليات مفعله </td>
                                                    {else}
                                                        <td>{$resultEmployeeActive1.5}</td>
                                                    {/if}
                                                     {if $resultEmployeeActive1.4 eq 0}   
                                                        <td> لا يوجد عمليات مفعله </td>
                                                    {else}
                                                        <td>{$resultEmployeeActive1.4}</td>
                                                    {/if}
                                                    {if $resultEmployeeActive1.6 eq 0}   
                                                        <td> لا يوجد عمليات مفعله </td>
                                                    {else}
                                                        <td>{$resultEmployeeActive1.6}</td>
                                                    {/if}
                                                 <td><a href="addition.php?act=techactiveshow&id={$resultEmployeeActive1.0}&date={$orderactive}&actm=all"><button class="btn btn-sm btn-primary" type="button">عرض</button></a></td>                                               
                                                {/if}
                                        </tr>
                                {/foreach}
                                
                                </tbody>
                            </table>
			  {/if}
                                <br/>
                                
                                
                              

                                  
                            
                       
                                    
                                        <br/>    <br/>    <br/>    <br/>
			  </div>
				
          
                                {/if}
                    <!------------------------------------------------- /Order Active ------------------------------------------------------>
                    
                    <!------------------------------------------------- Order Active Show ------------------------------------------------------>
             {if $action eq 'techactiveshow'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات المفعله
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$dayar1} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : {$orderactive}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات المفعله :  {$orderNowCount}
                            </li>
                            
                              
                                
                                  
                                 <li class="active pull-left no-print">
                                                <a href="addition.php?act=techactiveshow&id={$idm}&date={$orderactive}&actm=am"_><button class="btn btn-primary" type="button">صباحا</button></a>
                                            </li>
                                        <li class="active pull-left no-print">
                                                <a href="  addition.php?act=techactiveshow&id={$idm}&date={$orderactive}&actm=pm"_><button class="btn btn-primary" type="button"> مساءا </button></a>
                                            </li>
                                              <li class="active pull-left no-print">
                                                <a href="  addition.php?act=techactiveshow&id={$idm}&date={$orderactive}&actm=all"_><button class="btn btn-primary" type="button"> الكل </button></a>
                                            </li>
                                            
                                            
                       
                            
                        </ol>
                            
                            
                        
                    </div>
                </div>
                <!-- /.row -->
                <h1>اسم العامل : {$employeename}</h1>
				<!-- Order Now -->
				{if $actm eq 'am' Or  $actm eq 'all'}  
                                     {if $orderNowCountA eq '0'} 
                                            <h1 class="text-center">لا يوجد عمليات مفعله هذا الصباح</h1> 
                                     {else}
                                         
                                              {if $orderNowCountAc lt '1'}
                                                       <h1 class="text-center">  لم يتم اجراء اي من العمليات</h1> 
                                              {elseif $orderNowCountAc gt '2'}
                                                          <h1 class="text-center">تم إجراء عدد   {$orderNowCountAc}  عمليات هذا الصباح  </h1> 
                                              {else}
                                                    <h1 class="text-center">تم إجراء عدد   {$orderNowCountAc}  عمليه هذا الصباح     </h1> 
                                                 {/if}
                                                                                                 
                                                 
                                     {/if}
                                {if $ordershowAm eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>صباحا جديد</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                         <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td colspan="5"><strong> المعامله</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowAm  key=k item=ordershowAm1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td>{$ordershowAm1.ido}</td>
                                                <td>{$ordershowAm1.timeo} {if $ordershowAm1.timing eq am} صباحا{else}مساءا {/if}</td>
                                                <td>{$ordershowAm1.nameva}</td>
                                                 <td>
                                                    {foreach from=$service  key=k item=service1}
                                                     {if $service1.idserv eq $ordershowAm1.idservo}{$service1.nservicea}{/if}
                                                     {/foreach}
                                                    {if $ordershowAm1.idservo eq 3} الى 
                                                        {foreach from=$area  key=k item=area1}
                                                                {if $area1.ida eq $ordershowAm1.areatransid}
                                                                    {$area1.nameaa}
                                                                    {/if}
                                                             {/foreach}
                                                    {/if}
                                                    {if $ordershowAm1.idservo eq 4} رقم الموديل: {$ordershowAm1.mdn} {/if}
                                                     
                                                </td>
                                                <td>{$ordershowAm1.nameca}</td>
                                                <td>{$ordershowAm1.phonec}<br/> {$ordershowAm1.phoneo}</td>
                                                <td>{$ordershowAm1.nameaa}</td>
                                                <td>
                                                    {if $ordershowAm1.process eq 1} 
                                                        <span class=" btn-sm btn-danger"> لم يشاهد</span>
                                                    {else}
                                                        <span class=" btn-sm btn-success"> شاهد </span> 
                                                    {/if}
                                                   
                                                </td>
                                               
                                                        {if $ordershowAm1.process eq 3}
                                                        <td>
                                                         <span class=" btn-sm btn-success">جاريه  </span>
                                                           </td>
                                                            <td><a href="addition.php?act=workshop&id={$ordershowAm1.ido}&castumer={$ordershowAm1.idc}"><button class="btn btn-sm btn-primary" type="button"> الورشه</button></a></td>
                                                    {elseif $ordershowAm1.process eq 4}
                                                        <td colspan="2"> <span class=" btn-sm btn-warning">بالورشه </span></td>
                                                      {else}
                                                          <td colspan="2" >
                                                        <form action="addition.php?act=techactiveshow&id={$ordershowAm1.employeeid}&date={$orderactive}&actm=all" method="POST">
                                                        <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                                        <input type="hidden" name="idorder" value="{$ordershowAm1.ido}" />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="إجراء">
                                                    </form> 
                                                       </td>  
                                                        {/if}
                                                
                                                <td><a href="addition.php?act=finishorder&id={$ordershowAm1.ido}&pro={$ordershowAm1.process}&castumer={$ordershowAm1.idc}"><button class="btn btn-sm btn-primary" type="button">انهاء المعامله</button></a></td>
                                                <td><a href="addition.php?act=cancleorder&id={$ordershowAm1.ido}&castumer={$ordershowAm1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                     </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                                </div>
                                
                          {if $ordershowAmDl eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="12"><strong>صباحا توصيل وتركيب</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td colspan="5"><strong> المعامله</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowAmDl  key=k item=ordershowAmDl1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td>{$ordershowAmDl1.ido}</td>
                                                <td>{$ordershowAmDl1.timodp} {if $ordershowAmDl1.timingdp eq am} صباحا{else}مساءا {/if}</td>
                                                <td>{$ordershowAmDl1.nameva}</td>
                                                <td> 
                                                    {if $ordershowAmDl1.poseplt eq "part"}قطعه{/if}
                                                    {if $ordershowAmDl1.poseplt eq "indoor"}وحده داخليه{/if}
                                                    {if $ordershowAmDl1.poseplt eq "outdoor"}وحده خارجيه{/if}
                                                    {if $ordershowAmDl1.poseplt eq "full"}كامل{/if}
                                                </td>
                                                <td>{$ordershowAmDl1.nameca}</td>
                                                <td>{$ordershowAmDl1.phonec} <br/> {$ordershowAmDl1.phoneo}</td>
                                                <td>{$ordershowAmDl1.nameaa}</td>
                                                
         
                                                
                                                <td><a href="addition.php?act=finishorder&id={$ordershowAmDl1.ido}&pro={$ordershowAmDl1.process}&castumer={$ordershowAmDl1.idc}"><button class="btn btn-sm btn-primary" type="button">انهاء المعامله</button></a></td>
                                                <td><a href="addition.php?act=cancleorder&id={$ordershowAmDl1.ido}&castumer={$ordershowAmDl1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                     </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}{/if}
                                </div>
                              
                                {if $actm eq 'pm' Or  $actm eq 'all'} 
                                 {if $orderNowCountP eq '0'} 
                                            <h1 class="text-center">لا يوجد عمليات مفعله هذاالمساء</h1> 
                                     {else}
                                         
                                              {if $orderNowCountPc lt '1'}
                                                       <h1 class="text-center">  لم يتم إجراء اي من العمليات</h1> 
                                              {elseif $orderNowCountPc gt '2'}
                                                          <h1 class="text-center">تم إجراء عدد   {$orderNowCountPc}  عمليات  هذا المساء </h1> 
                                              {else}
                                                    <h1 class="text-center">تم إجراء عدد   {$orderNowCountPc}  عمليه  هذا المساء </h1> 
                                                 {/if}
                                                                                                 
                                                 
                                     {/if}
   {if $ordershowPm eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong> مساءا جديد</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                         <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td colspan="5"><strong> المعامله</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowPm  key=k item=ordershowPm1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td>{$ordershowPm1.ido}</td>
                                                <td>{$ordershowPm1.timeo} {if $ordershowPm1.timing eq am} صباحا{else}مساءا {/if}</td>
                                                <td>{$ordershowPm1.nameva}</td>
                                                 <td>
                                                    {foreach from=$service  key=k item=service1}
                                                     {if $service1.idserv eq $ordershowPm1.idservo}{$service1.nservicea}{/if}
                                                     {/foreach}
                                                    {if $ordershowPm1.idservo eq 3} الى 
                                                        {foreach from=$area  key=k item=area1}
                                                                {if $area1.ida eq $ordershowPm1.areatransid}
                                                                    {$area1.nameaa}
                                                                    {/if}
                                                             {/foreach}
                                                    {/if}
                                                    {if $ordershowPm1.idservo eq 4} رقم الموديل: {$ordershowPm1.mdn} {/if}
                                                     
                                                </td>
                                                <td>{$ordershowPm1.nameca}</td>
                                                <td>{$ordershowPm1.phonec}  <br/> {$ordershowPm1.phoneo}</td>
                                                <td>{$ordershowPm1.nameaa}</td>
                                                <td>
                                                    {if $ordershowPm1.process eq 1} 
                                                        <span class=" btn-sm btn-danger"> لم يشاهد</span>
                                                    {else}
                                                        <span class=" btn-sm btn-success"> شاهد </span> 
                                                    {/if}
                                                   
                                                </td>
                                               
                                                        {if $ordershowPm1.process eq 3}
                                                        <td>
                                                         <span class=" btn-sm btn-success">جاريه  </span>
                                                           </td>
                                                           <td><a href="addition.php?act=workshop&id={$ordershowPm1.ido}&castumer={$ordershowPm1.idc}"><button class="btn btn-sm btn-primary" type="button"> الورشه</button></a></td>
                                                           
                                                    {elseif $ordershowPm1.process eq 4}
                                                        <td colspan="2"> <span class=" btn-sm btn-warning">بالورشه </span></td>
                                                      {else}
                                                          <td colspan="2">
                                                        <form action="addition.php?act=techactiveshow&id={$ordershowPm1.employeeid}&date={$orderactive}&actm=all" method="POST">
                                                        <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                                        <input type="hidden" name="idorder" value="{$ordershowPm1.ido}" />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="إجراء">
                                                    </form> 
                                                       </td> 
                                                        {/if}
                                                
                                                <td><a href="addition.php?act=finishorder&id={$ordershowPm1.ido}&pro={$ordershowPm1.process}&castumer={$ordershowPm1.idc}"><button class="btn btn-sm btn-primary" type="button">انهاء المعامله</button></a></td>
                                                <td><a href="addition.php?act=cancleorder&id={$ordershowPm1.ido}&castumer={$ordershowPm1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                     </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                          
                           {if $ordershowPmDl eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="12"><strong>مساءا  توصيل وتركيب</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td colspan="5"><strong> المعامله</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowPmDl  key=k item=ordershowPmDl1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td>{$ordershowPmDl1.ido}</td>
                                                <td>{$ordershowPmDl1.timodp} {if $ordershowPmDl.timingdp eq am} صباحا{else}مساءا {/if}</td>
                                                <td>{$ordershowPmDl1.nameva}</td>
                                                 <td> 
                                                    {if $ordershowPmDl1.poseplt eq "part"}قطعه{/if}
                                                    {if $ordershowPmDl1.poseplt eq "indoor"}وحده داخليه{/if}
                                                    {if $ordershowPmDl1.poseplt eq "outdoor"}وحده خارجيه{/if}
                                                    {if $ordershowPmDl1.poseplt eq "full"}كامل{/if}
                                                </td>
                                                <td>{$ordershowPmDl1.nameca}</td>
                                                <td>{$ordershowPmDl1.phonec} <br/> {$ordershowPmDl1.phoneo}</td></td>
                                                <td>{$ordershowPmDl1.nameaa}</td>
                                                
         
                                                
                                                <td><a href="addition.php?act=finishorder&id={$ordershowPmDl1.ido}&pro={$ordershowPmDl1.process}&castumer={$ordershowPmDl1.idc}"><button class="btn btn-sm btn-primary" type="button">انهاء المعامله</button></a></td>
                                                <td><a href="addition.php?act=cancleorder&id={$ordershowPmDl1.ido}&castumer={$ordershowPmDl1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                     </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                                </div>
                                    
                                        <br/>    <br/>    <br/>    <br/>
			 
				
                                {/if} {/if}
                    <!------------------------------------------------- /Order Active Show------------------------------------------------------>
                    
                   
                    <!------------------------------------------------- Order Runing ------------------------------------------------------>
             {if $action eq 'orderuning'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات الجاريه  
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$day} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : {$todayf}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات الجاريه :  {$orderNowCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                             
                               
                                {if $orderNowCount eq null}
                                   <br/><br/><br/><h1 class="text-center">لا يوجد اي عمليات جاريه بالورشه </h1><br/><br/><br/><br/><br/><br/><br/><br/>
                                {else}
                                         
                     <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>اسم الفني</strong></td>
                                         <td><strong>عدد العمليات 	</strong></td>
                                          <td><strong> العمليات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    {foreach from=$resultEmployeeRun  key=k item=resultEmployeeRun1}
                                        <tr>   
                                                <td> {$k+1}  </td>
                                                <td> {$resultEmployeeRun1.1}  </td>
                                                {if $resultEmployeeRun1.3 eq 0}
                                                      <td> لا يوجد عمليات جاريه </td>
                                                   <td><button class="btn btn-sm btn-danger" type="button"><i class="fa fa-times"></i></button></a></td>
                                                {else} 
                                                    <td>{$resultEmployeeRun1.3}</td>
                                                 <td><a href="addition.php?act=orderuningashow&id={$resultEmployeeRun1.0}"><button class="btn btn-sm btn-primary" type="button">عرض</button></a></td>                                               
                                                {/if}
                                        </tr>
                                {/foreach}
                                
                                </tbody>
                            </table>
			  {/if}
                                </div><br/>
                                
                                {/if}
                    <!------------------------------------------------- /Order Runing ------------------------------------------------------>
                    
                    
                        
                    <!------------------------------------------------- Order Runing Show Tech ------------------------------------------------------>
             {if $action eq 'orderuningashow'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات الجاريه
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$day} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : {$todayf}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات الجاريه :  {$orderNowCount}
                            </li>
                            
                          
                               
                        </ol>
                            
                            <ol class="breadcrumb">
                                <li class="active"></li>
                                <li class="active pull-left">
                                                <button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button> جاريه
                                                <button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button> الورشه
                                                <button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button> لم تم التصليح
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button> تم التلصيح 
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-truck"></li></button>  التوصيل
                            </li>
                           
                               
                             </ol>
                    </div>
                </div>
                <!-- /.row -->
                <h1>اسم العامل : {$employeename}</h1>
				<!-- Order Now -->
				 <div class="table-responsive">

                                {if $ordershowRun eq null}
                                    <h1 class="text-center">لا يوجد عمليات جاريه </h1>
                                {else}
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="16"><strong>العمليات الجاريه</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>مده العمل	</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الماركة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الحاله</strong></td>
                                        <td colspan="5"><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowRun  key=k item=ordershowRun1}
                                           <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$ordershowRun1.ido}  </td>
                                                <td>
                                                    {if (($now - {$ordershowRun1.orderdate|strtotime}) / 86400) eq 0} اليوم {else}  {(($now - $ordershowRun1.orderdate|strtotime) / 86400)|string_format:"%d"} يوم &nbsp; {/if}</td>
                                                <td>{$ordershowRun1.nameca}</td>
                                                <td>{$ordershowRun1.phonec}</td>
                                                <td>{$ordershowRun1.nameaa}</td>
                                                <td>
                                                     {foreach from=$mark  key=k item=mark1}
                                                    {if $ordershowRun1.idmark eq $mark1.idmark}{$mark1.namemarka}{/if}
                                                   
                                                    {/foreach}
                                                     {if $ordershowRun1.idmark eq 0}غير معرف{/if}
                                                      
                                                </td>
                                                <td>{$ordershowRun1.nameva}</td>
                                                <td>{if $ordershowRun1.idservo eq 3}نقل إل
                                                     {foreach from=$arealoop  item=arealoop1}
                                                        {if $ordershowRun1.areatransid eq $arealoop1.ida} 
                                                            {$arealoop1.nameaa}
                                                    {/if}
                                                     {/foreach}
                                                    {else}{$ordershowRun1.nservicea}
                                                    {/if}</td>
                                                <td>
                                                {if $ordershowRun1.poseplt eq "part"}قطعه{/if}
                                                {if $ordershowRun1.poseplt eq "indoor"}وحده داخليه{/if}
                                                {if $ordershowRun1.poseplt eq "outdoor"}وحده خارجيه{/if}
                                                {if $ordershowRun1.poseplt eq "full"}كامل{/if}
                                                </td>
                                                <td>
                                                {if $ordershowRun1.process eq 3}<button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button>{/if}
                                                {if $ordershowRun1.process eq 4}<button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button>{/if}
                                                {if $ordershowRun1.process eq 5}<button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button>{/if}
                                                {if $ordershowRun1.process eq 6}<button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button>{/if}
                                                {if $ordershowRun1.process eq 7}<button class="btn btn-sm btn-primary"><li class="fa fa-fw fa fa-truck"></li></button>{/if}
                                                {if $ordershowRun1.process eq 8}<button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-truck"></li></button>{/if}
                                                </td>
                                                {if $ordershowRun1.process eq 3}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="4"><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 4}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td><a href="addition.php?act=repair&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button">  <i class="fa fa-fw fa-wrench"></i>   </button></a></td>
                                                    <td><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 5}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 6}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 7}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                
                                        </tr>
                                        <tr>
                                            <td>الخدمات المقدمه</td>
                                            <td colspan="15">
                                                 {foreach from=$serviceOrder  key=k item=serviceOrder1 }
                                                   
                                                    {if $serviceOrder1.idoservice eq $ordershowRun1.ido}
                                                        {foreach from=$service  key=k item=service1 name=serviceff}
                                                            {if $service1.idserv eq $serviceOrder1.serviceido}
                                                               {if $smarty.foreach.serviceff.last}{$service1.nservicea}{else} {$service1.nservicea} -{/if}
                                                               
                                                            {/if}
                                                            {/foreach}
                                                   {/if}
                                                 {/foreach}
                                                
                                            </td>
                                        </tr>
                                         <tr ><td colspan="16"><hr/></td><tr>
                                        {*{if $ordershowRun1.note eq Null}{else}
                                         <tr >
                                             <td colspan="2">الملاحظات</td>
                                             <td colspan="13">{$ordershowRun1.note}</td> 
                                         </tr>
                                         <tr><td colspan="15"></td><hr/></tr>
                                        {/if}*}
                                       
                                {/foreach}
                                   
                                </tbody>
                            </table>
			  {/if}
                                   
			  </div> <br/>    <br/>    <br/>    <br/>
                                {/if}
                    <!------------------------------------------------- /Order Runing show Tech ------------------------------------------------------>
		
                                            
                    <!------------------------------------------------- Order Runing Show Castumer ------------------------------------------------------>
             {if $action eq 'orderruningcastumer'}
                <!-- Page Heading -->
                
              
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumename}
                            </div>
                        </div>  </div>
						<div class="col-lg-4">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$phonec}
                            </div>
                        </div>  </div>
							
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumer}
                            </div>
                        </div></div>
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات الجاريه
                            </li>
                             
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات الجاريه :  {$orderNowCount}
                            </li>
                            
                          
                               
                        </ol>
                            
                            <ol class="breadcrumb">
                                <li class="active"></li>
                                <li class="active pull-left">
                                                <button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button> جاريه
                                                <button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button> الورشه
                                                <button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button> لم تم التصليح
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button> تم التلصيح 
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-truck"></li></button>  التوصيل
                            </li>
                           
                               
                             </ol>
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">

                                {if $ordershowRun eq null}
                                    <h1 class="text-center">لا يوجد عمليات جاريه </h1>
                                {else}
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="16"><strong>العمليات الجاريه</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>مده العمل	</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الماركة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الحاله</strong></td>
                                        <td colspan="5"><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowRun  key=k item=ordershowRun1}
                                           <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$ordershowRun1.ido}  </td>
                                                <td>
                                                    {if (($now - {$ordershowRun1.orderdate|strtotime}) / 86400) eq 0} اليوم {else}  {(($now - $ordershowRun1.orderdate|strtotime) / 86400)|string_format:"%d"} يوم &nbsp; {/if}</td>
                                               <td> {$ordershowRun1.namema}  </td>
                                                <td>{$ordershowRun1.nameaa}</td>
                                                <td>
                                                     {foreach from=$mark  key=k item=mark1}
                                                    {if $ordershowRun1.idmark eq $mark1.idmark}{$mark1.namemarka}{/if}
                                                   
                                                    {/foreach}
                                                     {if $ordershowRun1.idmark eq 0}غير معرف{/if}
                                                      
                                                </td>
                                                <td>{$ordershowRun1.nameva}</td>
                                                <td>{if $ordershowRun1.idservo eq 3}نقل إل
                                                     {foreach from=$arealoop  item=arealoop1}
                                                        {if $ordershowRun1.areatransid eq $arealoop1.ida} 
                                                            {$arealoop1.nameaa}
                                                    {/if}
                                                     {/foreach}
                                                    {else}{$ordershowRun1.nservicea}
                                                    {/if}</td>
                                                <td>
                                                {if $ordershowRun1.poseplt eq "part"}قطعه{/if}
                                                {if $ordershowRun1.poseplt eq "indoor"}وحده داخليه{/if}
                                                {if $ordershowRun1.poseplt eq "outdoor"}وحده خارجيه{/if}
                                                {if $ordershowRun1.poseplt eq "full"}كامل{/if}
                                                </td>
                                                <td>
                                                {if $ordershowRun1.process eq 3}<button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button>{/if}
                                                {if $ordershowRun1.process eq 4}<button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button>{/if}
                                                {if $ordershowRun1.process eq 5}<button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button>{/if}
                                                {if $ordershowRun1.process eq 6}<button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button>{/if}
                                                {if $ordershowRun1.process eq 7}<button class="btn btn-sm btn-primary"><li class="fa fa-fw fa fa-truck"></li></button>{/if}
                                                {if $ordershowRun1.process eq 8}<button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-truck"></li></button>{/if}
                                                </td>
                                                {if $ordershowRun1.process eq 3}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="4"><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 4}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td><a href="addition.php?act=repair&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button">  <i class="fa fa-fw fa-wrench"></i>   </button></a></td>
                                                    <td><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 5}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 6}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 7}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                
                                        </tr>
                                        <tr>
                                            <td>الخدمات المقدمه</td>
                                            <td colspan="15">
                                                 {foreach from=$serviceOrder  key=k item=serviceOrder1 }
                                                   
                                                    {if $serviceOrder1.idoservice eq $ordershowRun1.ido}
                                                        {foreach from=$service  key=k item=service1 name=serviceff}
                                                            {if $service1.idserv eq $serviceOrder1.serviceido}
                                                               {if $smarty.foreach.serviceff.last}{$service1.nservicea}{else} {$service1.nservicea} -{/if}
                                                               
                                                            {/if}
                                                            {/foreach}
                                                   {/if}
                                                 {/foreach}
                                                
                                            </td>
                                        </tr>
                                         <tr ><td colspan="16"><hr/></td><tr>
                                        {*{if $ordershowRun1.note eq Null}{else}
                                         <tr >
                                             <td colspan="2">الملاحظات</td>
                                             <td colspan="13">{$ordershowRun1.note}</td> 
                                         </tr>
                                         <tr><td colspan="15"></td><hr/></tr>
                                        {/if}*}
                                       
                                {/foreach}
                                   
                                </tbody>
                            </table>
			  {/if}
                                   
			  </div> <br/>    <br/>    <br/>    <br/>
                                {/if}
                    <!------------------------------------------------- /Order Runing show Castumer ------------------------------------------------------>
		
                    
                 <!------------------------------------------------- Order UnActive ------------------------------------------------------>
             {if $action eq 'orderunactive'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$day} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : {$todayf}

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات اليوميه
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات الغير مفعله :  {$orderunactiveCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                {if $orderunactive eq null}
                                    <h1 class="text-center">لا  يوجد اي عمليات غير مفعله</h1>
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>اليوم</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                         <td><strong>التاريخ	</strong></td>
                                        <td><strong>المطلوب</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        {*<td><strong>معامله جديده </strong></td>
                                        <td><strong>المعاملات</strong></td>*}
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$orderunactive  key=k item=orderunactive1}
                                        <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$orderunactive1.ido}  </td>
                                                 <td>
                                                    {if {$orderunactive1.orderdate|date_format:"%a"} eq 'Sat'}السبت{/if}
                                                    {if {$orderunactive1.orderdate|date_format:"%a"} eq 'Sun'}الأحد{/if} 
                                                    {if {$orderunactive1.orderdate|date_format:"%a"} eq 'Mon'}الاثنين{/if}
                                                    {if {$orderunactive1.orderdate|date_format:"%a"} eq 'Tue'}الثلاثاء{/if}
                                                    {if {$orderunactive1.orderdate|date_format:"%a"} eq 'Wed'}الاربعاء{/if} 
                                                    {if {$orderunactive1.orderdate|date_format:"%a"} eq 'Thu'}الخميس{/if}
                                                    {if {$orderunactive1.orderdate|date_format:"%a"} eq 'Fri'}الجمعه{/if} 
                                                </td>
                                                <td> {$orderunactive1.timeo} 
                                                        {if $orderunactive1.timing eq am} صباحا{else}مساءا {/if}

                                                </td>
                                                 <td> {$orderunactive1.orderdate}  </td>
                                                <td>   عطل في  {$orderPen1.nameva}  </td>
                                                <td>{$orderunactive1.nameca}</td>
                                                <td>{$orderunactive1.phonec}</td>
                                                <td>{$orderunactive1.nameaa}</td>
                                                {*
                                                <td><a href="addition.php?act=activeorder&id={$orderunactive1.ido}&castumer={$orderunactive1.idc}"><button class="btn btn-sm btn-primary" type="button">تفعيل </button></a></td>

                                                <td><a href="addition.php?act=allorder&id={$orderunactive1.ido}$castumer={$orderunactive1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                        *}
                                                </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                                <br/>

				
                        {/if}
		      <!------------------------------------------------- /Order UnActive ------------------------------------------------------>
                      
                        <!------------------------------------------------- Order Pend ------------------------------------------------------>
             {if $action eq 'penorder'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$day} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : {$todayf}

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات الملغيه
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات  المعلقه :  {$orderpenCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                {if $orderpen eq null}
                                    <h1 class="text-center">لا  يوجد اي عمليات معلقه </h1>
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>اليوم</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>التاريخ	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        {*<td><strong>معامله جديده </strong></td>
                                        <td><strong>المعاملات</strong></td>*}
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$orderpen  key=k item=orderpen1}
                                        <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$orderpen1.ido}  </td>
                                                <td> {$orderpen1.namema}  </td>
                                                 <td>
                                                    {if {$orderpen1.orderdate|date_format:"%a"} eq 'Sat'}السبت{/if}
                                                    {if {$orderpen1.orderdate|date_format:"%a"} eq 'Sun'}الأحد{/if} 
                                                    {if {$orderpen1.orderdate|date_format:"%a"} eq 'Mon'}الاثنين{/if}
                                                    {if {$orderpen1.orderdate|date_format:"%a"} eq 'Tue'}الثلاثاء{/if}
                                                    {if {$orderpen.orderdate|date_format:"%a"} eq 'Wed'}الاربعاء{/if} 
                                                    {if {$orderpen1.orderdate|date_format:"%a"} eq 'Thu'}الخميس{/if}
                                                    {if {$orderpen1.orderdate|date_format:"%a"} eq 'Fri'}الجمعه{/if} 
                                                </td>
                                                <td> {$orderpen1.timeo} 
                                                        {if $orderunactive1.timing eq am} صباحا{else}مساءا {/if}

                                                </td>
                                                 <td> {$orderpen1.orderdate}  </td>
                                                <td>{$orderpen1.nameva}</td>
                                                <td>{$orderpen1.nameca}</td>
                                                <td>{$orderpen1.phonec}</td>
                                                <td>{$orderpen1.nameaa}</td>
                                                {*
                                                <td><a href="addition.php?act=activeorder&id={$orderpen1.ido}&castumer={$orderpen1.idc}"><button class="btn btn-sm btn-primary" type="button">تفعيل </button></a></td>

                                                <td><a href="addition.php?act=allorder&id={$orderpen1.ido}$castumer={$orderpen1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                        *}
                                                </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                                <br/>

				
                        {/if}
		      <!------------------------------------------------- /Order Pend ------------------------------------------------------>
                      
                      <!------------------------------------------------- Order Cancle ------------------------------------------------------>
             {if $action eq 'ordercancel'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$day} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : {$todayf}

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-times-circle"></i>العمليات الملغيه
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات  الملغيه :  {$ordercancleCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                {if $ordercancle eq null}
                                    <h1 class="text-center">لا  يوجد اي عمليات ملغيه </h1>
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>اليوم</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>التاريخ	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>السبب </strong></td>
                                        <td><strong>ملاحظات</strong></td>
                                        {*<td><strong>معامله جديده </strong></td>
                                        <td><strong>المعاملات</strong></td>*}
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordercancle  key=k item=ordercancle1}
                                        <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$ordercancle1.ido}  </td>
                                                <td> {if $ordercancle1.employeeid eq 0} لا يوجد{else}
                                                      {foreach from=$employee  key=k item=employee1}
                                                            {if  $ordercancle1.employeeid  eq $employee1.idm}
                                                                {$employee1.namema}
                                                                {/if}
                                                         {/foreach}
                                                   
                                                    {/if}  </td>
                                                 <td>
                                                    {if {$ordercancle1.orderdate|date_format:"%a"} eq 'Sat'}السبت{/if}
                                                    {if {$ordercancle1.orderdate|date_format:"%a"} eq 'Sun'}الأحد{/if} 
                                                    {if {$ordercancle1.orderdate|date_format:"%a"} eq 'Mon'}الاثنين{/if}
                                                    {if {$ordercancle1.orderdate|date_format:"%a"} eq 'Tue'}الثلاثاء{/if}
                                                    {if {$ordercancle1.orderdate|date_format:"%a"} eq 'Wed'}الاربعاء{/if} 
                                                    {if {$ordercancle1.orderdate|date_format:"%a"} eq 'Thu'}الخميس{/if}
                                                    {if {$ordercancle1.orderdate|date_format:"%a"} eq 'Fri'}الجمعه{/if} 
                                                </td>
                                                <td> {$ordercancle1.timeo} 
                                                        {if $orderunactive1.timing eq am} صباحا{else}مساءا {/if}

                                                </td>
                                                <td>{$ordercancle1.orderdate}</td>
                                                <td>{$ordercancle1.nameva}</td>
                                                <td>{$ordercancle1.nameca}</td>
                                                <td>{$ordercancle1.phonec}</td>
                                                <td>{$ordercancle1.nameaa}</td>
                                                <td>{$ordercancle1.namena}</td>
                                                <td>{$ordercancle1.note}</td>
                                                {*
                                                <td><a href="addition.php?act=activeorder&id={$orderpen1.ido}&castumer={$orderpen1.idc}"><button class="btn btn-sm btn-primary" type="button">تفعيل </button></a></td>

                                                <td><a href="addition.php?act=allorder&id={$orderpen1.ido}$castumer={$orderpen1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                        *}
                                                </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                                <br/>

				
                        {/if}
		      <!------------------------------------------------- /Order Cancle ------------------------------------------------------>
                   
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
