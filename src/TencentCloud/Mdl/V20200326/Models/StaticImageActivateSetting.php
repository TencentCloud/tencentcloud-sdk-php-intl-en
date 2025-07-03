<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Static image activate setting.
 *
 * @method string getImageUrl() Obtain The address of the image to be inserted, starting with http or https and ending with .png .PNG .bmp .BMP .tga .TGA.
 * @method void setImageUrl(string $ImageUrl) Set The address of the image to be inserted, starting with http or https and ending with .png .PNG .bmp .BMP .tga .TGA.
 * @method integer getLayer() Obtain The layer of the superimposed image, 0-7; the default value is 0, and a higher layer means it is on the top.
 * @method void setLayer(integer $Layer) Set The layer of the superimposed image, 0-7; the default value is 0, and a higher layer means it is on the top.
 * @method integer getOpacity() Obtain Opacity, range 0-100; the default value is 100, which means completely opaque.
 * @method void setOpacity(integer $Opacity) Set Opacity, range 0-100; the default value is 100, which means completely opaque.
 * @method integer getImageX() Obtain The distance from the left edge in pixels; the default value is 0 and the maximum value is 4096.
 * @method void setImageX(integer $ImageX) Set The distance from the left edge in pixels; the default value is 0 and the maximum value is 4096.
 * @method integer getImageY() Obtain The distance from the top edge in pixels; the default value is 0 and the maximum value is 2160.
 * @method void setImageY(integer $ImageY) Set The distance from the top edge in pixels; the default value is 0 and the maximum value is 2160.
 * @method integer getWidth() Obtain The width of the image superimposed on the video frame, in pixels. The default value is empty (not set), which means using the original image size. The minimum value is 1 and the maximum value is 4096.
 * @method void setWidth(integer $Width) Set The width of the image superimposed on the video frame, in pixels. The default value is empty (not set), which means using the original image size. The minimum value is 1 and the maximum value is 4096.
 * @method integer getHeight() Obtain The height of the image superimposed on the video frame, in pixels. The default value is empty (not set), which means the original image size is used. The minimum value is 1 and the maximum value is 2160.
 * @method void setHeight(integer $Height) Set The height of the image superimposed on the video frame, in pixels. The default value is empty (not set), which means the original image size is used. The minimum value is 1 and the maximum value is 2160.
 * @method integer getDuration() Obtain Overlay duration, in milliseconds, range 0-86400000; default value 0, 0 means continuous.
 * @method void setDuration(integer $Duration) Set Overlay duration, in milliseconds, range 0-86400000; default value 0, 0 means continuous.
 * @method integer getFadeIn() Obtain Fade-in duration, in milliseconds, range 0-5000; default value 0, 0 means no fade-in effect.
 * @method void setFadeIn(integer $FadeIn) Set Fade-in duration, in milliseconds, range 0-5000; default value 0, 0 means no fade-in effect.
 * @method integer getFadeOut() Obtain Fade-out duration, in milliseconds, range 0-5000; default value 0, 0 means no fade-out effect.
 * @method void setFadeOut(integer $FadeOut) Set Fade-out duration, in milliseconds, range 0-5000; default value 0, 0 means no fade-out effect.
 */
class StaticImageActivateSetting extends AbstractModel
{
    /**
     * @var string The address of the image to be inserted, starting with http or https and ending with .png .PNG .bmp .BMP .tga .TGA.
     */
    public $ImageUrl;

    /**
     * @var integer The layer of the superimposed image, 0-7; the default value is 0, and a higher layer means it is on the top.
     */
    public $Layer;

    /**
     * @var integer Opacity, range 0-100; the default value is 100, which means completely opaque.
     */
    public $Opacity;

    /**
     * @var integer The distance from the left edge in pixels; the default value is 0 and the maximum value is 4096.
     */
    public $ImageX;

    /**
     * @var integer The distance from the top edge in pixels; the default value is 0 and the maximum value is 2160.
     */
    public $ImageY;

    /**
     * @var integer The width of the image superimposed on the video frame, in pixels. The default value is empty (not set), which means using the original image size. The minimum value is 1 and the maximum value is 4096.
     */
    public $Width;

    /**
     * @var integer The height of the image superimposed on the video frame, in pixels. The default value is empty (not set), which means the original image size is used. The minimum value is 1 and the maximum value is 2160.
     */
    public $Height;

    /**
     * @var integer Overlay duration, in milliseconds, range 0-86400000; default value 0, 0 means continuous.
     */
    public $Duration;

    /**
     * @var integer Fade-in duration, in milliseconds, range 0-5000; default value 0, 0 means no fade-in effect.
     */
    public $FadeIn;

    /**
     * @var integer Fade-out duration, in milliseconds, range 0-5000; default value 0, 0 means no fade-out effect.
     */
    public $FadeOut;

    /**
     * @param string $ImageUrl The address of the image to be inserted, starting with http or https and ending with .png .PNG .bmp .BMP .tga .TGA.
     * @param integer $Layer The layer of the superimposed image, 0-7; the default value is 0, and a higher layer means it is on the top.
     * @param integer $Opacity Opacity, range 0-100; the default value is 100, which means completely opaque.
     * @param integer $ImageX The distance from the left edge in pixels; the default value is 0 and the maximum value is 4096.
     * @param integer $ImageY The distance from the top edge in pixels; the default value is 0 and the maximum value is 2160.
     * @param integer $Width The width of the image superimposed on the video frame, in pixels. The default value is empty (not set), which means using the original image size. The minimum value is 1 and the maximum value is 4096.
     * @param integer $Height The height of the image superimposed on the video frame, in pixels. The default value is empty (not set), which means the original image size is used. The minimum value is 1 and the maximum value is 2160.
     * @param integer $Duration Overlay duration, in milliseconds, range 0-86400000; default value 0, 0 means continuous.
     * @param integer $FadeIn Fade-in duration, in milliseconds, range 0-5000; default value 0, 0 means no fade-in effect.
     * @param integer $FadeOut Fade-out duration, in milliseconds, range 0-5000; default value 0, 0 means no fade-out effect.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Layer",$param) and $param["Layer"] !== null) {
            $this->Layer = $param["Layer"];
        }

        if (array_key_exists("Opacity",$param) and $param["Opacity"] !== null) {
            $this->Opacity = $param["Opacity"];
        }

        if (array_key_exists("ImageX",$param) and $param["ImageX"] !== null) {
            $this->ImageX = $param["ImageX"];
        }

        if (array_key_exists("ImageY",$param) and $param["ImageY"] !== null) {
            $this->ImageY = $param["ImageY"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("FadeIn",$param) and $param["FadeIn"] !== null) {
            $this->FadeIn = $param["FadeIn"];
        }

        if (array_key_exists("FadeOut",$param) and $param["FadeOut"] !== null) {
            $this->FadeOut = $param["FadeOut"];
        }
    }
}
