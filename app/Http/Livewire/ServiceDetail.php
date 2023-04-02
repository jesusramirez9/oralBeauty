<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ServiceDetail extends Component
{
    public $page;
    protected $queryString = ['page'];

    public function render()
    {
        $allServices = json_decode(file_get_contents(storage_path() . "/app/public/services.json"), true);
        $itemsPerPage = 9;
        $pageActive = $this->page ? $this->page : 1;
        $totalPage = intdiv(count($allServices), $itemsPerPage) + (count($allServices) % $itemsPerPage == 0 ? 0 : 1);
        $offset = ($pageActive - 1) * $itemsPerPage;
        $services = array_slice($allServices, $offset, $itemsPerPage);

        return view('livewire.service-detail', compact('services', 'totalPage', 'pageActive'));
    }
}
