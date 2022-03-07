@extends('layouts.master')
@section('content')



<div class="col-sm-10 offset-1 mt-5">

    <div class="card card-widget widget-user card-view">

<div class="widget-user-header text-white" style="background-color: #17a2b8;">
<h3 class="widget-user-username"> {{$user->name}}</h3>
</div>
<div class="widget-user-image">
<!-- <img class="img-circle elevation-2" src="{{asset('/images/gym-logo.jpg')}}" alt="User Avatar"> -->
<img src="{{asset('/images/users/'.$user->avatar_image)}}" class="img-thumbnail"/>
</div>
<div class="card-footer">
    
<div class="row">
<div class="col-sm-4">
<div class="description-block">
<h5 class="description-header">ID</h5>
<span class="description-text">{{$user->id}}</span>
</div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header">ID</h5>
                        <span class="description-text">{{$user->id}}</span>
                    </div>

                </div>
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">National Id</h5>
                        <span class="description-text"> {{$user->national_id}}</span>

                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header">Role</h5>
                        <span class="description-text">{{$user->role}}</span>
                    </div>

                </div>
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">Email</h5>
                        <span class="description-text"> {{$user->email}}</span>

                    </div>

                </div>
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">Email Verified At</h5>
                        <span class="description-text"> {{$user->email_verified_at}}</span>

                    </div>

                </div>


                <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header">Created At</h5>
                        <span class="description-text">{{$user->created_at}}</span>
                    </div>

                </div>



            </div>

        </div>
    </div>

</div>

@endsection