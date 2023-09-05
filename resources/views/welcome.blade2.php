<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Dependent Dropdown  Tutorial With Example</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{asset('js/jquery.js')}}"></script> 
  </head>
  <body>
    <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading">Select category and get bellow Related sub categgory</div>
          <div class="form-group col-sm-4">
                                                   <label>xpense Type Level 1</label>
                                                    <select name="expenseType[]" id="expenseType1" class="form-control"  required>
                                                        <option value=""> -- Select expense type --</option>
                                                        @foreach($categories as $expenseType)
                                                            <option value="{{$expenseType->category_id }}"> {{$expenseType->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-sm-4" style="display:none">
                                                <label>xpense Type Level 2</label>
                                                    <select name="expenseType[]" id="expenseType2" class="form-control">
                                                        
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-sm-4" style="display:none">
                                                <label>xpense Type Level 3</label>
                                                    <select name="expenseType[]" id="expenseType3" class="form-control">
                                                        
                                                    </select>
                                                </div>
                                                
        </div>


       

    </div>
    
    

    
    <script>
        
         $(document).ready(function() {
         
    var sub_expense_types = <?php echo json_encode($sub_category) ?>;
    var x= 1;
    var i=1;
    $('#expenseType1').on('change',function(){
       
        var expense_type_id = $(this).val();
       
        if(sub_expense_types[parseInt(expense_type_id)] !== undefined){
            
            var html = '<option value=""> -- Select expense type --</option>';
            ++x;
            $.each(sub_expense_types[parseInt(expense_type_id)], function(key,sub_expense_type){
                html += '<option value="'+sub_expense_type.category_id+'">'+sub_expense_type.category_name +'</option>';
            });
            i++;
            this.x++;
            $('#expenseType'+i).html(html);
            $('#expenseType'+i).parent().attr('style','display:block');
        }else{
            ++i;
            $('#expenseType'+i).html('');
            $('#expenseType'+i).parent().attr('style','display:none');
        }
        i+=2;
      
        $('#expenseType'+i).html('');
        $('#expenseType'+i).parent().attr('style','display:none');
    });
 
    $('#expenseType'+(i+1)).on('change',function(){
       
        alert(i);
        var expense_type_id = $(this).val();
        
        if(sub_expense_types[parseInt(expense_type_id)] !== undefined){
            var html = '<option value=""> -- Select expense type --</option>';
            
            $.each(sub_expense_types[parseInt(expense_type_id)], function(key,sub_expense_type){
                html += '<option value="'+sub_expense_type.category_id+'">'+sub_expense_type.category_name +'</option>';
            });
            
            $('#expenseType3').html(html);
            $('#expenseType3').parent().attr('style','display:block');
        }else{
            $('#expenseType3').html('');
            $('#expenseType3').parent().attr('style','display:none');
        }
    });
});
</script>

  </body>
</html>