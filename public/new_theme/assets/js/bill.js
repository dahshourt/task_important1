

 
		$("#customer_type").on('change',function (e) { 
			
			
			$type_value = $(this).val();
			
			if($type_value===''){
				
				$('#asd2').attr('style','display:none');
				$('#asd').attr('style','display:none');
			}
			$.get( base_url+"/sub_category/ajax/"+$type_value)
				.done(function( data ) {
			
					document.getElementById('asd').innerHTML =data;
					 $('#asd2').attr('style','display:none');
					 $('#asd').attr('style','display:');
					

				
			});
		});
		$(document).on('change', '#customer_category', function(e) { 
			
			$type_value = $(this).val();
			
			if($type_value.length==0){
				
				$('.asd2').parent().attr('style','display:none');
			}
			$.get( base_url+"/sub_sub_category/ajax/"+$type_value)
				.done(function( data ) {
					document.getElementById('asd2').innerHTML =data;
					$('#asd2').attr('style','display:');
					
			});
		});
		
	
		
	
