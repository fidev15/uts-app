@extends('layouts.app')

@section('title', 'Data Profile')

@section('heading', 'Data Profile')

@section('content')

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Data Profile</h1>
    </div>

<div class="card">
    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <!-- Display errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Display success message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Display profile form -->
            <form method="POST" action="{{ route('profile.change-avatar') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name and Email fields are always readonly but still present -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $profile->name ?? '' }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ $profile->email ?? '' }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="avatar" class="form-label">Foto Profil</label>
                    <input type="file" name="avatar" class="form-control" id="avatar">
                    
                    @if (isset($profile->avatar) && $profile->avatar)
                        <img src="{{ asset('storage/uploads/' . $profile->avatar) }}" alt="Profile Avatar" style="display: block; margin-top: 12px; max-width: 200px;">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
