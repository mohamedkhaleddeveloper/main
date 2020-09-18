{if $en eq en}
{include file="headen.tpl" title=EtagCP}
<div id="wrapper">
       <h2 class="text-left"><a href = "#">ALSUBTAIN Campany <i class="fa fa-cogs" aria-hidden="true"></i></a></h2>
</div>
        <div id="page-wrapper">
            <br/><br/><br/><br/><br/><br/><br/>
            <div class="alert alert-success"><h1 class="text-center">{$message}</h1></div>
            <script type="text/javascript"> 
            setTimeout("location.href = '{$link}';",3000);      
            {*document.location='{$link}'; *}
            </script>
            

<br/><br/><br/><br/><br/><br/>
            
            
</div></div>

    
{else}
{include file="head.tpl" title=EtagCP}
<div id="wrapper1">
      <h1><i class="fa fa-cogs" aria-hidden="true"></i>  مؤسسه السبطين التجاريه  </h1>
</div>
        <div id="page-wrapper">
            <br/><br/><br/><br/><br/><br/><br/>
            <div class="alert alert-success"><h1 class="text-center">{$message}</h1></div>
            <script type="text/javascript"> 
            setTimeout("location.href = '{$link}';",3000);      
            {*document.location='{$link}'; *}
            </script>
            

<br/><br/><br/><br/><br/><br/>
            
            
</div></div>

{/if}
  
  
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

  
