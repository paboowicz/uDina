$(document).ready(function(){
    
   
       
        var baseCarItems = $('div.car ul li').length %2 == 0 ? $('div.car ul li').length : $('div.car ul li').length+1;
	baseCarItems = baseCarItems/2;

	var itemWidth = 168;

	$('div.car').css('width',itemWidth*baseCarItems+'px');
      var tapeWidth = itemWidth*baseCarItems;
   
    
	var viewPortW = parseInt($('.galleryContainer').css('width'));
//	var tapeWidth = parseInt($('div.car').css('width'));
	var range = tapeWidth-viewPortW;
	
	var steps = tapeWidth/viewPortW;
	
	var stepCount = parseInt(steps) < steps ? parseInt(steps)+1 : parseInt(steps); 
	//stepCount += 2;
	
	$('.slidesControls').css('width',stepCount*15+15+'px');
	
	
	
	var active = 'class="active"';
	
	for(var i=0;i<=stepCount;i++){
	    if(i != 0)active = '';
	    $(".slidesControls ul").append('<li data-level="'+i+'" '+active+' ></li>');
	}
	
	
    $('.slidesControls ul li').live('click',function(){
	
	$('.slidesControls ul li').removeClass('active');
	$(this).addClass('active');
	
	var move = $(this).attr('data-level');
	
	var improver = move/stepCount;
	
	
	
	$('div.car').animate({left: '-'+(improver)*range+'px' },1000);
	
	
    });
    
});