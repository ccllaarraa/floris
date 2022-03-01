$(document).ready(function() {



    $('.projects').on('init', function(event, slick){
        var dots = $( '.slick-dots li' );
       
        // add caption under dots
        dots.each( function( k, v){
          $(this).find( 'button' ).addClass( 'heading' + k);
          
        });
        var items = slick.$slides;
        items.each( function( k, v){
            var text = $(this).find( '.caption-ctn' ).wrap();
            $( '.heading' + k ).wrap(text);
        });

        // on hover change slide
        $('.slick-dots li ').on('mouseover', function() {
          $(this).trigger('click');
         });


      });

      $('.projects-mobile').on('init', function(event, slick){
        var dots = $( '.projects-mobile .slick-dots li' );
       
        // add caption under dots
        dots.each( function( k, v){
          $(this).find( 'button' ).addClass( 'heading' + k);
          
        });
        var items = slick.$slides;
        items.each( function( k, v){
            var text = $(this).find( '.caption-ctn-mob' ).text();
            $( '.heading' + k ).text(text);
        });

        // on hover change slide
        $('.slick-dots li ').on('mouseover', function() {
          $(this).trigger('click');
         });
      });
        
        
   
       
  
   

      //slider parameters
        var slider = $(".projects");
        slider.slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            fade: true,
            arrows: false,
            centerMode: true,
            speed: 100,
           
        });

        //   slide on scroll
        slider.on('wheel', (function(e) {
        e.preventDefault();

        if (e.originalEvent.deltaY < 0) {
            $(this).slick('slickNext');
        } else {
            $(this).slick('slickPrev');
        }
        }));


              //slider of project page parameters
              var slider2 = $(".project-gallery");
              slider2.slick({
                  dots: false,
                  arrows: true,
                  centerMode: false,
                  speed: 200,
                  slidesToShow: 1,
               
                  variableWidth: true,
                  infinite: true,
          
                  variableWidth: true,
                  // slidesToShow: 2,
                  // slidesToScroll: 2,
                
                //   prevArrow: $('.prev'),
                //   nextArrow: $('.next'),
                  responsive: [
                    {
                      breakpoint: 764,
                        settings: {
                            variableWidth: true,
                            infinite: true,
                            dots: false,
                            fade: false,
                            centerMode: true,
                            slidesToShow: 1,
                            speed: 100,
                        }
                    }
                ]
              
                 
              });
      
              //   slide of project page on scroll
              slider2.on('wheel', (function(e) {
              e.preventDefault();
      
              if (e.originalEvent.deltaY < 0) {
                  $(this).slick('slickNext');
              } else {
                  $(this).slick('slickPrev');
              }
              }));



  //slider parameters
  var slider3 = $(".projects-mobile");
  slider3.slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      fade: false,
      arrows: false,
      centerMode: true,
      speed: 100,
      variableWidth: true,
     
  });


  

            //   end jquery
});




//menu mobile 
var menuButton = document.querySelector('#menu-button');
var menu = document.querySelector('#menu');

// show or hide
if(menuButton) {
  menuButton.addEventListener('click',function(){
    menu.classList.toggle('show-menu');
    menuButton.classList.toggle('close');
  })
};
$(function() {
  // this will get the full URL at the address bar
  var url = window.location.href;

  // passes on every "a" tag
  $(".project-menu ul li a").each(function() {
      // checks if its the same on the address bar
      if (url == (this.href)) {
          $(this).closest("li").addClass("active");
          //for making parent of submenu active
         
      }
  });
});  



