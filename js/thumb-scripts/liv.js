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
					+ '<p><button type="button" class="btn btn-default" id="btn-liv' + i + '">More Info</button></p>'
						+ '<div class="modal fade" id="modal-liv' + i + '" role="dialog">'
						    + '<div class="modal-dialog modal-lg">'
						    
						      //<!-- Modal content-->
						      + '<div class="modal-content">'
						        + '<div class="modal-header">'
						          + '<button type="button" class="close" data-dismiss="modal">&times;</button>'
						          + '<h4 class="modal-title">' + bike_titles_liv[i] + '</h4>'
						        + '</div>'
						        + '<div class="modal-body">'
						          + '<p>' + bike_modal_descriptions_liv[i] + '</p>'
						        + '</div>'
						        + '<div class="modal-footer">'
						          + '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'
						        + '</div>'
						      + '</div>'
						  + '</div>'
						+ '</div>'
				+ '</div>'
			+ '</div>'
		+ '</div>';
	if (i % 3 == 0) {
		document.getElementById('catalogue-liv').innerHTML += '</div>';
	}
}