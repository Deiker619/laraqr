<?php


namespace App\Livewire\Qr;

use BaconQrCode\Renderer\GDLibRenderer;
use BaconQrCode\Writer;
use Livewire\Component;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;

class ShowQr extends Component
{

    public function render()
    {
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );
        $writer = new Writer($renderer);
        $writer->writeFile('Hello World!', 'qrcode.png');

        dd($writer);
        return view('livewire.qr.show-qr');
    }
}
