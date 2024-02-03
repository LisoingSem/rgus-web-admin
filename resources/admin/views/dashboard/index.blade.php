@extends('admin::layouts.body')
@include('admin::components.meta', [
    'title' => config('dummy.admin.lables.dashboard.text') ,
])

@section('content')
    <h1>Dashboard</h1>
@endsection
