
var DEFAULT_BORDER  = "border:4px solid black;";
var SELECTED_BORDER = "border:4px solid #FFFF00 ;";

var SELECTED_COLOUR = "";

function clearBorderAll(){
	var palette_colours_div = document.getElementById("palette_colours");

	for (i=0;i<palette_colours_div.childNodes.length;i++){
		// get all the colour cells
		var colour_cell_div = palette_colours_div.childNodes[i];

		// get current style background by splitting the style property
		var currentStyleBackground = colour_cell_div.getAttribute("style").split(";")[0];

		//use it to build a new style property with white borders
		var newStyle = currentStyleBackground+";"+DEFAULT_BORDER;

		colour_cell_div.setAttribute("style",newStyle);
	}

}


function putBorder(pallete_colour_div){
	clearBorderAll();

	var currentStyleBackground = pallete_colour_div.getAttribute("style").split(";")[0];

	var newStyle = currentStyleBackground + ";"+SELECTED_BORDER;

	pallete_colour_div.setAttribute("style",newStyle);


	var bgArr = currentStyleBackground.split(" ");
	SELECTED_COLOUR = bgArr[1];

	if (SELECTED_COLOUR!='white'){
		document.getElementById("colour_label").innerHTML = "Activado:"+SELECTED_COLOUR.toUpperCase();
	}else{
		document.getElementById("colour_label").innerHTML = "Desactivado";
	}

}


function paintCell(cell_div){

	var newStyle ="background:"+SELECTED_COLOUR;
	cell_div.setAttribute("style",newStyle);

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
		palettediv.setAttribute('style',"background: "+colours[j]+";"+DEFAULT_BORDER);
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
			newdiv.setAttribute('onclick',"javascript:paintCell(this);");

			canvas.appendChild(newdiv);
		}
	}
}