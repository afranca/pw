
function putBorder(pallete_colour_div){

	var style = pallete_colour_div.getAttribute("style");
	style = style + "border:2px solid yellow;";
	pallete_colour_div.setAttribute("style",style);
}

