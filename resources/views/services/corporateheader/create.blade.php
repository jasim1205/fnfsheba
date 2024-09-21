@extends('layout.app')

@section('title',trans('Corporate-services'))
@section('page',trans('Create'))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form class="form" method="post" enctype="multipart/form-data" action="{{route('corporateheader.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Title<i class="text-danger">*</i></label>
                                    <input type="text" id="" class="form-control" value="{{ old('title')}}" name="title" placeholder="Enter Title" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select id="status" class="form-control" name="status">
                                        <option value="1" >Show</option>
                                        <option value="0" >Hide</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Description <i class="text-danger">*</i></label>
                                    <textarea name="description" id="" class="form-control">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary px-5 py-2 my-1">Save</button>
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
