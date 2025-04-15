@extends('backend.master')

@section('title', '403 - Forbidden')


@section('contant')

<div class="ht-100v d-flex align-items-center justify-content-center" style="background: #f8f9fa;">
    <div class="card shadow-lg p-4 text-center" style="max-width: 500px; border-radius: 12px;">
        <div class="card-body">
            <h1 class="text-danger" style="font-size: 100px; font-weight: 700; text-shadow: 3px 3px 10px rgba(0,0,0,0.2);">
                403<span class="text-dark">!</span>
            </h1>
            <h5 class="text-dark mt-3">Access Denied</h5>
            <p class="text-muted">
                You do not have permission to access this page.<br>
                Please contact the administrator if you believe this is an error.
            </p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">
                <i class="fa fa-home"></i> Go to Dashboard
            </a>
        </div>
    </div>
</div>

@endsection

