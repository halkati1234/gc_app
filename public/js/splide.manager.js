     document.addEventListener('DOMContentLoaded', function () {
        // Initialize the first vertical slider
        var servicessplide = new Splide('#servicessplide', {
            direction: 'ttb', // 'ttb' makes it vertical
            wheel: true,
            waitForTransition :true,
            height: '50vh',
            perPage: 1,
        });

        // Update progress bar for the first slider
        var bar1 = servicessplide.root.querySelector('.my-slider-progress-bar');
        servicessplide.on('mounted move', function () {
            var end = servicessplide.Components.Controller.getEnd() + 1;
            var rate = Math.min((servicessplide.index + 1) / end, 1);
            bar1.style.width = String(100 * rate) + '%';
        });

        servicessplide.on( 'pagination:mounted', function ( data ) {
        // You can add your class to the UL element
        data.list.classList.add( 'splide__pagination--custom' );


        // `items` contains all dot items
        data.items.forEach( function ( item ) {
            item.button.textContent = '0' + String( item.page + 1 ) ;//+ 'Project_Name';
        } );
        } );
        servicessplide.mount();

        // Initialize the second horizontal slider
        var splide2 = new Splide('#splide2', {
            type: 'loop',
            waitForTransition :true,
            perPage: 1,
            height: '10rem',
            
            autoplay: true,
            interval: 3000,
        });

        // Update progress bar for the second slider
        var bar2 = splide2.root.querySelector('.my-slider-progress-bar');
        splide2.on('mounted move', function () {
            var end = splide2.Components.Controller.getEnd() + 1;
            var rate = Math.min((splide2.index + 1) / end, 1);
            bar2.style.width = String(100 * rate) + '%';
        });
        
        splide2.mount();


        // Initialize the 3ed horizontal slider
        var splide3 = new Splide('#splide3', {
            type: 'loop',
            perPage: 3,
            height: '10rem',
            // direction: 'rtl',
            waitForTransition :true,
            autoplay: true,
            interval: 2876,
        });
     
  
        splide3.mount();
    });


    // ---------------------  Services Inner Splide  Start----------------------//
    var ServicesInnerSplide = new Splide( '.ServicesInnerSplide', {
        perPage : 3,
        cover   : true,
        height  : '10rem',

        lazyLoad: 'nearby',
        breakpoints: {
          height: '6rem',
        },
      } );
      
      ServicesInnerSplide.mount();
    // ---------------------  Services Inner Splide  End----------------------//

 








var mainsplide = new Splide( '#mainsplide', {
    direction: 'ttb',
    height   : '90vh',

    perPage: 1,
    wheel    : true,
  } );
  
  mainsplide.mount();