<div class="col-lg-6">
    <div class="input-group w-25">
        <input wire:model="search" type="text" class="form-control" id="txtSearch" placeholder="Search"/>
     </div>
     <div class="tickets-list">
             @foreach ($tickets as $ticket)
                 <div wire:click="onTicketSelected({{$ticket->id}})" class="ticket {{ ($selectedId == $ticket->id) ? 'bg-primary': '' }}">
                     <h5 class="card-title">{{ $ticket->subject }}</h5>
                     <p class="card-text">{{ $ticket->description }}</p>
                 </div>
             @endforeach
     </div>
     <div class="mt-4">
         {{ $tickets->links() }}
     </div>
 </div>
 <div class="col-lg-6">
 </div>
