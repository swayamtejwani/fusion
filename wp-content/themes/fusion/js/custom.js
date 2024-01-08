jQuery(document).ready(function(){
    if(jQuery('.owl-carousel').length){
        jQuery(".owl-carousel").owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:3000,
            margin: 40,
            autoHeight : true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:7
                }
            }
        })
    }
   
})