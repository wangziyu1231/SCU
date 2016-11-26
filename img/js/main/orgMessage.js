function attention(){
	img=document.getElementById("attention_img");
	span=document.getElementById("attention_span");
	if(img.src.indexOf('attened')>=0){
		img.src="./img/images/atten.png";
		span.innerHTML="关注";
		}
	else{
		img.src="./img/images/attened.png";
		span.innerHTML="取消关注";
		}	
	}
