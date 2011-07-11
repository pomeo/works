(function ($) {
$.fn.vAlign = function() {
    return this.each(function(i){
		var hvalign = $(this).height();
		var ohvalign = $(this).outerHeight();
		var mtvalign = (hvalign + (ohvalign - hvalign)) / 2;
		$(this).css("margin-top", "-" + mtvalign + "px");
		$(this).css("top", "50%");
		$(this).css("position", "absolute");
    });
};
$.fn.hAlign = function() {
    return this.each(function(i){
		var whalign = $(this).width();
		var owhalign = $(this).outerWidth();
		var mlhalign = (whalign + (owhalign - whalign)) / 2;
		$(this).css("margin-left", "-" + mlhalign + "px");
		$(this).css("left", "50%");
		$(this).css("position", "absolute");
    });
};
$.fn.idle = function(time) { 
  var oidleo = $(this);
  oidleo.queue(function() {
	  setTimeout(function() {
		  oidleo.dequeue();
		}, time);
	});
  return this;
};
})(jQuery);

$(document).ready(function() {
	$(".b-hlist-cat-img-name").load(function(){
		$(this).vAlign();
	  });
	$(".b-hlist-cat-pict").load(function(){
		$(this).vAlign();
	  });
	$(".b-slogan").idle(4000).show("slow");
});
