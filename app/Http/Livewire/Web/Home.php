<?php

namespace App\Http\Livewire\Web;

use App\Models\scales;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
// use Livewire\WithPagination;

class Home extends Component
{
    // use WithPagination;
    // public function paginationView()
    // {
    //     return 'custom-pagination-links-view';
    // }
    public function logout()
    {
        Auth::logout();
        return redirect('/project/scale');
    }
    public function render()
    {
        $berat = DB::table('scales')->where('code_tools', auth()->user()->tool_code)->get();
        $weight = [];
        $height = [];
        $date = [];
        foreach ($berat as $key => $value) {
            $weight[] = $value->weight;
            $height[] = $value->height;
            $date[] = $value->created_at;
        }
        return view('livewire.web.home', [
            'scales' => DB::table('scales')->where('code_tools', auth()->user()->tool_code)->orderBy('created_at', 'desc')->paginate(15),
            'weight' => $weight,
            'height' => $height,
            'date'   => $date,
        ])
            ->layout('layouts.app', ['tittle' => 'Home IOT']);
    }
}
