<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Dependent Dropdown  Tutorial With Example</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{asset('js/jquery.js')}}"></script> 
  </head>
  <body>
    <div class="container">
        <div class="panel panel-default" >
            <div class="panel-heading mb-5">Select category and get bellow Related sub category</div>
            <div class="form-group row col-lg-6"  >
                <label class="col-lg-3 col-form-label">Customer Type  <span class="required">*</span></label>
                <div class="col-lg-9">
                    <span id="load_sub_types">
                        <select id="customer_type" name="customer_type" class="form-control" required>
                        <option value="">None</option>
                        @foreach($categories as $item)
                                <option value="{{ $item->category_id  }}"> {{ $item->category_name  }} </option>
                            @endforeach
                        </select>
                        
                    </span>
                    
                </div>
            </div>
					
			<div class="form-group row col-lg-6" id="asd">
                
</div>
				    
<div class="form-group row col-lg-6" id="asd2">
                
                </div>		
					
					

        </div>


       

    </div>
    
    

    
    <script>
        
		var base_url = "{{ url('/') }}";
	</script>			
     <script src="{{asset('new_theme/assets/js/bill.js')}}"></script>
		
  </body>
</html>