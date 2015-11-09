<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<?php
	if(strcmp($page,'page_main')==0)
	{
?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center bottom-separator">
				<img src="<?php echo base_url('assets/images/home/under.png'); ?>" class="img-responsive inline" alt="">
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="testimonial bottom">
					<h2>Testimonial</h2>
					
					<div class="media">
						<div class="pull-left">
							<a href="#"><img src="<?php echo base_url('assets/images/home/profile1.png'); ?>" alt=""></a>
						</div>
						<div class="media-body">
							<blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
							<h3><a href="#">- Jhon Kalis</a></h3>
						</div>
					</div>
					
					<div class="media">
						
						<div class="pull-left">
						<a href="#"><img src="<?php echo base_url('assets/images/home/profile2.png'); ?>" alt=""></a>
						</div>
						
						<div class="media-body">
							<blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
							<h3><a href="">- Abraham Josef</a></h3>
						</div>
					</div>
				</div>
			</div>
	
			<div class="col-md-3 col-sm-6">
				<div class="contact-info bottom">
					<h2>Contacts</h2>
					<address>
						E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
						Phone: +1 (123) 456 7890 <br>
						Fax: +1 (123) 456 7891 <br>
					</address>
					<h2>Address</h2>
					<address>
						Unit C2, St.Vincent's Trading Est., <br>
						Feeder Road, <br>
						Bristol, BS2 0UY <br>
						United Kingdom <br>
					</address>
				</div>
			</div>

			<div class="col-md-4 col-sm-12">
				<div class="contact-form bottom">
					<h2>Send a message</h2>
					<form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
						<div class="form-group">
							<input type="text" name="name" class="form-control" required="required" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
						</div>
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-submit" value="Submit">
						</div>
					</form>
				</div>
			</div>
	
			<div class="col-sm-12">
				<div class="copyright-text text-center">
					<p>&copy; Bali Worker Team 2015. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--/#footer-->

<?php
	}
	else if(strcmp($page,'page_register')==0)
	{
?>
<!-- START FOOTER -->
<footer id="footer">
    <div id="h" class="copyright-text text-center">
        <p>&copy; Bali Worker Team 2015. All Rights Reserved.</p>
        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
    </div>
</footer>
<!--END OF FOOTER -->

<script src="<?php echo base_url('assets/js/selectize.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>

<script>
$('.select').selectize({
    create: false,
    sortField: 'text',
    plugins: ['remove_button']
});

$('.keahlian').selectize({
    create: false,
    sortField: 'text',
    maxItems: 5,
     plugins: ['remove_button']
});
</script>

<?php
	}
?>

    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lightbox.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>

    <script type="text/javascript">
    	$(document).ready(function() {
    		$(document).ajaxStart(function () {
		        $(".loading").show();
		        $("#login_button").html('Loading...');
		    }).ajaxStop(function () {
		    	$(".loading").hide();
		    	 $("#login_button").html('Login');
		    });

    		$("#login_button").click(function(){
    			var username=$("#username").val();
    			var password=$("#password").val();
    			$.ajax({
    				url: "<?php echo site_url('login_controller'); ?>",
    				type: 'post',
    				data: {username: username, password: password},
    				dataType: 'json',
    				success: function (data) {
    					//alert(data);
    				}
    			});
    		});
    	});
    </script>

</body>
</html>
