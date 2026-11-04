@extends('layouts.app')


@section('content')
    <h1>Page not found</h1>
    <p>It may have been removed, or the address may be wrong.</p>
    <a href="{{ route('movies.index') }}">Back to the list</a>
@endsection
