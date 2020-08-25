<div class="form-group row">
    <label class="col-12 col-lg-{{ $column[0] }}">{{ $label }}</label>
    <div class="col-12 col-lg-{{ $column[1] }}">
    	<input 
    		type="text" 
    		name="{{ $name }}"
    		class="form-control {!! ($class) ? $class : '' !!}"
    		@isset($id) id="{{ $id }}" @endisset
    		@isset($this_events)
    			@foreach($this_events as $key => $event)
    				{!! (($event[0]) ? $event[0] : '').'="'.(($event[1]) ? $event[1] : '').'"' !!}
    			@endforeach
    		@endisset
    		@isset($this_attributes)
    			@foreach($this_attributes as $key => $attribute)
    				{!! (($attribute[0]) ? $attribute[0] : '').'="'.(($attribute[1]) ? $attribute[1] : '').'"' !!}
    			@endforeach
    		@endisset
    		placeholder="{{ $placeholder }}"
            @isset($value) value="{{ $value }}" @endisset
    	/>
    	@isset($help)
    		<small class="form-text text-muted"><i class="fa fa-info-circle mr-2"></i>{{ $help }}</small>
    	@endisset
    </div>
</div>