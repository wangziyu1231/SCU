
var pic_index=0;//存放当前轮播图片的下标
var pic_length=0;//存放当前轮播图片的总数
var pic;//存放当前的轮播图
var scroll_pic;//从后端拿到轮播图的json对象

var circles;//存放圆圈标签
var spans;//存放轮播图的概要的数组

var timer;//轮播图的计时器

var video;//存放视频的json对象
var video_length;//视频对象的长度
var video_index=0;//视频的下标

var aImage;
var aImage_length;
var show_index;
var aImage_index=0;




//一开始就加载的函数
function load(){
	getImg();//从后台获取轮播图
	getVideo();//从后台获取视频
	getAImage();//从后台获取宣传照片
	setTimeout(function(){//ajax异步请求需要一定的时间所以延迟一定时间后执行
		if(video_length>0){
			var x=document.getElementById('video');
			x.innerHTML="<embed class='video'  autostart='false' src=../db/index/video/"+video[video_index].videoName+"></embed>";	
		}
	},500);
}


//从后台获取轮播图的函数
function getImg(){
	var xmlhttp;
	if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
  	}
	else{
	  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 	} 
	xmlhttp.onreadystatechange=function(){
  		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			scroll_pic=eval(xmlhttp.responseText);
			pic_length=scroll_pic.length;
    	}
 	}
	xmlhttp.open("POST",'main.php?controller=index&method=getScrollImage',false);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send();
	if(pic_length>0){//如果有轮播图，则播放轮播图
			pic=document.getElementById('pic');
			pic.src="../db/index/images/"+scroll_pic[pic_index].imgName;
			document.getElementById("outll").innerHTML=""+scroll_pic[pic_index].imgDesc;
			pic_index++;
			
			changImg();
			change();
			addEvent();
	}
}

//更改图片
function changPic(){
	pic=document.getElementById('pic');
	pic.src="../db/index/images/"+scroll_pic[pic_index].imgName;
	document.getElementById("outll").innerHTML=""+scroll_pic[pic_index].imgDesc;
	chang_circle();
	pic_index++;
	
}


//为圆圈单击绑定的事件
function addEvent(){
	pic=document.getElementById('pic');
	circles=document.getElementsByClassName("hover");
	for(var k=0;k<pic_length;k++){
		circles[k].onclick= function(){
			clearInterval(timer);
			pic_index=this.value;
			pic.src="../db/index/images/"+scroll_pic[pic_index].imgName;
			document.getElementById("outll").innerHTML=""+scroll_pic[pic_index].imgDesc;
			chang_circle();
			pic_index++;
			changImg();
		};

	}
}



//改当前圈
function chang_circle(){
	x=document.getElementsByClassName("hover");//拿到当前的所有圆圈
	for(var j=0;j<pic_length;j++){
		if(pic_index==j){
			x[j].style.color="#fff";
			
		}else{
			x[j].style.color="#b3c0cc";
		}
	}
}


//根据后端轮播图数量显示圆圈
function change(){
	for(var i=0;i<pic_length-1;i++){
		var li=document.createElement("li");
		li.setAttribute("class","hover");
		li.value=i+1;
		li.innerHTML="●";
		li.style.color="#b3c0cc";
		document.getElementById("circle").appendChild(li);
	}
	x=document.getElementsByClassName("hover");//拿到当前的所有圆圈
	x[0].style.color="#fff";
	
}

//执行定时器的函数
function changImg(){
	timer=setInterval(function(){
		if(pic_index>=pic_length)
			pic_index=0;
		changPic();
		
	},2000);
}


//点击上一张时调用的函数
function f_lastPic(){
	clearInterval(timer);//清除计时器
	pic_index-=2;
	if(pic_index<0)
		pic_index=0;
	pic.src="../db/index/images/"+scroll_pic[pic_index].imgName;
	document.getElementById("outll").innerHTML=""+scroll_pic[pic_index].imgDesc;
	chang_circle();
	pic_index++;
	changImg();
	
}

//点击下一张时调用的函数
function f_nextPic(){
	clearInterval(timer);//清除计时器
	if(pic_index>=pic_length)
		pic_index=pic_length-1;
	pic.src="../db/index/images/"+scroll_pic[pic_index].imgName;
	document.getElementById("outll").innerHTML=""+scroll_pic[pic_index].imgDesc;
	chang_circle();
	pic_index++;
	changImg();
	
}



//点击更换下一批宣传图调用的函数
function next_borad(){
	var temp=document.getElementById('imgss').getElementsByTagName("img");
	for(var i=0;i<temp.length;i++){
		if(aImage_index<aImage_length)
			temp[i].src="../db/index/images/"+aImage[aImage_index++].imgName;
		else{
			aImage_index-=4;
			temp[i].src="../db/index/images/"+aImage[aImage_index++].imgName;
		}
	}
}


//点击更换上一批宣传图调用的函数
function last_borad(){
	
	var temp=document.getElementById('imgss').getElementsByTagName("img");
	for(var i=0;i<temp.length;i++){
		if(aImage_index>=0)
			temp[i].src="../db/index/images/"+aImage[aImage_index--].imgName;
		else{
			aImage_index+=4;
			temp[i].src="../db/index/images/"+aImage[aImage_index--].imgName;
		}
	}
}

//从后台获取视频调用的函数
function getVideo(){
	var xmlhttp;
	if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
  	}
	else{
	  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 	} 
	xmlhttp.onreadystatechange=function(){
  		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			video=eval(xmlhttp.responseText);
			video_length=video.length;
    	}
 	}
	xmlhttp.open("POST",'main.php?controller=index&method=getVideo',true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send();
}

//从后台获取宣传照片调用的函数
function getAImage(){
	var xmlhttp;
	if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
  	}
	else{
	  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 	} 
	xmlhttp.onreadystatechange=function(){
  		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			aImage=eval(xmlhttp.responseText);
			aImage_length=aImage.length;
    	}
 	}
	xmlhttp.open("POST",'main.php?controller=index&method=getAImage',true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send();
}



