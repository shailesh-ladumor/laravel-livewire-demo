@extends('layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header bg-primary">Tickets</h5>
        <div class="card-body">
            <div class="row">
                <livewire:tickets-list>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">
                Refresh
            </button>
        </div>
    </div>
@endsection
