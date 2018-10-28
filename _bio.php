<section class='bio'>
  <div class='container'>
    <div class='row'>
      <div class='col-xs-12 col-lg-10 col-lg-offset-1'>
        <div class='row'>
          <div class='col-sm-4 hidden-xs'>
        <img src='images/img-natalie-schoch.jpg', class='img-responsive', alt='Natalie Schoch, designer', title='Natalie Schoch, designer'/>
      </div>
      <div class='col-sm-8'>
        <p class='p-lrg'>
          I'm a Bay Area native living in San Francisco, CA. I love to work across all graphic mediums but have been playing with code since the days of Myspace and Neopets. I can generally be found listening to too much 
          <a href='#'>music</a>, drinking cappuccinos, and overwatering my plant family.
        </p>
        <p class='p-lrg'>
          The best way to contact me is <a href='mailto:hello@natalieschoch.com'>email</a>. But you can also check out select design work on <a href='https://dribbble.com/nataliefschoch'>Dribbble</a>, peek at my code on Github, or see my full work history on Linkedin. I’m kind of on Twitter, but it's mostly retweets at this point <span>¯\_(ツ)_/¯</span>
        </p>
        <p>
          <span>
            Featured in: <a href='#'>Interface Lovers</a>, and <a href='#'>Proto-typer.io</a>
          </span>
        </p>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  //// Bio scroll from bottom to top interaction

  $(".bio-link").click(function(e){
    e.preventDefault();
    $(".bio").addClass('view');
    $("#portfolio").addClass('overflow-hidden');
  });

  $(".home-link").click(function(){
    $(".bio").removeClass('view');
    $("#portfolio").removeClass('overflow-hidden');
  });
  
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
