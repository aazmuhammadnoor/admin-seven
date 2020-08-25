<div class="form-group row">
    <label class="col-12 col-lg-{{ $column[0] }}">{{ $label }}</label>
    <div class="col-12 col-lg-{{ $column[1] }}">
        <div class="input-group date" id="date_{{ $name }}" data-target-input="nearest">
            <input 
                type="text" 
                name="{{ $name }}"
                class="form-control datetimepicker-input {!! ($class) ? $class : '' !!}"
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
                date-target="#date_{{ $name }}"
            />
            <div class="input-group-prepend">
                <button class="btn btn-outline-primary" type="button" date-target="#date_{{ $name }}" data-toggle="datetimepicker">
                    <i class="fa fa-calendar"></i>
                </button>
            </div>
        </div>
    	@isset($help)
    		<small class="form-text text-muted"><i class="fa fa-info-circle mr-2"></i>{{ $help }}</small>
    	@endisset
    </div>
</div>

@push('js')
    <script type="text/javascript">
        $('#date_{{$name}}').datetimepicker({
            format: 'L'
        });
    </script>
@endpush