@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-2">
                <div class="col ps-4">
                    <h1 class="display-6 mb-3">
                        <i class="bi bi-calendar-plus"></i> Create Semester
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url()->previous()}}">Semesters</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Semester</li>
                        </ol>
                    </nav>
                    @include('session-messages')

                    <div class="row mt-4">
                        <div class="col-5">
                            <div class="p-3 border bg-light shadow-sm">
                                <form action="{{route('semester.create')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="semester_name" class="form-label">Semester Name</label>
                                        <input type="text" class="form-control" id="semester_name" name="semester_name" placeholder="Semester Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="session_id" class="form-label">Session</label>
                                        <select class="form-select" id="session_id" name="session_id" required>
                                            @foreach($sessions as $session)
                                                <option value="{{ $session->id }}">{{ $session->session_name }}</option>
                                            @endforeach
                                        </select>
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