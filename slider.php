<!DOCTYPE html>
<title>Slider</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<ul class="list-unstyled shop-slide cf">
	    <li>             
            <a href="/category/women-sales"><img class='lazyOwl' src='images/0_women-sales.jpg ' >
            <div class='caption'> Women's Sales</div></a>
        </li>
        <li>             
            <a href="/category/men-sales"><img class='lazyOwl' src='images/8_trousers.jpg ' >
            <div class='caption'> Men's Sales</div></a>
        </li>
        <li> 
            <a href="/category/dresses"><img class='lazyOwl' src='images/2_dresses.jpg ' >
            <div class='caption'> Dresses</div></a> 
        </li>
        <li> 
            <a href="/category/lingerie"><img class='lazyOwl' src='images/2_lingerie.jpg ' >
            <div class='caption'> Lingerie</div></a>
        </li>
        <li>             
            <a href="/category/accessories"><img class='lazyOwl' src='images/2_accessories.jpg ' >
            <div class='caption'> Accessories</div></a> 
        </li>
        <li>               
            <a href="/category/knitwear"><img class='lazyOwl' src='images/2_knitwear.jpg ' >
            <div class='caption'> Knitwear</div></a>
        </li>
        <li>               
            <a href="/category/kids"><img class='lazyOwl' src='images/0_kids.jpg ' >
            <div class='caption'> Kids</div></a> 
        </li>
        <li>             
            <a href="/category/shirts"><img class='lazyOwl' src='images/3_shirts.jpg ' >
            <div class='caption'> Shirts</div></a>
        </li>
        <li>               
            <a href="/category/MensShoes"><img class='lazyOwl' src='images/3_MensShoes.jpg ' >
            <div class='caption'> Mens Shoes</div></a>
        </li>                     
    </ul> 
</div>.

    	<script>
			$('.shop-slide').owlCarousel({
				items: 6,
				autoPlay: false,
				navigation: true,
				lazyLoad : true,
				pagination: false,
				itemsDesktop: [1199, 4],
				itemsDesktopSmall: [991, 4],
				itemsTablet: [767, 3],
				itemsMobile: [479, 2],
				slideSpeed: 1600,
				rewindNav: false,
				addClassActive: true,
				afterMove: function() {
					$('.owl-item.active').removeClass('first').removeClass('last');
					$('.owl-item.active').first().prevAll().addClass('first');
					$('.owl-item.active').last().nextAll().addClass('last');
				}
			});
			$('.owl-item:not(".active")').addClass('last');
   				
			</script>
</body>
</html>