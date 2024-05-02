<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpMqtt\Client\Facades\MQTT;

class ProductController extends Controller
{

    ##--------------------------------------SERVICES
    public function services()
    {
        $serv = Product::where('status', 0)->get();
        $serv2 = product::where('status', 1)->get();
        $serv3 = product::where('status', 2)->get();
        return view('theme.services', compact('serv', 'serv2', 'serv3'));
    }

    ##--------------------------------------PARKING
    public function parking()
    {

        $mqtt = MQTT::connection();
        $result = 0;
        $mqtt->subscribe('esp32/pkprojtp', function (string $topic, string $message) use ($mqtt, &$result) {
            $result = $message;
            $mqtt->interrupt();
        }, 0);
        $mqtt->loop(true, true);
        $cars = json_decode($result, true);

        // dd($cars);

        DB::table('products')->where('name', 'Partition 1')->update([
            'mqtt' => $cars['car1'],


        ]);
        DB::table('products')->where('name', 'Partition 2')->update([
            'mqtt' => $cars['car2'],


        ]);
        DB::table('products')->where('name', 'Partition 3')->update([
            'mqtt' => $cars['car3'],


        ]);
        DB::table('products')->where('name', 'Partition 4')->update([
            'mqtt' => $cars['car4'],


        ]);
        DB::table('products')->where('name', 'Partition 5')->update([
            'mqtt' => $cars['car5'],


        ]);

        $serv4 = Product::where('status', 3)->get();
        return view('theme.parking', compact('serv4'));
    }
}
