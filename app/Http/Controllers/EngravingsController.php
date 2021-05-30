<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engraving;
use Imagick;
use ImagickDraw;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class EngravingsController extends Controller
{
    public function index(Engraving $model){
        //return view('engravings.index');
        $image = new \Imagick(public_path()."/img/tiles/main/result.jpg");
        $geo=$image->getImageGeometry();
        $image->clear();
        return view('engravings.index', ['width' => $geo['width'], 'height' => $geo['height']]);
    }

    public function create(){
        return view('engravings.create');
        //return view('engravings.index', ['engravings' => $model::where('status', '=', '0')->get()]);
    }

    public function store(Request $request){
        $data = $request->all();
        $engraving = Engraving::create([
            'name' => $data['name'],
            'partners_name' => $data['partnersName'],
            'message' => $data['message'],
            'image_path' => "test",
        ]);
        return redirect()->route('engravings.success');
    }

    public function getPreview(Request $request){
        $data = $request->all();
        $res = $this->generateImage($data);
        return response()->json([
            'preview' => $res,
        ]);
    }

    private function generateImage($data){


        $image = new \Imagick(public_path()."/img/templates/1x1-2.jpg");
        $geo=$image->getImageGeometry();
        $fontSize = 30;
        $imageMiddleX = 255;
        $imageYStart = 215;
        $imageYIncrement = 40;
        $messageY = 200;
        /* Create some objects */
        
        $draw = new \ImagickDraw();
        $pixel = new \ImagickPixel( 'gray' );

        switch($data['size']){
            
            case "2":
                $image->clear();
                $image = new \Imagick(public_path()."/img/templates/2x2-2.jpg");

                $geo=$image->getImageGeometry();
            
                $fontSize = 60;
                $imageMiddleX = 525;
                $imageYStart = 425;
                $imageYIncrement = 90;
                $messageY = 450;

                break;
            case "3":
                $image->clear();
                $image = new \Imagick(public_path()."/img/templates/3x3-2.jpg");

                $geo=$image->getImageGeometry();
            
                $fontSize = 120;
                $imageMiddleX = 770;
                $imageYStart = 620;
                $imageYIncrement = 180;
                $messageY = 720;

                break;
            case "4":
                $image->clear();
                $image = new \Imagick(public_path()."/img/templates/4x4-2.jpg");

                $geo=$image->getImageGeometry();
            
                $fontSize = 180;
                $imageMiddleX = 1040;
                $imageYStart = 820;
                $imageYIncrement = 220;
                $messageY = 1000;

                break;
            case "1":
                $fontSize = 30;
                $imageMiddleX = 255;
                $imageYStart = 215;
                $imageYIncrement = 40;
                $messageY = 220;

            default:
                break;

        }


        /* Black text */
        //$draw->setFillColor('black');


        /* Font properties */
        $draw->setFont(public_path().'/font/latobi.ttf');
        $draw->setFontSize( $fontSize );
        $draw->setTextAlignment(\Imagick::ALIGN_CENTER);
        switch($data['text-color']){
            case "SILVER":
                $draw->setFillColor('#c9c9c9');
                break;
            case "GOLD":
                $draw->setFillColor('#ffd700');
                break;
            case "DEFAULT":
            default:
                $draw->setFillColor('#392005');
                break;
        }

        /* Create text */
        $image->annotateImage($draw, $imageMiddleX, $imageYStart, 0, 
        $data['name']);

        $image->annotateImage($draw, $imageMiddleX, $imageYStart + $imageYIncrement, 0, 
            '&');

        $image->annotateImage($draw, $imageMiddleX, $imageYStart + ($imageYIncrement*2), 0, 
        $data['partnersName']);

        $draw->setFont(public_path().'/font/gv.otf');
        $draw->setFontSize( $fontSize*1.5 );
        $draw->setFillColor('#ffffff');
        $image->annotateImage($draw, $imageMiddleX, $imageYStart + $messageY, 0, 
        $data['message']);

        switch($data['frame']){
            case 'ROPE':
                $frame = new \Imagick(public_path()."/img/frames/ropeframe.png");
                $frame->resizeImage($geo['width'],$geo['height'], imagick::FILTER_LANCZOS, 0.9, true);
                $image->compositeImage($frame, Imagick::COMPOSITE_DEFAULT, 0, 0);
                break;
            case 'SILVER':
                $frame = new \Imagick(public_path()."/img/frames/silverframe.png");
                $frame->resizeImage($geo['width'],$geo['height'], imagick::FILTER_LANCZOS, 0.9, true);
                $image->compositeImage($frame, Imagick::COMPOSITE_DEFAULT, 0, 0);
                break;
            case 'GOLD':
                $frame = new \Imagick(public_path()."/img/frames/goldframe.png");
                $frame->resizeImage($geo['width'],$geo['height'], imagick::FILTER_LANCZOS, 0.9, true);
                $image->compositeImage($frame, Imagick::COMPOSITE_DEFAULT, 0, 0);
                break;
            case 'NONE':
            default:
                break;
        }
        /* Give image a format */
        $image->setImageFormat('jpg');
        $image->setImageCompression(true);
        $image->setCompression(Imagick::COMPRESSION_JPEG);
        $image->setImageCompressionQuality(60);

        $imgBuff = $image->getimageblob();

        /**
         * This clears the image.jpg resource from our $img object and destroys the
         * object. Thus, freeing the system resources allocated for doing our image
         * manipulation.
         */
        if($data['action'] == "save"){
            $engraving = Engraving::create([
                'name' => $data['name'],
                'partners_name' => $data['partnersName'],
                'message' => $data['message'],
                'image_path' => public_path().'/img/tiles/'.$data["save_name"].'.jpg',
            ]);
            $image->writeImage(public_path().'/img/tiles/'.$data["save_name"].'.jpg');
            //system('cd '.public_path()."/img/tiles/ && sh createmap.sh");
            $process = new Process(['sh', "createmap.sh"]);
            $process->setWorkingDirectory(public_path()."/img/tiles/");
            $process->run();
            
            // /error_log();
        }
        $image->clear();

        if(isset($frame))
            $frame->clear();

        /**
         * This creates the base64 encoded version of our unencoded string from
         * earlier. It is then output as an image to the page.
         * 
         * Note, that in the src attribute, the image/jpeg part may change based on
         * the image type you're using (i.e. png, jpg etc).
         */
        
        $image = base64_encode($imgBuff);
        return "data:image/jpeg;base64,$image";
    }
}

