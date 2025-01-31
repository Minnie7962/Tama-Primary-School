@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-2">
                <div class="col ps-4">
                    <h1 class="display-6 mb-3">
                        <i class="bi bi-calendar-plus"></i> Create Session
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url()->previous()}}">Sessions</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Session</li>
                        </ol>
                    </nav>
                    @include('session-messages')

                    <div class="row mt-4">
                        <div class="col-5">
                            <div class="p-3 border bg-light shadow-sm">
                                <form action="{{route('session.store')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="session_name" class="form-label">Session Name</label ```blade
                                        <input type="text" class="form-control" id="session_name" name="session_name" placeholder="Session Name" required>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="btn btn-outline-primary"><i class="bi bi-check2"></i> Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>
@endsection