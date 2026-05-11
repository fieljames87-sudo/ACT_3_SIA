@extends('layouts.app')

@section('content')

<h2>{{ $item->activity_name }}</h2>

<div class="card">
    <p><strong>Description:</strong> {{ $item->description }}</p>
    <p><strong>Type:</strong> {{ $item->energy_type }}</p>
    <p><strong>Duration:</strong> {{ $item->duration_minutes }} mins</p>
    <p><strong>Best Time:</strong> {{ $item->best_time }}</p>
</div>

<a href="{{ route('energy.index') }}" class="btn">Back</a>

@endsection