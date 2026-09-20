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
 * Mosaic parameter type in a video processing task
 *
 * @method string getCoordinateOrigin() Obtain Origin position. Currently only support:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the mosaic origin is at the top left corner of the image or text.</li>
Default value: TopLeft.
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set Origin position. Currently only support:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the mosaic origin is at the top left corner of the image or text.</li>
Default value: TopLeft.
 * @method string getXPos() Obtain Horizontal position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a mosaic is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the mosaic XPos is specified in pixels. For example, 100px means the XPos is 100 pixels.</li>
Default value: 0px.
 * @method void setXPos(string $XPos) Set Horizontal position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a mosaic is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the mosaic XPos is specified in pixels. For example, 100px means the XPos is 100 pixels.</li>
Default value: 0px.
 * @method string getYPos() Obtain Vertical position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a mosaic is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the mosaic YPos is specified in pixels. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
 * @method void setYPos(string $YPos) Set Vertical position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a mosaic is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the mosaic YPos is specified in pixels. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
 * @method string getWidth() Obtain Width of the mosaic, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a mosaic is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the mosaic Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
Default value: 10%.
 * @method void setWidth(string $Width) Set Width of the mosaic, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a mosaic is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the mosaic Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
Default value: 10%.
 * @method string getHeight() Obtain Height of a mosaic, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a mosaic is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the unit for the mosaic Height is pixel. For example, 100px means the Height is 100 pixels.</li>
Default value: 10%.
 * @method void setHeight(string $Height) Set Height of a mosaic, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a mosaic is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the unit for the mosaic Height is pixel. For example, 100px means the Height is 100 pixels.</li>
Default value: 10%.
 * @method float getStartTimeOffset() Obtain Start time offset of a mosaic, in seconds. If not set or set to 0, a mosaic starts appearing when a video starts.
<li>If not set or set to 0, a mosaic starts appearing when a video starts.</li>
<li>If the value is greater than 0 (for example, n), a mosaic will appear at second n of a frame.</li>
<li>When the value is less than 0 (assuming -n), the mosaic appears n seconds before the end of a video.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a mosaic, in seconds. If not set or set to 0, a mosaic starts appearing when a video starts.
<li>If not set or set to 0, a mosaic starts appearing when a video starts.</li>
<li>If the value is greater than 0 (for example, n), a mosaic will appear at second n of a frame.</li>
<li>When the value is less than 0 (assuming -n), the mosaic appears n seconds before the end of a video.</li>
 * @method float getEndTimeOffset() Obtain End time offset of a mosaic, in seconds.
<li>If not set or set to 0, a mosaic will last until the end of a frame.</li>
<li>If the value is greater than 0 (for example, n), the mosaic will disappear at second n.</li>
<li>When the value is less than 0 (assuming -n), the mosaic lasts until n seconds before the end of a video.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a mosaic, in seconds.
<li>If not set or set to 0, a mosaic will last until the end of a frame.</li>
<li>If the value is greater than 0 (for example, n), the mosaic will disappear at second n.</li>
<li>When the value is less than 0 (assuming -n), the mosaic lasts until n seconds before the end of a video.</li>
 */
class MosaicInput extends AbstractModel
{
    /**
     * @var string Origin position. Currently only support:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the mosaic origin is at the top left corner of the image or text.</li>
Default value: TopLeft.
     */
    public $CoordinateOrigin;

    /**
     * @var string Horizontal position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a mosaic is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the mosaic XPos is specified in pixels. For example, 100px means the XPos is 100 pixels.</li>
Default value: 0px.
     */
    public $XPos;

    /**
     * @var string Vertical position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a mosaic is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the mosaic YPos is specified in pixels. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
     */
    public $YPos;

    /**
     * @var string Width of the mosaic, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a mosaic is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the mosaic Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
Default value: 10%.
     */
    public $Width;

    /**
     * @var string Height of a mosaic, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a mosaic is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the unit for the mosaic Height is pixel. For example, 100px means the Height is 100 pixels.</li>
Default value: 10%.
     */
    public $Height;

    /**
     * @var float Start time offset of a mosaic, in seconds. If not set or set to 0, a mosaic starts appearing when a video starts.
<li>If not set or set to 0, a mosaic starts appearing when a video starts.</li>
<li>If the value is greater than 0 (for example, n), a mosaic will appear at second n of a frame.</li>
<li>When the value is less than 0 (assuming -n), the mosaic appears n seconds before the end of a video.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a mosaic, in seconds.
<li>If not set or set to 0, a mosaic will last until the end of a frame.</li>
<li>If the value is greater than 0 (for example, n), the mosaic will disappear at second n.</li>
<li>When the value is less than 0 (assuming -n), the mosaic lasts until n seconds before the end of a video.</li>
     */
    public $EndTimeOffset;

    /**
     * @param string $CoordinateOrigin Origin position. Currently only support:
<li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the mosaic origin is at the top left corner of the image or text.</li>
Default value: TopLeft.
     * @param string $XPos Horizontal position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `XPos` of a mosaic is a specified percentage of a video's width. For example, `10%` means that `XPos` is 10% of a video's width.</li>
<li>If a string ends with px, it means the mosaic XPos is specified in pixels. For example, 100px means the XPos is 100 pixels.</li>
Default value: 0px.
     * @param string $YPos Vertical position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px.
<li>If a string ends with %, it indicates that the `YPos` of a mosaic is a specified percentage of a video's height. For example, `10%` means that `YPos` is 10% of a video's height.</li>
<li>If a string ends with px, it means the mosaic YPos is specified in pixels. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
     * @param string $Width Width of the mosaic, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a mosaic is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with px, it means the mosaic Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
Default value: 10%.
     * @param string $Height Height of a mosaic, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a mosaic is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with px, it means the unit for the mosaic Height is pixel. For example, 100px means the Height is 100 pixels.</li>
Default value: 10%.
     * @param float $StartTimeOffset Start time offset of a mosaic, in seconds. If not set or set to 0, a mosaic starts appearing when a video starts.
<li>If not set or set to 0, a mosaic starts appearing when a video starts.</li>
<li>If the value is greater than 0 (for example, n), a mosaic will appear at second n of a frame.</li>
<li>When the value is less than 0 (assuming -n), the mosaic appears n seconds before the end of a video.</li>
     * @param float $EndTimeOffset End time offset of a mosaic, in seconds.
<li>If not set or set to 0, a mosaic will last until the end of a frame.</li>
<li>If the value is greater than 0 (for example, n), the mosaic will disappear at second n.</li>
<li>When the value is less than 0 (assuming -n), the mosaic lasts until n seconds before the end of a video.</li>
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
        if (array_key_exists("CoordinateOrigin",$param) and $param["CoordinateOrigin"] !== null) {
            $this->CoordinateOrigin = $param["CoordinateOrigin"];
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
