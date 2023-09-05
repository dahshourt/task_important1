
@if($sub_categories != null && count($sub_categories) > 0)

						<label class="col-lg-3 col-form-label">sub Customer Category  <span class="required">*</span></label>
						<div class="col-lg-9">
							<span id="load_customer_category">
							<select id="customer_category1" name="customer_category" class="form-control" required>
	<option value="">None</option>
	@foreach($sub_categories as $key=> $item)
		<option value="{{ $item['category_id']  }}">{{ $item['category_name']  }}</option>
		
	@endforeach
	
</select>
							</span>
							{!! $errors->first('customer_category', '<span class="form-control-feedback">:message</span>') !!}
							
						</div>






@endif