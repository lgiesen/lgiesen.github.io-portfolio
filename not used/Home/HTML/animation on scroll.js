/*
    //Animation on Scroll
    $(function(){
      // Window Height + Touch enabled
      var $window = $(window), win_height_padded = $window.height() *1.1, isTouch = Modernizr.touch;
      if(isTouch){
        $('.revealOnScroll').addClass('animated');
      }
      // window listener
      $window.on('scroll', revealOnScroll);
      function revealOnScroll(){
        var scrolled = $window.scrollTop(), win_height_padded = $window.height() * 1.1;
        // Check if animated element becomes visible
        $('.revealOnScroll:not(.animated)').each(function(){
          var $this = $(this), offsetTop = $this.offset().top;
          if(scrolled + win_height_padded > offsetTop){
            if($this.data('timeout')){
              window.setTimeout(
                // trigger animation
                function (){
                $this.addClass('animated ' + $this.data('animation'));
                }, parseInt($this.data('timeout'),10)
              );
            } else {
              $this.addClass('animated ' + $this.data('animation'));
            }
          }
        });
        // Check for the inverse: when it becomes invisible -> remove animation
        $('.revealOnScroll.animated').each(function(index) {
          var $this = $(this), offsetTop = $this.offset().top;
          if(scrolled + win_height_padded < offsetTop) {
            $(this).removeClass('animated fadeInUp flipInX flipOutX');
          }
        });
      }
    })*/
