@extends('layouts.simple')

@section('body')

    <div class="container small">

        <div class="my-s">
            @include('entities.breadcrumbs', ['crumbs' => [
                '/hubs' => [
                    'text' => trans('entities.shelves'),
                    'icon' => 'bookshelf',
                ],
                '/create-hub' => [
                    'text' => trans('entities.shelves_create'),
                    'icon' => 'add',
                ]
            ]])
        </div>

        <main class="card content-wrap">
            <h1 class="list-heading">{{ trans('entities.shelves_create') }}</h1>
            <form action="{{ url("/hubs") }}" method="POST" enctype="multipart/form-data">
                @include('shelves.parts.form', ['shelf' => null, 'books' => $books])
            </form>
        </main>

    </div>

@stop