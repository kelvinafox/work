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
					+ '<p><button type="button" class="btn btn-default" id="btn-giant' + i + '" value="' + i + '">More Info</button></p>'
						+ '<div class="modal fade" id="modal-giant' + i + '" role="dialog">'
						    + '<div class="modal-dialog" id="giant-dialog' + i +'">'
						      //<!-- Modal content-->
						    
						  + '</div>'
						+ '</div>'
				+ '</div>'
			+ '</div>'
		+ '</div>';
	if (i % 3 == 0) {
		document.getElementById('catalogue').innerHTML += '</div>';
	}
}