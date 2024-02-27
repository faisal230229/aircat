@extends('layouts.app')

@push('extra-css')
    <style>
        #content > ul{
            list-style: disc !important;
            margin-left: 2rem;
        }
    </style>
@endpush

@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('meta_index', $page->index)
@section('meta_follow', $page->follow)

@section('content')
    @include('partials.secondary-header')

    <section class="py-16">
        <div class="container mx-auto">
            <article class="w-full">
                <h2 class="text-4xl text-secondary font-extrabold uppercase mb-12">{{ $page->title }}</h2>
                <div class="space-y-2" id="content">
                    {!! $page->content !!}
                </div>
            </article>
        </div>
    </section>
@endsection
