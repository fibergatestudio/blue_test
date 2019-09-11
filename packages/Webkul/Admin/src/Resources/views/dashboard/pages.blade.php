@extends('admin::layouts.master')

@section('page_title')
    Pages
@stop

@section('content-wrapper')
<div class="content full-page dashboard">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>Pages</h1>
            </div>
            <div class="page-action">
                <div class="export-import" @click="showModal('downloadDataGrid')">
                    <i class="export-icon"></i>
                    <span >
                        {{ __('admin::app.export.export') }}
                    </span>
                </div>

                <a href="{{ route('admin.dashboard.create-page') }}" class="btn btn-lg btn-primary">
                    Add Page
                </a>
            </div>
        </div>

        <div class="page-content">
            <!-- @inject('customerGrid','Webkul\Admin\DataGrids\CustomerDataGrid')

            {!! $customerGrid->render() !!} -->
            <div class="table">
                <div class="grid-container">
                    <table class="table">
                        <thead style="text-align: center;">
                            <tr class="grid_head">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody style="text-align: center;">
                            @foreach($pages as $page)
                                <tr>

                                    <td>{{ $page->id }}</td>


                                    <td>{{ $page->title }}</td>

                                    <td>{{ $page->slug }}</td>
                                    <td>                                             

                                    <a href="{{ url('admin/pages/editPage/'.$page->id) }}"><button class="btn btn-success">Edit Page</button></a>
                                    <a href="{{ url('admin/pages/detelePage/'.$page->id) }}"><button class="btn btn-success">Delete Page</button></a>
                                         <!-- <from action="{{ url('admin/pages/detelePage/'.$page->id) }}" method="POST">
                                        @csrf()
                                            <input type="hidden" name="page_id" value="{{ $page->id }}">
                                            <button type="submit" class="btn btn-danger">Delete Page</button>
                                        </form> -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <modal id="downloadDataGrid" :is-open="modalIds.downloadDataGrid">
        <h3 slot="header">{{ __('admin::app.export.download') }}</h3>
        <div slot="body">
            <export-form></export-form>
        </div>
    </modal>

@stop

@push('scripts')
    @include('admin::export.export', ['gridName' => $customerGrid])
@endpush