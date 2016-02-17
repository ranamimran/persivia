<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

?>


<script src="<?php echo JURI::root(); ?>modules/mod_imgtext/jquery.fadethis.js"></script>
<script>(function($){

$(document).ready(function(){
$(window).fadeThis();

});

})(jQuery);</script>
<?php

$img=$params->get('image');

$desc=$params->get('desc');
$layout=$params->get('layoutc');

?>
<style>
.mn{    background-color: #92BA8E;
  color: #fff;
  padding: 19px 0;
  position: relative;
  min-height: 303px;font-size: 19px; }
  

  
  
   body{overflow-x:hidden;}
   
   
   @media(max-width:992px) and (min-width:650px){
   
   .mn img{   position: relative;
  top: 0;width:100%;}
  
 
   .col-md-4 {
  width: 33.33333333%; float:left;
}
.col-md-7 {
  width: 58.33333333%;
  float:left;
}
   
   }
   
   @media(max-width:992px){
     .mn img{   position: relative;
  top: 0;width:100%;}
   
   }
</style>



<div class="row mn">
<div class="inner">
<?php if($layout=='1'){ ?>
<style>
   @media(min-width:992px){
   
     .inner{ max-width: 1160px;
  width: 100%;
  margin: 0 auto;}
  
     .slide-left{ margin: 0% 4%;}
	   .mn img{   position: absolute;
  top: 0px;}
  
	 
	 }
	 
</style>	 
	      <div class="col-md-4 slide-left">
	        <div class="cta-showcase-item">
	        		          							<p class="cta-showcase-intro">
	
		      <title></title>
	
	
		</p><p>
			<span style="font-size:22px;"><span style="color: rgb(255, 255, 255);"><strong><?php $module->title; ?></strong></span></span></p>
		<p>
			<?php echo $desc ?></p>
	

            <p></p>
							
	          	       
	        </div>
	      </div>
		   <div class="col-md-7 slide-right">
		    <img src="<?php echo $tpath.$img;?>" alt="">
		  
		  </div>
		  
		  
		  <?php }else{?>
		  <style>
   @media(min-width:992px){
     .inner{ max-width: 1160px;
  width: 100%;
  margin: 0 auto;}
     .slide-left{ margin: 3% 4%;}
	   .mn img{   position: absolute;
  top: 2px;}
  
	 
	 }
	 
</style>
		  
		     <div class="col-md-7 slide-left">
		    <img src="<?php echo $tpath.$img;?>" alt="">
		  
		  </div>
		  
		      <div class="col-md-4 slide-right">
	        <div class="cta-showcase-item">
	        		          							<p class="cta-showcase-intro">
	
		      <title></title>
	
	
		</p><p>
			<span style="font-size:22px;"><span style="color: rgb(255, 255, 255);"><strong><?php $module->title; ?></strong></span></span></p>
		<p>
			<?php echo $desc ?></p>
	

            <p></p>
							
	          	       
	        </div>
	      </div>
		
		  
		  
		  
		<?php  } ?>
	    </div></div>
</article>