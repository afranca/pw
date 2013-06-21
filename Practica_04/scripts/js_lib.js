function deleteEntry(entityName,entityId){

	if (confirm('seguro que queres borrar?'+entityId)){

		location.href= entityName+'_del.php?id='+entityId;


	/*
		if (entityName == 'regla'){
			//alert('delete regla '+entityId);
			location.href='regla_del.php?id='+entityId;

		}

		if (entityName == 'antecedente'){
			location.href='antecedente_del.php?id='+entityId;

		}


		if (entityName == 'atributo'){
			alert('delete atributo '+entityId);

		}

		*/
	}

}