var scrollPosition = 0;
var scrollTopPosition = 0;
var paddingCorrection = 10

$('.searchword').keyup(function(event){
	var searchWord = $('.searchword').val();
	
	if(event.keyCode == 38){
	
		if($(".autoCompleteListItem").hasClass('listHover') == true){
		
			var findListHoverElement = $('.autoCompleteListItem.listHover');
		
			if(findListHoverElement.is(':first-child')  == false){
				var findListHoverElementBefore = findListHoverElement.prev('.autoCompleteListItem');
			
				$(findListHoverElement).removeClass('listHover');
				$(findListHoverElementBefore).addClass('listHover');
			
				$('.searchword').val($(findListHoverElementBefore).text());
			
				var topPosition = $(findListHoverElement).height()+paddingCorrection;
				
				topPosition = topPosition > 0 ? -topPosition : topPosition;
				scrollPosition += topPosition;
				$(".autoCompleteContent").scrollTop(scrollPosition);
				
			}
		}
	}
	
	else if(event.keyCode == 40){
	
		if($(".autoCompleteListItem").hasClass('listHover') == false){
		
			var listItem = $('.autoCompleteListItem:first')
			$(listItem).addClass('listHover');
			
			$('.searchword').val($('.autoCompleteListItem.listHover').text());
		}
		else{
		
			var findListHoverElement = $('.autoCompleteListItem.listHover');
			
			if(findListHoverElement.is(':last-child')  == false){
				
				var findListHoverElementNext = findListHoverElement.next('.autoCompleteListItem');
			
				$(findListHoverElement).removeClass('listHover');
				$(findListHoverElementNext).addClass('listHover');
			
				$('.searchword').val($(findListHoverElementNext).text());
			
				var topPosition = $(findListHoverElement).height()+paddingCorrection;
				scrollPosition += topPosition;
				
				$(".autoCompleteContent").scrollTop(scrollPosition);
				
			}
		}
	}
	else if(event.keyCode == 13){
	
		$('.searchform').submit();
	}
	else{
	
		$.ajax({
		
			url: "auto_complete.php",
			type:"post",
			data:"searchWord="+searchWord,
			dataType: 'json',
			success: function(result){
			
				var arrayLength = result.length;
				var div = "<div class='autoCompleteContent'>";
				for(var i = 0; i < arrayLength; i++){
				
					div += "<div class='autoCompleteListItem'>"+result[i]+"</div>";
			
				}

				div += "</div>";
			
				var heightCorrection = 28;
				var left = ($('.searchword').position().left + 190)+"px";
				var top = ($('.searchword').position().top + heightCorrection - 3)+"px";

				$(".autoCompleteContent").remove();
				$(div).appendTo('body');
				$(".autoCompleteContent").css({"left":left, "top":top});
				
			}
		});
	}
});


$(document).on('click', '.autoCompleteListItem', function(){

	$('.searchword').val($(this).text());
	$('.searchform').submit();
	
});

$(document).on('click', function(){

	$(".autoCompleteContent").remove();
	scrollPosition = 0;
	scrollTopPosition = 0;
	
});