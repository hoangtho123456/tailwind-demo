jQuery(document).ready(function($) {
	$('.p-slider1-js').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		// responsive: [
		// 	{
		// 		breakpoint: 1024,
		// 		settings: {
		// 			slidesToShow: 3,
		// 			slidesToScroll: 3,
		// 			infinite: true,
		// 			dots: true
		// 		}
		// 	},
		// 	{
		// 		breakpoint: 600,
		// 		settings: {
		// 			slidesToShow: 2,
		// 			slidesToScroll: 2
		// 		}
		// 	},
		// 	{
		// 		breakpoint: 480,
		// 		settings: {
		// 			slidesToShow: 1,
		// 			slidesToScroll: 1
		// 		}
		// 	}
		// 	// You can unslick at a given breakpoint now by adding:
		// 	// settings: "unslick"
		// 	// instead of a settings object
		// ]
	});

	//async slider detail footmap
	$('.p-async-slider1-js').slick({
		dots: false,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		arrows: false,
		// draggable: false,
		asNavFor: '.p-async-slider1-child-js'
	});
	$('.p-async-slider1-child-js').slick({
		dots: false,
		// infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		asNavFor: '.p-async-slider1-js',
  	focusOnSelect: true,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
				}
			}
		]
	});
	//---------------------
	$('.p-slider2-js').slick({
		dots: true,
		infinite: true,
		speed: 500,
		autoplay: true,
		autoplaySpeed: 4000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev absolute top-1/2 left-0 translate-y-1/2 border-none rounded-full shadow drop-shadow-lg bg-white hover:text-green-700 w-7 h-7 -pt-2 z-10">\
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">\
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />\
				</svg>\
			</button>',
    nextArrow: '<button type="button" class="slick-next absolute top-1/2 right-0 translate-y-1/2 border-none rounded-full shadow drop-shadow-lg bg-white hover:text-green-700 w-7 h-7 -pt-2 z-10">\
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">\
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />\
				</svg>\
			</button>',
	});
	//---------------------
	$('.p-slider3-js').slick({
		dots: false,
		infinite: true,
		speed: 500,
		// autoplay: true,
		// autoplaySpeed: 4000,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev absolute top-1/2 -left-3 translate-y-1/2 border divide-solid border-gray-50 rounded-full shadow drop-shadow-lg bg-white hover:text-green-700 w-7 h-7 -pt-2 z-10">\
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">\
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />\
				</svg>\
			</button>',
    nextArrow: '<button type="button" class="slick-next absolute top-1/2 -right-3 translate-y-1/2 border divide-solid border-gray-50 rounded-full shadow drop-shadow-lg bg-white hover:text-green-700 w-7 h-7 -pt-2 z-10">\
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">\
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />\
				</svg>\
			</button>',
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
	//---------------------
	$('.p-slider4-js').slick({
		dots: false,
		infinite: true,
		speed: 500,
		// autoplay: true,
		// autoplaySpeed: 4000,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev absolute top-1/2 -left-3 translate-y-1/2 border divide-solid border-gray-50 rounded-full shadow drop-shadow-lg bg-white hover:text-green-700 w-7 h-7 -pt-2 z-10">\
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">\
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />\
				</svg>\
			</button>',
    nextArrow: '<button type="button" class="slick-next absolute top-1/2 -right-3 translate-y-1/2 border divide-solid border-gray-50 rounded-full shadow drop-shadow-lg bg-white hover:text-green-700 w-7 h-7 -pt-2 z-10">\
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">\
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />\
				</svg>\
			</button>',
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
});
