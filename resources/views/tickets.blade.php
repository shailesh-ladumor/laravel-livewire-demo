@extends('layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">Tickets</h5>
        <div class="card-body">
            <div class="row">
                <livewire:tickets-list>
            </div>
        </div>
    </div>
@endsection
