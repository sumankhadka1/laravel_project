@extends('admin.shared.layout')

@section('title','Edit Customer')

@section('content')
<div class="page-header">
<h3><i class="glyphicon glyphicon-pencil"></i> Edit Customer</h3>

{!!Form::open(['url'=>'admin/customers/'.$customer->id,'method'=>'PUT','enctype'=>'multipart/form-data'])!!}
<div class="pull-right">
    <button type="submit" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i></button>
    {{link_to('admin/customers','Back',['class'=>'btn btn-danger'])}}
</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
<div class="col-md-3">
    <div class="form-group">
    <label>First Name</label>
    {{Form::text('first_name',$customer->first_name,['class'=>'form-control'])}}
    </div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>Last Name</label>
{{Form::text('last_name',$customer->last_name,['class'=>'form-control'])}}</div>
</div>

<div class="col-md-3">
<div class="form-group">
    <label>Customer Group</label>
    {{Form::text('customer_group_id',$customer->customer_group_id,['class'=>'form-control'])}}
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>Email</label>
{{Form::text('email',$customer->email,['class'=>'form-control'])}}
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>Contact Number</label>
{{Form::text('contact_no',$customer->contact_no,['class'=>'form-control'])}}
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Address</label>
{{Form::text('address',$customer->address,['class'=>'form-control'])}}
</div>
</div>

<div class="col-md-3">
<div class="form-inline">
    <label>Status</label>
    <label>{{Form::checkbox('status','',$customer->status)}} Is Active</label>
</div>
</div>
{{Form::token()}}
{!!Form::close()!!}

@endsection
