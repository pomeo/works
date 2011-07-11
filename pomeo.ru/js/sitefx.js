$(document).ready(function(){
	$("#sidebar ul.menu li a").hover(function(){
		$(this).animate({ marginLeft: 5, color: "#ff8" }, 200);
	}, function(){
		$(this).animate({ marginLeft: 0, color: "#888" }, 200);
	});
	$("ul#works li a.project").hover(function(){
		$(this).animate({ backgroundColor:"#303030",color: "#bbb" }, 200);
	}, function(){
		$(this).animate({ backgroundColor:"#333",color: "#888" }, 200);
	});
	$("li.project-list a.project").click(function(){
		$(this).next().animate({opacity:'toggle',height:'toggle',minHeight:'100px'},'slow');
	});
});