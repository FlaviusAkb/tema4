(function($){

		// Get the modal
var modal = document.getElementById("quickViewModal");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("quick-close")[0];

	$('.woocommerce-LoopProduct-link #quick-btn').click(function(e){
		e.preventDefault();
		var id = $(this).data("id");
		WprDoAjax(id);
		});

	function WprDoAjax(id){
		data = {
			action: 'my_action',
			security : MyAjax.security,
			id: id,
		  };
		  $.get(MyAjax.ajaxurl, data, function(response) {
			
			console.log( id );
			console.log( response );
			var json = JSON.parse(response);
			$( '#quick-modal-body' ).empty();
			var content="";
			content +='<span class ="quick-close" onclick="window.quickViewModal.close();">close</span>';
			content +='<div class="akb-container">';
			content +='<div class="imgBx">';
			content +=''+json[0].image+'';
			content +='</div>';
			content +='<div class="details">';
			content +='<div class="content">';
			content +='<a href="'+json[0].link+'"><h2>'+ json[0].title +'</h2></a>';
			content +='<h4>'+json[0].category+'</h4>';
			content +='<p>';
			content +=json[0].short_description;
			content +='</p>';
			content +='<h3>'+json[0].price+'</h3>';
			content +='<div class="akb-added-section">'+json[0].added_section+'</div>';
			content +='</div>';
			content +='</div>';
			content +='</div>';
            jQuery( "#quick-modal-body" ).html( content );

					
		  });

				}
		
	
})(jQuery);