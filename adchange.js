		var number = Math.floor(Math.random()*3)+1; 
		
		var timer1 = 0;
		var timer2 = 0;
		
		function setslide(slideno)
		{
			clearTimeout(timer1);
			clearTimeout(timer2);
			number = slideno -1;
			
			hide();
			setTimeout("changeslide()", 500);
		}
		
		function hide()
		{
			$("#ads").fadeOut(500);
		}
		
		function changead()
		{
			number++; if(number>3) number=1;
			
			var plik = "<img src=\"ad/ad"+number+".png\" />";
			
			document.getElementById("ads").innerHTML = plik;
			$("#ads").fadeIn(500);
			
			setTimeout("changead()", 5000);
			setTimeout("hide()", 4500);
		}