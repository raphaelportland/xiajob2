$(document).ready(function() {
	
	$('.confirm').click(function() {
		
		var answer = confirm( 'Etes-vous sûr ?' );		
        return answer; // answer is a boolean
    }); 
    
    
    
    $('.edit').click(function(){
    	
    	var ajax_data = {
    		ajax: '1',
    	};
    	
    	$.ajax({
    		url: $(this).attr('href'),
    		type: "POST",
    		data: ajax_data,
    		success: function(msg) {
    			//$("#modaledit .modal-header").after(msg);
    			$("#modal_replace").html(msg);
    			$('#modaledit').modal('toggle');
    		}
    	});
    	
    	return false;
    });
    
    
    
    
    
    // semble ne pas fonctionner...
    if(window.location.hash == '#_=_')window.location.hash = '';
    
    
    







$('.autosubmit-input-link').click(function(){
	
	var ajax_data = {
		ajax: '1',
	};
	
	var div = '#' + $(this).attr('data-div_id');
	
	//alert(div);
	
	$.ajax({
		url: $(this).attr('href'),
		type: "POST",
		data: ajax_data,
		success: function(msg) {				
			$(div).html(msg);
		}
	});
	
	return false;
});






	$('.autosubmit').focusout(function() {
		$('form#ajax_form').trigger('submit');
	});



    
    
    // autosubmit
    /*
    $('.autosubmit').change(function() {
        var c = $(this);
        
        var div = '#' + $(this).attr('data-div_id');
        
        $.when(
        c.focusout()).then(function() {
        	alert('ok');       	
        });     	
        	
        	$() = $(this).value();  	
        	
        	//$('form#ajax_form').trigger('submit');  	
    });*/
  
    

}); 