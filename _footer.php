<footer>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-6 col-xs-6'>
				<p>
					Natalie Schoch &copy; 2019
				</p>
			</div>
			<div class='footer-top col-sm-6 col-xs-6'>
				<p>
				<a class='bold' href='#nav-anchor'><span class='arrow padding-right-5px hidden-sm hidden-xs hidden-md'>➞</span>Back to top</a>
				</p>
			</div>
		</div>
	</div>
	<script>
		ScrollReveal().reveal('.reveal');
	</script>
	
	<script>
	  //// Smooth scroll on anchor links

	  // Select all links with hashes
	  $('a[href*="#"]')
	    // Remove links that don't actually link to anything
	    .not('[href="#"]')
	    .not('[href="#0"]')
	    .click(function(event) {
	      // On-page links
	      if (
	        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	        && 
	        location.hostname == this.hostname
	      ) {
	        // Figure out element to scroll to
	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	        // Does a scroll target exist?
	        if (target.length) {
	          // Only prevent default if animation is actually gonna happen
	          event.preventDefault();
	          $('html, body').animate({
	            scrollTop: target.offset().top
	          }, 1000, function() {
	            // Callback after animation
	            // Must change focus!
	            var $target = $(target);
	            $target.focus();
	            if ($target.is(":focus")) { // Checking if the target was focused
	              return false;
	            } else {
	              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	              $target.focus(); // Set focus again
	            };
	          });
	        }
	      }
	    });
	</script>
</footer>
</html>