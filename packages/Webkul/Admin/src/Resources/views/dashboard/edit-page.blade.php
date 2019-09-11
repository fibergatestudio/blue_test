@extends('admin::layouts.master')

@section('page_title')
    Create Page
@stop

@section('content-wrapper')
<div class="content full-page dashboard">
    <div class="content">
        <form method="POST" action="{{ url('admin/pages/editPage/'.$page_id.'/apply') }}" @submit.prevent="onSubmit">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/admin/dashboard') }}';"></i>

                        {{ __('Pages') }}

                        {{ Config::get('carrier.social.facebook.url') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('Save Page Edit') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
 
                <div class="form-container">
                    @csrf()

                    <input type="hidden" name="page_id" value="{{ $page_id }}">

                    <div class="control-group" :class="[errors.has('page_title') ? 'has-error' : '']">
                        <label for="first_name" class="required">{{ __('Page Title') }}</label>
                        <input type="text" class="control" name="page_title" v-validate="'required'" value="{{ $page->title }}" >
                    </div>

                    <div class="control-group" :class="[errors.has('page_slug') ? 'has-error' : '']">
                        <label for="last_name" class="required">{{ __('Page URL') }}</label>
                        <input type="text" class="control" name="page_slug" v-validate="'required'" value="{{ $page->slug }}" >
                        <span style="display: block !important;" class="control-error">{!! Session::get("msg", '') !!}</span>
                    </div>

                    <textarea id="tiny" class="control" name="page_body" rows="5" value="{{ $page->body }}"></textarea>
                    <br>

                    <div class="control-group">
                        <label for="first_name" class="required">{{ __('Meta Title') }}</label>
                        <input type="text" class="control" name="meta_title" v-validate="'required'" value="{{ $page->meta_title }}" >
                    </div>
                    <div class="control-group">
                        <label for="first_name" class="required">{{ __('Meta Description') }}</label>
                        <!-- <input type="text" class="control" name="meta_descr" v-validate="'required'" value="" > -->
                        <textarea class="control" name="meta_descr" rows="3" value="{{ $page->meta_descr }}"></textarea>
                    </div>
                    <div class="control-group">
                        <label for="first_name" class="required">{{ __('Meta Keywords') }}</label>
                        <input type="text" class="control" name="meta_keys" v-validate="'required'" value="{{ $page->meta_keys }}" >
                    </div>

                    

                </div>
            </div>
        </form>
    </div>
</div>
@stop

@push('scripts')
<script src="{{ asset('vendor/webkul/admin/assets/js/tinyMCE/tinymce.min.js') }}"></script>

<script>
    $(document).ready(function () {
        tinymce.init({
            selector: 'textarea#tiny',
            height: 200,
            width: "60%",
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