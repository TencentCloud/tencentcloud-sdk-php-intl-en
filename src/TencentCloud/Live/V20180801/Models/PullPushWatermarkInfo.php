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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The watermark configuration for a relay task.
 *
 * @method string getPictureUrl() Obtain The watermark image URL.
Characters not allowed:
;(){}$>`#"'|
 * @method void setPictureUrl(string $PictureUrl) Set The watermark image URL.
Characters not allowed:
;(){}$>`#"'|
 * @method integer getXPosition() Obtain The horizontal offset (%) of the watermark. The default value is 0.
 * @method void setXPosition(integer $XPosition) Set The horizontal offset (%) of the watermark. The default value is 0.
 * @method integer getYPosition() Obtain The vertical offset (%) of the watermark. The default value is 0.
 * @method void setYPosition(integer $YPosition) Set The vertical offset (%) of the watermark. The default value is 0.
 * @method integer getWidth() Obtain The watermark width as a percentage of the video width. To avoid distorted images, we recommend you specify only the width or height so that the other side can be scaled proportionally. By default, the original width of the watermark image is used.
 * @method void setWidth(integer $Width) Set The watermark width as a percentage of the video width. To avoid distorted images, we recommend you specify only the width or height so that the other side can be scaled proportionally. By default, the original width of the watermark image is used.
 * @method integer getHeight() Obtain The watermark height as a percentage of the video height. To avoid distorted images, we recommend you specify only the width or height so that the other side can be scaled proportionally. By default, the original height of the watermark image is used.
 * @method void setHeight(integer $Height) Set The watermark height as a percentage of the video height. To avoid distorted images, we recommend you specify only the width or height so that the other side can be scaled proportionally. By default, the original height of the watermark image is used.
 * @method integer getLocation() Obtain The origin. The default value is 0.
0: Top left corner
1: Top right corner
2: Bottom right corner
3: Bottom left corner
 * @method void setLocation(integer $Location) Set The origin. The default value is 0.
0: Top left corner
1: Top right corner
2: Bottom right corner
3: Bottom left corner
 */
class PullPushWatermarkInfo extends AbstractModel
{
    /**
     * @var string The watermark image URL.
Characters not allowed:
;(){}$>`#"'|
     */
    public $PictureUrl;

    /**
     * @var integer The horizontal offset (%) of the watermark. The default value is 0.
     */
    public $XPosition;

    /**
     * @var integer The vertical offset (%) of the watermark. The default value is 0.
     */
    public $YPosition;

    /**
     * @var integer The watermark width as a percentage of the video width. To avoid distorted images, we recommend you specify only the width or height so that the other side can be scaled proportionally. By default, the original width of the watermark image is used.
     */
    public $Width;

    /**
     * @var integer The watermark height as a percentage of the video height. To avoid distorted images, we recommend you specify only the width or height so that the other side can be scaled proportionally. By default, the original height of the watermark image is used.
     */
    public $Height;

    /**
     * @var integer The origin. The default value is 0.
0: Top left corner
1: Top right corner
2: Bottom right corner
3: Bottom left corner
     */
    public $Location;

    /**
     * @param string $PictureUrl The watermark image URL.
Characters not allowed:
;(){}$>`#"'|
     * @param integer $XPosition The horizontal offset (%) of the watermark. The default value is 0.
     * @param integer $YPosition The vertical offset (%) of the watermark. The default value is 0.
     * @param integer $Width The watermark width as a percentage of the video width. To avoid distorted images, we recommend you specify only the width or height so that the other side can be scaled proportionally. By default, the original width of the watermark image is used.
     * @param integer $Height The watermark height as a percentage of the video height. To avoid distorted images, we recommend you specify only the width or height so that the other side can be scaled proportionally. By default, the original height of the watermark image is used.
     * @param integer $Location The origin. The default value is 0.
0: Top left corner
1: Top right corner
2: Bottom right corner
3: Bottom left corner
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
        if (array_key_exists("PictureUrl",$param) and $param["PictureUrl"] !== null) {
            $this->PictureUrl = $param["PictureUrl"];
        }

        if (array_key_exists("XPosition",$param) and $param["XPosition"] !== null) {
            $this->XPosition = $param["XPosition"];
        }

        if (array_key_exists("YPosition",$param) and $param["YPosition"] !== null) {
            $this->YPosition = $param["YPosition"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }
    }
}
