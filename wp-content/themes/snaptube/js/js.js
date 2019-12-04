jQuery(document).ready(function($) {
	$('.menuBtn a').click(function(){
		$(this).toggleClass('active');
        $('.sidebar,.mainCont').toggleClass('show');
    });
	
    $('.backTop i').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 1200, 'swing');
        return false;
    });
	
	$('.slider ul').slick({
		dots: true,
		arrows: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		autoplay: true
	});
	
	$(".userBtn").fancybox();
	
	$(".vboPlay").fancybox({
            autoSize    : true,
            autoScale   : true,
            closeClick  : true,
            openEffect  : 'fade',
            closeEffect : 'fade',
            scrolling   : false,
            padding     : 0,
	});
	
    $('.showLess span').click(function(){
        $(this).toggleClass('active');
        $('.embedShare').slideToggle();
    });
	
    $('.reply').click(function(){
		$('.commentRespond').css('display', 'none');
        $(this).parent('.comment-content').next('.commentRespond').slideToggle();
    });
    $('.cancelReply').click(function(){
		$('.commentRespond').css('display', 'none');
        $('#commentRespond').slideToggle();
    });
	
	$('.layoutBtn li').on('click', function() {
		$(this).addClass('active').siblings().removeClass('active');		
		var index=$('.layoutBtn li').index(this);
		if(index==0){
			$('#categorie').attr('class','');
			$('#categorie').addClass('gridView');
		}
		else if(index==1){
			$('#categorie').attr('class','');
			$('#categorie').addClass('listView');
		}
	});
});

$(window).load(function(){
    $(window).scroll(function() {
        if($(window).scrollTop() > 66) {
            $('header').addClass('fix');
        }
        else {
            $('header').removeClass('fix');
        }
    });
});