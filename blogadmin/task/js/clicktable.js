$("#table_one").on("click", "tr", function () {
	$(".activetable").removeClass("activetable");
	$(this).children("td").addClass("activetable");
	$(this).children("tr").addClass("activetable");
});


