<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Confirm extends Component
{
    public function render()
    {
        $settings = Cache::rememberForever('settings', function(){
            return Setting::pluck('value', 'key')->toArray();
        });
        return view('livewire.confirm', [
            'settings' => $settings,
        ]);
    }
}
