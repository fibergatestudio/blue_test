@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

<div class="inner-section">
    
    @include ('admin::layouts.nav-aside')

    <div class="content-wrapper">

        @include ('admin::layouts.tabs')

        <h1>Trainings Edit</h1>

        <div class="row">

            <div style="width: 25%" class="faq-page__content">
                <form action="{{ url('admin/trainings_edit/apply_edit') }}" method="POST">
                @csrf()
                    <input type="hidden" value="1" name="training_id">
                    <span>Training 1</span>
                    <div style="width: 100%">
                        <label>Training Number</label><br>
                        <input style="width: 100%" type="text" name="training_number" value="{{ $trainings_info_1->training_number }}"></input>
                    </div>
                    <div style="width: 100%">
                        <label>Training Name</label><br>
                        <input style="width: 100%" type="text" name="training_name" value="{{ $trainings_info_1->training_name }}"></input>
                    </div>
                    <div style="width: 100%">
                        <label for="6">Description</label><br>
                        <textarea id="tiny" name="training_description" value="{{ $trainings_info_1->training_description }}">{{ $trainings_info_1->training_description }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Location</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_location" value="{{ $trainings_info_1->training_location }}">{{ $trainings_info_1->training_location }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Cost</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_cost" value="{{ $trainings_info_1->training_cost }}">{{ $trainings_info_1->training_cost }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Structure</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_structure" value="{{ $trainings_info_1->training_structure }}">{{ $trainings_info_1->training_structure }}</textarea>
                    </div>
                    <button type="submit">Save</button>
                </form>
            </div>
            <div style="width: 25%" class="faq-page__content">
                <form action="{{ url('admin/trainings_edit/apply_edit') }}" method="POST">
                @csrf()
                    <input type="hidden" value="2" name="training_id">
                    <span>Training 2</span>
                    <div style="width: 100%">
                        <label>Training Number</label><br>
                        <input style="width: 100%" type="text" name="training_number" value="{{ $trainings_info_2->training_number }}"></input>
                    </div>
                    <div style="width: 100%">
                        <label>Training Name</label><br>
                        <input style="width: 100%" type="text" name="training_name" value="{{ $trainings_info_2->training_name }}"></input>
                    </div>
                    <div style="width: 100%">
                        <label for="6">Description</label><br>
                        <textarea id="tiny" name="training_description" value="{{ $trainings_info_2->training_description }}">{{ $trainings_info_2->training_description }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Location</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_location" value="{{ $trainings_info_2->training_location }}">{{ $trainings_info_2->training_location }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Cost</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_cost" value="{{ $trainings_info_2->training_cost }}">{{ $trainings_info_2->training_cost }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Structure</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_structure" value="{{ $trainings_info_2->training_structure }}">{{ $trainings_info_2->training_structure }}</textarea>
                    </div>
                    <button type="submit">Save</button>
                </form>
            </div>
            <div style="width: 25%" class="faq-page__content">
                <form action="{{ url('admin/trainings_edit/apply_edit') }}" method="POST">
                @csrf()
                    <input type="hidden" value="3" name="training_id">
                    <span>Training 3</span>
                    <div style="width: 100%">
                        <label>Training Number</label><br>
                        <input style="width: 100%" type="text" name="training_number" value="{{ $trainings_info_3->training_number }}"></input>
                    </div>
                    <div style="width: 100%">
                        <label>Training Name</label><br>
                        <input style="width: 100%" type="text" name="training_name" value="{{ $trainings_info_3->training_name }}"></input>
                    </div>
                    <div style="width: 100%">
                        <label for="6">Description</label><br>
                        <textarea id="tiny" name="training_description" value="{{ $trainings_info_3->training_description }}">{{ $trainings_info_3->training_description }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Location</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_location" value="{{ $trainings_info_3->training_location }}">{{ $trainings_info_3->training_location }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Cost</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_cost" value="{{ $trainings_info_3->training_cost }}">{{ $trainings_info_3->training_cost }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Structure</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_structure" value="{{ $trainings_info_3->training_structure }}">{{ $trainings_info_3->training_structure }}</textarea>
                    </div>
                    <button type="submit">Save</button>
                </form>
            </div>
            <div style="width: 25%" class="faq-page__content">
                <form action="{{ url('admin/trainings_edit/apply_edit') }}" method="POST">
                @csrf()
                    <input type="hidden" value="4" name="training_id">
                    <span>Training 4</span>
                    <div style="width: 100%">
                        <label>Training Number</label><br>
                        <input style="width: 100%" type="text" name="training_number" value="{{ $trainings_info_4->training_number }}"></input>
                    </div>
                    <div style="width: 100%">
                        <label>Training Name</label><br>
                        <input style="width: 100%" type="text" name="training_name" value="{{ $trainings_info_4->training_name }}"></input>
                    </div>
                    <div style="width: 100%">
                        <label for="6">Description</label><br>
                        <textarea id="tiny" name="training_description" value="{{ $trainings_info_4->training_description }}">{{ $trainings_info_4->training_description }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Location</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_location" value="{{ $trainings_info_4->training_location }}"> {{ $trainings_info_4->training_location }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Cost</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_cost" value="{{ $trainings_info_4->training_cost }}"> {{ $trainings_info_4->training_cost }}</textarea>
                    </div>
                    <div style="width: 100%">
                        <label>Structure</label><br>
                        <textarea style="width: 100%; resize: auto;" name="training_structure" value="{{ $trainings_info_4->training_structure }}">{{ $trainings_info_4->training_structure }}</textarea>
                    </div>
                    <button type="submit">Save</button>
                </form>
            </div>

        </div>

       
    </div>
    
</div>


@endsection

@push('scripts')
<script src="{{ asset('vendor/webkul/admin/assets/js/tinyMCE/tinymce.min.js') }}"></script>

<script>
    $(document).ready(function () {
        tinymce.init({
            selector: 'textarea#tiny',
            height: 200,
            width: "100%",
            plugins: 'image imagetools media wordcount save fullscreen code',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
        });
        tinyMCE.activeEditor.setContent('<span>some</span> html');
        
    });
</script>


@endpush