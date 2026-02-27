@extends('layouts.default')
@push('title', get_phrase('Home'))
@push('meta')@endpush
@push('css')@endpush
@section('content')
    @include('components.home_made_by_builder.hero_banner')
    @include('components.home_made_by_builder.features')
    @include('components.home_made_by_builder.category')
    @include('components.home_made_by_builder.featured_courses')
    @include('components.home_made_by_builder.about_us')
    @include('components.home_made_by_builder.testimonial')
    @include('components.home_made_by_builder.blog')
@endsection
