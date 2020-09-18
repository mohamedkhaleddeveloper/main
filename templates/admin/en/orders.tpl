{include file="admin/en/head.tpl" title=EtagCP}
{include file="admin/en/header.tpl"}
{include file="admin/en/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">
                                 <!------------------------------------------------- Order Date ------------------------------------------------------>
             {if $action eq 'orderdate'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : {$dayar1} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : {$orderDate}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-adjust"></i> Operations Day
                            </li>
                          
                             <li class="active">
                                <i class="fa fa-fw fa-newspaper-o"></i>  Operations Count  :  {$orderNowCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     {if $orderNowCountA eq '0'} 
                                            <h1 class="text-center">No Operations This Morning</h1> 
                                      {/if}
                                         
                                                                                      
                                                 
                                   
                                {if $orderNowAm eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="11"><strong>Morning</strong></td></tr>
                                    <tr class="active text-center"><td colspan="11"><strong>New</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong>Operations No</strong></td>
                                        <td><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="2"><strong> Operations </strong></td>
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
                                                <td>{$orderNowAm1.nameve}</td>
                                               
                                                <td>
                                                   
                                                   {$orderNowAm1.nservicee}
                                                {if $orderNowAm1.idserv eq 3} to 
                                                    {foreach from=$area  key=k item=area1}
                                                            {if $area1.ida eq $orderNowAm1.areatransid}
                                                                {$area1.nameae}
                                                                {/if}
                                                         {/foreach}
                                                    {/if}
                                                    {if $orderNowAm1.idserv eq 4} M.D: {$orderNowAm1.mdn} {/if}
                                                    
                                                </td>
                                                   
                                                <td>{$orderNowAm1.namece}</td>
                                                <td>{$orderNowAm1.phonec}</td>
                                                <td>{$orderNowAm1.nameae}</td>
                                                <td><a href="addition.php?lang=en&act=activeorder&id={$orderNowAm1.ido}&castumer={$orderNowAm1.idc}&date={$orderDate}"><button class="btn btn-sm btn-primary" type="button">Active </button></a></td> 
                                                <td><a href="addition.php?lang=en&act=cancleorder&id={$orderNowAm1.ido}&castumer={$orderNowAm1.idc}"><button class="btn btn-sm btn-danger" type="button"> Cancel</button></a></td>
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
                                    <tr class="active text-center"><td colspan="13"><strong>Morning</strong></td></tr>
                                    <tr class="active text-center"><td colspan="13"><strong>  Delivery & Install</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong>Operations No</strong></td>
                                        <td><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                         <td><strong>Tech Name</strong></td>
                                        <td colspan="3"><strong> Operations</strong></td>
                                       
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
                                                <td>{$orderNowDl1.nservicee}</td>
                                                <td>{if $orderNowDl1.poseplt eq "full"}Full{/if}
                                                    {if $orderNowDl1.poseplt eq "indoor"}In Door {/if}
                                                    {if $orderNowDl1.poseplt eq "outdoor"}Out Door {/if}
                                                    {if $orderNowDl1.poseplt eq "part"}Part{/if}
                                                
                                                </td>
                                                <td>{$orderNowDl1.namece}</td>
                                                <td>{$orderNowDl1.phonec}</td>
                                                <td>{$orderNowDl1.nameae}</td>
                                                <td>{foreach from=$factor  key=k item=factor1}
                                                         {if $orderNowDl1.employeeiddp eq $factor1.idm}
                                                             {$factor1.nameme} 
                                                         {/if}
                                                         
                                                {/foreach}
                                                   </td>
                                                {if $orderNowDl1.process eq 9}
                                                     <td colspan="3"><button class="btn btn-sm btn-success" type="button"> Done   </td>
                                                {else}
                                                <td><a href="addition.php?act=delivery&id={$orderNowDl1.ido}"><button class="btn btn-sm btn-primary" type="button"><i class="fa fa-fw fa-pencil"></i></button></a></td>
                                                 <td> <form action="" method="POST">
                                                        <input type="hidden" name="idorder" value="{$orderNowDl1.ido}" />
                                                        <input type='hidden' name='orderdate' value='{$orderdate22}' />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="confirmation">
                                                            </form> </td>
                                                             <td><a href="addition.php?act=cancleorder&id={$orderNowDl1.ido}&castumer={$orderNowAm1.idc}"><button class="btn btn-sm btn-danger" type="button">Cancel </button></a></td>
                                                            {/if}
                                               
                                        </tr>
                                {/foreach}
                                </tbody>
                            </table>
                                 <hr/><hr/><hr/>
			  {/if}
                               
                                
                                 {if $orderNowCountP eq '0'} 
                                            <h1 class="text-center">No Operations This Afternon</h1> 
                                       {/if}
                                         
                           
                                {if $orderNowPm eq null}
                                        
                                {else}
                                                       <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="11"><strong>Afternoon</strong></td></tr>
                                    <tr class="active text-center"><td colspan="11"><strong>New</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong>Operations No</strong></td>
                                        <td><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="2"><strong> Operations</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$orderNowPm  key=k item=orderNowPm1}
                                        <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$orderNowPm1.ido}  </td>
                                                <td> {$orderNowPm1.timeo} 
                                                        {if $orderNowPm1.timing eq am} morning{else}Afternoon {/if}

                                                </td>
                                                <td>{$orderNowAm1.nameve}</td>
                                                <td>
                                                   
                                                   {$orderNowPm1.nservicee}
                                                {if $orderNowPm1.idserv eq 3} to 
                                                    {foreach from=$area  key=k item=area1}
                                                            {if $area1.ida eq $orderNowPm1.areatransid}
                                                                {$area1.nameae}
                                                                {/if}
                                                         {/foreach}
                                                    {/if}
                                                    {if $orderNowPm1.idserv eq 4} M.D: {$orderNowPm1.mdn} {/if}
                                                    
                                                </td>
                                                <td>{$orderNowPm1.namece}</td>
                                                <td>{$orderNowPm1.phonec}</td>
                                                <td>{$orderNowPm1.nameae}</td>
                                                <td><a href="addition.php?act=activeorder&id={$orderNowPm1.ido}&castumer={$orderNowPm1.idc}&date={$orderDate}"><button class="btn btn-sm btn-primary" type="button">Active </button></a></td>
                                                       
                                                <td><a href="addition.php?act=cancleorder&id={$orderNowPm1.ido}&castumer={$orderNowPm1.idc}"><button class="btn btn-sm btn-danger" type="button">Cancel </button></a></td>
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
                                    <tr class="active text-center"><td colspan="13"><strong>AfterNoon</strong></td></tr>
                                    <tr class="active text-center"><td colspan="13"><strong> Delivery & Install </strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong>Operations No</strong></td>
                                        <td><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                         <td><strong>Tech Name</strong></td>
                                        <td colspan="3"><strong> Operations</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    {foreach from=$orderNowdDlPm  key=k item=orderNowdDlPm1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td>{$orderNowdDlPm1.ido}</td>
                                                 <td> {$orderNowdDlPm1.timeo} 
                                                        {if $orderNowdDlPm1.timing eq am} Morning{else}Afternoon {/if}
                                                </td>
                                                <td>{$orderNowdDlPm1.nameve}</td>
                                                <td>{$orderNowdDlPm1.nservicee}</td>
                                                <td>{if $orderNowdDlPm1.poseplt eq "fill"}Full{/if}
                                                    {if $orderNowdDlPm1.poseplt eq "indoor"}Indoor{/if}
                                                    {if $orderNowdDlPm1.poseplt eq "outdoor"}Outdoor {/if}
                                                    {if $orderNowdDlPm1.poseplt eq "part"}pART{/if}
                                                
                                                </td>
                                                <td>{$orderNowdDlPm1.namece}</td>
                                                <td>{$orderNowdDlPm1.phonec}</td>
                                                <td>{$orderNowdDlPm1.nameae}</td>
                                                <td>{foreach from=$factor  key=k item=factor1}
                                                         {if $orderNowdDlPm1.employeeiddp eq $factor1.idm}
                                                             {$factor1.nameme} 
                                                         {/if}
                                                         
                                                {/foreach}
                                                   </td>
                                                {if $orderNowdDlPm1.process eq 9}
                                                     <td colspan="3"><button class="btn btn-sm btn-success" type="button">Done</td>
                                                {else}
                                                <td><a href="addition.php?act=delivery&id={$orderNowdDlPm1.ido}"><button class="btn btn-sm btn-primary" type="button"><i class="fa fa-fw fa-pencil"></i></button></a></td>
                                                 <td> <form action="" method="POST">
                                                        <input type="hidden" name="idorder" value="{$orderNowdDlPm1.ido}" />
                                                        <input type='hidden' name='orderdate' value='{$orderdate22}' />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="confirmation">
                                                            </form> </td>
                                                             <td><a href="addition.php?act=cancleorder&id={$orderNowdDlPm1.ido}&castumer={$orderNowdDlPm1.idc}"><button class="btn btn-sm btn-danger" type="button"> Cancel</button></a></td>
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
                                <i class="fa fa-fw fa-adjust"></i> Active operations 
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : {$dayen1} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : {$orderactive}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Number of active operations:  {$orderNowCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">
                                     {if $orderNowCount eq '0'} 
                                            <h1 class="text-center"> No operations have been activated  </h1> 
                                     {else}
                                         
                                              {if $orderNowCountAc lt '1'}
                                                       <h1 class="text-center">  It is not to have any operations </h1> 
                                              {elseif $orderNowCountAc gt '2'}
                                                          <h1 class="text-center"> It was conducted  {$orderNowCountAc} operations </h1> 
                                              {else}
                                                    <h1 class="text-center">It was conducted {$orderNowCountAc}  process </h1> 
                                                 {/if}
                                                                                                 
                                                 
                                     {/if}
                                {if $orderNow eq null}
                                      
                                {else}
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong> Technical Name </strong></td>
                                         <td><strong>  morning  New Operations</strong></td>
                                         <td><strong>  morning  Install & Delivery Operations</strong></td>
                                          <td><strong> Afternon New Operations</strong></td>
                                           <td><strong>  Afternon  Install & Delivery Operations</strong></td>
                                          <td><strong> Operations </strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    {foreach from=$resultEmployeeActive  key=k item=resultEmployeeActive1}
                                        <tr>   
                                                <td> {$k+1}  </td>
                                                <td> {$resultEmployeeActive1.2}  </td>
                                                {if $resultEmployeeActive1.3 eq 0 and $resultEmployeeActive1.4 eq 0 and $resultEmployeeActive1.5 eq 0 and $resultEmployeeActive1.6 eq 0}
                                                     <td colspan="5"> No operations have been activated </td>
                                                {else} 
                                                    {if $resultEmployeeActive1.3 eq 0}   
                                                        <td> No operations have been activated  </td>
                                                    {else}
                                                        <td>{$resultEmployeeActive1.3}</td>
                                                    {/if}
                                                     {if $resultEmployeeActive1.5 eq 0}   
                                                        <td> No operations have been activated  </td>
                                                    {else}
                                                        <td>{$resultEmployeeActive1.5}</td>
                                                    {/if}
                                                      {if $resultEmployeeActive1.4 eq 0}   
                                                        <td> No operations have been activated  </td>
                                                    {else}
                                                        <td>{$resultEmployeeActive1.4}</td>
                                                    {/if}
                                                    {if $resultEmployeeActive1.6 eq 0}   
                                                        <td> No operations have been activated  </td>
                                                    {else}
                                                        <td>{$resultEmployeeActive1.6}</td>
                                                    {/if}
                                                 <td><a href="addition.php?lang=en&act=techactiveshow&id={$resultEmployeeActive1.0}&date={$orderactive}&actm=all"><button class="btn btn-sm btn-primary" type="button">Show</button></a></td>                                               
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
                                <i class="fa fa-fw fa-adjust"></i>Active operations
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : {$dayen1}  

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : {$orderactive}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Number of active operations: {$orderNowCount}
                            </li>
                            
                           
                            <li class="active pull-right no-print">
                                <a href="  addition.php?lang=en&act=techactiveshow&id={$idm}&date={$orderactive}&actm=pm"_><button class="btn btn-sm btn-primary" type="button"> Pm </button></a>
                            </li>
                             <li class="active pull-right no-print">
                                            <a href="addition.php?lang=en&act=techactiveshow&id={$idm}&date={$orderactive}&actm=am"_><button class="btn btn-sm btn-primary" type="button">Am</button></a>
                            </li>
                              <li class="active pull-right no-print">
                                <a href="  addition.php?lang=en&act=techactiveshow&id={$idm}&date={$orderactive}&actm=all"_><button class="btn btn-sm btn-primary" type="button"> All </button></a>
                            </li>
                            
                        </ol>
                            
                    
                    </div>
                </div>
                <!-- /.row -->
              
                <h3><i class="fa fa-fw fa-user-md fa-2x"></i>Technical Name  : {$employeenamee|ucfirst}</h3>
                   {if $actm eq 'am' Or  $actm eq 'all'}  
				<!-- Order Now -->
                                     {if $orderNowCountA eq '0'} 
                                            <h3 class="text-center"> No activated this morning operations </h3> 
                                     {else}
                                         
                                              {if $orderNowCountAc lt '1'}
                                                       <h1 class="text-center"> Not perform any of the operations </h1> 
                                              {elseif $orderNowCountAc gt '2'}
                                                          <h1 class="text-center">{$orderNowCountAc}   operations this morning action  </h1> 
                                              {else}
                                                    <h1 class="text-center">{$orderNowCountAc}   operation this morning action    </h1> 
                                                 {/if}
                                                                                                 
                                                 
                                     {/if}
                                   {if $ordershowAm eq null}
                                        
                                {else}
                                      
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>Morning New</strong></td></tr>
                                    <tr class="active text-center">
                                         <td><strong>No</strong></td>
                                        <td class="no-print"><strong>Operations No</strong></td>
                                        <td class="no-print"><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="5" class="no-print"><strong> Operations</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowAm  key=k item=ordershowAm1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td class="no-print">{$ordershowAm1.ido}</td>
                                                <td class="no-print">{$ordershowAm1.timeo} {if $ordershowAm1.timing eq am} Am{else}Pm {/if}</td>
                                                <td>{$ordershowAm1.nameve}</td>
                                                 <td>
                                                    {foreach from=$service  key=k item=service1}
                                                     {if $service1.idserv eq $ordershowAm1.idservo}{$service1.nservicee}{/if}
                                                     {/foreach}
                                                    {if $ordershowAm1.idservo eq 3} TO 
                                                        {foreach from=$area  key=k item=area1}
                                                                {if $area1.ida eq $ordershowAm1.areatransid}
                                                                    {$area1.nameae}
                                                                    {/if}
                                                             {/foreach}
                                                    {/if}
                                                    {if $ordershowAm1.idservo eq 4} M.D : {$ordershowAm1.mdn} {/if}
                                                     
                                                </td>
                                                <td>{$ordershowAm1.namece}</td>
                                                <td>{$ordershowAm1.phonec} <br/> {$ordershowAm1.phoneo}</td>
                                                <td>{$ordershowAm1.nameae}</td>
                                                <td class="no-print">
                                                    {if $ordershowAm1.process eq 1} 
                                                        <span class=" btn-sm btn-danger"> Not See</span>
                                                    {else}
                                                        <span class=" btn-sm btn-success"> Saw </span> 
                                                    {/if}
                                                </td >
                                               
                                                        {if $ordershowAm1.process eq 3}
                                                        <td class="no-print">
                                                         <span class=" btn-sm btn-success">Preparing  </span>
                                                           </td>
                                                            <td class="no-print"><a href="addition.php?lang=en&act=workshop&id={$ordershowAm1.ido}&castumer={$ordershowAm1.idc}"><button class="btn btn-sm btn-primary" type="button"> Work Shop</button></a></td>
                                                    {elseif $ordershowAm1.process eq 4}
                                                        <td colspan="2" class="no-print"> <span class=" btn-sm btn-warning">WorkShop</span></td>
                                                      {else}
                                                          <td colspan="2" class="no-print">
                                                        <form action="addition.php?lang=en&act=techactiveshow&id={$ordershowAm1.employeeid}&date={$orderactive}&actm=all" method="POST">
                                                        <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                                        <input type="hidden" name="idorder" value="{$ordershowAm1.ido}" />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="Prepare">
                                                    </form> 
                                                       </td>  
                                                        {/if}
                                                
                                                <td class="no-print"><a href="addition.php?lang=en&act=finishorder&id={$ordershowAm1.ido}&pro={$ordershowAm1.process}&castumer={$ordershowAm1.idc}"><button class="btn btn-sm btn-primary" type="button"> Finish</button></a></td>
                                                <td class="no-print"><a href="addition.php?lang=en&act=cancleorder&id={$ordershowAm1.ido}&castumer={$ordershowAm1.idc}"><button class="btn btn-sm btn-danger" type="button"> Cancel</button></a></td>
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
                                    <tr class="active text-center"><td colspan="12"><strong>Morinig Install & Delivery</strong></td></tr>
                                    <tr class="active text-center">
                                         <td><strong>No</strong></td>
                                        <td class="no-print"><strong>Operations No</strong></td>
                                        <td class="no-print"><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Part</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="5" class="no-print"><strong> Operations</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowAmDl  key=k item=ordershowAmDl1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td class="no-print">{$ordershowAmDl1.ido}</td>
                                                <td class="no-print">{$ordershowAmDl1.timodp} {if $ordershowAmDl1.timingdp eq am} Am{else}Pm {/if}</td>
                                                <td>{$ordershowAmDl1.nameve}</td>
                                                <td>{$ordershowPmDl1.poseplt}</td>
                                                <td>{$ordershowAmDl1.namece}</td>
                                                <td>{$ordershowAmDl1.phonec} <br/> {$ordershowAmDl1.phoneo}</td>
                                                <td>{$ordershowAmDl1.nameae}</td>
                                                
         
                                                
                                                <td class="no-print"><a href="addition.php?lang=en&act=finishorder&id={$ordershowAm1.ido}&pro={$ordershowAm1.process}&castumer={$ordershowAm1.idc}"><button class="btn btn-sm btn-primary" type="button">Finish </button></a></td>
                                                <td class="no-print"><a href="addition.php?lang=en&act=cancleorder&id={$ordershowAm1.ido}&castumer={$ordershowAm1.idc}"><button class="btn btn-sm btn-danger" type="button">Cancel</button></a></td>
                                     </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if} {/if}
                                </div>
                                
                                   {if $actm eq 'pm' Or  $actm eq 'all'}  
                                 {if $orderNowCountP eq '0'} 
                                            <h1 class="text-center no-print">No activated this AfterNoon operations</h1> 
                                     {else}
                                         
                                              {if $orderNowCountPc lt '1'}
                                                       <h1 class="text-center no-print">  Not perform any of the operations</h1> 
                                              {elseif $orderNowCountPc gt '2'}
                                                          <h1 class="text-center no-print">operations this Afternoon action    {$orderNowCountPc}   </h1> 
                                              {else}
                                                    <h1 class="text-center  no-print">     {$orderNowCountPc}   operation this Afternoon action</h1> 
                                                 {/if}
                                                                                                 
                                                 
                                     {/if}
                                     
   {if $ordershowPm eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>afternoon New</strong></td></tr>
                                    <tr class="active text-center">
                                         <td><strong>No</strong></td>
                                        <td class="no-print"><strong>Operations No</strong></td>
                                        <td class="no-print"><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="5" class="no-print"><strong> Operations</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowPm  key=k item=ordershowPm1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td class="no-print">{$ordershowPm1.ido}</td>
                                                <td class="no-print">{$ordershowPm1.timeo} {if $ordershowPm1.timing eq am} Am{else}Pm {/if}</td>
                                                <td>{$ordershowPm1.nameve}</td>
                                                 <td>
                                                    {foreach from=$service  key=k item=service1}
                                                     {if $service1.idserv eq $ordershowPm1.idservo}{$service1.nservicee}{/if}
                                                     {/foreach}
                                                    {if $ordershowPm1.idservo eq 3} To 
                                                        {foreach from=$area  key=k item=area1}
                                                                {if $area1.ida eq $ordershowPm1.areatransid}
                                                                    {$area1.nameae}
                                                                    {/if}
                                                             {/foreach}
                                                    {/if}
                                                    {if $ordershowPm1.idservo eq 4} M.D : {$ordershowPm1.mdn} {/if}
                                                     
                                                </td>
                                                <td>{$ordershowPm1.namece}</td>
                                                <td>{$ordershowPm1.phonec}<br/> {$ordershowPm1.phoneo}</td>
                                                <td>{$ordershowPm1.nameae}</td>
                                                <td class="no-print">
                                                {if $ordershowPm1.process eq 1} 
                                                        <span class=" btn-sm btn-danger"> Not See</span>
                                                    {else}
                                                        <span class=" btn-sm btn-success"> Saw </span> 
                                                    {/if}
                                                </td>
                                               
                                                        {if $ordershowPm1.process eq 3}
                                                        <td class="no-print">
                                                         <span class=" btn-sm btn-success">Preparing  </span>
                                                           </td>
                                                            <td><a href="addition.php?lang=en&act=workshop&id={$ordershowPm1.ido}&castumer={$ordershowPm1.idc}"><button class="btn btn-sm btn-primary" type="button"> Work Shop</button></a></td>
                                                    {elseif $ordershowPm1.process eq 4}
                                                        <td colspan="2" class="no-print"> <span class=" btn-sm btn-warning">WorkShop</span></td>
                                                      {else}
                                                          <td colspan="2" class="no-print">
                                                        <form action="addition.php?lang=en&act=techactiveshow&id={$ordershowPm1.employeeid}&date={$orderactive}&actm=all" method="POST">
                                                        <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >    
                                                        <input type="hidden" name="idorder" value="{$ordershowPm1.ido}" />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="Prepare">
                                                    </form> 
                                                       </td>  
                                                        {/if}
                                                
                                                <td class="no-print"><a href="addition.php?lang=en&act=finishorder&id={$ordershowPm1.ido}&pro={$ordershowPm1.process}&castumer={$ordershowPm1.idc}"><button class="btn btn-sm btn-primary" type="button"> Finish</button></a></td>
                                                <td class="no-print"><a href="addition.php?lang=en&act=cancleorder&id={$ordershowPm1.ido}&castumer={$ordershowPm1.idc}"><button class="btn btn-sm btn-danger" type="button"> Cancel</button></a></td>
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
                                    <tr class="active text-center"><td colspan="12"><strong>After Noon Install & Delivery</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td class="no-print"><strong>Operations No</strong></td>
                                        <td class="no-print"><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Part</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="5" class="no-print"><strong> Operations</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowPmDl  key=k item=ordershowPmDl1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td class="no-print">{$ordershowPmDl1.ido}</td>
                                                <td class="no-print">{$ordershowPmDl1.timodp} {if $ordershowPmDl.timingdp eq am} Am{else}Pm {/if}</td>
                                                <td>{$ordershowPmDl1.nameve}</td>
                                                <td>{$ordershowPmDl1.poseplt}</td>
                                                <td>{$ordershowPmDl1.namece}</td>
                                                <td>{$ordershowPmDl1.phonec}<br/> {$ordershowPmDl1.phoneo}</td>
                                                <td>{$ordershowPmDl1.nameae}</td>
                                                
         
                                                
                                               <td class="no-print"><a href="addition.php?lang=en&act=finishorder&id={$ordershowPmDl1.ido}&pro={$ordershowPmDl1.process}&castumer={$ordershowPmDl1.idc}"><button class="btn btn-sm btn-primary" type="button">Finish </button></a></td>
                                                <td class="no-print"><a href="addition.php?lang=en&act=cancleorder&id={$ordershowPmDl1.ido}&castumer={$ordershowPmDl1.idc}"><button class="btn btn-sm btn-danger" type="button">Cancel</button></a></td>
                                     </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                                </div>
                                    
                                        <br/>    <br/>    <br/>    <br/>
			 
				
                                {/if}  {/if}
                    <!------------------------------------------------- /Order Active Show------------------------------------------------------>
                    
                   
                    <!------------------------------------------------- Order Runing ------------------------------------------------------>
             {if $action eq 'orderuning'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i> Running processes
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : {$dayen} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : {$todayf}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Running processes :  {$orderNowCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                             
                               
                                {if $orderNowCount eq null}
                                   <br/><br/><br/><h1 class="text-center">No workshop operations </h1><br/><br/><br/><br/><br/><br/><br/><br/>
                                {else}
                                         
                     <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong> Technical Name </strong></td>
                                         <td><strong>The number of operations 	</strong></td>
                                          <td><strong> operations </strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    {foreach from=$resultEmployeeRun  key=k item=resultEmployeeRun1}
                                        <tr>   
                                                <td> {$k+1}  </td>
                                                <td> {$resultEmployeeRun1.2}  </td>
                                                {if $resultEmployeeRun1.3 eq 0}
                                                      <td> لا يوجد عمليات جاريه </td>
                                                   <td><button class="btn btn-sm btn-danger" type="button"><i class="fa fa-times"></i></button></a></td>
                                                {else} 
                                                    <td>{$resultEmployeeRun1.3}</td>
                                                 <td><a href="addition.php?lang=en&act=orderuningashow&id={$resultEmployeeRun1.0}"><button class="btn btn-sm btn-primary" type="button">Show</button></a></td>                                               
                                                {/if}
                                        </tr>
                                {/foreach}
                                
                                </tbody>
                            </table>
			  {/if}
                                </div><br/>
                                
                                {/if}
                    <!------------------------------------------------- /Order Runing ------------------------------------------------------>
                    
                    
                        
                    <!------------------------------------------------- Order Runing Show ------------------------------------------------------>
             {if $action eq 'orderuningashow'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>Running processes
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : {$dayen} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : {$todayf}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i>   Running processes :  {$orderNowCount}
                            </li>
                             
                        </ol>
                               <ol class="breadcrumb">
                                      <li class="active">
                                 <li class="active pull-right">
                                                <button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button> preparing
                                                <button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button> WorkShop
                                                <button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button> Not Fix It
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button> Done 
                                                <button class="btn btn-sm btn-primary"><li class="fa fa-fw fa fa fa-car"></li></button> Delivery
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa fa-car"></li></button> Done Delivery
                            </li>
                               
                             </ol>
                    </div>
                </div>
                <!-- /.row -->
                <h3> Technical Name  : {$employeenamee|ucfirst}</h3>
				<!-- Order Now -->
				 <div class="table-responsive">

                                {if $ordershowRun eq null}
                                    <h1 class="text-center">No Found  Running processes    </h1>
                                {else}
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="15"><strong> Running processes </strong></td></tr>
                                    <tr class="active text-center">
                                       <td><strong>No.</strong></td>
                                        <td><strong>OP No </strong></td>
                                        <td><strong>Duration</strong></td>
                                        <td><strong>name</strong></td>
                                        <td><strong>mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td><strong>Brand</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>service</strong></td>
                                        <td><strong> part</strong></td>
                                        <td><strong>status</strong></td>
                                        <td colspan="4"><strong> op</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowRun  key=k item=ordershowRun1}
                                        <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$ordershowRun1.ido}  </td>
                                                <td>
                                                    {if (($now - {$ordershowRun1.orderdate|strtotime}) / 86400) eq 0}  Today  {else}  {(($now - $ordershowRun1.orderdate|strtotime) / 86400)|string_format:"%d"} Days &nbsp; {/if}</td>
                                                <td>{$ordershowRun1.namece|upper}</td>
                                                <td>{$ordershowRun1.phonec}</td>
                                                <td>{$ordershowRun1.nameae|upper}</td>
                                                <td>
                                                     {foreach from=$mark  key=k item=mark1}
                                                    {if $ordershowRun1.idmark eq $mark1.idmark}{$mark1.namemarke|upper}{/if}
                                                   
                                                    {/foreach}
                                                     {if $ordershowRun1.idmark eq 0}None{/if}
                                                      
                                                </td>
                                                <td>{$ordershowRun1.nameve|upper}</td>
                                                <td>{$ordershowRun1.nservicee|upper}</td>
                                                <td>{$ordershowRun1.poseplt|upper}</td>
                                                 <td>
                                                {if $ordershowRun1.process eq 3}<button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button>{/if}
                                                {if $ordershowRun1.process eq 4}<button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button>{/if}
                                                {if $ordershowRun1.process eq 5}<button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button>{/if}
                                                {if $ordershowRun1.process eq 6}<button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button>{/if}
                                                {if $ordershowRun1.process eq 7}<button class="btn btn-sm btn-primary"><li class="fa fa-fw fa fa fa-car"></li></button>{/if}
                                                {if $ordershowRun1.process eq 8}<button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa fa-car"></li></button>{/if}
                                                </td>
                                                <td><a href="addition.php?lang=en&act=repair&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> <i class="fa fa-fw fa-wrench"></i>  </button></a></td>
                                                <td><a href="addition.php?lang=en&act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> Part  </button></a></td>
                                                <td><a href="addition.php?lang=en&act=delevry&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> Deliver  </button></a></td>
                                                <td><a href="addition.php?lang=en&act=finishorder&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> Finish </button></a></td>
                                        </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                                   
			  </div> <br/>    <br/>    <br/>    <br/>
                                {/if}
                    <!------------------------------------------------- /Order Runing show ------------------------------------------------------>
		
                 <!------------------------------------------------- Order UnActive ------------------------------------------------------>
             {if $action eq 'orderunactive'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : {$day} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : {$todayf}

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>  Operations inactive  
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i>  Operations inactive   :  {$orderunactiveCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                {if $orderunactive eq null}
                                    <h1 class="text-center">No Found Operations inactive  </h1>
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                        <td><strong>No.</strong></td>
                                        <td><strong>operation No </strong></td>
                                        <td><strong>Day</strong></td>
                                        <td><strong>Time</strong></td>
                                        <td><strong>Date</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>name</strong></td>
                                        <td><strong>mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        {*<td><strong>معامله جديده </strong></td>
                                        <td><strong>المعاملات</strong></td>*}
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$orderunactive  key=k item=orderunactive1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td>{$orderunactive1.ido}  </td>
                                                <td>{$orderunactive1.orderdate|date_format:"%A"}</td>
                                                <td>{$orderunactive1.timeo} {$orderunactive1.timing }</td>
                                                <td>{$orderunactive1.orderdate}</td>
                                                <td>{$orderunactive1.nameve}</td>
                                                <td>{$orderunactive1.namece}</td>
                                                <td>{$orderunactive1.phonec}</td>
                                                <td>{$orderunactive1.nameae}</td>
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
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : {$dayen} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : {$todayf}

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i> Operations Pending 
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i>  Operations Pending     :  {$orderpenCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                {if $orderpen eq null}
                                    <h1 class="text-center"> No Found  Operations Pending  </h1>
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                         <td><strong>No.</strong></td>
                                        <td><strong>operation No </strong></td>
                                        <td><strong>Technical Name</strong></td>
                                        <td><strong>Day</strong></td>
                                        <td><strong>Time</strong></td>
                                        <td><strong>Date</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>name</strong></td>
                                        <td><strong>mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        {*<td><strong>معامله جديده </strong></td>
                                        <td><strong>المعاملات</strong></td>*}
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$orderpen  key=k item=orderpen1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                <td>{$orderpen1.ido}</td>
                                                <td>{$orderpen1.nameme}</td>
                                                <td>{$orderpen1.orderdate|date_format:"%A"}</td>
                                                <td>{$orderpen1.timeo} {$orderunactive1.timing}</td>
                                                <td>{$orderpen1.orderdate}</td>
                                                <td>{$orderpen1.nameve}</td>
                                                <td>{$orderpen1.namece}</td>
                                                <td>{$orderpen1.phonec}</td>
                                                <td>{$orderpen1.nameae}</td>
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
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : {$dayen} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : {$todayf}

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-times-circle"></i> Canceled operations 
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i>  Canceled operations    :  {$ordercancleCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                {if $ordercancle eq null}
                                    <h1 class="text-center">No Found  Canceled operations </h1>
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                        <td><strong>No.</strong></td>
                                        <td><strong>operation No </strong></td>
                                        <td><strong>Technical Name</strong></td>
                                        <td><strong>Day</strong></td>
                                        <td><strong>Time</strong></td>
                                        <td><strong>Date</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>name</strong></td>
                                        <td><strong>mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td><strong>Reason</strong></td>
                                        <td><strong>Nots</strong></td>
                                        {*<td><strong>معامله جديده </strong></td>
                                        <td><strong>المعاملات</strong></td>*}
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordercancle  key=k item=ordercancle1}
                                        <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$ordercancle1.ido}  </td>
                                                <td> {if $ordercancle1.employeeid eq 0} None{else} 
                                                   {foreach from=$employee  key=k item=employee1}
                                                            {if  $ordercancle1.employeeid  eq $employee1.idm}
                                                                {$employee1.nameme}
                                                                {/if}
                                                         {/foreach}
                                                   {/if}  </td>
                                                 <td>
                                                   {$ordercancle1.orderdate|date_format:"%A"}
                                                </td>
                                                <td> {$ordercancle1.timeo} {$orderunactive1.timing} 

                                                </td>
                                                 <td> {$ordercancle1.orderdate} </td>
                                                <td>  {$ordercancle1.nameve}  </td>
                                                <td>{$ordercancle1.namece}</td>
                                                <td>{$ordercancle1.phonec}</td>
                                                <td>{$ordercancle1.nameae}</td>
                                                <td>{$ordercancle1.namene}</td>
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
