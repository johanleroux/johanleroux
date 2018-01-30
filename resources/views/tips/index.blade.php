@extends('_layout')
@section('content')
    <tips-index 
        algolia-id="{{ config('scout.algolia.id') }}" 
        algolia-key="{{ config('scout.algolia.key') }}">
    </tips-index>
@endsection
<script src="https://platform.twitter.com/widgets.js"></script>