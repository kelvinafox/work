for (i = 0; i < num_items_giant; i++) {
	if (i % 3 == 0) {
		document.getElementById('catalogue').innerHTML += '<div class="row">';
	}
		document.getElementById('catalogue').innerHTML += '<div class="col-sm-6 col-md-4">'
			+ '<div class="thumbnail">'
				+ '<img src=' + bike_pics_giant[i] + '>'
				+ '<div class="caption">'
					+ '<h3>' + bike_titles_giant[i] + '</h3>'
					+ '<p>' + bike_descriptions_giant[i] + '</p>'
					+ '<p><button type="button" class="btn btn-default" id="btn-giant' + i + '">More Info</button></p>'
						+ '<div class="modal fade" id="modal-giant' + i + '" role="dialog">'
						    + '<div class="modal-dialog">'
						    
						      //<!-- Modal content-->
						      + '<div class="modal-content">'
						        + '<div class="modal-header">'
						          + '<button type="button" class="close" data-dismiss="modal">&times;</button>'
						          + '<h4 class="modal-title">' + bike_titles_giant[i] + '</h4>'
						        + '</div>'
						        + '<div class="modal-body">'
						          + '<p>' + bike_modal_descriptions_giant[i] + '</p>'
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
		document.getElementById('catalogue').innerHTML += '</div>';
	}
}