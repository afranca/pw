function deleteEntry(entityName,entityId){

	if (confirm('seguro que queres borrar?')){

		if (entityName == 'regla'){
			//alert('delete regla '+entityId);
			location.href='regla_del.php?id='+entityId;

		}

		if (entityName == 'antecedente'){
			alert('delete antecedente '+entityId);

		}


		if (entityName == 'atributo'){
			alert('delete atributo '+entityId);

		}
	}

}