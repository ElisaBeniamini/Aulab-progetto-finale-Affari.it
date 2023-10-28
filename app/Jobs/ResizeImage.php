<?php

namespace App\Jobs;

use App\Models\Image as ModelsImage;

use Spatie\Image\Image;
use Spatie\Image\Manipulations;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $w; //larghezza
    private $h; //altezza
    private $fileName; //nome del file
    private $path; // dove prendere l img
    /**
     * Create a new job instance.
     * @return void
     */

    public function __construct($filePath, $w, $h) //filepath contiene sia il nome del file che il percorso  per prenderlo
    {
        $this->path = dirname($filePath); //directory name, recupera la parte iniziale di un path;
        $this->fileName = basename($filePath); //recupera il nome esatto del file
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     * @return void
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName; // path da cui prendere l immagine 
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName; // path dove salvare l immagine.

        $croppedImage = Image::load($srcPath)  // croppare effettivamente l img
            ->crop(Manipulations::CROP_CENTER, $w, $h)
            ->save($destPath);
    }
}
