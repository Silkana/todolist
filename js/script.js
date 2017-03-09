function alertOnClick(id){
	$.post('delete.php',{
			"id": id
		},function(ret){
			if (parseInt(ret)){
				$("#row_"+id).css("display", "none");
			}
		}
	);

	//$Location.reload(forcedReload);
}


function addToList(id){
	$.post('insert.php',{
		"id":id
		}, function(ret){
			if (parseInt(ret)){

				}
			}	
		);
	location.reload();
}