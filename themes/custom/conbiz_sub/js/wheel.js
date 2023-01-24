
	function clickBox(index)
	{					
		for (i = 1; i <= 17; i++) {
			  if(index==i){
				jQuery('#mainsdgbox'+i).css('display', 'block');
				var trans =  jQuery("img#sdgwheel").css("transition-duration");
				var transf =  jQuery("img#sdgwheel").css("-webkit-transform");
				
				if(transf!='none' || transf!='unset'){
					jQuery('img#sdgwheel').css('-webkit-transform', 'unset');
					transf =  jQuery("img#sdgwheel").css("-webkit-transform");
				}
				
				if(trans=='0s')
				{
					if(transf=='unset' || transf=='none'){
						jQuery('img#sdgwheel').css('-webkit-transform', 'rotate(1turn)');
						jQuery('img#sdgwheel').css('transition-duration', '1s');								
					}else{
						jQuery('img#sdgwheel').css('-webkit-transform', 'none');
						jQuery('img#sdgwheel').css('transition-duration', '0s');
					}
				}
				else{
					if(transf=='unset' || transf=='none'){
						jQuery('img#sdgwheel').css('-webkit-transform', 'rotate(1turn)');
						jQuery('img#sdgwheel').css('transition-duration', '1s');								
					}else{
						jQuery('img#sdgwheel').css('-webkit-transform', 'none');
						jQuery('img#sdgwheel').css('transition-duration', '0s');
					}
				}																		
			  }
			  else{
				jQuery('#mainsdgbox'+i).css('display', 'none');
			  }
		}					
	}		