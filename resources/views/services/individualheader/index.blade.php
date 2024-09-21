@extends('layout.app')
@section('title',trans('Services'))
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
                    <h3>Individual-Services-Header</h3>
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
                        Services
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
                        <a class="btn btn-primary" href="{{route('individualheader.create')}}"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th scope="col">{{__('#SL')}}</th>
                        <th scope="col">{{__('Title')}}</th>
                        <th scope="col">{{__('Description')}}</th>
                        <th scope="col">{{__('Status')}}</th>
                        <th class="white-space-nowrap">{{__('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($header as $p)
                    <tr>
                        <th scope="row">{{ ++$loop->index }}</th>
                        <td>{{$p->title}}</td>
                        <td>{{$p->description}}</td>
                        <td>@if($p->status == 1) {{__('Show') }} @else {{__('Hide') }} @endif</td>
                        <!-- or <td>{{ $p->status == 1?"Active":"Inactive" }}</td>-->
                        <td class="white-space-nowrap">
                            {{-- <a href="{{route('user.edit',encryptor('encrypt',$p->id))}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                <i class="fa fa-trash"></i>
                            </a>
                            <form id="form{{$p->id}}" action="{{route('user.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                @csrf
                                @method('delete')
                            </form> --}}
                            <div class="btn-group" role="group">   
                                <a href="{{route('individualheader.edit',encryptor('encrypt',$p->id))}}">
                                    <i class="fa fa-edit m-1"></i></a>
                                {{-- <form id="deleteForm_{{ $p->id }}" action="{{ route('user.destroy', encryptor('encrypt', $p->id)) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="javascript:void(0);" onclick="confirmDelete('{{ $p->id }}')">
                                        <i class="fa fa-trash m-1"></i>
                                    </a>
                                </form> --}}
                            </div>
                       </td>
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
