<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;

class TicketsList extends Component
{
    public $search;
    public $tickets = [];
    public $selectedId = 1;

    public function render()
    {
        $this->refreshTickets();
        return view('livewire.tickets-list');
    }

    public function refreshTickets(){
       $query = Ticket::query();

        if(!empty($this->search)){
            $query =  $query->where('subject', 'like', '%'.$this->search.'%');
        }

       $this->tickets = $query->get();
    }

    public function onTicketSelected($ticketId){
        $this->selectedId = $ticketId;
    }
}
