@extends('layout.app')
@section('title',trans('Contact'))
@section('page',trans('List'))
@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>User Message List</h3>
                    {{-- <a href="{{ route('employees') }}" class="d-inline-block">
                        <h3>Employees</h3>
                    </a> --}}
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                    aria-label="breadcrumb"
                    class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Contact
                    </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        {{-- <a class="btn btn-primary" href="{{route('message.create')}}"><i class="fa fa-plus"></i></a> --}}
                    </div>
                </div>
                
            </div>
            <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th scope="col">{{__('#SL')}}</th>
                        <th scope="col">{{__('Name')}}</th>
                        <th scope="col">{{__('Email')}}</th>
                        <th scope="col">{{__('Contact No')}}</th>
                        <th scope="col">{{__('Message')}}</th>
                        {{-- <th class="white-space-nowrap">{{__('Action') }}</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse($message as $p)
                    <tr>
                        <th scope="row">{{ ++$loop->index }}</th>
                        <td>{{$p->name}}</td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->contact}}</td>
                        <td>{{$p->message}}</td>
                        {{-- <td class="white-space-nowrap">
                            <div class="btn-group" role="group">   
                                <a href="{{route('message.edit',encryptor('encrypt',$p->id))}}">
                                    <i class="fa fa-edit m-1"></i></a>
                                <form id="deleteForm_{{ $p->id }}" action="{{ route('user.destroy', encryptor('encrypt', $p->id)) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="javascript:void(0);" onclick="confirmDelete('{{ $p->id }}')">
                                        <i class="fa fa-trash m-1"></i>
                                    </a>
                                </form>
                            </div>
                       </td> --}}
                    </tr>
                    @empty
                    <tr>
                        <th colspan="8" class="text-center">No Data Found</th>
                    </tr>
                    @endforelse
                </tbody>
            </table>
               {{-- <div class="text-end">
                    {{ $data->links() }}
                </div> --}}
            </div>
        </div>
    </section>
</div>
<script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this item?')) {
            document.getElementById('deleteForm_' + id).submit();
        }
    }
</script>
@endsection
