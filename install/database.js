$(document).ready(function(){
	var
		db_type		=	$("#db_type"),
		form_mysql	=	$("#mysql_form"),
		form_sqlite	=	$("#sqlite_form"),
		db_type_ch	=	$(".db_type_change");
		
	db_type.change(function(){
		db_type_ch.val(db_type.val());
		alert(db_type_ch.val());
		if(db_type.val() == '4' || db_type.val() == '5'){
			form_mysql.hide();
			form_sqlite.show();
		} else {
			form_mysql.show();
			form_sqlite.hide();
		}
	});
});