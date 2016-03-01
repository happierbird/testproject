<?php
namespace AppBundle\Response\Decorator;


class PngResponseDecorator extends ResponseDecorator
{
    public function output()
    {
        $font = 'arial.ttf';
        $text = $this->response->getContent();
        $textPosX = floor($this->parameters['width']/2);
        $textPosY = floor($this->parameters['height']/2);

        $im = imagecreatetruecolor($this->parameters['width'], $this->parameters['height']);

        $bgcolorRGB = $this->hex2rgb($this->parameters['bgcolor']);
        $fontcolorRGB = $this->hex2rgb($this->parameters['fontcolor']);

        $userDefinedBGColor = imagecolorallocate($im, $bgcolorRGB[0], $bgcolorRGB[1], $bgcolorRGB[2]);
        $userDefinedFontColor = imagecolorallocate($im, $fontcolorRGB[0], $fontcolorRGB[1], $fontcolorRGB[2]);

        imagefilledrectangle($im, 0, 0, $this->parameters['width'], $this->parameters['height'], $userDefinedBGColor);

        imagettftext($im, 20, 0, $textPosX, $textPosY, $userDefinedFontColor, $font, $text);

        header('Content-type: image/png');
        imagepng($im);
        imagedestroy($im);
    }

    function hex2rgb($hex) {
        $hex = str_replace("#", "", $hex);

        if(strlen($hex) == 3) {
            $r = hexdec(substr($hex,0,1).substr($hex,0,1));
            $g = hexdec(substr($hex,1,1).substr($hex,1,1));
            $b = hexdec(substr($hex,2,1).substr($hex,2,1));
        } else {
            $r = hexdec(substr($hex,0,2));
            $g = hexdec(substr($hex,2,2));
            $b = hexdec(substr($hex,4,2));
        }
        $rgb = array($r, $g, $b);

        return $rgb;
    }
}