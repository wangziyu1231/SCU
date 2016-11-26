$(function(){
			$(".searchIframe").hide();
			$(".searchContent").show();
			$(".userSearch").click(function(){
				$(".searchContent").show();
				$(".searchIframe").hide();
				$(".seniorSearch").css("background","#efeded");
				$(".userSearch").css("background","#fff");
				
			});
			$(".seniorSearch").click(function() {
				$(".searchIframe").show();
				$(".searchContent").hide();
				$(".seniorSearch").css("background","#fff");
				$(".userSearch").css("background","#efeded");
			});
			$("#rightNow").show();
			$("#i_rightNow").show();
			
			$("#rightCheck").hide();
			$("#i_rightCheck").hide();
			
			$("#rightReg").hide();
			$("#i_rightReg").hide();
			
			$("#i_rightaReg").hide();
			
			$("#reg").click(function(){
				$("#rightNow").hide();
				$("#rightCheck").hide();
				$("#rightReg").show();
				
				$("#i_rightNow").hide();
				$("#i_rightCheck").hide();
				$("#i_rightReg").show();
			});
			$("#check").click(function(){
				$("#rightNow").hide();
				$("#rightCheck").show();
				$("#rightReg").hide();
				
				$("#i_rightNow").hide();
				$("#i_rightCheck").show();
				$("#i_rightReg").hide();
			});
			$("#rnow").click(function(){
				$("#rightNow").show();
				$("#rightCheck").hide();
				$("#rightReg").hide();
				
				$("#i_rightNow").show();
				$("#i_rightCheck").hide();
				$("#i_rightReg").hide();
			
			});
		})
function changeState(){
		var x=document.getElementsByClassName("one");
		if(document.getElementById("all").checked){
			for(i=0;i<x.length;i++){
				x[i].checked=true;
			}
		}
		else{
			for(i=0;i<x.length;i++){
				x[i].checked=false;
			}
		}
	}
