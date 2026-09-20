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
 * Watermark template configuration for JIT transcoding.
 *
 * @method string getSwitch() Obtain Whether to enable watermark. Valid values:
<li>ON: Enable watermark;</li>
<li>OFF: Turn off watermark.</li>
 * @method void setSwitch(string $Switch) Set Whether to enable watermark. Valid values:
<li>ON: Enable watermark;</li>
<li>OFF: Turn off watermark.</li>
 * @method string getUrl() Obtain Watermark Url.
 * @method void setUrl(string $Url) Set Watermark Url.
 * @method string getWidth() Obtain Width of a watermark.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
 * @method void setWidth(string $Width) Set Width of a watermark.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
 * @method string getHeight() Obtain Height of the watermark.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
 * @method void setHeight(string $Height) Set Height of the watermark.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
 * @method string getXPos() Obtain Horizontal position of the watermark origin relative to the origin of coordinates of the video image. A string ending with % means the watermark XPos is a specified percentage of the video width. For example, 10% means the XPos is 10% of the video width.
 * @method void setXPos(string $XPos) Set Horizontal position of the watermark origin relative to the origin of coordinates of the video image. A string ending with % means the watermark XPos is a specified percentage of the video width. For example, 10% means the XPos is 10% of the video width.
 * @method string getYPos() Obtain Vertical position of the watermark origin relative to the origin of coordinates of the video image. When the string ends with %, it means the watermark YPos is the specified percentage of the video height. For example, 10% means YPos is 10% of the video height.
 * @method void setYPos(string $YPos) Set Vertical position of the watermark origin relative to the origin of coordinates of the video image. When the string ends with %, it means the watermark YPos is the specified percentage of the video height. For example, 10% means YPos is 10% of the video height.
 */
class WatermarkConfigureData extends AbstractModel
{
    /**
     * @var string Whether to enable watermark. Valid values:
<li>ON: Enable watermark;</li>
<li>OFF: Turn off watermark.</li>
     */
    public $Switch;

    /**
     * @var string Watermark Url.
     */
    public $Url;

    /**
     * @var string Width of a watermark.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
     */
    public $Width;

    /**
     * @var string Height of the watermark.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
     */
    public $Height;

    /**
     * @var string Horizontal position of the watermark origin relative to the origin of coordinates of the video image. A string ending with % means the watermark XPos is a specified percentage of the video width. For example, 10% means the XPos is 10% of the video width.
     */
    public $XPos;

    /**
     * @var string Vertical position of the watermark origin relative to the origin of coordinates of the video image. When the string ends with %, it means the watermark YPos is the specified percentage of the video height. For example, 10% means YPos is 10% of the video height.
     */
    public $YPos;

    /**
     * @param string $Switch Whether to enable watermark. Valid values:
<li>ON: Enable watermark;</li>
<li>OFF: Turn off watermark.</li>
     * @param string $Url Watermark Url.
     * @param string $Width Width of a watermark.
<li>If a string ends with %, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
     * @param string $Height Height of the watermark.
<li>If a string ends with %, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
     * @param string $XPos Horizontal position of the watermark origin relative to the origin of coordinates of the video image. A string ending with % means the watermark XPos is a specified percentage of the video width. For example, 10% means the XPos is 10% of the video width.
     * @param string $YPos Vertical position of the watermark origin relative to the origin of coordinates of the video image. When the string ends with %, it means the watermark YPos is the specified percentage of the video height. For example, 10% means YPos is 10% of the video height.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }
    }
}
