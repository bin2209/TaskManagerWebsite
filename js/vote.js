$(document).ready(function() {
		/*
	 	 * Hiệu ứng khi rê chuột lên ngôi sao
	 	 */
    	$('a.star').mouseenter(function() {
            if ($('#cate-rating').hasClass('rating-ok') == false) {
                var eID = $(this).attr('id');
                eID = eID.split('-').splice(-1);
                $('a.star').removeClass('vote-active');
                for (var i = 1; i <= eID; i++) {
                    $('#star-' + i).addClass('vote-hover');
                }
            }
        }).mouseleave(function() {
            if ($('#cate-rating').hasClass('rating-ok') == false) {
                $('a.star').removeClass('vote-hover');
            }
        });

        /*
         * Sự kiện khi cho điểm
         */
        $('a.star').click(function() {
        	if ($('#cate-rating').hasClass('rating-ok') == false) {
        		var eID = $(this).attr('id');
            	eID = eID.split('-').splice(-1).toString();
            	for (var i = 1; i <= eID; i++) {
                	$('#star-' + i).addClass('vote-active');
            	}
            	$('p#vote-desc').html('<span class="blue">' + eID + ' (' + eID * 10 + '%)</span> &middot; ' + 1 + ' đánh giá');
            	$('#cate-rating').addClass('rating-ok');
        	}
        });
    });