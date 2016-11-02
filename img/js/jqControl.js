// JavaScript Document
//轮播图的提示
$(function(){
    var x = 10;  
	var y = 20;
	$("a.tooltip").mouseover(function(e){   //当鼠标移入时，找到a.tooltip
    	this.myTitle = this.title; //得到默认提示文字
		this.title = "";	   //删除默认提示文字
        // 构建一个div 用于显示自定义提示
	    var tooltip = "<div id='tooltip'>"+ this.myTitle +"</div>"; //创建 div 元素
		$("body").append(tooltip);	//把div动态追加到文档中
		$("#tooltip")
			.css({
				"top": (e.pageY+y) + "px",    
				"left": (e.pageX+x)  + "px"
			}).show("fast");	  //设置div 的x坐标和y坐标，并且动画快速显示
    }).mouseout(function(){	//当鼠标移出时	
		this.title = this.myTitle; //恢复原默认提示文字
		$("#tooltip").remove();   //移除该div  
    }).mousemove(function(e){  //当鼠标移动时，div随着移动
		$("#tooltip")
			.css({
				"top": (e.pageY+y) + "px",
				"left": (e.pageX+x)  + "px"
			});
	});
})
