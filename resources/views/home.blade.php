@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
          Student dan Lecturer yang sudah terdaftar 
        </div>
    <div>
    	<li class="list-group-items">The Number of Student : {{$students}}</li>
    	<li class="list-group-items">The Number of Lecturer : {{$lecturer}}</li>

</div>
@endsection
@section('scripts')
@parent

@endsection