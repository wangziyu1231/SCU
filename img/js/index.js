// JavaScript Document
//轮播图
var ii=2;
var js_img;
function getScrollImage(var str){
		var xmlhttp;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
 			xmlhttp=new XMLHttpRequest();
  		}
		else{// code for IE6, IE5
	  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 		} 
		xmlhttp.onreadystatechange=function(){//为xmlhttp的响应添加处理
  			if (xmlhttp.readyState==4 && xmlhttp.status==200){
    			js_img=xmlhttp.responseText;		
    		}
 		}
		xmlhttp.open("POST",'main.php?controller=index&method=getScrollImage',true);
		//设置请求的方式，请求的服务器文件，是否异步
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//添加HTTp头，只有添加了post方式才能通过send发送数据
		str="";
		xmlhttp.send(str);//发送数据

}
function changload(){
	
	img=document.getElementById('pic');
	setInterval(function(){
		img.src="./img/images/scrollPicture"+ii+".jpg";
		ii++;
		if(ii==5){
			ii=1;
		}
	},2000);
}



function changImg(){
	for(var i=0;i<circle.length;i++){
		circle[i].index=i;
		circle[i].onclick=function(){clearInterval(tt);				
			iNow=this.index;
			change();
		}			
		//当鼠标离开被单击圆圈时，执行setInter（）计时换图片函数
		circle[i].onmouseout=function(){
			setInter(0);
		}
	}
	last.onclick=function(){clearInterval(tt);
		for(var i=0;circle[i].className!="hover";i++){}
			if(i==0){
				iNow=img.length-1;}	
			else{
				iNow=i-1;}
		change();
		setInter(0);
	}
	next.onclick=function(){clearInterval(tt);
		for(var i=0;circle[i].className!="hover";i++){}
			if(i==img.length-1){
				iNow=0;}	
			else{
				iNow=i+1;}
		change();
		setInter(0);
	}
}		
function change(){
	for(var i=0;i<circle.length;i++){
		circle[i].className="out";
		spans[i].style.display="none";
	}
	circle[iNow].className="hover";
	spans[iNow].style.display="block";
	oimg.style.top=-(450*iNow)+"px";
}
function setInter(yn){
	if(yn==1){
		circle=document.getElementById("circle").getElementsByTagName("li");
		spans=document.getElementById("spans").getElementsByTagName("span");
		last=document.getElementById("lastPic");
		next=document.getElementById("nextPic");
		tt=null;
		iNow=0;	
		yn=0;
	}
	clearInterval(tt);	
	tt=setInterval(function(){			
		if(iNow==img.length-1){
			iNow=0;}	
		else{
			iNow++;}				
		change();			  
	},3000);
	changImg();
}
/*function over(){
	last.style.display="block";
	next.style.display="block";
}
function out(){
	last.style.display="none";
	next.style.display="none";
}*/