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
 * The custom layout parameters.
 *
 * @method integer getTop() Obtain The Y axis of the window’s top-left corner. Value range: [0, 1920]. The value cannot be larger than the canvas height.
 * @method void setTop(integer $Top) Set The Y axis of the window’s top-left corner. Value range: [0, 1920]. The value cannot be larger than the canvas height.
 * @method integer getLeft() Obtain The X axis of the window’s top-left corner. Value range: [0, 1920]. The value cannot be larger than the canvas width.
 * @method void setLeft(integer $Left) Set The X axis of the window’s top-left corner. Value range: [0, 1920]. The value cannot be larger than the canvas width.
 * @method integer getWidth() Obtain The relative width of the window. Value range: [0, 1920]. The sum of the values of this parameter and `Left` cannot exceed the canvas width.
 * @method void setWidth(integer $Width) Set The relative width of the window. Value range: [0, 1920]. The sum of the values of this parameter and `Left` cannot exceed the canvas width.
 * @method integer getHeight() Obtain The relative height of the window. Value range: [0, 1920]. The sum of the values of this parameter and `Top` cannot exceed the canvas height.
 * @method void setHeight(integer $Height) Set The relative height of the window. Value range: [0, 1920]. The sum of the values of this parameter and `Top` cannot exceed the canvas height.
 * @method string getUserId() Obtain The user ID (string) of the anchor whose video is shown in the window. If you do not set this parameter, anchors’ videos will be shown in their room entry sequence.
 * @method void setUserId(string $UserId) Set The user ID (string) of the anchor whose video is shown in the window. If you do not set this parameter, anchors’ videos will be shown in their room entry sequence.
 * @method integer getAlpha() Obtain The degree of transparency of the canvas. Value range: [0, 255]. 0 means fully opaque, and 255 means fully transparent.
 * @method void setAlpha(integer $Alpha) Set The degree of transparency of the canvas. Value range: [0, 255]. 0 means fully opaque, and 255 means fully transparent.
 * @method integer getRenderMode() Obtain 0: Stretch. In this mode, the image is stretched to fill the space available. The whole image is visible after scaling. However, if the original aspect ratio is different from the target, the image may be distorted.

1: Crop (default). In this mode, if the original aspect ratio is different from the target, the image will be cropped according to the target before being stretched to fill the space available. The image will not be distorted.

2: Blank. This mode stretches the image while keeping its original aspect ratio. If the original aspect ratio is different from the target, there may be blank spaces to the top and bottom or to the left and right of the window.

3: Smart stretch. This mode is similar to the crop mode, except that it restricts cropping to 20% of the image’s width or height at most.
 * @method void setRenderMode(integer $RenderMode) Set 0: Stretch. In this mode, the image is stretched to fill the space available. The whole image is visible after scaling. However, if the original aspect ratio is different from the target, the image may be distorted.

1: Crop (default). In this mode, if the original aspect ratio is different from the target, the image will be cropped according to the target before being stretched to fill the space available. The image will not be distorted.

2: Blank. This mode stretches the image while keeping its original aspect ratio. If the original aspect ratio is different from the target, there may be blank spaces to the top and bottom or to the left and right of the window.

3: Smart stretch. This mode is similar to the crop mode, except that it restricts cropping to 20% of the image’s width or height at most.
 * @method integer getMediaId() Obtain The type of the stream subscribed to.
0: Primary stream (default)
1: Substream
 * @method void setMediaId(integer $MediaId) Set The type of the stream subscribed to.
0: Primary stream (default)
1: Substream
 * @method integer getImageLayer() Obtain The image layer. 0 is the default value and means the bottommost layer.
 * @method void setImageLayer(integer $ImageLayer) Set The image layer. 0 is the default value and means the bottommost layer.
 * @method string getSubBackgroundImage() Obtain The URL of the background image for a window. The image must be in JPG or PNG format and cannot be larger than 5 MB. If the image’s aspect ratio is different from that of the window, the image will be rendered according to the value of `RenderMode`.
 * @method void setSubBackgroundImage(string $SubBackgroundImage) Set The URL of the background image for a window. The image must be in JPG or PNG format and cannot be larger than 5 MB. If the image’s aspect ratio is different from that of the window, the image will be rendered according to the value of `RenderMode`.
 */
class MixLayout extends AbstractModel
{
    /**
     * @var integer The Y axis of the window’s top-left corner. Value range: [0, 1920]. The value cannot be larger than the canvas height.
     */
    public $Top;

    /**
     * @var integer The X axis of the window’s top-left corner. Value range: [0, 1920]. The value cannot be larger than the canvas width.
     */
    public $Left;

    /**
     * @var integer The relative width of the window. Value range: [0, 1920]. The sum of the values of this parameter and `Left` cannot exceed the canvas width.
     */
    public $Width;

    /**
     * @var integer The relative height of the window. Value range: [0, 1920]. The sum of the values of this parameter and `Top` cannot exceed the canvas height.
     */
    public $Height;

    /**
     * @var string The user ID (string) of the anchor whose video is shown in the window. If you do not set this parameter, anchors’ videos will be shown in their room entry sequence.
     */
    public $UserId;

    /**
     * @var integer The degree of transparency of the canvas. Value range: [0, 255]. 0 means fully opaque, and 255 means fully transparent.
     */
    public $Alpha;

    /**
     * @var integer 0: Stretch. In this mode, the image is stretched to fill the space available. The whole image is visible after scaling. However, if the original aspect ratio is different from the target, the image may be distorted.

1: Crop (default). In this mode, if the original aspect ratio is different from the target, the image will be cropped according to the target before being stretched to fill the space available. The image will not be distorted.

2: Blank. This mode stretches the image while keeping its original aspect ratio. If the original aspect ratio is different from the target, there may be blank spaces to the top and bottom or to the left and right of the window.

3: Smart stretch. This mode is similar to the crop mode, except that it restricts cropping to 20% of the image’s width or height at most.
     */
    public $RenderMode;

    /**
     * @var integer The type of the stream subscribed to.
0: Primary stream (default)
1: Substream
     */
    public $MediaId;

    /**
     * @var integer The image layer. 0 is the default value and means the bottommost layer.
     */
    public $ImageLayer;

    /**
     * @var string The URL of the background image for a window. The image must be in JPG or PNG format and cannot be larger than 5 MB. If the image’s aspect ratio is different from that of the window, the image will be rendered according to the value of `RenderMode`.
     */
    public $SubBackgroundImage;

    /**
     * @param integer $Top The Y axis of the window’s top-left corner. Value range: [0, 1920]. The value cannot be larger than the canvas height.
     * @param integer $Left The X axis of the window’s top-left corner. Value range: [0, 1920]. The value cannot be larger than the canvas width.
     * @param integer $Width The relative width of the window. Value range: [0, 1920]. The sum of the values of this parameter and `Left` cannot exceed the canvas width.
     * @param integer $Height The relative height of the window. Value range: [0, 1920]. The sum of the values of this parameter and `Top` cannot exceed the canvas height.
     * @param string $UserId The user ID (string) of the anchor whose video is shown in the window. If you do not set this parameter, anchors’ videos will be shown in their room entry sequence.
     * @param integer $Alpha The degree of transparency of the canvas. Value range: [0, 255]. 0 means fully opaque, and 255 means fully transparent.
     * @param integer $RenderMode 0: Stretch. In this mode, the image is stretched to fill the space available. The whole image is visible after scaling. However, if the original aspect ratio is different from the target, the image may be distorted.

1: Crop (default). In this mode, if the original aspect ratio is different from the target, the image will be cropped according to the target before being stretched to fill the space available. The image will not be distorted.

2: Blank. This mode stretches the image while keeping its original aspect ratio. If the original aspect ratio is different from the target, there may be blank spaces to the top and bottom or to the left and right of the window.

3: Smart stretch. This mode is similar to the crop mode, except that it restricts cropping to 20% of the image’s width or height at most.
     * @param integer $MediaId The type of the stream subscribed to.
0: Primary stream (default)
1: Substream
     * @param integer $ImageLayer The image layer. 0 is the default value and means the bottommost layer.
     * @param string $SubBackgroundImage The URL of the background image for a window. The image must be in JPG or PNG format and cannot be larger than 5 MB. If the image’s aspect ratio is different from that of the window, the image will be rendered according to the value of `RenderMode`.
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
        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Alpha",$param) and $param["Alpha"] !== null) {
            $this->Alpha = $param["Alpha"];
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("MediaId",$param) and $param["MediaId"] !== null) {
            $this->MediaId = $param["MediaId"];
        }

        if (array_key_exists("ImageLayer",$param) and $param["ImageLayer"] !== null) {
            $this->ImageLayer = $param["ImageLayer"];
        }

        if (array_key_exists("SubBackgroundImage",$param) and $param["SubBackgroundImage"] !== null) {
            $this->SubBackgroundImage = $param["SubBackgroundImage"];
        }
    }
}
