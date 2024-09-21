@extends('layout.app')

@section('title',trans('Corporate-services'))
@section('page',trans('Edit'))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form class="form" method="post" enctype="multipart/form-data" action="{{route('corporatemiddle.update',encryptor('encrypt',$middle->id))}}">
                        @csrf
                        @method('Patch')
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Title<i class="text-danger">*</i></label>
                                    <input type="text" id="" class="form-control" value="{{ old('title',$middle->title)}}" name="title" placeholder="Enter Title">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Icon<i class="text-danger">*</i></label>
                                    <input type="text" id="" class="form-control" value="{{ old('icon',$middle->icon)}}" name="icon" placeholder="Enter Icon Class">
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Description <i class="text-danger">*</i></label>
                                    <textarea name="description" id="" class="form-control">{{ old('description',$middle->description) }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
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
