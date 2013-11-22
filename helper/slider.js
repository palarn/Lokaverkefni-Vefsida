var slider_seconds = 5;
var slider_current = 0;

function slider_select( slide ){
	var slide_speed = 200;

	if( $("#slider-image-"+slide).is(":hidden") ){
		//Slide up image areas
		$("#slider-image-1").slideUp(slide_speed);
		$("#slider-image-2").slideUp(slide_speed);
		$("#slider-image-3").slideUp(slide_speed);
		$("#slider-image-4").slideUp(slide_speed);
		//slide up info areas
		$("#slider-info-1").slideUp(slide_speed);
		$("#slider-info-2").slideUp(slide_speed);
		$("#slider-info-3").slideUp(slide_speed);
		$("#slider-info-4").slideUp(slide_speed);

		//slide down selected slide
		$("#slider-image-"+slide).slideDown(slide_speed);
		$("#slider-info-"+slide).slideDown(slide_speed);

	}
	else{
		//slide down selected slide
		$("#slider-image-"+slide).slideDown(slide_speed);
		$("#slider-info-"+slide).slideDown(slide_speed);
	}

	slider_current = slide;

}

function slider_select_next(){
	if(slider_current == 4)
		slider_select(1);
	else
		slider_select( slider_current + 1 );

	setTimeout('slider_select_next()', slider_seconds * 1000);
}