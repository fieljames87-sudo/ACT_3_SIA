@extends('layouts.app')

@section('content')

<h2>Edit Energy Activity</h2>

<form method="POST" action="{{ route('energy.update', $item->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="activity_name" value="{{ $item->activity_name }}" class="input" required><br><br>

    <textarea name="description" class="input" required>{{ $item->description }}</textarea><br><br>

    <input type="text" name="energy_type" value="{{ $item->energy_type }}" class="input" required><br><br>

    <input type="number" name="duration_minutes" value="{{ $item->duration_minutes }}" class="input" required><br><br>

    <input type="text" name="best_time" value="{{ $item->best_time }}" class="input" required><br><br>

    <button class="btn">Update</button>

</form>

@endsection