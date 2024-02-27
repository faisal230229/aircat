@extends('layouts.app')

@section('meta_title', $meta?->meta_title)
@section('meta_description', $meta?->meta_description)
@section('meta_keywords', $meta?->meta_keywords)
@section('meta_index', $meta?->index)
@section('meta_follow', $meta?->follow)

@section('content')
    @include('partials.secondary-header')

    <section class="py-16">
        <div class="container mx-auto">
            <div class="space-y-6 text-center">
                <h2 class="font-extrabold text-4xl text-secondary">COMPANY MILESTONE</h2>
            </div>
            <div class="grid grid-cols-9 mt-16">
                <div class="col-span-4">
                    @foreach($firstHalf as $milestone)
                        <div class="w-full bg-neutral-gray h-52 lg:h-56 rounded-lg p-4">
                            <h6 class="font-extrabold text-3xl text-black">{{ $milestone->milestone_year }}</h6>
                            <p>{{ $milestone->content }}</p>
                        </div>
                        <div class="w-full h-52 lg:h-56">

                        </div>
                    @endforeach
                </div>
                <div class="col-span-1">
                    @for($i = 0; $i < $count; $i++)
                        <div class="h-52 lg:h-56 relative mx-auto border border-dashed border-neutral-accent w-max">
                            <div class="absolute inset-1/2 -translate-x-1/2 p-3 bg-[rgba(0,112,192,0.2)] rounded-full flex items-center justify-center">
                                <div class="p-1.5 bg-primary rounded-full">

                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="col-span-4">
                    @foreach($secondHalf as $milestone)
                        <div class="w-full h-52 lg:h-56">

                        </div>
                        <div class="w-full bg-neutral-gray h-52 lg:h-56 rounded-lg p-4 space-y-4">
                            <h6 class="font-extrabold text-3xl text-black">{{ $milestone->milestone_year }}</h6>
                            <p>{{ $milestone->content }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
