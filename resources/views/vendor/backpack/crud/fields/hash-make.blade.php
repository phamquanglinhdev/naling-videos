<!-- field_type_name -->
@include('crud::fields.inc.wrapper_start')
<label>{!! $field['label'] . " (Pro)" !!}</label>


<input
    type="hidden"
    name="{{ $field['name'] }}"
    id="{!! $field['name']   !!}"
    value="{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}"
    @include('crud::fields.inc.attributes')
>
<small class="text-success" >
    Cần hash dữ liệu trước khi lưu
</small>
<div class="input-group mb-3">
    <input
        type="text"
        name=""
        id="{!! $field['name']  . "-show" !!}"
        @include('crud::fields.inc.attributes')
    >
    <div class="input-group-append">
        <button type="button" class="btn btn-success" onclick="hash()">Hash dữ liệu (Bảo mật)</button>
    </div>
</div>
<small class="text-success d-none" id="{!! $field['name']."-success" !!}">
    Hash thành công
</small>
<small class="text-danger d-none" id="{!! $field['name']."-fail" !!}">
    Hash không thành công , vui lòng kiểm tra lại
</small>
{{-- HINT --}}
@if (isset($field['hint']))
    <p class="help-block">{!! $field['hint'] !!}</p>
@endif
@include('crud::fields.inc.wrapper_end')

@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp

    {{-- FIELD EXTRA CSS  --}}
    {{-- push things in the after_styles section --}}
    @push('crud_fields_styles')
        <!-- no styles -->
    @endpush

    {{-- FIELD EXTRA JS --}}
    {{-- push things in the after_scripts section --}}
    @push('crud_fields_scripts')
        <!-- no scripts -->
        <script>
            function hash(){
               let before = $("#{!! $field['name']  . "-show" !!}").val();
               if(before===""){
                   $("#{!! $field['name']."-fail" !!}").removeClass("d-none");
                   $("#{!! $field['name']."-success" !!}").addClass("d-none");
               }
                $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '{{route("api.hashPw","")}}'+"/"+before,
                    success: function (data) {
                        console.log(typeof (data));
                        document.getElementById('{!! $field['name'] !!}').value = data;
                        $("#{!! $field['name']."-success" !!}").removeClass("d-none");
                        $("#{!! $field['name']."-fail" !!}").addClass("d-none");
                    },
                    error: function() {
                        console.log(data);
                        $("#{!! $field['name']."-fail" !!}").removeClass("d-none");
                        $("#{!! $field['name']."-success" !!}").addClass("d-none");
                    }
                });
            }
        </script>
    @endpush
@endif
