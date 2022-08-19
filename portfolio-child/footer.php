

<footer>

	<div class="inner-footer">
	<ul>
		<li>Copyright &copy; <?php echo date('Y') ; ?> </li>
		<li>All Rights Reserve </li>
		<li> <a href="">Web Design by Karen</a></li>
		<li> <a href="https://validator.w3.org/check?uri=referer" target="_blank" rel="noopener">Valid HTML</a></li>
		<li> <a href="https://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></li>
		<li> <a href="https://karenyoseff.com/it270/portfolio/wp-content/uploads/sites/2/Resume_KarenGarcia_2.pdf" target="_blank">Resume</a></li>
	</ul>
	</div>


</footer>
<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
		<?php get_footer(); ?>  
</body>
</html>