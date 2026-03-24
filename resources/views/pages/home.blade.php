@extends('layouts.app')

@section('content')
    @include('partials.header')
    @include('partials.hero')
    @include('partials.intro')
    @include('partials.info')
    @include('partials.vision')
    @include('partials.research')
    @include('partials.outcomes')
    @include('partials.apply')
    @include('partials.team')
    @include('partials.mentors')
    @include('partials.faq')
    @include('partials.about-acdf')
    @include('partials.footer')
@endsection

@push('scripts')
    <script>
        window.visionContent = @json($visionModalContent);
    </script>
@endpush
