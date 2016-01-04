for (i = 0; i < num_items_liv; i++) {
	if (i % 3 == 0) {
		document.getElementById('catalogue-liv').innerHTML += '<div class="row">';
	}
		document.getElementById('catalogue-liv').innerHTML += '<div class="col-sm-6 col-md-4">'
			+ '<div class="thumbnail">'
				+ '<img src=' + bike_pics_liv[i] + '>'
				+ '<div class="caption">'
					+ '<h3>' + bike_titles_liv[i] + '</h3>'
					+ '<p>' + bike_descriptions_liv[i] + '</p>'
					+ '<p><button type="button" class="btn btn-default" id="btn-liv' + i + '" value ="' + i + '">More Info</button></p>'
						+ '<div class="modal fade" id="modal-liv' + i + '" role="dialog">'
						    + '<div class="modal-dialog" id="liv-dialog' + i + '">'
						      //<!-- Modal content-->
						      
						  + '</div>'
						+ '</div>'
				+ '</div>'
			+ '</div>'
		+ '</div>';
	if (i % 3 == 0) {
		document.getElementById('catalogue-liv').innerHTML += '</div>';
	}
}