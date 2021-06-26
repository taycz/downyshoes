	<!-- //js -->
    
	<!-- cart-js -->

	<script src="shoes/js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="shoes/js/modernizr-2.6.2.min.js"></script>
	<script src="shoes/js/classie.js"></script>
	<script src="shoes/js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="shoes/js/search.js"></script>
	<!--//search-bar-->
	<!-- price range (top products) -->
	<script src="shoes/js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="shoes/js/move-top.js"></script>
	<script type="text/javascript" src="shoes/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
   
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="shoes/js/bootstrap-3.1.1.min.js"></script>


	</body>

</html>