(function($) {
Drupal.behaviors.myBehavior = {
  attach: function (context, settings) {    
	$("a#searchli").click(function() {		
    });
	$(window).resize(function(){location.reload();});
	$("i.fa.fa-search").click(function() {
		$("div#search").css("opacity","1");		
		$("div#search").css("transform","translate(0px,0px) scale(1,1)");
    });
	$("button.close").click(function() {
		$("div#search").css("opacity","0");		
		$("div#search").css("transform","translate(0px,0px) scale(0,0)");
    });
	$("button.nineclusters").click(function() {
		var display =  $("section.intro-news-area.section-padding-100-0.mb-70.clusterdetail").css("display");
		var angle= $("li#65").css("transform");
		// alert(angle);
		if(angle=="rotate(0deg)" || angle=="none" || angle=="matrix(1, 0, 0, 1, 0, 0)")
		{
			$("section.intro-news-area.section-padding-100-0.mb-70.clusterdetail").css("height","500px");
			$("section.intro-news-area.section-padding-100-0.mb-70.cluster").css("padding-bottom","150px");
			$("section.intro-news-area.section-padding-100-0.mb-70.clusterdetail").css("margin-top","6%");
			$(".fieldwrapper").css("display","block");			
			display =  "block";
			angle=="rotate(280deg)"
			$("li#65").css("transform","rotate(280deg)");
			$("li#64").css("transform","rotate(240deg)");		
			$("li#63").css("transform","rotate(200deg)");
			$("li#62").css("transform","rotate(160deg)");
			$("li#61").css("transform","rotate(120deg)");
			$("li#60").css("transform","rotate(80deg)");
			$("li#59").css("transform","rotate(40deg)");
			$("li#58").css("transform","rotate(0deg)");
			$("li#57").css("transform","rotate(320deg)");
			$(".fieldwrapper.57").css("border","solid 10px #df4848");
			$(".fieldwrapper.58").css("border","solid 10px rgb(193, 162, 101)");
			$(".fieldwrapper.59").css("border","solid 10px rgb(77, 120, 181)");
			$(".fieldwrapper.60").css("border","solid 10px rgb(101, 90, 135)");
			$(".fieldwrapper.61").css("border","solid 10px rgb(106, 69, 97)");
			$(".fieldwrapper.62").css("border","solid 10px rgb(26, 44, 78)");
			$(".fieldwrapper.63").css("border","solid 10px rgb(28, 186, 175)");
			$(".fieldwrapper.64").css("border","solid 10px rgb(133, 194, 64)");
			$(".fieldwrapper.65").css("border","solid 10px rgb(250, 169, 24)");
			$(".fieldwrapper.65").css("transform","rotate(-280deg)");
			$(".fieldwrapper.64").css("transform","rotate(-240deg)");				
			$(".fieldwrapper.63").css("transform","rotate(-200deg)");		
			$(".fieldwrapper.62").css("transform","rotate(-160deg)");		
			$(".fieldwrapper.61").css("transform","rotate(-120deg)");		
			$(".fieldwrapper.60").css("transform","rotate(-80deg)");		
			$(".fieldwrapper.59").css("transform","rotate(-40deg)");		
			$(".fieldwrapper.58").css("transform","rotate(-0deg)");		
			$(".fieldwrapper.57").css("transform","rotate(-320deg)");
			$("button.nineclusters").text("View Less");
			$(".fieldwrapper.57").css("background","#df4848");
			$(".fieldwrapper.57").css("border","#df4848");
			$('div#mainclsbox57').show();	
		}
		else{
			$("section.intro-news-area.section-padding-100-0.mb-70.clusterdetail").css("height","0px");
			$("section.intro-news-area.section-padding-100-0.mb-70.cluster").css("padding-bottom","0px");
			$(".fieldwrapper").css("display","none");
			$(".clsbox").css("display","none");
			$("section.intro-news-area.section-padding-100-0.mb-70.clusterdetail").css("margin-top","0%");
			display="none";
			angle=="rotate(0deg)"
			$("li#65").css("transform","rotate(0deg)");
			$("li#64").css("transform","rotate(0deg)");		
			$("li#63").css("transform","rotate(0deg)");
			$("li#62").css("transform","rotate(0deg)");
			$("li#61").css("transform","rotate(0deg)");
			$("li#60").css("transform","rotate(0deg)");
			$("li#59").css("transform","rotate(0deg)");
			$("li#58").css("transform","rotate(0deg)");
			$("li#57").css("transform","rotate(0deg)");
			$(".fieldwrapper.65").css("transform","rotate(0deg)");
			$(".fieldwrapper.64").css("transform","rotate(0deg)");				
			$(".fieldwrapper.63").css("transform","rotate(0deg)");		
			$(".fieldwrapper.62").css("transform","rotate(0deg)");		
			$(".fieldwrapper.61").css("transform","rotate(0deg)");		
			$(".fieldwrapper.60").css("transform","rotate(0deg)");		
			$(".fieldwrapper.59").css("transform","rotate(0deg)");		
			$(".fieldwrapper.58").css("transform","rotate(0deg)");		
			$(".fieldwrapper.57").css("transform","rotate(0deg)");
			$("button.nineclusters").text("View More");	
			$(".fieldwrapper.57").css("background","#fff");
			$(".fieldwrapper.57").css("border","solid 10px #c1a265");
			$('div#mainclsbox57').hide();
		}
    });
  }
};
})(jQuery);

