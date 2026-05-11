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
 * List of intelligently generated highlights.
 *
 * @method float getConfidence() Obtain <p>Confidence degree.</p>
 * @method void setConfidence(float $Confidence) Set <p>Confidence degree.</p>
 * @method float getStartTimeOffset() Obtain <p>Segment start time offset.</p><p>Measurement unit: seconds.</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set <p>Segment start time offset.</p><p>Measurement unit: seconds.</p>
 * @method float getEndTimeOffset() Obtain <p>Segment end time offset.</p><p>Unit: seconds</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set <p>Segment end time offset.</p><p>Unit: seconds</p>
 */
class HighlightSegmentItem extends AbstractModel
{
    /**
     * @var float <p>Confidence degree.</p>
     */
    public $Confidence;

    /**
     * @var float <p>Segment start time offset.</p><p>Measurement unit: seconds.</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>Segment end time offset.</p><p>Unit: seconds</p>
     */
    public $EndTimeOffset;

    /**
     * @param float $Confidence <p>Confidence degree.</p>
     * @param float $StartTimeOffset <p>Segment start time offset.</p><p>Measurement unit: seconds.</p>
     * @param float $EndTimeOffset <p>Segment end time offset.</p><p>Unit: seconds</p>
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
