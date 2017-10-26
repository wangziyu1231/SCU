$(function(){

	//输入框是否为空
	function isNull(){

		if($("#username").val()==null||$("#username").val()==""){
			$('.tips').text("用户名不能为空");
			$("#username").focus();
			return false;
		}
		if($("#password").val()==null||$("#password").val()==""){
			$('.tips').text("密码不能为空");
			$("#password").focus();
			return false;
		}
		if($("#check_text").val()==null||$("#check_text").val()==""){
			$('.tips').text("验证码不能为空");
			$("#check_text").focus();
			return false;
		}	
		return true;
	}

	//单击登录绑定的函数
	$("#login").click(function(){
		$('.back_mark').show();//显示一个空div，用来设置弹出登录界面后的背景色
		$('.back_mark').height($(document).height());//设置空div的高度为当前页面高度
		$('.layout').slideDown(500);//显示登录框，以500毫秒的速率显示出来
	})

	//更改验证码调用的函数
	$("#checkedImage").click(function(){
		document.getElementById('checkedImage').src=
		"./main.php?controller=login&method=getCheckedImage&t="+new Date();
	})
	//点击和enter，提交并验证登录信息
	$(".login_div").keydown(function(){ 
		if(event.keyCode==13){ 
			$(".login_btn").click(); 
		}
	}) 

	$(".login_btn").click(function(){
		if(isNull()){
			jsn="data="+$("#check_text").val();
			$.ajax({
				type:"POST",
				url:"./main.php?controller=login&method=check_text",
				data:jsn,
				async:true,
				success:function(d){
					//转换成对象
					var x=eval("("+d+")");
					// 检验验证码是否正确
					if(x.success){
						var jsn={'username':$("#username").val(),'password':$("#password").val(),'auto_login':$('#auto_login').prop('checked')};
						$.ajax({
							type:"POST",
							url:"main.php?controller=login&method=login",
							data:jsn,
							async:true,
							success:function(d){
								var x=eval("("+d+")");
								if(x.success==1){
									document.location.reload();
								}	
								else if(x.success==0){
									$(".tips").text("密码错误!");
									$("#password").val('');
									$('#check_text').val('');
									getCheckedImage();
								}
								else{
									$(".tips").text("用户名不存在,请先注册!");
									$("#password").val('');
									$('#check_text').val('');
									getCheckedImage();
								}
							}
						});
					}
					else{
						$('.tips').text("验证码错误");
						$('#check_text').val('');
						getCheckedImage();
					}
				},
				error:function(){alert("请求失败");flag=false;}
			});
		}
	})

	//给登录的关闭按钮绑定函数
	$('.close').click(function(){
		$('.back_mark').hide();//隐藏空div，
		$('.layout').slideUp(300);//关闭登录框
	});

    //当前页面
    var li=$("ul#nav li");
    $("ul#nav a").each(function(i){
    	$this=$(this);
    	if($this[0].href==String(window.location)){ //如果是点击添加的话刷新就没有了 
            li.eq(i).addClass("present");  
        }  
    });

	//主页活动栏
    $("#hot").click(function() {
        $("#mode1").hide("slow");
        $("#mode3").hide("slow");
        $("#mode2").show("slow");
    });
    $("#main").click(function() {
        $("#mode2").hide();
        $("#mode3").hide();
        $("#mode1").fadeIn("30000");
    });
    $("#history").click(function() {
        $("#mode1").hide("slow");
        $("#mode2").hide("slow");
        $("#mode3").slideDown("normal");
    });

    // 放大二维码
    var x = -170;
    var y = 20;
    $("#showPic").mouseover(function(e){ 
        this.myTitle = this.title; //用属性值不会跟着this.title变成空值
        this.title = ""; 
        var imgTitle = "<br/>"+this.myTitle; 
        this.title="";
        var tooltip = "<div id='tooltip'><img src='"+ this.href +"' />"+imgTitle+"</div>"; 
        $("body").append(tooltip);//添加标签
        $("#tooltip")
            .css({
                "top": (e.pageY+y) + "px",
                "left":  (e.pageX+x)  + "px"
            }).show("fast");    
    }).mouseout(function(){
        this.title = this.myTitle;
        $("#tooltip").remove(); //删除标签
    }).mousemove(function(e){   //更新位置
        $("#tooltip")
            .css({
                "top": (e.pageY+y) + "px",
                "left":  (e.pageX+x)  + "px"
            });
    });

    //菜单
    var open=false;
    $("#menu").click(function() {
        if(!open){
           $(".top").css("height","287px");
           open=true;    
        }
        else{
            $(".top").css("height","74px");
            open=false;
        }
    });

    //改变可见尺寸的时候
    $(window).resize(function(){
	    if($("#menu").css("display")=="none"&&open){
	       $(".top").css("height","74px");
	       open=false; 
	    }
    });

});