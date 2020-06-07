$(document).ready(function(){
	$("#topmenu li").hover(function(){
		if($(this).children().is("ul")){
			children = $(this).children("ul");
			height = children.css("height");
			children.css({"height":0}).animate({"height":height},500);
		}
	},
	function(){
		children.css({"height":height})
	});
})