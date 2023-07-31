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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The layout parameters.
 *
 * @method UserMediaStream getUserMediaStream() Obtain The information of the stream that is displayed. If you do not pass this parameter, TRTC will display the videos of anchors in the room according to their room entry sequence.
 * @method void setUserMediaStream(UserMediaStream $UserMediaStream) Set The information of the stream that is displayed. If you do not pass this parameter, TRTC will display the videos of anchors in the room according to their room entry sequence.
 * @method integer getImageWidth() Obtain The video width (pixels). If you do not pass this parameter, 0 will be used.
 * @method void setImageWidth(integer $ImageWidth) Set The video width (pixels). If you do not pass this parameter, 0 will be used.
 * @method integer getImageHeight() Obtain The video height (pixels). If you do not pass this parameter, 0 will be used.
 * @method void setImageHeight(integer $ImageHeight) Set The video height (pixels). If you do not pass this parameter, 0 will be used.
 * @method integer getLocationX() Obtain The horizontal offset (pixels) of the video. The sum of `LocationX` and `ImageWidth` cannot exceed the width of the canvas. If you do not pass this parameter, 0 will be used.
 * @method void setLocationX(integer $LocationX) Set The horizontal offset (pixels) of the video. The sum of `LocationX` and `ImageWidth` cannot exceed the width of the canvas. If you do not pass this parameter, 0 will be used.
 * @method integer getLocationY() Obtain The vertical offset of the video. The sum of `LocationY` and `ImageHeight` cannot exceed the height of the canvas. If you do not pass this parameter, 0 will be used.
 * @method void setLocationY(integer $LocationY) Set The vertical offset of the video. The sum of `LocationY` and `ImageHeight` cannot exceed the height of the canvas. If you do not pass this parameter, 0 will be used.
 * @method integer getZOrder() Obtain The image layer of the video. If you do not pass this parameter, 0 will be used.
 * @method void setZOrder(integer $ZOrder) Set The image layer of the video. If you do not pass this parameter, 0 will be used.
 * @method integer getRenderMode() Obtain The rendering mode of the video. 0 (the video is scaled and the excess parts are cropped), 1 (the video is scaled), 2 (the video is scaled and the blank spaces are filled with black bars). If you do not pass this parameter, 0 will be used.
 * @method void setRenderMode(integer $RenderMode) Set The rendering mode of the video. 0 (the video is scaled and the excess parts are cropped), 1 (the video is scaled), 2 (the video is scaled and the blank spaces are filled with black bars). If you do not pass this parameter, 0 will be used.
 * @method string getBackGroundColor() Obtain (Not supported yet) The background color of a video. Below are the values for some commonly used colors:
Red: `0xcc0033`
Yellow: `0xcc9900`
Green: `0xcccc33`
Blue: `0x99CCFF`
Black: `0x000000`
White: `0xFFFFFF`
Grey: `0x999999`
 * @method void setBackGroundColor(string $BackGroundColor) Set (Not supported yet) The background color of a video. Below are the values for some commonly used colors:
Red: `0xcc0033`
Yellow: `0xcc9900`
Green: `0xcccc33`
Blue: `0x99CCFF`
Black: `0x000000`
White: `0xFFFFFF`
Grey: `0x999999`
 * @method string getBackgroundImageUrl() Obtain The URL of the background image for the video. This parameter allows you to specify an image to display when the user’s camera is turned off or before the user enters the room. If the dimensions of the image specified are different from those of the video window, the image will be stretched to fit the space. This parameter has a higher priority than `BackGroundColor`.
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) Set The URL of the background image for the video. This parameter allows you to specify an image to display when the user’s camera is turned off or before the user enters the room. If the dimensions of the image specified are different from those of the video window, the image will be stretched to fit the space. This parameter has a higher priority than `BackGroundColor`.
 * @method McuCustomCrop getCustomCrop() Obtain Custom cropping.
 * @method void setCustomCrop(McuCustomCrop $CustomCrop) Set Custom cropping.
 * @method integer getBackgroundRenderMode() Obtain The display mode of the sub-background image during output: 0 for cropping, 1 for scaling and displaying the background, 2 for scaling and displaying the black background, 3 for proportional scaling. If not filled in, the default is 3.
 * @method void setBackgroundRenderMode(integer $BackgroundRenderMode) Set The display mode of the sub-background image during output: 0 for cropping, 1 for scaling and displaying the background, 2 for scaling and displaying the black background, 3 for proportional scaling. If not filled in, the default is 3.
 */
class McuLayout extends AbstractModel
{
    /**
     * @var UserMediaStream The information of the stream that is displayed. If you do not pass this parameter, TRTC will display the videos of anchors in the room according to their room entry sequence.
     */
    public $UserMediaStream;

    /**
     * @var integer The video width (pixels). If you do not pass this parameter, 0 will be used.
     */
    public $ImageWidth;

    /**
     * @var integer The video height (pixels). If you do not pass this parameter, 0 will be used.
     */
    public $ImageHeight;

    /**
     * @var integer The horizontal offset (pixels) of the video. The sum of `LocationX` and `ImageWidth` cannot exceed the width of the canvas. If you do not pass this parameter, 0 will be used.
     */
    public $LocationX;

    /**
     * @var integer The vertical offset of the video. The sum of `LocationY` and `ImageHeight` cannot exceed the height of the canvas. If you do not pass this parameter, 0 will be used.
     */
    public $LocationY;

    /**
     * @var integer The image layer of the video. If you do not pass this parameter, 0 will be used.
     */
    public $ZOrder;

    /**
     * @var integer The rendering mode of the video. 0 (the video is scaled and the excess parts are cropped), 1 (the video is scaled), 2 (the video is scaled and the blank spaces are filled with black bars). If you do not pass this parameter, 0 will be used.
     */
    public $RenderMode;

    /**
     * @var string (Not supported yet) The background color of a video. Below are the values for some commonly used colors:
Red: `0xcc0033`
Yellow: `0xcc9900`
Green: `0xcccc33`
Blue: `0x99CCFF`
Black: `0x000000`
White: `0xFFFFFF`
Grey: `0x999999`
     */
    public $BackGroundColor;

    /**
     * @var string The URL of the background image for the video. This parameter allows you to specify an image to display when the user’s camera is turned off or before the user enters the room. If the dimensions of the image specified are different from those of the video window, the image will be stretched to fit the space. This parameter has a higher priority than `BackGroundColor`.
     */
    public $BackgroundImageUrl;

    /**
     * @var McuCustomCrop Custom cropping.
     */
    public $CustomCrop;

    /**
     * @var integer The display mode of the sub-background image during output: 0 for cropping, 1 for scaling and displaying the background, 2 for scaling and displaying the black background, 3 for proportional scaling. If not filled in, the default is 3.
     */
    public $BackgroundRenderMode;

    /**
     * @param UserMediaStream $UserMediaStream The information of the stream that is displayed. If you do not pass this parameter, TRTC will display the videos of anchors in the room according to their room entry sequence.
     * @param integer $ImageWidth The video width (pixels). If you do not pass this parameter, 0 will be used.
     * @param integer $ImageHeight The video height (pixels). If you do not pass this parameter, 0 will be used.
     * @param integer $LocationX The horizontal offset (pixels) of the video. The sum of `LocationX` and `ImageWidth` cannot exceed the width of the canvas. If you do not pass this parameter, 0 will be used.
     * @param integer $LocationY The vertical offset of the video. The sum of `LocationY` and `ImageHeight` cannot exceed the height of the canvas. If you do not pass this parameter, 0 will be used.
     * @param integer $ZOrder The image layer of the video. If you do not pass this parameter, 0 will be used.
     * @param integer $RenderMode The rendering mode of the video. 0 (the video is scaled and the excess parts are cropped), 1 (the video is scaled), 2 (the video is scaled and the blank spaces are filled with black bars). If you do not pass this parameter, 0 will be used.
     * @param string $BackGroundColor (Not supported yet) The background color of a video. Below are the values for some commonly used colors:
Red: `0xcc0033`
Yellow: `0xcc9900`
Green: `0xcccc33`
Blue: `0x99CCFF`
Black: `0x000000`
White: `0xFFFFFF`
Grey: `0x999999`
     * @param string $BackgroundImageUrl The URL of the background image for the video. This parameter allows you to specify an image to display when the user’s camera is turned off or before the user enters the room. If the dimensions of the image specified are different from those of the video window, the image will be stretched to fit the space. This parameter has a higher priority than `BackGroundColor`.
     * @param McuCustomCrop $CustomCrop Custom cropping.
     * @param integer $BackgroundRenderMode The display mode of the sub-background image during output: 0 for cropping, 1 for scaling and displaying the background, 2 for scaling and displaying the black background, 3 for proportional scaling. If not filled in, the default is 3.
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
        if (array_key_exists("UserMediaStream",$param) and $param["UserMediaStream"] !== null) {
            $this->UserMediaStream = new UserMediaStream();
            $this->UserMediaStream->deserialize($param["UserMediaStream"]);
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }

        if (array_key_exists("ZOrder",$param) and $param["ZOrder"] !== null) {
            $this->ZOrder = $param["ZOrder"];
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("BackGroundColor",$param) and $param["BackGroundColor"] !== null) {
            $this->BackGroundColor = $param["BackGroundColor"];
        }

        if (array_key_exists("BackgroundImageUrl",$param) and $param["BackgroundImageUrl"] !== null) {
            $this->BackgroundImageUrl = $param["BackgroundImageUrl"];
        }

        if (array_key_exists("CustomCrop",$param) and $param["CustomCrop"] !== null) {
            $this->CustomCrop = new McuCustomCrop();
            $this->CustomCrop->deserialize($param["CustomCrop"]);
        }

        if (array_key_exists("BackgroundRenderMode",$param) and $param["BackgroundRenderMode"] !== null) {
            $this->BackgroundRenderMode = $param["BackgroundRenderMode"];
        }
    }
}
