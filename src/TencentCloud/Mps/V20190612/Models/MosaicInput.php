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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mosaic parameter type in a media processing task
 *
 * @method string getCoordinateOrigin() Obtain <p>Origin position. Currently, only the following is supported:</p><li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the mosaic origin is at the top left corner of the image or text.</li>Default value: TopLeft.
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set <p>Origin position. Currently, only the following is supported:</p><li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the mosaic origin is at the top left corner of the image or text.</li>Default value: TopLeft.
 * @method string getXPos() Obtain <p>Horizontal position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px:</p><li>If a string ends with %, the mosaic XPos is a specified percentage of the video width. For example, 10% means XPos is 10% of the video width;</li><li>If a string ends with px, the mosaic XPos is a specified pixel. For example, 100px means XPos is 100 pixels.</li>Default value: 0px.
 * @method void setXPos(string $XPos) Set <p>Horizontal position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px:</p><li>If a string ends with %, the mosaic XPos is a specified percentage of the video width. For example, 10% means XPos is 10% of the video width;</li><li>If a string ends with px, the mosaic XPos is a specified pixel. For example, 100px means XPos is 100 pixels.</li>Default value: 0px.
 * @method string getYPos() Obtain <p>Vertical position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px:</p><li>If a string ends with %, the mosaic YPos is the specified percentage of the video height. For example, 10% means YPos is 10% of the video height.</li><li>If a string ends with px, the mosaic YPos is the specified pixel. For example, 100px means YPos is 100 pixels.</li>Default value: 0px.
 * @method void setYPos(string $YPos) Set <p>Vertical position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px:</p><li>If a string ends with %, the mosaic YPos is the specified percentage of the video height. For example, 10% means YPos is 10% of the video height.</li><li>If a string ends with px, the mosaic YPos is the specified pixel. For example, 100px means YPos is 100 pixels.</li>Default value: 0px.
 * @method string getWidth() Obtain <p>Mosaic width. Supports two formats: % and px:</p><li>If a string ends with %, it indicates that the mosaic `Width` is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li><li>If a string ends with px, it indicates that the mosaic `Width` is in pixels. For example, `100px` means that `Width` is 100 pixels.</li>Default value: 10%.
 * @method void setWidth(string $Width) Set <p>Mosaic width. Supports two formats: % and px:</p><li>If a string ends with %, it indicates that the mosaic `Width` is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li><li>If a string ends with px, it indicates that the mosaic `Width` is in pixels. For example, `100px` means that `Width` is 100 pixels.</li>Default value: 10%.
 * @method string getHeight() Obtain <p>Height of a mosaic. Two formats are supported: % and px.</p><li>If a string ends with %, it indicates that the `Height` of a mosaic is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li><li>If a string ends with px, it indicates that the `Height` of a mosaic is in pixels. For example, `100px` means that `Height` is 100 pixels.</li>Default value: 10%.
 * @method void setHeight(string $Height) Set <p>Height of a mosaic. Two formats are supported: % and px.</p><li>If a string ends with %, it indicates that the `Height` of a mosaic is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li><li>If a string ends with px, it indicates that the `Height` of a mosaic is in pixels. For example, `100px` means that `Height` is 100 pixels.</li>Default value: 10%.
 * @method float getStartTimeOffset() Obtain <p>Start time offset of mosaic, in seconds. If not specified or set to 0, the mosaic appears when the frame appears.</p><li>If not specified or set to 0, the mosaic appears from the start of the frame;</li><li>If the value is greater than 0 (assuming n), the mosaic appears at the nth second from the start of the frame;</li><li>If the value is less than 0 (assuming -n), the mosaic appears n seconds before the end of the frame.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set <p>Start time offset of mosaic, in seconds. If not specified or set to 0, the mosaic appears when the frame appears.</p><li>If not specified or set to 0, the mosaic appears from the start of the frame;</li><li>If the value is greater than 0 (assuming n), the mosaic appears at the nth second from the start of the frame;</li><li>If the value is less than 0 (assuming -n), the mosaic appears n seconds before the end of the frame.</li>
 * @method float getEndTimeOffset() Obtain <p>End time offset of mosaic, in seconds.</p><li>If not specified or set to 0, the mosaic lasts until the end of a video;</li><li>If the value is greater than 0 (assuming n), the mosaic disappears at second n;</li><li>If the value is less than 0 (assuming -n), the mosaic disappears n seconds before the end of a video.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set <p>End time offset of mosaic, in seconds.</p><li>If not specified or set to 0, the mosaic lasts until the end of a video;</li><li>If the value is greater than 0 (assuming n), the mosaic disappears at second n;</li><li>If the value is less than 0 (assuming -n), the mosaic disappears n seconds before the end of a video.</li>
 */
class MosaicInput extends AbstractModel
{
    /**
     * @var string <p>Origin position. Currently, only the following is supported:</p><li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the mosaic origin is at the top left corner of the image or text.</li>Default value: TopLeft.
     */
    public $CoordinateOrigin;

    /**
     * @var string <p>Horizontal position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px:</p><li>If a string ends with %, the mosaic XPos is a specified percentage of the video width. For example, 10% means XPos is 10% of the video width;</li><li>If a string ends with px, the mosaic XPos is a specified pixel. For example, 100px means XPos is 100 pixels.</li>Default value: 0px.
     */
    public $XPos;

    /**
     * @var string <p>Vertical position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px:</p><li>If a string ends with %, the mosaic YPos is the specified percentage of the video height. For example, 10% means YPos is 10% of the video height.</li><li>If a string ends with px, the mosaic YPos is the specified pixel. For example, 100px means YPos is 100 pixels.</li>Default value: 0px.
     */
    public $YPos;

    /**
     * @var string <p>Mosaic width. Supports two formats: % and px:</p><li>If a string ends with %, it indicates that the mosaic `Width` is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li><li>If a string ends with px, it indicates that the mosaic `Width` is in pixels. For example, `100px` means that `Width` is 100 pixels.</li>Default value: 10%.
     */
    public $Width;

    /**
     * @var string <p>Height of a mosaic. Two formats are supported: % and px.</p><li>If a string ends with %, it indicates that the `Height` of a mosaic is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li><li>If a string ends with px, it indicates that the `Height` of a mosaic is in pixels. For example, `100px` means that `Height` is 100 pixels.</li>Default value: 10%.
     */
    public $Height;

    /**
     * @var float <p>Start time offset of mosaic, in seconds. If not specified or set to 0, the mosaic appears when the frame appears.</p><li>If not specified or set to 0, the mosaic appears from the start of the frame;</li><li>If the value is greater than 0 (assuming n), the mosaic appears at the nth second from the start of the frame;</li><li>If the value is less than 0 (assuming -n), the mosaic appears n seconds before the end of the frame.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>End time offset of mosaic, in seconds.</p><li>If not specified or set to 0, the mosaic lasts until the end of a video;</li><li>If the value is greater than 0 (assuming n), the mosaic disappears at second n;</li><li>If the value is less than 0 (assuming -n), the mosaic disappears n seconds before the end of a video.</li>
     */
    public $EndTimeOffset;

    /**
     * @param string $CoordinateOrigin <p>Origin position. Currently, only the following is supported:</p><li>TopLeft: indicates that the coordinate origin is at the top left corner of the video image and the mosaic origin is at the top left corner of the image or text.</li>Default value: TopLeft.
     * @param string $XPos <p>Horizontal position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px:</p><li>If a string ends with %, the mosaic XPos is a specified percentage of the video width. For example, 10% means XPos is 10% of the video width;</li><li>If a string ends with px, the mosaic XPos is a specified pixel. For example, 100px means XPos is 100 pixels.</li>Default value: 0px.
     * @param string $YPos <p>Vertical position of the mosaic origin relative to the origin of coordinates of the video image. Supports two formats: % and px:</p><li>If a string ends with %, the mosaic YPos is the specified percentage of the video height. For example, 10% means YPos is 10% of the video height.</li><li>If a string ends with px, the mosaic YPos is the specified pixel. For example, 100px means YPos is 100 pixels.</li>Default value: 0px.
     * @param string $Width <p>Mosaic width. Supports two formats: % and px:</p><li>If a string ends with %, it indicates that the mosaic `Width` is a percentage of a video's width. For example, `10%` means that `Width` is 10% of a video's width.</li><li>If a string ends with px, it indicates that the mosaic `Width` is in pixels. For example, `100px` means that `Width` is 100 pixels.</li>Default value: 10%.
     * @param string $Height <p>Height of a mosaic. Two formats are supported: % and px.</p><li>If a string ends with %, it indicates that the `Height` of a mosaic is a percentage of a video's height. For example, `10%` means that `Height` is 10% of a video's height.</li><li>If a string ends with px, it indicates that the `Height` of a mosaic is in pixels. For example, `100px` means that `Height` is 100 pixels.</li>Default value: 10%.
     * @param float $StartTimeOffset <p>Start time offset of mosaic, in seconds. If not specified or set to 0, the mosaic appears when the frame appears.</p><li>If not specified or set to 0, the mosaic appears from the start of the frame;</li><li>If the value is greater than 0 (assuming n), the mosaic appears at the nth second from the start of the frame;</li><li>If the value is less than 0 (assuming -n), the mosaic appears n seconds before the end of the frame.</li>
     * @param float $EndTimeOffset <p>End time offset of mosaic, in seconds.</p><li>If not specified or set to 0, the mosaic lasts until the end of a video;</li><li>If the value is greater than 0 (assuming n), the mosaic disappears at second n;</li><li>If the value is less than 0 (assuming -n), the mosaic disappears n seconds before the end of a video.</li>
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
