@extends('layouts.app')

@section('content')

<h2>⚡ Energy Booster Activities</h2>

<div style="text-align:center; margin-bottom:20px;">
    <a href="{{ route('energy.create') }}" class="btn">+ Add Activity</a>
</div>

<div class="card-container">

@foreach($energy as $item)

<a href="{{ route('energy.show', $item->id) }}">
    <div class="card">
        <h3>{{ $item->activity_name }}</h3>
        <p><strong>{{ $item->energy_type }}</strong></p>
        <p>{{ $item->best_time }}</p>
    </div>
</a>

<!-- EDIT BUTTON -->
    <a href="{{ route('energy.edit', $item->id) }}" class="btn">Edit</a>

    <!-- DELETE BUTTON -->
    <form action="{{ route('energy.destroy', $item->id) }}" method="POST" style="margin-top:10px;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button>
    </form>

@endforeach

</div>

@endsection