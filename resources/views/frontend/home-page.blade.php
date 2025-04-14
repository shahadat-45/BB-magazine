@extends('frontend.master')
@push('css')
    <style>
        .bg-opacity-30{
            --tw-bg-opacity: .3;
        }
        .bg-opacity-50{
            --tw-bg-opacity: .5;
        }
        .bg-black {
            background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1));
        }
    </style>
@endpush
@section('content')
@include('frontend.partials.hero-section')
@include('frontend.partials.latest-updates')
@include('frontend.partials.blog-section')
@include('frontend.partials.news-letter')
@include('frontend.partials.article-section')
@include('frontend.partials.gallery-section')    
@endsection