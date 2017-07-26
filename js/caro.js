$(document).ready(function() {
	for(var i=0;i<1035;i++)
	{
		$('.banco').append('<div class="o_co"></div>');
	}
	$('.o_co').css({
		width : "20px" ,
		height : "20px",
		border : "1px solid green",
		float : "left",
		"text-align": "center",
		
		margin : "0px auto"
	})
	$('.o_co').css("background-color","blue");
	$('.o_co').css("color","White");
	var dem = 0;
	$('.o_co').click(function() {
		if($(this).html()=="")
		{
			dem = dem + 1;
			if(dem%2==1)
			{
				$(this).html("X");
			}
			else
				$(this).html("O");
				
			
		}
		else
		{
			alert(" ô này đã được đánh ");
		}
		
	});
	$('.o_co').mouseover(function() {
		$(this).css("background-color","red");
	});
	$('.o_co').mouseout(function() {
		$(this).css("background-color","blue");
	});

})