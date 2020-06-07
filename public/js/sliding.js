function expand_slide(num){
	for(i=1; i<6; i++)
	{
	    if(i!=num)
		{
			workon="div#"+"slide"+i;
			$(workon).width("140px");
		}
	}
	workon="div#"+"slide"+num;
	$(workon).width("390px");
}

function reset_slides(){
	for(i=1; i<6; i++)
	{
			workon="div#"+"slide"+i;
			$(workon).width("190px");
	}
}