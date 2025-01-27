@extends('layout.app')

@section('title',trans('Users'))
@section('page',trans('Create'))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form class="form" method="post" enctype="multipart/form-data" action="{{route('user.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="roleId">Role  <i class="text-danger">*</i></label>
                                    <select class="form-control" name="roleId" id="roleId">
                                        <option value="">Select Role</option>
                                        @forelse($role as $r)
                                            <option value="{{$r->id}}" {{ old('roleId')==$r->id?"selected":""}}> {{ $r->name}}</option>
                                        @empty
                                            <option value="">No Role found</option>
                                        @endforelse
                                    </select>
                                    @if($errors->has('roleId'))
                                        <span class="text-danger"> {{ $errors->first('roleId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="userName">Name<i class="text-danger">*</i></label>
                                    <input type="text" id="userName" class="form-control" value="{{ old('userName')}}" name="userName" placeholder="Enter name">
                                    @if($errors->has('userName'))
                                        <span class="text-danger"> {{ $errors->first('userName') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="EmailAddress">Email <i class="text-danger">*</i></label>
                                    <input type="text" id="EmailAddress" class="form-control" value="{{ old('EmailAddress')}}" name="EmailAddress" placeholder="john@xyz.com">
                                    @if($errors->has('EmailAddress'))
                                        <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select id="status" class="form-control" name="status">
                                        <option value="1" @if(old('status',1)==1) selected @endif>Active</option>
                                        <option value="0" @if(old('status',1)==0) selected @endif>Inactive</option>
                                    </select>
                                    @if($errors->has('status'))
                                        <span class="text-danger"> {{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="password">Password <i class="text-danger">*</i></label>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Type your password">
                                        @if($errors->has('password'))
                                            <span class="text-danger"> {{ $errors->first('password') }}</span>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary px-5 py-2 my-1">Save</button>
                                </div>
                            </div>
                                <div class="col-md-6 col-12">
                                     <div class="form-group">
                                    <label for="fullAccess">Full Access</label>
                                    <select id="fullAccess" class="form-control" name="fullAccess">
                                        <option value="0" @if(old('fullAccess')==0) selected @endif>No</option>
                                        <option value="1" @if(old('fullAccess')==1) selected @endif>Yes</option>
                                    </select>
                                    @if($errors->has('fullAccess'))
                                        <span class="text-danger"> {{ $errors->first('fullAccess') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="contactNumber">Contact Number<i class="text-danger">*</i></label>
                                    <input type="text" id="contactNumber" class="form-control" value="{{ old('contactNumber')}}" name="contactNumber" placeholder="01XXXXXXXXXXX" maxlength="13">
                                    @if($errors->has('contactNumber'))
                                        <span class="text-danger"> {{ $errors->first('contactNumber') }}</span>
                                    @endif
                                </div>
                                {{-- <div class="form-group">
                                    <label for="employee_id">Employee ID<i class="text-danger">*</i></label>
                                    <input type="text" id="employee_id" class="form-control" value="{{ old('employee_id')}}" name="employee_id" placeholder="EMP-242010" maxlength="12">
                                    @if($errors->has('employee_id'))
                                        <span class="text-danger"> {{ $errors->first('employee_id') }}</span>
                                    @endif
                                </div> --}}
                                <div class="form-group">
                                    <label for="designation">Designation<i class="text-danger">*</i></label>
                                    <input type="text" id="designation" class="form-control" value="{{ old('designation')}}" name="designation" placeholder="Sales Officer">
                                    @if($errors->has('designation'))
                                        <span class="text-danger"> {{ $errors->first('designation') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" class="form-control" placeholder="Image" name="image">
                                    @if($errors->has('image'))
                                        <span class="text-danger"> {{ $errors->first('image') }}</span>
                                    @endif
                                </div>
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
