@extends('layouts.app')


@section('content')


@guest
<div>Not Available</div>

@else

    <div class="container col-lg-12 margin-tb">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
        </div>
    </div>

   <div class="container">

        <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Bank Name</th>
            <th>Bank Type</th>
            <th>Branch</th>
        </tr>
        @foreach ($bankRegistries as $bankRegistry)
        <tr>
            <td><a class="nav-item" href="{{route('bank_registries.edit', $bankRegistry -> id)}}">{{$bankRegistry->id}}</a></td>
            <td>{{$bankRegistry->bank_name}}</td>
            <td>{{$bankRegistry->banktype['bank_type']}}</td>
            <td>{{$bankRegistry->branch}}</td>
        @endforeach

    
    
    

</div>
@endguest


@endsection