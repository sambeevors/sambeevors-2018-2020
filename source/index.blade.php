@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}

@endpush

@section('title', 'Example Page')

{{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
@section('body')

    <div class="container mx-auto leading-normal">
        <div class="flex p-4">
            <div class="flex-1">
                <h2 class="text-3xl">This is a heading</h2>
            </div>
        </div>
        <div class="lg:flex p-4">
            <div class="flex-1 lg:mr-2 mb-4 lg:mb-0">

                @include('_partials.placeholder-text', ['paragraphs' => 2])

            </div>
            <div class="flex-1">

                @include('_partials.placeholder-image', ['width' => 540, 'height' => 300, 'addP' => true])

            </div>
        </div>
        <div class="flex p-4">
            <div class="flex-1">
                <h3 class="text-2xl mb-4">This is a smaller heading</h3>

                @include('_partials.placeholder-text', ['paragraphs' => 2])

            </div>
        </div>
        <div class="lg:flex p-4 justify-between">
            <div class="flex-1 bg-grey-lighter p-6 mx-auto mb-6 lg:mr-4 w-full lg:max-w-sm">
                <div class="js-box">

                    @include('_partials/placeholder-image', ['width' => 325, 'height' => 175, 'addP' => true, 'class' => 'w-full h-auto'])
                    <h4 class="my-4 text-xl">Box title</h4>
                    @include('_partials.placeholder-text', ['paragraphs' => 1])

                </div>
            </div>
            <div class="flex-1 bg-grey-lighter p-6 mx-auto mb-6 lg:mr-4 w-full lg:max-w-sm">
                <div class="js-box">

                    @include('_partials/placeholder-image', ['width' => 325, 'height' => 175, 'addP' => true, 'class' => 'w-full h-auto'])
                    <h4 class="my-4 text-xl">Box title</h4>
                    @include('_partials.placeholder-text', ['paragraphs' => 1])

                </div>
            </div>
            <div class="flex-1 bg-grey-lighter p-6 mx-auto mb-6 w-full lg:max-w-sm">
                <div class="js-box">

                    @include('_partials/placeholder-image', ['width' => 325, 'height' => 175, 'addP' => true, 'class' => 'w-full h-auto'])
                    <h4 class="my-4 text-xl">Box title</h4>
                    @include('_partials.placeholder-text', ['paragraphs' => 1])

                </div>
            </div>
        </div>
    </div>

@endsection
