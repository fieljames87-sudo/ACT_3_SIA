@extends('layouts.app')

@section('content')

<h2>Add Energy Activity</h2>

<form method="POST" action="{{ route('energy.store') }}">
    @csrf

<input type="text" name="activity_name" placeholder="Activity Name" class="input"><br><br>

<textarea name="description" placeholder="Description" class="input"></textarea><br><br>

<input type="text" name="energy_type" placeholder="Energy Type" class="input"><br><br>

<input type="number" name="duration_minutes" placeholder="Duration" class="input"><br><br>

<input type="text" name="best_time" placeholder="Best Time" class="input"><br><br>

    <button class="btn">Save</button>
</form>

@endsection