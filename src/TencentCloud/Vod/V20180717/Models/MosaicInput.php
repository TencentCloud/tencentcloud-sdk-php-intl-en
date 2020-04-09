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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Blur parameter type of video processing task
 *
 * @method string getCoordinateOrigin() Obtain Origin position, which currently can only be:
<li>TopLeft: the origin of coordinates is in the top-left corner of the video, and the origin of the blur is in the top-left corner of the image or text.</li>
Default value: TopLeft.
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set Origin position, which currently can only be:
<li>TopLeft: the origin of coordinates is in the top-left corner of the video, and the origin of the blur is in the top-left corner of the image or text.</li>
Default value: TopLeft.
 * @method string getXPos() Obtain The horizontal position of the origin of the blur relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the blur will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the blur will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
 * @method void setXPos(string $XPos) Set The horizontal position of the origin of the blur relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the blur will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the blur will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
 * @method string getYPos() Obtain Vertical position of the origin of blur relative to the origin of coordinates of video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the blur will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the blur will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
 * @method void setYPos(string $YPos) Set Vertical position of the origin of blur relative to the origin of coordinates of video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the blur will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the blur will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
 * @method string getWidth() Obtain Blur width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the blur will be the specified percentage of the video width; for example, `10%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in px, the `Width` of the blur will be in px; for example, `100px` means that `Width` is 100 px.</li>
Default value: 10%.
 * @method void setWidth(string $Width) Set Blur width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the blur will be the specified percentage of the video width; for example, `10%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in px, the `Width` of the blur will be in px; for example, `100px` means that `Width` is 100 px.</li>
Default value: 10%.
 * @method string getHeight() Obtain Blur height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the blur will be the specified percentage of the video height; for example, `10%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in px, the `Height` of the blur will be in px; for example, `100px` means that `Height` is 100 px.</li>
Default value: 10%.
 * @method void setHeight(string $Height) Set Blur height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the blur will be the specified percentage of the video height; for example, `10%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in px, the `Height` of the blur will be in px; for example, `100px` means that `Height` is 100 px.</li>
Default value: 10%.
 * @method float getStartTimeOffset() Obtain Start time offset of blur in seconds. If this parameter is left empty or 0 is entered, the blur will appear upon the first video frame.
<li>If this parameter is left empty or 0 is entered, the blur will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the blur will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the blur will appear at second n before the last video frame.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of blur in seconds. If this parameter is left empty or 0 is entered, the blur will appear upon the first video frame.
<li>If this parameter is left empty or 0 is entered, the blur will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the blur will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the blur will appear at second n before the last video frame.</li>
 * @method float getEndTimeOffset() Obtain End time offset of blur in seconds.
<li>If this parameter is left empty or 0 is entered, the blur will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the blur will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the blur will exist till second n before the last video frame.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of blur in seconds.
<li>If this parameter is left empty or 0 is entered, the blur will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the blur will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the blur will exist till second n before the last video frame.</li>
 */
class MosaicInput extends AbstractModel
{
    /**
     * @var string Origin position, which currently can only be:
<li>TopLeft: the origin of coordinates is in the top-left corner of the video, and the origin of the blur is in the top-left corner of the image or text.</li>
Default value: TopLeft.
     */
    public $CoordinateOrigin;

    /**
     * @var string The horizontal position of the origin of the blur relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the blur will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the blur will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
     */
    public $XPos;

    /**
     * @var string Vertical position of the origin of blur relative to the origin of coordinates of video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the blur will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the blur will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
     */
    public $YPos;

    /**
     * @var string Blur width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the blur will be the specified percentage of the video width; for example, `10%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in px, the `Width` of the blur will be in px; for example, `100px` means that `Width` is 100 px.</li>
Default value: 10%.
     */
    public $Width;

    /**
     * @var string Blur height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the blur will be the specified percentage of the video height; for example, `10%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in px, the `Height` of the blur will be in px; for example, `100px` means that `Height` is 100 px.</li>
Default value: 10%.
     */
    public $Height;

    /**
     * @var float Start time offset of blur in seconds. If this parameter is left empty or 0 is entered, the blur will appear upon the first video frame.
<li>If this parameter is left empty or 0 is entered, the blur will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the blur will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the blur will appear at second n before the last video frame.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of blur in seconds.
<li>If this parameter is left empty or 0 is entered, the blur will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the blur will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the blur will exist till second n before the last video frame.</li>
     */
    public $EndTimeOffset;

    /**
     * @param string $CoordinateOrigin Origin position, which currently can only be:
<li>TopLeft: the origin of coordinates is in the top-left corner of the video, and the origin of the blur is in the top-left corner of the image or text.</li>
Default value: TopLeft.
     * @param string $XPos The horizontal position of the origin of the blur relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the blur will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the blur will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
     * @param string $YPos Vertical position of the origin of blur relative to the origin of coordinates of video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the blur will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the blur will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
     * @param string $Width Blur width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the blur will be the specified percentage of the video width; for example, `10%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in px, the `Width` of the blur will be in px; for example, `100px` means that `Width` is 100 px.</li>
Default value: 10%.
     * @param string $Height Blur height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the blur will be the specified percentage of the video height; for example, `10%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in px, the `Height` of the blur will be in px; for example, `100px` means that `Height` is 100 px.</li>
Default value: 10%.
     * @param float $StartTimeOffset Start time offset of blur in seconds. If this parameter is left empty or 0 is entered, the blur will appear upon the first video frame.
<li>If this parameter is left empty or 0 is entered, the blur will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the blur will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the blur will appear at second n before the last video frame.</li>
     * @param float $EndTimeOffset End time offset of blur in seconds.
<li>If this parameter is left empty or 0 is entered, the blur will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the blur will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the blur will exist till second n before the last video frame.</li>
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
