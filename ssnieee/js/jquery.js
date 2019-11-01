$(document).ready(function(){
	flag=1;


	$("#previous").click(function(){
		// green
		if(flag===1){
			$(".main div:nth-child(1)").css("transform","translate(260%,60%) scaleY(.8)");
			$(".main div:nth-child(1)").css("z-index","5");
			$(".main div:nth-child(1)").css("opacity",".5");
			$(".main div:nth-child(2)").css("transform","translate(290%,60%) scaleY(1)");
			$(".main div:nth-child(2)").css("z-index","10");
			$(".main div:nth-child(2)").css("opacity","1");
			$(".main div:nth-child(3)").css("transform","translate(230%,60%) scaleY(.7)");
			$(".main div:nth-child(3)").css("z-index","3");
			$(".main div:nth-child(3)").css("opacity",".5");
			$(".main div:nth-child(4)").css("transform","translate(350%,60%) scaleY(.7)");
			$(".main div:nth-child(4)").css("z-index","3");
			$(".main div:nth-child(4)").css("opacity",".5");
			$(".main div:nth-child(5)").css("transform","translate(320%,60%) scaleY(.8)");
			$(".main div:nth-child(5)").css("z-index","5");
			$(".main div:nth-child(5)").css("opacity",".5");
		       flag=2; }
		       // blue
		else if (flag===2){
			$(".main div:nth-child(1)").css("transform","translate(230%,60%) scaleY(.7)");
			$(".main div:nth-child(1)").css("z-index","3");
			$(".main div:nth-child(1)").css("opacity",".5");
			$(".main div:nth-child(2)").css("transform","translate(260%,60%) scaleY(.8)");
			$(".main div:nth-child(2)").css("z-index","5");
			$(".main div:nth-child(2)").css("opacity",".5");
			$(".main div:nth-child(3)").css("transform","translate(350%,60%) scaleY(.7)");
			$(".main div:nth-child(3)").css("z-index","3");
			$(".main div:nth-child(3)").css("opacity",".5");
			$(".main div:nth-child(4)").css("transform","translate(320%,60%) scaleY(.8)");
			$(".main div:nth-child(4)").css("z-index","5");
			$(".main div:nth-child(4)").css("opacity",".5");
			$(".main div:nth-child(5)").css("transform","translate(290%,60%) scaleY(1)");
			$(".main div:nth-child(5)").css("z-index","10");
			$(".main div:nth-child(5)").css("opacity","1");
		       flag=3;
		   }
		   // red
		   else if(flag===3){
		   	$(".main div:nth-child(1)").css("transform","translate(350%,60%) scaleY(.7)");
			$(".main div:nth-child(1)").css("z-index","3");
			$(".main div:nth-child(1)").css("opacity",".5");
			$(".main div:nth-child(2)").css("transform","translate(230%,60%) scaleY(.7)");
			$(".main div:nth-child(2)").css("z-index","3");
			$(".main div:nth-child(2)").css("opacity",".5");
			$(".main div:nth-child(3)").css("transform","translate(320%,60%) scaleY(.8)");
			$(".main div:nth-child(3)").css("z-index","5");
			$(".main div:nth-child(3)").css("opacity",".5");
			$(".main div:nth-child(4)").css("transform","translate(290%,60%) scaleY(1)");
			$(".main div:nth-child(4)").css("z-index","10");
			$(".main div:nth-child(4)").css("opacity","1");
			$(".main div:nth-child(5)").css("transform","translate(260%,60%) scaleY(.8)");
			$(".main div:nth-child(5)").css("z-index","5");
			$(".main div:nth-child(5)").css("opacity",".5");
		       flag=4;
		   }

		   else if(flag===4){
		   	$(".main div:nth-child(1)").css("transform","translate(320%,60%) scaleY(.8)");
			$(".main div:nth-child(1)").css("z-index","5");
			$(".main div:nth-child(1)").css("opacity",".5");
			$(".main div:nth-child(2)").css("transform","translate(350%,60%) scaleY(.7)");
			$(".main div:nth-child(2)").css("z-index","3");
			$(".main div:nth-child(2)").css("opacity",".5");
			$(".main div:nth-child(3)").css("transform","translate(290%,60%) scaleY(1)");
			$(".main div:nth-child(3)").css("z-index","10");
			$(".main div:nth-child(3)").css("opacity","1");
			$(".main div:nth-child(4)").css("transform","translate(260%,60%) scaleY(.8)");
			$(".main div:nth-child(4)").css("z-index","5");
			$(".main div:nth-child(4)").css("opacity",".5");
			$(".main div:nth-child(5)").css("transform","translate(230%,60%) scaleY(.7)");
			$(".main div:nth-child(5)").css("z-index","3");
			$(".main div:nth-child(5)").css("opacity",".5");
		       flag=5;
		   }

		   else if(flag===5){
		   	$(".main div:nth-child(1)").css("transform","translate(290%,60%) scaleY(1)");
			$(".main div:nth-child(1)").css("z-index","10");
			$(".main div:nth-child(1)").css("opacity","1");
			$(".main div:nth-child(2)").css("transform","translate(320%,60%) scaleY(.8)");
			$(".main div:nth-child(2)").css("z-index","5");
			$(".main div:nth-child(2)").css("opacity",".5");
			$(".main div:nth-child(3)").css("transform","translate(260%,60%) scaleY(.8)");
			$(".main div:nth-child(3)").css("z-index","5");
			$(".main div:nth-child(3)").css("opacity",".5");
			$(".main div:nth-child(4)").css("transform","translate(230%,60%) scaleY(.7)");
			$(".main div:nth-child(4)").css("z-index","3");
			$(".main div:nth-child(4)").css("opacity",".5");
			$(".main div:nth-child(5)").css("transform","translate(350%,60%) scaleY(.7)");
			$(".main div:nth-child(5)").css("z-index","3");
			$(".main div:nth-child(5)").css("opacity",".5");
		       flag=1;
		   }

		});

		$("#next").click(function(){
			// blue
			if(flag===1){
			$(".main div:nth-child(1)").css("transform","translate(320%,60%) scaleY(.8)");
			$(".main div:nth-child(1)").css("z-index","5");
			$(".main div:nth-child(1)").css("opacity",".5");
			$(".main div:nth-child(2)").css("transform","translate(350%,60%) scaleY(.7)");
			$(".main div:nth-child(2)").css("z-index","3");
			$(".main div:nth-child(2)").css("opacity",".5");
			$(".main div:nth-child(3)").css("transform","translate(290%,60%) scaleY(1)");
			$(".main div:nth-child(3)").css("z-index","10");
			$(".main div:nth-child(3)").css("opacity","1");
			$(".main div:nth-child(4)").css("transform","translate(260%,60%) scaleY(.8)");
			$(".main div:nth-child(4)").css("z-index","5");
			$(".main div:nth-child(4)").css("opacity",".5");
			$(".main div:nth-child(5)").css("transform","translate(230%,60%) scaleY(.7)");
			$(".main div:nth-child(5)").css("z-index","3");
			$(".main div:nth-child(5)").css("opacity",".5");
		       flag=5; }
		       // black
		else if (flag===5){
			$(".main div:nth-child(1)").css("transform","translate(350%,60%) scaleY(.7)");
			$(".main div:nth-child(1)").css("z-index","3");
			$(".main div:nth-child(1)").css("opacity",".5");
			$(".main div:nth-child(2)").css("transform","translate(230%,60%) scaleY(.7)");
			$(".main div:nth-child(2)").css("z-index","3");
			$(".main div:nth-child(2)").css("opacity",".5");
			$(".main div:nth-child(3)").css("transform","translate(320%,60%) scaleY(.8)");
			$(".main div:nth-child(3)").css("z-index","5");
			$(".main div:nth-child(3)").css("opacity",".5");
			$(".main div:nth-child(4)").css("transform","translate(290%,60%) scaleY(1)");
			$(".main div:nth-child(4)").css("z-index","10");
			$(".main div:nth-child(4)").css("opacity","1");
			$(".main div:nth-child(5)").css("transform","translate(260%,60%) scaleY(.8)");
			$(".main div:nth-child(5)").css("z-index","5");
			$(".main div:nth-child(5)").css("opacity",".5");
		       flag=4;
		   }
		   // violet
		   else if(flag===4){
		   	$(".main div:nth-child(1)").css("transform","translate(230%,60%) scaleY(.7)");
			$(".main div:nth-child(1)").css("z-index","3");
			$(".main div:nth-child(1)").css("opacity",".5");
			$(".main div:nth-child(2)").css("transform","translate(260%,60%) scaleY(.8)");
			$(".main div:nth-child(2)").css("z-index","5");
			$(".main div:nth-child(2)").css("opacity",".5");
			$(".main div:nth-child(3)").css("transform","translate(350%,60%) scaleY(.7)");
			$(".main div:nth-child(3)").css("z-index","3");
			$(".main div:nth-child(3)").css("opacity",".5");
			$(".main div:nth-child(4)").css("transform","translate(320%,60%) scaleY(.8)");
			$(".main div:nth-child(4)").css("z-index",".5");
			$(".main div:nth-child(4)").css("opacity",".5");
			$(".main div:nth-child(5)").css("transform","translate(290%,60%) scaleY(1)");
			$(".main div:nth-child(5)").css("z-index","10");
			$(".main div:nth-child(5)").css("opacity","1");
		       flag=3;
		   }
		   //green
		   else if(flag===3){
		   	$(".main div:nth-child(1)").css("transform","translate(260%,60%) scaleY(.8)");
			$(".main div:nth-child(1)").css("z-index","5");
			$(".main div:nth-child(1)").css("opacity",".5");
			$(".main div:nth-child(2)").css("transform","translate(290%,60%) scaleY(1)");
			$(".main div:nth-child(2)").css("z-index","10");
			$(".main div:nth-child(2)").css("opacity","1");
			$(".main div:nth-child(3)").css("transform","translate(230%,60%) scaleY(.7)");
			$(".main div:nth-child(3)").css("z-index","3");
			$(".main div:nth-child(3)").css("opacity",".5");
			$(".main div:nth-child(4)").css("transform","translate(350%,60%) scaleY(.7)");
			$(".main div:nth-child(4)").css("z-index","3");
			$(".main div:nth-child(4)").css("opacity",".5");
			$(".main div:nth-child(5)").css("transform","translate(320%,60%) scaleY(.8)");
			$(".main div:nth-child(5)").css("z-index","5");
			$(".main div:nth-child(5)").css("opacity",".5");
		       flag=2;
		   }
		   //red
		   else if(flag===2){
		   	$(".main div:nth-child(1)").css("transform","translate(290%,60%) scaleY(1)");
			$(".main div:nth-child(1)").css("z-index","10");
			$(".main div:nth-child(1)").css("opacity","1");
			$(".main div:nth-child(2)").css("transform","translate(320%,60%) scaleY(.8)");
			$(".main div:nth-child(2)").css("z-index","5");
			$(".main div:nth-child(2)").css("opacity",".5");
			$(".main div:nth-child(3)").css("transform","translate(260%,60%) scaleY(.8)");
			$(".main div:nth-child(3)").css("z-index","5");
			$(".main div:nth-child(3)").css("opacity",".5");
			$(".main div:nth-child(4)").css("transform","translate(230%,60%) scaleY(.7)");
			$(".main div:nth-child(4)").css("z-index","3");
			$(".main div:nth-child(4)").css("opacity",".5");
			$(".main div:nth-child(5)").css("transform","translate(350%,60%) scaleY(.7)");
			$(".main div:nth-child(5)").css("z-index","3");
			$(".main div:nth-child(5)").css("opacity",".5");
		       flag=1;
		   }
		});
	});
