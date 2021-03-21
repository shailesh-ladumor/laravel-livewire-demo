<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ticket;

class TicketsList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    // public $tickets = [];
    public $selectedId = 1;

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
       $tickets = $this->refreshTickets();
        return view('livewire.tickets-list')->with('tickets', $tickets);
    }

    public function refreshTickets(){
       $query = Ticket::query();

        if(!empty($this->search)){
            $query =  $query->where('subject', 'like', '%'.$this->search.'%');
        }

       return $query->paginate(10);
    }

    public function onTicketSelected($ticketId){
        $this->selectedId = $ticketId;
    }
}
