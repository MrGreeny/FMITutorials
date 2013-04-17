var t_height,t_gap, container_height=0;
jQuery(document).ready(function(){
	if(jQuery("#container").height()<550) jQuery("#content").height(550);
	checkheight();
	setInterval("checkheight()",2000);

//drop-down menu
    jQuery("div.menu ul ul li:has(ul)").find("a:first").append(" &raquo;");
});

function checkheight(){
	if(container_height!=jQuery("#container_btm").height()){
		jQuery("#container_btm").css({"padding-bottom":"0px","margin-bottom":"0px"});	
		t_height=jQuery("#container_btm").height() + jQuery("#header").height();
		t_gap=Math.ceil(t_height/63)*63-t_height;
		jQuery("#container_btm").css({"padding-bottom":t_gap+"px"});
		container_height=jQuery("#container_btm").height();
	}
}