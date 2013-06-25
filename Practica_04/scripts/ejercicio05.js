
/* ******************************************************** */
/* 	generic delete function                                 */
/* ******************************************************** */
function deleteEntry(entityName,entityId){

	if (confirm('seguro que queres borrar?')){

		location.href= entityName+'_del.php?id='+entityId;

	}

}

/* ******************************************************** */
/* 	to upper case function                                  */
/* ******************************************************** */
function toUp(str){
	return  str.toUpperCase();
}

/* ******************************************************** */
/* 	check whether n is a number or not                      */
/* ******************************************************** */
function isNumber(n) {
  return !isNaN( (parseInt(n))) && isFinite(n);
}