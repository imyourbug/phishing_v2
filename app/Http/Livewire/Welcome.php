<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        $settings = Cache::rememberForever('settings', function () {
            return Setting::pluck('value', 'key')->toArray();
        });

        $dialCodes = Cache::rememberForever('dial-codes', function () {
            $path = public_path('/phone-dial-codes.json');
            $jsonString = file_get_contents($path);
            return json_decode($jsonString, true);
        });
        return view('livewire.welcome', [
            'settings' => $settings,
            'dialCodes' => $dialCodes
        ]);
    }
}
