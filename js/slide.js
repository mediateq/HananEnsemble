window.onload = function(){

	var slide = document.getElementsByClassName('slide').item(0);
	var slidebar = slide.getElementsByClassName('slidebar').item(0);
	var train = slidebar.getElementsByClassName('train').item(0);
	var img = train.getElementsByTagName('a');
	
	var pre = slide.getElementsByClassName('previous').item(0); 
	var next = slide.getElementsByClassName('next').item(0); 
	var currentslide = 0;
	var currentBackSlide=0;
	var len = Math.ceil((img.length)/6);
	
	slider = function(n){
		if(n>len) n=0;
		if(n<0) n = (img.length-1);
		train.style.left = (-157*n)+'px';
		currentslide = n;
	};
	
	nextslide = function(){
		slider(currentslide+1);
	}
	
	preslide = function(){
		slider(currentslide-1);
	}
	
	stopSliding = function(){
		if(!intervalName) return;
		clearInterval(intervalName);
		intervalName = false;
	}

	for(var i=0;i<img.length;i++){
		img.item(i).onclick=function(){

			var thumbnailHref = this.href;
			
			document.getElementsByTagName('body').item(0).style.backgroundImage='url('+thumbnailHref+')';

			return false;
		};
	}

	backSlide = function(n){
		if(n>img.length-1) n=0;
		if(n<0) n = (img.length-1);
		var thumbnailHref = img.item(n).href;
			
		document.getElementsByTagName('body').item(0).style.backgroundImage='url('+thumbnailHref+')';
		currentBackSlide = n+1;
	};
	nextBg=function(){
		backSlide(currentBackSlide+1);
	}
	setInterval(nextBg,15000);
	
	next.onclick = nextslide;
	pre.onclick = preslide;	
	
}