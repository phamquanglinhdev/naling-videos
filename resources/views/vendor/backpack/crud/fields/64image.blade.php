<!-- field_type_name -->
@include('crud::fields.inc.wrapper_start')

<label>{!! $field['label'] . " (Pro)" !!}</label>
<div class="form-group">
    <input type="file" id="{!! $field['label'] ."-upload"!!}" class="form-control-file" onchange="loadFile(event)">
</div>

<input
    type="hidden"
    name="{{ $field['name'] }}"
    id="{!! $field['label']   !!}"
    value="{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}"
    @include('crud::fields.inc.attributes')
>

<div>
    <div class="row">
        <div class="col-md-6 col-12 w-100">
            <img id="{!! $field['label']."-src"!!}"

                 class="w-100">
        </div>
        <div class="col-md-6 col-12">
            <div class="px-lg-5 px-0">
                <img id="{!! $field['label']."-rc"!!}"
                     class="w-75">
            </div>
        </div>
    </div>
</div>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/2.0.0-alpha.2/cropper.min.css"/>
    @endpush

    {{-- FIELD EXTRA JS --}}
    {{-- push things in the after_scripts section --}}
    @push('crud_fields_scripts')
        <!-- no scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/2.0.0-alpha.2/cropper.min.js"></script>
{{--        if this feature not working , pls check this cdn link--}}
        <script>
            $("#{!! $field['label'] ."-upload"!!}").change(()=>{
                console.log();
            });
            var loadFile = function(event) {
                var output = document.getElementById('{!! $field['label']."-src"!!}');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
                const image = document.getElementById('{!! $field['label']."-src"!!}');
                const cropper = new Cropper(image, {
                    aspectRatio: {{$field['ratio']}},
                    crop(event) {
                        // console.clear();
                        // console.log();
                        document.getElementById('{!! $field['label']."-rc"!!}').src = cropper.getCroppedCanvas().toDataURL("image/png");
                        document.getElementById('{!! $field['label']!!}').value = cropper.getCroppedCanvas().toDataURL("image/png");
                    },
                });
            };
        </script>
    @endpush
@endif
