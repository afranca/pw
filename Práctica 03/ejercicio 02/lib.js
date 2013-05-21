

function clearBorderAll(){
	var palette_colours_div = document.getElementById("palette_colours");

	for (i=0;i<palette_colours_div.childNodes.length;i++){
		var colour_cell_div = palette_colours_div.childNodes[i];

		var currentStyle=colour_cell_div.getAttribute("style");
		var currentStyleArr = currentStyle.split(";");
		var currentStyleBackground = currentStyleArr[0];

		var newStyle = currentStyleBackground+";border:4px solid white;";

		colour_cell_div.setAttribute("style",newStyle);
	}

}


function putBorder(pallete_colour_div){
	clearBorderAll();

	var style = pallete_colour_div.getAttribute("style");
	style = style + "border:4px solid yellow;";
	pallete_colour_div.setAttribute("style",style);
}

function buildColourPalette(){

	var colours = new Array();
	colours[0] = "red";
	colours[1] = "blue";
	colours[2] = "grey";
	colours[3] = "green";
	colours[4] = "white";
	colours[5] = "black";

	colours[6] = "BlueViolet";
	colours[7] = "Brown ";
	colours[8] = "BurlyWood ";
	colours[9] = "CadetBlue ";



	var palette = document.getElementById("palette_colours");
	for (var j = 0; j<colours.length;j++){
		var palettediv = document.createElement('div');
		palettediv.innerHTML = "";
		var palettedivName = "color_"+j;
		palettediv.setAttribute('id',colours[j]);
		palettediv.setAttribute('class','palette_cell');
		palettediv.setAttribute('TITLE',"color");
		palettediv.setAttribute('style',"background: "+colours[j]+";border:4px solid white;");
		palettediv.setAttribute('onclick',"javascript:putBorder(this);");

		palette.appendChild(palettediv);
	}

}


function buildEmptyCanvas(){
	var canvas = document.getElementById("canvas");

	for (var i = 1; i<51;i++){
		for (var j = 1; j<51;j++){
			var newdiv = document.createElement('div');

			var row = (i>9)?""+i:"0"+i;
			var col = (j>9)?""+j:"0"+j;

			newdiv.innerHTML = row+""+col;

			var divIdName = row+""+col;
			newdiv.setAttribute('id',divIdName);
			newdiv.setAttribute('class','canvas_cell');
			newdiv.setAttribute('TITLE',row+""+col);
			canvas.appendChild(newdiv);
		}
	}
}