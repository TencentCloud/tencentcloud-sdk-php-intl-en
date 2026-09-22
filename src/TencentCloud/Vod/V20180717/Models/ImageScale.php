<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image scaling processing.
 *
 * @method string getType() Obtain Operation type of image scaling. Optional modes:
<li>WidthFirst: Set the image width to Width and proportionally scale the height.</li>
<li>HeightFirst: specify the image height as Height, and the width will be proportionally scaled.</li>
<li>LongEdgeFirst: Specify the long side of the image as LongEdge, and proportionally scale the short side.</li>
<li>ShortEdgeFirst: Specify the short edge of the image as ShortEdge, with long edge proportional scaling.</li>
<li>Force: Ignore the aspect ratio of the original image, specify the image width as Width and height as Height, and forcefully scale the image, which may cause the target image to deform.</li>
 * @method void setType(string $Type) Set Operation type of image scaling. Optional modes:
<li>WidthFirst: Set the image width to Width and proportionally scale the height.</li>
<li>HeightFirst: specify the image height as Height, and the width will be proportionally scaled.</li>
<li>LongEdgeFirst: Specify the long side of the image as LongEdge, and proportionally scale the short side.</li>
<li>ShortEdgeFirst: Specify the short edge of the image as ShortEdge, with long edge proportional scaling.</li>
<li>Force: Ignore the aspect ratio of the original image, specify the image width as Width and height as Height, and forcefully scale the image, which may cause the target image to deform.</li>
 * @method integer getHeight() Obtain Height of the output image. Unit: pixel. This field is valid when Type is HeightFirst or Force.
 * @method void setHeight(integer $Height) Set Height of the output image. Unit: pixel. This field is valid when Type is HeightFirst or Force.
 * @method integer getWidth() Obtain Width of the output image in pixels. This field is valid when Type is WidthFirst or Force.
 * @method void setWidth(integer $Width) Set Width of the output image in pixels. This field is valid when Type is WidthFirst or Force.
 * @method integer getLongEdge() Obtain Long side length of the output image in pixels. This field is valid when Type is LongEdgeFirst.
 * @method void setLongEdge(integer $LongEdge) Set Long side length of the output image in pixels. This field is valid when Type is LongEdgeFirst.
 * @method integer getShortEdge() Obtain Short side length of the output image, unit: pixel. This field is valid when Type value is ShortEdgeFirst.
 * @method void setShortEdge(integer $ShortEdge) Set Short side length of the output image, unit: pixel. This field is valid when Type value is ShortEdgeFirst.
 */
class ImageScale extends AbstractModel
{
    /**
     * @var string Operation type of image scaling. Optional modes:
<li>WidthFirst: Set the image width to Width and proportionally scale the height.</li>
<li>HeightFirst: specify the image height as Height, and the width will be proportionally scaled.</li>
<li>LongEdgeFirst: Specify the long side of the image as LongEdge, and proportionally scale the short side.</li>
<li>ShortEdgeFirst: Specify the short edge of the image as ShortEdge, with long edge proportional scaling.</li>
<li>Force: Ignore the aspect ratio of the original image, specify the image width as Width and height as Height, and forcefully scale the image, which may cause the target image to deform.</li>
     */
    public $Type;

    /**
     * @var integer Height of the output image. Unit: pixel. This field is valid when Type is HeightFirst or Force.
     */
    public $Height;

    /**
     * @var integer Width of the output image in pixels. This field is valid when Type is WidthFirst or Force.
     */
    public $Width;

    /**
     * @var integer Long side length of the output image in pixels. This field is valid when Type is LongEdgeFirst.
     */
    public $LongEdge;

    /**
     * @var integer Short side length of the output image, unit: pixel. This field is valid when Type value is ShortEdgeFirst.
     */
    public $ShortEdge;

    /**
     * @param string $Type Operation type of image scaling. Optional modes:
<li>WidthFirst: Set the image width to Width and proportionally scale the height.</li>
<li>HeightFirst: specify the image height as Height, and the width will be proportionally scaled.</li>
<li>LongEdgeFirst: Specify the long side of the image as LongEdge, and proportionally scale the short side.</li>
<li>ShortEdgeFirst: Specify the short edge of the image as ShortEdge, with long edge proportional scaling.</li>
<li>Force: Ignore the aspect ratio of the original image, specify the image width as Width and height as Height, and forcefully scale the image, which may cause the target image to deform.</li>
     * @param integer $Height Height of the output image. Unit: pixel. This field is valid when Type is HeightFirst or Force.
     * @param integer $Width Width of the output image in pixels. This field is valid when Type is WidthFirst or Force.
     * @param integer $LongEdge Long side length of the output image in pixels. This field is valid when Type is LongEdgeFirst.
     * @param integer $ShortEdge Short side length of the output image, unit: pixel. This field is valid when Type value is ShortEdgeFirst.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("LongEdge",$param) and $param["LongEdge"] !== null) {
            $this->LongEdge = $param["LongEdge"];
        }

        if (array_key_exists("ShortEdge",$param) and $param["ShortEdge"] !== null) {
            $this->ShortEdge = $param["ShortEdge"];
        }
    }
}
